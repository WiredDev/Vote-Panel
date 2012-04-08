<?php

class Forms {
	
	public $errors = null;
	public $return = array();
	
	function error( $errors )
	{
		if(!is_array($errors)){die('Errors must be in an array format.');}
		
		$output = "<div style='width:350px;padding:10px;background-color:#fff3ef;border:1px solid #cd0a0a;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;font-family:arial;font-size:11px;color:#cd0a0a;margin:0px auto 0px auto;'>";
		
		foreach($errors as $error=>$value)
		{
			$output .= "<b>$error: </b>$value<br />";
		}
		
		$output .= "</div><br />";
		
		return $output;
	}
	function login( $data )
	{
			if(!is_array($data))
			{ die ('Data array must be an array! :-('); }
			
			global $main,$user,$server;
			
			$errors = '';
			
			$data = array_map(array($main, 'escape'), $data);
			
			if(!$server->user_exists($data['input_u'])){ $errors['login_fail'] = 'Username does not exist!'; $errors['login_test'] = 'test error'; }


			if($errors != ''){$this->errors = $this->error($errors);  }
			
			$return['errors'] = $this->errors;
			
			if($return['errors'] == ''){ $return['success'] = true; } else{ $return['success'] = false; }
			
			echo json_encode($return, JSON_FORCE_OBJECT);
			
			
	}

}


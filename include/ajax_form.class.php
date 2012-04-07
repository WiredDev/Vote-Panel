<?php

class Ajax_Form {

	public $form_name;
	public $form_id;
	public $errors;
	
	private $fields = Array();
	private $method;
	private $url;
	private $submit_id;
	private $params = null;
	
	public function __construct($form_name=null, $form_id=null, $method=null, $url=null, $submit_id='submit', $errors=null)
	{
		
		if($form_name==null || $form_id==null || $method==null || $url==null || $submit_id==null)
		{
			$this->error('You must enter form name, id, method, url, and a submit button id.');	
		}
		
		$this->form_name = $form_name;
		$this->form_id = $form_id;
		$this->url = $url;
		$this->method = strtoupper( $method );
		$this->submit_id = strtolower( $submit_id );
		
	}
	
	private function error( $message=null )
	{
			if( $message==null ){ die('No error message specified.'); }
			else{ die( $message ); }
	}
	public function open_form()
	{
		
		echo "<script>\n";
		
		echo "
				$(document).ready(function() {
					$('#$this->submit_id').click(function() {";
					
				if( is_array($this->fields) )
						{
							echo "var data = '';\n";
							
							foreach( $this->fields as $field=>$value )
							{
								$id = "#$field";
								echo "var $field = $('$id').val();\n";
								echo "data += '$field=' + $field +'&';\n";
								
							}
						}
						
					echo "
					data = data.slice(0, (data.length - 1));
					
					$.ajax({
						  data: data,
						  url: '$this->url',
						  success: function(data) {
							$('#result').html(data);
						  }
						});
						
					});//end click function
					
				});//end document.ready
			</script>
		";
	}
	public function add_field( $name=null, $id=null, $type=null, $data=null, $params=null )
	{
		
		if( $name==null || $id==null || $type==null )
		{
			$this->error('A new field must include a name, id, and type.');
		}
		if($type=="select" && $data==null)
		{
			$this->error('You must provide a <i>$data</i> object when creating a dropdown. (Field: '.$name.')');
		}
		if($params != null && is_array($params))
		{
			$param_str = "";
			
			foreach( $params as $attr=>$value )
			{
					$param_str .= " $attr='$value' ";
			}
			
			$this->params = $param_str;
		}
		
		$type = strtolower( $type );
		
		if( $type != 'text' && $type != 'password' && $type != 'select' ) { 
		
			$this->error('`'.$type.'` is an invalid type for field `'.$name.'`.'); 
		}
		
		
		switch( $type )
		{
			case "text":
				$this->add_text_field($name,$id);
				break;
				
			case "password":
				$this->add_password_field($name,$id);
				break;
			
			case "select":
				$this->add_select_field($name,$id,$data);
				break;
		}
		
	}
	public function display_field( $id=null )
	{
		if( $id==null ) { $this->error('Field id required to display.'); }
		else {
		
			return $this->fields[$id];
			
		}
	}
	public function submit_button( $value='Submit' )
	{
		return "<button id='$this->submit_id' $this->params >$value</button>";
	}
	private function add_text_field($name, $id)
	{
		$input = "<input type='text' name='$name' id='$id' $this->params />";
		
		$this->fields[$id] = $input;
		$this->params = null;

	}
	private function add_password_field($name, $id)
	{
		$input = "<input type='password' name='$name' id='$id' $this->params />";
		
		$this->fields[$id] = $input;
		$this->params = null;

	}
	private function add_select_field($name,$id,$data)
	{
		if( !is_array($data) ){ $this->error("You must provide an array for a dropdown field. (Field: $name)"); }	
		else {
			
		$input = "<select name='$name' id='$id' $this->params>";
		
			foreach( $data as $k=>$v )
			{
				$input .= "<option value='$k'>$v</option>";
			}
		$input .= "</select>";
		
		$this->fields[$id] = $input;
		$this->params = null;
			
		}
	}
}
/*
$form = new Ajax_Form('first', 'first_form', 'post', 'test.php');
$array['first'] = "First Choice";
$array['second'] = "Second Choice";

$params['style'] = "background-color:black;";
$params['align'] = "center";

$form->add_field('username', 'user', 'text');
$form->add_field('password', 'pass', 'password');
$form->add_field('email', 'email', 'select', $array, $params);

$form->open_form();
echo('Username: ');
$form->display_field('user');
echo('<br /> Password: ');
$form->display_field('pass');
echo('<br /> Email: ');
$form->display_field('email');
$form->submit_button('Login');
*/
?>

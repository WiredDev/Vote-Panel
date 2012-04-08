<?php

session_start();

class User {
	
	public $sid;
	public $logged_in = false;

public function construct( $sid=null )
{
	$this->sid = $sid;
	$this->logged_in = 'TEST';
	
	if( $this->sid==null ){ $this->error('Invalid Sesssion ID ($sid)'); }
	//else { return $this->user_obj( $sid ); }
}

private function error( $message=null )
{
			if( $message==null ){ die('No error message specified.'); }
			else{ die( $message ); }
}
public function return_sid()
{
	echo session_id();	
}

}

?>
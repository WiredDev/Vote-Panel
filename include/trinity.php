<?php

class Server {
	
	public $auth;
	
	public function __construct()
	{
		global $user;
		
		
		$auth = new Database(AUTH_HOST, AUTH_USER, AUTH_PASS, AUTH_DB);
		$this->auth = $auth; 
		$this->auth->connect( true );	
		
		$website = new Database(WEBSITE_HOST, WEBSITE_USER, WEBSITE_PASS, WEBSITE_DB);
		$this->website = $website; 
		$this->website->connect( true );	
	}
	public function user_exists( $username )
	{
		
		
		$sql = "select id from account where username = '$username'";
		$row = $this->auth->query_first($sql);
		
		if($this->auth->affected_rows > 0){ return true; }
		else{ return false; }
	}
	public function encode_password( $username, $password)
	{
		if($username == null || $password == null){ return false; }
		
		else{ return sha1(strtoupper($username) . ":" . strtoupper($password));	}
	}
	public function check_user( $username, $password )
	{
		
		$sql = "select id from account where sha_pass_hash = '$password'";
		$row = $this->auth->fetch_array($sql);
		
		if(count($row) > 0){ return true; }
		else{ return false; }
	}
	public function login( $user )
	{
		
		global $user;
		
		
		
	}


}


?>
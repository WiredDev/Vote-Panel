<?php

class Server {

	public function user_exists( $username )
	{
		$db = Database::obtain(AUTH_HOST, AUTH_USER, AUTH_PASS, AUTH_DB); 
		$db->connect();
		
		$sql = "select id from account where username = '$username'";
		$row = $db->query_first($sql);
		
		if(!empty($row['id'])){ return true; }
		else{ return false; }
	}

}


?>
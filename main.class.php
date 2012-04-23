<?php

if (!defined('ROOT'))
{
	define('ROOT', './');
}

class Main {
	
	public $page;
	
	public static function escape($txt) {
    if (get_magic_quotes_gpc())
        $txt = stripslashes($txt);

    if (!is_numeric($txt))
        $txt = "" . mysql_real_escape_string($txt) . "";

   return $txt;
	}
	
	public function display_page( $page=null )
	{
		global $smarty,$user;
		
		
		//if(time() - $_SESSION['last_active'] > 5){ $_SESSION['last_active'] = time(); header("Location:index.php?action=test"); }
		
		$_SESSION['last_active'] = time();
		
		if($page != "forms")
		{
				if($page==null){$page = "home";}
				
				$this->page = strtolower($page);
						
				if(file_exists(ROOT . "/controllers/$this->page.php")){ # make sure controller file exists
						
							require(ROOT . "/controllers/$this->page.php");
							
							$controller = new Controller(); # create new object for page
								
								# include the top , content, and bottom			
								$controller->Top();
								
								$controller->Content();
								
								$controller->Bottom();
							
						}
						
						else { die('Controller not found!'); }
		}
		else{
		
			require(ROOT . "/controllers/forms.php");
			
			$forms = new Forms;
			
			$func = $_GET['func'];
			if($func){ $forms->$func( $_GET ); }
			else{ die('Form process not found in forms.php'); }
		
		
		}
	}
	
}


?>
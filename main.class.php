<?php

if (!defined('ROOT'))
{
	define('ROOT', './');
}

class Main {
	
	public $page;
	
	public function display_page( $page=null )
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
	
}


?>
<?php

class Controller {

public function Top()
{}
public function Content()
{
	global $smarty;
	$smarty->display('logged_in.tpl');
		
}
public function Bottom()
{}

}

?>
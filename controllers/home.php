<?php
class Controller {
	
	public function __construct()
	{
		global $main;
		$this->main = $main;
	}
	public function Top()
	{
		
	}
	
	public function Content()
	{
		global $smarty;
		
		$form = new Ajax_Form('first', 'first_form', 'post', ''.$this->main->page.'');
		$array['first'] = "First Choice";
		$array['second'] = "Second Choice";
		
		$params['style'] = "background-color:silver;";
		$params['align'] = "center";
		
		$form->add_field('username', 'user', 'text');
		$form->add_field('password', 'pass', 'password');
		$form->add_field('email', 'email', 'select', $array, $params);
		
		$smarty->assign('form', $form);
		$smarty->display('index.tpl');
	}
	
	public function Bottom()
	{
		
	}


}
?>
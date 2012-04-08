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
		global $smarty,$user;
		
		if($user->logged_in){ $smarty->display('logged_in.tpl'); }
		
		else{
			$form = new Ajax_Form('first', 'first_form', 'post', '?action=forms', 'btn');
			
			$form->add_field('username', 'input_u', 'text');
			$form->add_field('password', 'input_p', 'password');
			
			$form->add_field('func', 'func', 'hidden', null, array('value'=>'login'));
			
			$smarty->assign('form', $form);
			
			$smarty->display('log_in.tpl');
		}
	}
	
	public function Bottom()
	{
		
	}


}
?>
<?php
require_once( 'config.php' );
require_once( 'include/ajax_form.class.php' );
require_once( 'include/mysql.class.php' );
require_once( 'include/user.class.php' );
require_once( 'include/' . SERVER_TYPE . '.php' );
require('smarty/libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;


require_once( 'main.class.php' );

$main = new Main;
$user = new User;
$server = new Server;

$smarty->assign('logged_in', $user->logged_in);
$page = @$_GET['action'];
$main->display_page( $page );


?>
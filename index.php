<?php

require_once( 'include/ajax_form.class.php' );

require('smarty/libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;



require_once( 'main.class.php' );

$main = new Main;

$page = @$_GET['action'];
$main->display_page( $page );


?>
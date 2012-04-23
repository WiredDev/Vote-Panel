<?php /* Smarty version Smarty-3.1.8, created on 2012-04-24 00:57:07
         compiled from ".\templates\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103344f95de43e75316-96094124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d254b1a04384f1c720ca0509c6426db3fceae8' => 
    array (
      0 => '.\\templates\\default\\header.tpl',
      1 => 1334710970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103344f95de43e75316-96094124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95de43eae1d4_79452004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95de43eae1d4_79452004')) {function content_4f95de43eae1d4_79452004($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.blockUI.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vote System | V1</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<script>
 $(document).ajaxStop($.unblockUI);

 
    $(document).ready(function() { 
     $.blockUI.defaults.css.width = '32px';
	 $.blockUI.defaults.css.padding = '10px';
	 $.blockUI.defaults.css.left = '49%';
	 $.blockUI.defaults.css.border = '2px solid #aaa';
	 
	 $('a').click(function() {
		  event.preventDefault();
		  $.blockUI({ message: '<img src=\"images/loading.gif\" />' });
		  var link_url = '?action=' + this.id;
		 $(".content-area").load(link_url);
	 });
      
    }); 
</script>
<div id="conatiner">
<div id="top"></div>
<div id="wrap_left">
<b>Member Login</b><br />
<?php echo $_smarty_tpl->tpl_vars['form']->value->open_form();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('func');?>

		<span class="txt">username</span><?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('input_u');?>
<br />
		<span class="txt">password</span><?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('input_p');?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['form']->value->submit_button('');?>

<?php }} ?>
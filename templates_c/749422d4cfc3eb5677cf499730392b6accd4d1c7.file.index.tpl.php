<?php /* Smarty version Smarty-3.1.8, created on 2012-04-07 23:33:37
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15024f808598d8c9c8-43202443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1333834416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15024f808598d8c9c8-43202443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f808598e0f647_73575793',
  'variables' => 
  array (
    'logged_in' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f808598e0f647_73575793')) {function content_4f808598e0f647_73575793($_smarty_tpl) {?><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <div id="result"></div>
 <?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>
 YOU ARE LOGGED IN!
 <?php }else{ ?>
 YOU ARENT
 <?php }?>
 
       <?php }} ?>
<?php /* Smarty version Smarty-3.1.8, created on 2012-04-01 16:22:19
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130214f77951f514a14-37518844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1333290136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130214f77951f514a14-37518844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f77951f734452_50761342',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f77951f734452_50761342')) {function content_4f77951f734452_50761342($_smarty_tpl) {?><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<?php echo $_smarty_tpl->tpl_vars['form']->value->open_form();?>

		Username: <?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('user');?>
<br />
		Password: <?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('pass');?>
<br />
		Example Select: <?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('email');?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['form']->value->submit_button('Login');?>

        
        <div id="result"></div><?php }} ?>
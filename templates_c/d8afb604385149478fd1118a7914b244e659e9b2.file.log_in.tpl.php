<?php /* Smarty version Smarty-3.1.8, created on 2012-04-24 00:57:07
         compiled from ".\templates\default\log_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239614f95de43cf99b8-53940860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8afb604385149478fd1118a7914b244e659e9b2' => 
    array (
      0 => '.\\templates\\default\\log_in.tpl',
      1 => 1333913208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239614f95de43cf99b8-53940860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f95de43e343f2_61683045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f95de43e343f2_61683045')) {function content_4f95de43e343f2_61683045($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>

function form_success() {

	$('.content-area').load('?action=test');
	
}

</script>
<div id="divider">
<!-- THIS TAG MAKE A VALID SPACE BETWEEN CONTENT AREA S AND LOGIN BOX DIV TAG (S-E) -->
</div>
<div id="errors"></div>
<div id="login-box"> <!-- LOGIN BOX (S) -->

<div class="padder">
<!-- MAKING A VALID SPACE SUPPORTED IN THE BROWSERS (S-E) -->
</div>

<div class="info"> <!-- LOGIN BOX FRIST TEXT ROW (S) -->

     <p>Please login to continue</p>
     
</div> <!-- LOGIN BOX FRIST TEXT ROW (E) -->

<div class="padder-log">
<!-- MAKING A VALID SPACE SUPPORTED IN THE BROWSERS (S-E) -->
</div>

<div class="content"> <!-- LOGIN BOX CONTENT (S) -->

<?php echo $_smarty_tpl->tpl_vars['form']->value->open_form();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('func');?>

		<span class="txt">username</span><?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('input_u');?>
<br />
		<span class="txt">password</span><?php echo $_smarty_tpl->tpl_vars['form']->value->display_field('input_p');?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['form']->value->submit_button('');?>

        


</div> <!-- LOGIN BOX CONTENT (E) -->

</div> <!-- LOGIN BOX (E) -->

<div id="divider-R">
<!-- MAKING A VALID SPACE SUPPORTED IN THE BROWSERS (S-E) -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.8, created on 2012-04-08 21:30:09
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165314f810a18dd2e92-63043151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1333913408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165314f810a18dd2e92-63043151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f810a18ddae31_82403274',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f810a18ddae31_82403274')) {function content_4f810a18ddae31_82403274($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<div id="page">

<div id="wrapper"> <!-- WRAPPER (S) -->


<div id="global-divider">
<!-- MAKING A VALID SPACE SUPPORTED IN THE BROWSERS (S-E) -->
</div>


<!-- MAIN BOX CONTENT (S) -->

<div id="main-box">

<!-- TOP BAR TAG (S) -->

<div class="top-bar">
<!-- this tag has the image in the css file> .top-bar class -->
</div>

<!-- TOP BAR TAG (E) -->

<div class="content-area"> <!-- CONTENT AREA IMPORTANT (S) --><?php }} ?>
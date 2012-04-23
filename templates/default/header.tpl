<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
{$form->open_form()}
{$form->display_field('func')}
		<span class="txt">username</span>{$form->display_field('input_u')}<br />
		<span class="txt">password</span>{$form->display_field('input_p')}<br />
		{$form->submit_button('')}

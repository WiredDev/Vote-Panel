<?php /*%%SmartyHeaderCode:216034f80831206f0f0-64825261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1333822844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216034f80831206f0f0-64825261',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f80857ed227a4_38717904',
  'variables' => 
  array (
    'user' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f80857ed227a4_38717904')) {function content_4f80857ed227a4_38717904($_smarty_tpl) {?><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>

				$(document).ready(function() {
					$('#submit').click(function() {var data = '';
var user = $('#user').val();
data += 'user=' + user +'&';
var pass = $('#pass').val();
data += 'pass=' + pass +'&';
var email = $('#email').val();
data += 'email=' + email +'&';

					data = data.slice(0, (data.length - 1));
					
					$.ajax({
						  data: data,
						  url: 'home',
						  success: function(data) {
							$('#result').html(data);
						  }
						});
						
					});//end click function
					
				});//end document.ready
			</script>
		
		Username: <input type='text' name='username' id='user'  /><br />
		Password: <input type='password' name='password' id='pass'  /><br />
		Example Select: <select name='email' id='email'  style='background-color:silver;'  align='center' ><option value='first'>First Choice</option><option value='second'>Second Choice</option></select><br />
		<button id='submit'  >Login</button>
        
        <div id="result"></div><?php }} ?>
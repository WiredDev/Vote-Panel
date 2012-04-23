{include file="header.tpl"}
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

{$form->open_form()}
{$form->display_field('func')}
		<span class="txt">username</span>{$form->display_field('input_u')}<br />
		<span class="txt">password</span>{$form->display_field('input_p')}<br />
		{$form->submit_button('')}
        


</div> <!-- LOGIN BOX CONTENT (E) -->

</div> <!-- LOGIN BOX (E) -->

<div id="divider-R">
<!-- MAKING A VALID SPACE SUPPORTED IN THE BROWSERS (S-E) -->
</div>

{include file="footer.tpl"}
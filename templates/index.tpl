<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

{$form->open_form()}
		Username: {$form->display_field('user')}<br />
		Password: {$form->display_field('pass')}<br />
		Example Select: {$form->display_field('email')}<br />
		{$form->submit_button('Login')}
        
        <div id="result"></div>
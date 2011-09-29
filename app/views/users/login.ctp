<div class="user">
<?php echo $form->create('User', array('action' => 'login'));?>
	<fieldset>
 		<legend>User Login</legend>
	<?php
		echo $form->input('username');
		echo $form->input('password');
	?>
	</fieldset>
<?php echo $form->end('Sign In');?>
</div>

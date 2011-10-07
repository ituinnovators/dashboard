<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
		<?php __(' | ITU Dashboard'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>ITU Dashboard</h1>
		</div>
		<div id="content">
			<?php
		    if (isset($user['User']['username'])){
		        echo $this->Html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout'));
		    }else{
		        echo $this->Html->link(__('Login', true), array('controller' => 'users', 'action' => 'login'));
		    }
		  ?>
			<br /><br />
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,maximum-scale=0.9" />
	<title>
		<?php echo $title_for_layout; ?>
		<?php __(' | ITU Dashboard'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('reset');
		echo $this->Html->css('960_24_col');
		echo $this->Html->css('style');
		echo $this->Html->css('ui');
		echo $this->Html->script('jquery-1.6.2.min');
		echo $this->Html->script('jquery-ui-1.8.16.custom.min');
		echo $this->Html->script('jquery.ui.sortable');
		echo $this->Html->script('custom');						
		echo $scripts_for_layout;
	?>
</head>

<body>
<div id="header">
	<div class="container_24">

		<div id="navigation">
			<div class="grid_24">
				<ul id="navmenu-h">
					<li class="selected">
						<?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></li>
					<li>
						<a href="#">Primary <?php echo $this->Html->image('arr-dwn.png'); ?></a>
	          <ul>
	            <li><a href="#">Submenu 1 <?php echo $this->Html->image('arr-rgt.png'); ?></a>
	              <ul>
	                <li><a href="#">Link 1</a></li>
	                <li><a href="#">Link 2</a></li>
	                <li><a href="#">Link 3</a></li>
	                <li><a href="#">Link 4</a></li>
	              </ul>
	            </li>
	            <li><a href="#">Submenu link 1</a></li>
	            <li><a href="#">Submenu link 2</a></li>
	          </ul>
	        </li>
					<li class="right">
						<a href="#" class="right"><?php echo $this->Html->image('user.png', array('height' => '16px')); ?> vcos@itu.dk <?php echo $this->Html->image('arr-dwn.png'); ?></a>
	          <ul>
	            <li><a href="#"><?php echo $this->Html->image('settings_w.png', array('height' => '16px')); ?> Settings</a></li>
	            <li>
								<?php
							    if (isset($user['User']['username'])){
							        echo $this->Html->link($this->Html->image('signout.png', array('height' => '16px')).' '.__('Logout', true), array('controller' => 'users', 'action' => 'logout'), array('escape' => false));
							    }else{
						        echo $this->Html->link($this->Html->image('signout.png', array('height' => '16px')).' '.__('Login', true), array('controller' => 'users', 'action' => 'login'), array('escape' => false));
							    }
							  ?>
							</li>
	          </ul>
	        </li>
				</ul>
			</div>
		</div>		
		<div class="clear"></div>
	</div>
</div>

<div id="content" class="container_24">

	<?php echo $content_for_layout; ?>

</div>
<div id="footer" class="container_24">

		<div class="grid_24">
			Dashboard brought to you by <a href="http://itu-innovators.dk">ITU Innovators</a>.
		</div>
		
</div>
<?php echo 'USER: '; debug($user); ?>
<?php echo 'USERCOOKIE: '; debug($usercookie); ?>
<?php echo 'SQLDUMP: ' . $this->element('sql_dump'); ?>
</body>
</html>
<div class="userWidgets form">
<?php echo $this->Form->create('UserWidget');?>
	<fieldset>
		<legend><?php __('Add User Widget'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('widget_id');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Widgets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Widgets', true), array('controller' => 'widgets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Widget', true), array('controller' => 'widgets', 'action' => 'add')); ?> </li>
	</ul>
</div>
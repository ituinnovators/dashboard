<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Widgets', true), array('controller' => 'user_widgets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Widget', true), array('controller' => 'user_widgets', 'action' => 'add')); ?> </li>
	</ul>
</div>
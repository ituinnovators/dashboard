<div class="widgets form">
<?php echo $this->Form->create('Widget');?>
	<fieldset>
		<legend><?php __('Edit Widget'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Widget.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Widget.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Widgets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Widgets', true), array('controller' => 'user_widgets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Widget', true), array('controller' => 'user_widgets', 'action' => 'add')); ?> </li>
	</ul>
</div>
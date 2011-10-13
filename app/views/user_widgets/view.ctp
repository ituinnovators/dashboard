<div class="userWidgets view">
<h2><?php  __('User Widget');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userWidget['UserWidget']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userWidget['User']['id'], array('controller' => 'users', 'action' => 'view', $userWidget['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Widget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userWidget['Widget']['name'], array('controller' => 'widgets', 'action' => 'view', $userWidget['Widget']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userWidget['UserWidget']['visible']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Widget', true), array('action' => 'edit', $userWidget['UserWidget']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User Widget', true), array('action' => 'delete', $userWidget['UserWidget']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userWidget['UserWidget']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Widgets', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Widget', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Widgets', true), array('controller' => 'widgets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Widget', true), array('controller' => 'widgets', 'action' => 'add')); ?> </li>
	</ul>
</div>

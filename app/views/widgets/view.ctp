<div class="widgets view">
<h2><?php  __('Widget');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $widget['Widget']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $widget['Widget']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $widget['Widget']['order']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Widget', true), array('action' => 'edit', $widget['Widget']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Widget', true), array('action' => 'delete', $widget['Widget']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $widget['Widget']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Widgets', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Widget', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Widgets', true), array('controller' => 'user_widgets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Widget', true), array('controller' => 'user_widgets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related User Widgets');?></h3>
	<?php if (!empty($widget['UserWidget'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Widget Id'); ?></th>
		<th><?php __('Visible'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($widget['UserWidget'] as $userWidget):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userWidget['id'];?></td>
			<td><?php echo $userWidget['user_id'];?></td>
			<td><?php echo $userWidget['widget_id'];?></td>
			<td><?php echo $userWidget['visible'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_widgets', 'action' => 'view', $userWidget['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_widgets', 'action' => 'edit', $userWidget['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_widgets', 'action' => 'delete', $userWidget['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userWidget['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Widget', true), array('controller' => 'user_widgets', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

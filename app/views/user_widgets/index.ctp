<div class="userWidgets index">
	<h2><?php __('User Widgets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('widget_id');?></th>
			<th><?php echo $this->Paginator->sort('visible');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userWidgets as $userWidget):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $userWidget['UserWidget']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userWidget['User']['email'], array('controller' => 'users', 'action' => 'view', $userWidget['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userWidget['Widget']['name'], array('controller' => 'widgets', 'action' => 'view', $userWidget['Widget']['id'])); ?>
		</td>
		<td><?php echo $userWidget['UserWidget']['visible']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $userWidget['UserWidget']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userWidget['UserWidget']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userWidget['UserWidget']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userWidget['UserWidget']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Widget', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Widgets', true), array('controller' => 'widgets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Widget', true), array('controller' => 'widgets', 'action' => 'add')); ?> </li>
	</ul>
</div>
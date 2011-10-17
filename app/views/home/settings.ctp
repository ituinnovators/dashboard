<div class="users index">
    <h2><?php __('Users');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Visible</th>
            <th class="actions"><?php __('Actions');?></th>
        </tr>
        <?php
	$i = 0;
	foreach ($widgets as $widget):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
        <tr<?php echo $class;?>>
            <td><?php echo $widget['Widget']['name']; ?>&nbsp;</td>
            <td><?php echo $widget['UserWidget']['visible']; ?>&nbsp;</td>
            <td class="actions">
                <?php ($widget['UserWidget']['visible'] == 1) ? $alt = 0 : $alt = 1;
                echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'setWidgetAttribute', $widget['Widget']['id'], 'visible', $alt)); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
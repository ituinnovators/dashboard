<div class="grid_6">
    &nbsp;
</div>
<div class="grid_12 welcome">
    <p class="ui-message ui-message-yellow">
        <b>Welcome to the ITU Student Dashboard.</b><a href="#"><img src="img/remove.png" class="dialog-option" width="15px" title="Remove"></a><br>Remember to <a href="/profile" title="Customize">customize</a> it to fit your courses and preferences.
    </p>
    <?php echo $this->Session->flash(); ?>
</div>
<div class="grid_6">
    &nbsp;
</div>
<div class="clear"></div>
<h2>My student dashboard
    <span id="searcher">
        <?php echo $this->Form->create(null, array('url' => '/search', 'type' => 'get')); ?>
        <?php
		echo $this->Form->input('q', array('id' => 'searchfield', 'label' => '', 'placeholder' => 'search'));
	?>
        <?php //echo $this->Form->end(__('Submit', true));?>
    </span>
</h2>

<hr>

<div class="clear"></div>

<div class="grid_24 widgetgrid">
    <?php $i=0;?>
    <?php foreach ($widgets as $w) {?>
    <?php if ($i % 2 == 0){
        echo '<div class="column">';
    }?>
        <?php echo $widget->show($w['Widget']['id'],$w['Widget']['output']);?>
        <?php //echo $widget->show(3,$WidgetITUcalendar);?>
    <?php if (($i+1) % 2 == 0){
    echo '</div>';
    }?>
    <?php $i++;} ?>
</div>
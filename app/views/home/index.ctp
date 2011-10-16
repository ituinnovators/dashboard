<div class="grid_6">
	&nbsp;
</div>
<div class="grid_12 welcome">
	<p class="ui-message ui-message-yellow">
		<b>Welcome to the ITU Student Dashboard.</b><a href="#"><img src="img/remove.png" class="dialog-option" width="15px" title="Remove"></a><br>Remember to <a href="/profile" title="Customise">customize</a> it to fit your courses and preferences.
	</p>
	<?php echo $this->Session->flash(); ?>
</div>
<div class="grid_6">
	&nbsp;
</div>
<div class="clear"></div>
	<h2>My student dashboard 
    <span id="searcher">
    	<form method="post" id="branding" action="/search">
			<input type="text" name="searchword" id="searchfield" placeholder="Search" />
			<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
		</form>
	</span>
</h2>

<hr>

<div class="clear"></div>

<div class="grid_24 widgetgrid">

	<div class="column">
	
		<div class="portlet grid_5 widget" id="widget_1">
			<div class="portlet-header">Widget 1 <a href="#" class="widget-remove"><img src="img/remove.png" class="widget-option" width="15px" title="Remove"></a> <a href="#" class="widget-right"><img src="img/arr_right.png" class="widget-option" width="15px" title="Right"></a> <a href="#"><img src="img/arr_left.png" class="widget-option" width="15px" title="Left"></a></div><hr>
			<div class="portlet-content">
				<?php echo 'WIDGET_CAL: '; debug($WidgetITUcalendar); ?>
			</div>
		</div>
		
		<div class="portlet grid_5 widget" id="widget_2">
			<div class="portlet-header">Widget 2 <a href="#" class="widget-remove"><img src="img/remove.png" class="widget-option" width="15px" title="Remove"></a> <a href="#" class=""><img src="img/arr_right.png" class="widget-option" width="15px" title="Right"></a> <a href="#"><img src="img/arr_left.png" class="widget-option" width="15px" title="Left"></a></div><hr>
			<div class="portlet-content">
				<?php echo 'WIDGET_BAR: '; debug($WidgetScrollbar); ?>
			</div>
		</div>
	
	</div>

	<div class="column">
	
		<div class="portlet grid_5 widget" id="widget_3">
			<div class="portlet-header">Widget 3 <a href="#" class="widget-remove"><img src="img/remove.png" class="widget-option" width="15px" title="Remove"></a> <a href="#" class=""><img src="img/arr_right.png" class="widget-option" width="15px" title="Right"></a> <a href="#"><img src="img/arr_left.png" class="widget-option" width="15px" title="Left"></a></div><hr>
			<div class="portlet-content">No! I want to live! There are still too many things I don't own! Noooooo! These old Doomsday Devices are dangerously unstable. I'll rest easier not knowing where they are. You're going back for the Countess, aren't you? I'm a thing.</div>
		</div>
		<div class="portlet grid_5 widget">
			<div class="portlet-header">Widget 5 <a href="#" class="widget-remove"><img src="img/remove.png" class="widget-option" width="15px" title="Remove"></a> <a href="#" class=""><img src="img/arr_right.png" class="widget-option" width="15px" title="Right"></a> <a href="#"><img src="img/arr_left.png" class="widget-option" width="15px" title="Left"></a></div><hr>
			<div class="portlet-content">There's one way and only one way to determine if an animal is intelligent. Dissect its brain! One hundred dollars. Dr. Zoidberg, that doesn't make sense. But, okay! I had more, but you go ahead. </div>
		</div>	
	
	</div>

	<div class="column">
	
		<div class="portlet grid_5 widget" id="widget_4">
			<div class="portlet-header">Widget 4 <a href="#" class="widget-remove"><img src="img/remove.png" class="widget-option" width="15px" title="Remove"></a> <a href="#" class=""><img src="img/arr_right.png" class="widget-option" width="15px" title="Right"></a> <a href="#"><img src="img/arr_left.png" class="widget-option" width="15px" title="Left"></a></div><hr>
			<div class="portlet-content">Uh, no, you got the wrong number. This is 9-1&hellip;2. Whoa, slow down there, maestro. There's a *New* Mexico? Brace yourselves gentlemen. According to the gas chromatograph, the secret ingredient is&hellip; Love!? </div>
		</div>
		
	</div>

	<div class="column">
	
		<div class="portlet grid_5 widget" id="widget_5">
			<div class="portlet-header">Widget 6 <a href="#" class="widget-remove"><img src="img/remove.png" class="widget-option" width="15px" title="Remove"></a> <a href="#" class=""><img src="img/arr_right.png" class="widget-option" width="15px" title="Right"></a> <a href="#"><img src="img/arr_left.png" class="widget-option" width="15px" title="Left"></a></div><hr>
			<div class="portlet-content">One hundred dollars. I meant 'physically'. Look, perhaps you could let me work for a little food? I could clean the floors or paint a fence, or service you sexually? I had more, but you go ahead.</div>
		</div>
		
		<div class="portlet grid_5 widget" id="widget_6">
			<div class="portlet-header">Widget 7 <a href="#" class="widget-remove"><img src="img/remove.png" class="widget-option" width="15px" title="Remove"></a> <a href="#" class=""><img src="img/arr_right.png" class="widget-option" width="15px" title="Right"></a> <a href="#"><img src="img/arr_left.png" class="widget-option" width="15px" title="Left"></a></div><hr>
			<div class="portlet-content">I'll keep it short and sweet &mdash; Family. Religion. Friendship. These are the three demons you must slay if you wish to succeed in business. Son, a woman is like a beer. They smell good, they look good, you'd step over your own mother just to get one!</div>
		</div>
	
	</div>
</div>
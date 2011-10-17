<?php

class WidgetHelper extends AppHelper {

    var $helpers = array('Html');

    function show($id, $widget) {
        if ($widget['visible'] == 1) {
            $output = "";
            $output .= "<div class='portlet grid_5 widget' id='widget_$id'>";

            $output .= "<div class='portlet-header'>" . $widget['title'];

            $output .= $this->Html->link($this->Html->image("remove.png", array("alt" => "Remove this widget", 'width' => '15px', 'class' => 'widget-option')), array('controller' => 'users', 'action' => 'setWidgetAttribute', $id, 'visible', 0), array('escape' => false, 'class' => ''));
            //<a href="#" class="widget-right"><img src="img/arr_right.png" class="widget-option" width="15px" title="Right"></a> <a href="#"><img src="img/arr_left.png" class="widget-option" width="15px" title="Left"></a>
            $output .= "</div><hr>";
            $output .= "<div class='portlet-content'>";
            $output .= $widget['content'];
            $output .= "</div>";
            $output .= "</div>";
            return $output;
        }
    }

}

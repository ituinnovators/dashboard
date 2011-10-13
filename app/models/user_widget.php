<?php

class UserWidget extends AppModel {

    var $name = 'UserWidget';
    
    var $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        ),
        'Widget' => array(
            'className' => 'Widget',
            'foreignKey' => 'widget_id'
        )
    );

}
?>
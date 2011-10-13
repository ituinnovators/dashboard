<?php

class Widget extends AppModel {

    var $name = 'Widget';
    var $validate = array(
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'order' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    var $hasMany = array(
        'UserWidget' => array(
            'className' => 'UserWidget',
            'foreignKey' => 'widget_id',
            'conditions' => '',
            'order' => '',
            'limit' => '',
            'dependent' => ''
        )
    );

    private function getUserId($args) {
        if (isset($args['session'])) {
            $user_id = $args['session']['User']['id'];
        } elseif (isset($args['cookie'])) {
            $user = $this->UserWidget->User->findByKey($args['cookie']);
            $user_id = $user['User']['id'];
        }
        return $user_id;
    }

    private function getCache($user_id, $name) {
        $cache = Cache::read('widget_' . $user_id . '_' . $name, 'long');
        if ($cache !== false) {
            return $cache;
        }
        return false;
    }

    private function writeCache($user_id, $name, $data) {
        Cache::write('widget_' . $user_id . '_' . $name, $data, 'long');
    }

    private function getAttributes($user_id, $name) {
        $this->recursive = -1;
        $widget = $this->findByName($name);
        $widget_id = $widget['Widget']['id'];
        $userwidget = $this->UserWidget->find('first', array(
                    'conditions' => array(
                        'UserWidget.user_id' => $user_id,
                        'UserWidget.widget_id' => $widget_id
                    )
                ));
        return $userwidget;
    }

    function itucalendar($args) {
        $user_id = $this->getUserId($args);
        $cache = $this->getCache($user_id, __FUNCTION__);

        
        if ($cache !== false) {
            return $cache;
        }
        $userwidget = $this->getAttributes($user_id, __FUNCTION__);
        // generate data

        $data = array(
            'title' => 'ITU Calendar',
            'content' => '<div><p><b>Monday</b></p><p>Algoritm Design</p><p><b>Thuesday</b></p><p>Algoritm Design2</p><p><b>Wednesday</b></p><p>Algoritm Design3</p></div>',
            'visible' => $userwidget['UserWidget']['visible'],
        );

        $this->writeCache($user_id, __FUNCTION__, $data);

        return $data;
    }

    function scrollbar($args) {
        $user_id = $this->getUserId($args);
        $cache = $this->getCache($user_id, __FUNCTION__);
        if ($cache !== false) {
            return $cache;
        }
        $userwidget = $this->getAttributes($user_id, __FUNCTION__);
        // generate data

        $data = array(
            'title' => 'Scrollbar',
            'content' => '<div><p><b>Monday</b></p><p>Free drinks</p><p><b>Thuesday</b></p><p>More free drinks</p><p><b>Wednesday</b></p><p>Happy hour</p></div>',
            'visible' => $userwidget['UserWidget']['visible'],
        );

        $this->writeCache($user_id, __FUNCTION__, $data);

        return $data;
    }

}

?>

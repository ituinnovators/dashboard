<?php

class HomeController extends AppController {

    var $name = 'Home';
    var $helpers = array('Ajax', 'Paginator', 'Widget');
    var $uses = array();

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'search', 'settings');
    }

    function index() {
        $this->set('title_for_layout', 'ITU Dashboard');
        $this->set('user', $this->user);
        $this->set('usercookie', $this->cookie);
//        $this->set('WidgetITUcalendar', ClassRegistry::init('Widget')->itucalendar(array('session' => $this->user, 'cookie' => $this->cookie)));
//        $this->set('WidgetScrollbar', ClassRegistry::init('Widget')->scrollbar(array('session' => $this->user, 'cookie' => $this->cookie)));

        $this->loadModel('Widget');
        $widgets = $this->Widget->find('all');
        foreach ($widgets as &$widget) {
            $name = $widget['Widget']['name'];
            $widget['Widget']['output'] = ClassRegistry::init('Widget')->$name(array('session' => $this->user, 'cookie' => $this->cookie));
        }
        $this->set('widgets',$widgets);
//        debug($widgets);
    }

    function search(){
        $string = $this->params['url']['q'];
        debug('TODO: Implement search logic');
    }

    function settings(){
        $this->loadModel('UserWidget');
        $this->set('widgets',$this->UserWidget->find('all', array('conditions' => array('user_id' =>$this->user_id))));
    }

}

?>
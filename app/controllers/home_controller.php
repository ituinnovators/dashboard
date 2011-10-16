<?php

class HomeController extends AppController {

    var $name = 'Home';
    var $uses = array();

    function  beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    function index() {
        $user = $this->Auth->user();
        $cookie = $this->Cookie->read('itudashboard_key');
        
				$this->set('user', $user);
				$this->set('usercookie', $cookie);
        $this->set('WidgetITUcalendar', ClassRegistry::init('Widget')->itucalendar(array('session' => $user, 'cookie' => $cookie)));
        $this->set('WidgetScrollbar', ClassRegistry::init('Widget')->scrollbar(array('session' => $user, 'cookie' => $cookie)));

    }

}

?>
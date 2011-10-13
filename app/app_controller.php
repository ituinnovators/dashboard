<?php

/**
 * Main App Controller File
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 */
class AppController extends Controller {

    var $components = array('Session', 'Auth');

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'display', 'home');
        $this->Auth->allow('display');
        $this->Auth->authorize = 'controller';
        $this->set('user', $this->Auth->user());
    }

    function isAuthorized() {
        return true;
    }

}

?>
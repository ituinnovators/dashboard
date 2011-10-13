<?php

/**
 * Main App Controller File
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 */
class AppController extends Controller {

    var $components = array('Session', 'Auth', 'Cookie');

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'display', 'home');
        $this->Auth->allow('display');
        $this->Auth->authorize = 'controller';

//        $user = $this->Auth->user();
//        $cookie = $this->Cookie->read('itudashboard_key');
//        if (isset($user)){
//            $this->Session->setFlash("Auth login");
//            $this->set('user', $user);
//        }elseif(isset($cookie)){
//            $this->Session->setFlash("Cookie login");
//            $this->loadModel('User');
//            $this->set('user', $this->User->findByKey($cookie));
//        }
    }

    function isAuthorized() {
        return true;
    }

}

?>
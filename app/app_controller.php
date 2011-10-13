<?php
/**
 * Main App Controller File
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 */

class AppController extends Controller {

	var $components = array('Session');
	var $scaffold;
	function beforeFilter(){
		parent::beforeFilter();
                $this->loadModel('User');
                $this->User->recursive = 2;
//                debug($this->User->find('all'));
	}

}

?>
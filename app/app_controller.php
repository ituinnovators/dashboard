<?php
/**
 * Main App Controller File
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 */

class AppController extends Controller {

	var $components = array( 'Session');
	
	function beforeFilter(){
		parent::beforeFilter();
	}

}

?>
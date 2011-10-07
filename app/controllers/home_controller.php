<?php
	class HomeController extends AppController {

		var $name = 'Home';
		var $uses = array();
		
		function index () {
			//$this->set('topPosts', ClassRegistry::init('Post')->getTop());
			$this->set('dummy_text', 'Dummy dummy dummy');
		}
	}
?>
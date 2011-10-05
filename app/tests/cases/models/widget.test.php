<?php
/* Widget Test cases generated on: 2011-09-29 16:56:14 : 1317308174*/
App::import('Model', 'Widget');

class WidgetTestCase extends CakeTestCase {
	var $fixtures = array('app.widget', 'app.user', 'app.users_widget');

	function startTest() {
		$this->Widget =& ClassRegistry::init('Widget');
	}

	function endTest() {
		unset($this->Widget);
		ClassRegistry::flush();
	}

}

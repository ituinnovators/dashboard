<?php
/* Status Test cases generated on: 2011-09-29 13:44:45 : 1317296685*/
App::import('Model', 'Status');

class StatusTestCase extends CakeTestCase {
	var $fixtures = array('app.status', 'app.task', 'app.user', 'app.group', 'app.project', 'app.projects_task', 'app.projects_user', 'app.role', 'app.roles_user');

	function startTest() {
		$this->Status =& ClassRegistry::init('Status');
	}

	function endTest() {
		unset($this->Status);
		ClassRegistry::flush();
	}

}

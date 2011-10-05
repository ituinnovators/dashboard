<?php
/* Task Test cases generated on: 2011-09-29 00:49:37 : 1317250177*/
App::import('Model', 'Task');

class TaskTestCase extends CakeTestCase {
	var $fixtures = array('app.task', 'app.user', 'app.group', 'app.project', 'app.projects_task', 'app.projects_user');

	function startTest() {
		$this->Task =& ClassRegistry::init('Task');
	}

	function endTest() {
		unset($this->Task);
		ClassRegistry::flush();
	}

}

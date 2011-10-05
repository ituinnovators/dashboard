<?php
/* Project Test cases generated on: 2011-09-29 00:48:18 : 1317250098*/
App::import('Model', 'Project');

class ProjectTestCase extends CakeTestCase {
	var $fixtures = array('app.project', 'app.task', 'app.projects_task', 'app.user', 'app.group', 'app.projects_user');

	function startTest() {
		$this->Project =& ClassRegistry::init('Project');
	}

	function endTest() {
		unset($this->Project);
		ClassRegistry::flush();
	}

}

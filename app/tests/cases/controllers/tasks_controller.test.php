<?php
/* Tasks Test cases generated on: 2011-09-29 00:49:38 : 1317250178*/
App::import('Controller', 'Tasks');

class TestTasksController extends TasksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TasksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.task', 'app.user', 'app.group', 'app.project', 'app.projects_task', 'app.projects_user');

	function startTest() {
		$this->Tasks =& new TestTasksController();
		$this->Tasks->constructClasses();
	}

	function endTest() {
		unset($this->Tasks);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}

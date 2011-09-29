<?php
/* Statuses Test cases generated on: 2011-09-29 13:44:47 : 1317296687*/
App::import('Controller', 'Statuses');

class TestStatusesController extends StatusesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StatusesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.status', 'app.task', 'app.user', 'app.group', 'app.project', 'app.projects_task', 'app.projects_user', 'app.role', 'app.roles_user');

	function startTest() {
		$this->Statuses =& new TestStatusesController();
		$this->Statuses->constructClasses();
	}

	function endTest() {
		unset($this->Statuses);
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

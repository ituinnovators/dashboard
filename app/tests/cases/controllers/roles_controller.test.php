<?php
/* Roles Test cases generated on: 2011-09-29 00:49:31 : 1317250171*/
App::import('Controller', 'Roles');

class TestRolesController extends RolesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RolesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.role', 'app.user', 'app.group', 'app.roles_user');

	function startTest() {
		$this->Roles =& new TestRolesController();
		$this->Roles->constructClasses();
	}

	function endTest() {
		unset($this->Roles);
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

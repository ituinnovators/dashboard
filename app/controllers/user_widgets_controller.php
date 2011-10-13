<?php
class UserWidgetsController extends AppController {

	var $name = 'UserWidgets';

	function index() {
		$this->UserWidget->recursive = 0;
		$this->set('userWidgets', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user widget', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userWidget', $this->UserWidget->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserWidget->create();
			if ($this->UserWidget->save($this->data)) {
				$this->Session->setFlash(__('The user widget has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user widget could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserWidget->User->find('list');
		$widgets = $this->UserWidget->Widget->find('list');
		$this->set(compact('users', 'widgets'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user widget', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserWidget->save($this->data)) {
				$this->Session->setFlash(__('The user widget has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user widget could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserWidget->read(null, $id);
		}
		$users = $this->UserWidget->User->find('list');
		$widgets = $this->UserWidget->Widget->find('list');
		$this->set(compact('users', 'widgets'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user widget', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserWidget->delete($id)) {
			$this->Session->setFlash(__('User widget deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User widget was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

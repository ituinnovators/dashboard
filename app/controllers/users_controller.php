<?php

class UsersController extends AppController {

    var $name = 'Users';
    var $components = array('Password');

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'restore','logout');
    }

    function login() {

    }

    function logout() {
        $this->Cookie->delete('itudashboard_key');
        $this->Session->setFlash('Logout');
        $this->redirect($this->Auth->logout());
    }

    function restore($key) {
        $this->Cookie->write('itudashboard_key', $key);
        $this->redirect(array('controller' => 'users', 'action' => 'index'));
    }

    function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid user', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->data['User']['key'] = $this->Password->generatePassword(50);
            $this->User->create();
            if ($this->User->save($this->data)) {
                $this->Cookie->write('itudashboard_key', $this->data['User']['key']);
                $this->User->UserWidget->Widget->recursive = -1;
                $widgets = $this->User->UserWidget->Widget->find('all');
                $user_id = $this->User->id;
                foreach ($widgets as $w) {
                    $data = array(
                        'UserWidget' => array(
                            'user_id' => $user_id,
                            'widget_id' => $w['Widget']['id']
                        )
                    );
                    $this->User->UserWidget->create();
                    $this->User->UserWidget->save($data);
                }
                $this->Session->setFlash(__('The user has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
            }
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid user', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('The user has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->User->read(null, $id);
        }
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for user', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->User->delete($id)) {
            $this->Session->setFlash(__('User deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}

<?php

class UsersController extends AppController {

    var $name = 'Users';
    var $components = array('Password');

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'restore', 'logout', 'setWidgetAttribute');
    }

    function login() {

    }

    function logout() {
        $this->Cookie->delete('itudashboard_key');
        $this->Session->setFlash('Logout');
        $this->redirect($this->Auth->logout());
    }

    function setWidgetAttribute($widget_id, $attribute, $value) {

        $this->User->UserWidget->updateAll(
                array('UserWidget.' .$attribute => $value),
                array(
                    'UserWidget.user_id' => $this->user_id,
                    'UserWidget.widget_id' => $widget_id
                )
        );

        $this->Session->setFlash('Removed widget id =' . $widget_id . ' for user id =' . $this->user_id);
        $this->redirect($this->referer());
    }

    function restore($key) {
        $this->User->recursive = -1;
        $k_search = $this->User->findByKey($key);
        $e_search = $this->User->findByEmail($key);
        if (!empty($k_search)) {
            $this->Cookie->write('itudashboard_key', $k_search['User']['key'], false, '+1 year');
            $this->Session->setFlash('User restored with key =' . $key);
        } elseif (!empty($e_search)) {
            $this->Cookie->write('itudashboard_key', $e_search['User']['key'], false, '+1 year');
            $this->Session->setFlash('User restored with email =' . $key);
        } else {
            $this->Session->setFlash('No user with key/email = "' . $key . '"');
        }

        $this->redirect(array('controller' => 'home', 'action' => 'index'));
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

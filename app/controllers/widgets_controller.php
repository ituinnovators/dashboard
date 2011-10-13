<?php

class WidgetsController extends AppController {

    var $name = 'Widgets';

    private function isAdmin() {
        $user = $this->Auth->user();
        if ($user['User']['group_id'] != 1) {
            return false;
        } else {
            return true;
        }
    }

//    function calendar(){
//        $user = $this->Auth->user();
//        $cookie = $this->Cookie->read('itudashboard_key');
//        if(isset($user)){
//            return $this->Widget->calendar(array('session' => $user));
//        }
//        elseif(isset($cookie)){
//            return $this->Widget->calendar(array('cookie' => $user));
//        }else{
//            return $this->Widget->calendar();
//        }
//    }

    function index() {
        $this->Widget->recursive = 0;
        $this->set('widgets', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid widget', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('widget', $this->Widget->read(null, $id));
    }

    function add() {
        if ($this->isAdmin()) {
            if (!empty($this->data)) {
                $this->Widget->create();
                if ($this->Widget->save($this->data)) {
                    $this->Session->setFlash(__('The widget has been saved', true));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The widget could not be saved. Please, try again.', true));
                }
            }
        }
    }

    function edit($id = null) {
        if ($this->isAdmin()) {
            if (!$id && empty($this->data)) {
                $this->Session->setFlash(__('Invalid widget', true));
                $this->redirect(array('action' => 'index'));
            }
            if (!empty($this->data)) {
                if ($this->Widget->save($this->data)) {
                    $this->Session->setFlash(__('The widget has been saved', true));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The widget could not be saved. Please, try again.', true));
                }
            }
            if (empty($this->data)) {
                $this->data = $this->Widget->read(null, $id);
            }
        }
    }

    function delete($id = null) {
        if ($this->isAdmin()) {
            if (!$id) {
                $this->Session->setFlash(__('Invalid id for widget', true));
                $this->redirect(array('action' => 'index'));
            }
            if ($this->Widget->delete($id)) {
                $this->Session->setFlash(__('Widget deleted', true));
                $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Widget was not deleted', true));
            $this->redirect(array('action' => 'index'));
        }
    }

}

<?php

class AccountsController extends AppController {

	var $name = 'Accounts';
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}
	
	function index() {
		$this->set('accounts', $this->Account->find('all'));
	}
	
	function view($id = NULL) {
		$this->set('account', $this->Account->read(NULL, $id));
	}
	
	function add() {
		if(!empty($this->data)) {
			if($this->Account->save($this->data)) {
				$this->Session->setFlash('The account was successfully added');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('The account was not created, please try again');
			}
		}
	}
	
	function edit($id = NULL) {
		if(empty($this->data)) {
			$this->data = $this->Account->read(NULL, $id);
		} else {
			if($this->Account->save($this->data)) {
				$this->Session->setFlash('The account has been updated');
				$this->redirect(array('action'=>'view', $id));
			}
		}
	}
	
	function delete($id = NULL) {
		$this->Account->delete($id);
		$this->Session->setFlash('The account has been deleted');
		$this->redirect(array('action'=>'index'));
	}
	
	function hello_world() {
	
	}

}	
?>
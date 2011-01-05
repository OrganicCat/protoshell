<?php

class AppController extends Controller {
	var $components = array('Auth', 'Session');
	
	function beforeFilter() {
		$this->Auth->allow('index', 'view');
		$this->Auth->authError = 'Please login to view this area';
		$this->Auth->loginError = 'Username/password combination incorrect';
		$this->Auth->loginRedirect = array('controller'=>'account', 'action'=>'index');
		$this->Auth->logoutRedirect = array('controller'=>'account', 'action'=>'index');
		
		$this->set('admin', $this->_isAdmin());
	}
	
	function _isAdmin() {
		$admin = FALSE;
		if($this->Auth->user('role') == 'admin') {
			$admin = TRUE;
		}
		return $admin;
	}

}
?>
<?php

class Account extends AppModel {
	
	var $name = 'Account';
	var $validate  = array(
		'name'=>array(
			'name_must_not_be_blank'=>array(
				'rule'=>'notEmpty',
				'message'=>'The account name cannot be empty!'
			),
			'name_must_be_unique'=>array(
				'rule'=>'isUnique',
				'message'=>'This account name is already taken'
			)
		),
		'password'=>array(
			'password_must_not_be_empty'=>array(
				'rule'=>'notEmpty',
				'message'=>'You must enter a password'
			)
		)
	);

}

?>
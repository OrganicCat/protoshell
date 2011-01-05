<h2>Create an account</h2>

<?php
echo $form->create('Account', array('action'=>'add'));
echo $form->input('name');
echo $form->input('password');
echo $form->input('password_confirmation', array('type'=>'password'));
echo $form->end('Create Account');
?>
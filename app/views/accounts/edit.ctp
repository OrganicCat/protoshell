<h2>Edit Account</h2>

<?php
echo $form->create('Account', array('action'=>'edit'));
echo $form->input('name');
echo $form->input('password');
echo $form->input('id', array('type'=>'hidden'));
echo $form->end('Update Account');
?>

<p><?php echo $html->link('Back', array('action'=>'index')); ?></p>
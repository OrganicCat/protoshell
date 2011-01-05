<h2>Show Account</h2>

<p>Account Name: <?php echo $account['Account']['name']; ?></p>
<p>Account Password: <?php echo $account['Account']['password']; ?></p>
<p><small>Created on: <?php echo $account['Account']['created']; ?> 
Last modified on: <?php echo $account['Account']['modified']; ?></small></p>

<p><?php echo $html->link('Back', array('action'=>'index')); ?></p>
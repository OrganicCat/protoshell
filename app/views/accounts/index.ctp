<h2>Accounts</h2>

<p><?php echo $html->link('Create Account', array('action'=>'add')); ?></p>

<table>
	<tr>
		<th>Account Name</th>
		<th>Account Password</th>
		<th>Action</th>
	</tr>
	<?php foreach($accounts as $account): ?>
	<tr>
		<td><?php echo $html->link($account['Account']['name'],
		 array('action'=>'view', $account['Account']['id'])); ?></td>
		<td><?php echo $account['Account']['password']; ?></td>
		<td><?php echo $html->link('Edit', array('action'=>'edit', $account['Account']['id'])); ?>
		 <?php echo $html->link('Delete', array('action'=>'delete', $account['Account']['id']),
		  NULL, 'Are you sure you want to delete this account?'); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
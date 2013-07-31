<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Films'); ?></h3>
	<?php if (!empty($user['Film'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Rated'); ?></th>
		<th><?php echo __('Released'); ?></th>
		<th><?php echo __('Runtime'); ?></th>
		<th><?php echo __('Genre'); ?></th>
		<th><?php echo __('Director'); ?></th>
		<th><?php echo __('Writer'); ?></th>
		<th><?php echo __('Actors'); ?></th>
		<th><?php echo __('Plot'); ?></th>
		<th><?php echo __('Poster'); ?></th>
		<th><?php echo __('Imdbrating'); ?></th>
		<th><?php echo __('Imdbvotes'); ?></th>
		<th><?php echo __('Imdbid'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Film'] as $film): ?>
		<tr>
			<td><?php echo $film['id']; ?></td>
			<td><?php echo $film['title']; ?></td>
			<td><?php echo $film['year']; ?></td>
			<td><?php echo $film['rated']; ?></td>
			<td><?php echo $film['released']; ?></td>
			<td><?php echo $film['runtime']; ?></td>
			<td><?php echo $film['genre']; ?></td>
			<td><?php echo $film['director']; ?></td>
			<td><?php echo $film['writer']; ?></td>
			<td><?php echo $film['actors']; ?></td>
			<td><?php echo $film['plot']; ?></td>
			<td><?php echo $film['poster']; ?></td>
			<td><?php echo $film['imdbrating']; ?></td>
			<td><?php echo $film['imdbvotes']; ?></td>
			<td><?php echo $film['imdbid']; ?></td>
			<td><?php echo $film['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'films', 'action' => 'view', $film['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'films', 'action' => 'edit', $film['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'films', 'action' => 'delete', $film['id']), null, __('Are you sure you want to delete # %s?', $film['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="films index">
	<h2><?php echo __('Films'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('rated'); ?></th>
			<th><?php echo $this->Paginator->sort('released'); ?></th>
			<th><?php echo $this->Paginator->sort('runtime'); ?></th>
			<th><?php echo $this->Paginator->sort('genre'); ?></th>
			<th><?php echo $this->Paginator->sort('director'); ?></th>
			<th><?php echo $this->Paginator->sort('writer'); ?></th>
			<th><?php echo $this->Paginator->sort('actors'); ?></th>
			<th><?php echo $this->Paginator->sort('plot'); ?></th>
			<th><?php echo $this->Paginator->sort('poster'); ?></th>
			<th><?php echo $this->Paginator->sort('imdbrating'); ?></th>
			<th><?php echo $this->Paginator->sort('imdbvotes'); ?></th>
			<th><?php echo $this->Paginator->sort('imdbid'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($films as $film): ?>
	<tr>
		<td><?php echo h($film['Film']['id']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['title']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['year']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['rated']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['released']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['runtime']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['genre']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['director']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['writer']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['actors']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['plot']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['poster']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['imdbrating']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['imdbvotes']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['imdbid']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($film['User']['username'], array('controller' => 'users', 'action' => 'view', $film['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $film['Film']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $film['Film']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $film['Film']['id']), null, __('Are you sure you want to delete # %s?', $film['Film']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

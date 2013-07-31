<div class="films view">
<h2><?php echo __('Film'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($film['Film']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($film['Film']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($film['Film']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rated'); ?></dt>
		<dd>
			<?php echo h($film['Film']['rated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Released'); ?></dt>
		<dd>
			<?php echo h($film['Film']['released']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Runtime'); ?></dt>
		<dd>
			<?php echo h($film['Film']['runtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo h($film['Film']['genre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Director'); ?></dt>
		<dd>
			<?php echo h($film['Film']['director']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Writer'); ?></dt>
		<dd>
			<?php echo h($film['Film']['writer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actors'); ?></dt>
		<dd>
			<?php echo h($film['Film']['actors']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plot'); ?></dt>
		<dd>
			<?php echo h($film['Film']['plot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poster'); ?></dt>
		<dd>
			<?php echo h($film['Film']['poster']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imdbrating'); ?></dt>
		<dd>
			<?php echo h($film['Film']['imdbrating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imdbvotes'); ?></dt>
		<dd>
			<?php echo h($film['Film']['imdbvotes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imdbid'); ?></dt>
		<dd>
			<?php echo h($film['Film']['imdbid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($film['User']['username'], array('controller' => 'users', 'action' => 'view', $film['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Film'), array('action' => 'edit', $film['Film']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Film'), array('action' => 'delete', $film['Film']['id']), null, __('Are you sure you want to delete # %s?', $film['Film']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

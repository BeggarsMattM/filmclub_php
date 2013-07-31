<div class="films form">
<?php echo $this->Form->create('Film'); ?>
	<fieldset>
		<legend><?php echo __('Add Film'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('year');
		echo $this->Form->input('rated');
		echo $this->Form->input('released');
		echo $this->Form->input('runtime');
		echo $this->Form->input('genre');
		echo $this->Form->input('director');
		echo $this->Form->input('writer');
		echo $this->Form->input('actors');
		echo $this->Form->input('plot');
		echo $this->Form->input('poster');
		echo $this->Form->input('imdbrating');
		echo $this->Form->input('imdbvotes');
		echo $this->Form->input('imdbid');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

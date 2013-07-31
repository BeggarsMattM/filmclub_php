<style>
.poster { height: 200px; float: left; }
.title { font-size: 20px; clear: both; }
.plot { float: right; width: 500px; }
</style>
<div class="films index">
	<h2><?php echo __('Films'); ?></h2>
	<?php foreach ($films as $film) {
		$title = $film['Film']['title'];
		$plot = $film['Film']['plot'];
		$poster = 'img/' . $film['Film']['imdbid'] . '.jpg';
		echo <<<HERE
			<p><div class='title'>$title</div><img class='poster' src='$poster'></p>
			<div class='plot'>$plot</div>
HERE;
	} ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

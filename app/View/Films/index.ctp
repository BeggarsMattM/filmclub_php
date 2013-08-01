<style>
.item { clear: both; }
.poster { height: 200px; }
.title { font-size: 20px; margin-bottom: 10px; }
.plot { width: 500px; }
.leftside { float: left; margin-right: 30px; }
.rightside { float: right; margin-top: 50px; text-align: right; }
</style>
<div class="films index">
	<h2><?php echo __('Films'); ?></h2>
	<?php foreach ($films as $film) {
		$title = $film['Film']['title'];
		$link = $this->Html->link($title, array('action'=>'view', $film['Film']['id']));
		$plot = $film['Film']['plot'];
		if ($plot == 'N/A') $plot = "No IMDB synopsis found";
		$plot = $this->Html->link($plot, 'http://www.imdb.com/title/' . $film['Film']['imdbid']);
		$poster = $this->Html->image($film['Film']['imdbid'] . '.jpg', array(
			"alt"=>$title, "url"=>array('action'=>'view', $film['Film']['id']),
			"height"=>100));
		$user = $film['User']['username'];
		$imdb = $film['Film']['imdbrating'];
		echo <<<HERE
			<div class='item'>
			<div class='leftside'>
			<p><div class='title'>$link ($user)</div>$poster</p>
			</div>
			<div class='middle'>$imdb</div>
			<div class='rightside'>
			<div class='plot'>$plot</div>
			</div>
			</div>
HERE;
	} ?>
		<br style='clear:both;'/>
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
	</ul>
</div>

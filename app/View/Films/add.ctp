<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
$('document').ready(function(){
	var user = <?php echo AuthComponent::user('id'); ?>;
	$('#clicker').click(function(){
		var title = $('#FilmTitle').val();
		var year = $('#FilmYear').val();
		var imdbid = $('#FilmImdbid').val();
		var url = 'http://www.omdbapi.com/?';
		if (title || year || imdbid) {
			querystring = [];
			if (title) querystring.push('t='+title);
			if (year) querystring.push('y='+year);
			if (imdbid) querystring.push('i='+imdbid);
			$.ajax({
		  		url: url + querystring.join('&')
			}).done(function(data) {
				$data = $.parseJSON(data);
				if ($data.Response === 'True') {
					if (confirm($data.Title + " (" + $data.Year + "), dir. " + $data.Director + "?")) {
						$('#FilmTitle').val($data.Title);
						$('#FilmYear').val($data.Year);
						$('#FilmImdbid').val($data.imdbID);
						$('#FilmRated').val($data.Rated);
						$('#FilmReleased').val($data.Released);
						$('#FilmRuntime').val($data.Runtime);
						$('#FilmGenre').val($data.Genre);
						$('#FilmDirector').val($data.Director);
						$('#FilmWriter').val($data.Writer);
						$('#FilmActors').val($data.Actors);
						$('#FilmPlot').val($data.Plot);
						$('#FilmPoster').val($data.Poster);
						$('#FilmImdbrating').val($data.imdbRating);
						$('#FilmImdbvotes').val($data.imdbVotes);
						$('#FilmUserId').val(user);
						$('#FilmAddForm').submit();
					}
				} else {
					alert("Not found - please refine search");
				}
			});
		}
	});
});
</script>
<div class="films form">
<?php echo $this->Form->create('Film'); ?>
	<fieldset>
		<legend><?php echo __('Add Film'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('year');
		echo $this->Form->input('imdbid');
	?>
	<div id="clicker">Click here to search</div>
	<?php	
		echo $this->Form->input('rated', array('type'=>'hidden'));
		echo $this->Form->input('released', array('type'=>'hidden'));
		echo $this->Form->input('runtime', array('type'=>'hidden'));
		echo $this->Form->input('genre', array('type'=>'hidden'));
		echo $this->Form->input('director', array('type'=>'hidden'));
		echo $this->Form->input('writer', array('type'=>'hidden'));
		echo $this->Form->input('actors', array('type'=>'hidden'));
		echo $this->Form->input('plot', array('type'=>'hidden'));
		echo $this->Form->input('poster', array('type'=>'hidden'));
		echo $this->Form->input('imdbrating', array('type'=>'hidden'));
		echo $this->Form->input('imdbvotes', array('type'=>'hidden'));
		echo $this->Form->input('user_id', array('type'=>'hidden'));
	?>
	</fieldset>
<?php //echo $this->Form->end(__('Submit'), array('type'=>'hidden')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
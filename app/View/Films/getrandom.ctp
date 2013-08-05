<?php
echo $this->Session->flash();
if (!empty($film)) {
	$poster = $this->Html->image($film['imdbid'] . '.jpg', array(
		"alt"=>$title, "url"=>array('action'=>'view', $film['imdbid']),
		"height"=>100));
	echo "<h1>" . $film['title'] . "</h1>$poster<br/> selected by <h2>" . $user['username'] ."</h2>";
} 
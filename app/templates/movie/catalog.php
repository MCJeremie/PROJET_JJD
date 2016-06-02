<?php $this->layout('admin/layout', ['title' => 'Movie catalog']) ?>

<?php
$this->start('main_content');

	foreach($movies as $movie) {
		echo 'Movie title '.$movie['title'].'<br>';
	}

$this->stop('main_content');
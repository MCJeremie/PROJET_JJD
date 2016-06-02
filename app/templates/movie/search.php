<?php $this->layout('admin/layout', ['title' => 'Movie search']) ?>

<?php
$this->start('main_content');

	foreach($movies as $movie) {
		echo 'Movie title '.$movie['title'].'<br>';
		echo 'Movie synopsis '.$movie['synopsis'].'<br>';
		echo '<hr>';
	}

$this->stop('main_content');
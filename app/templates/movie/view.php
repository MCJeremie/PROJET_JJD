<?php $this->layout('admin/layout', ['title' => 'Movie view']) ?>

<?php $this->start('main_content') ?>
Movie title <?= $movie['title'] ?>
<?php $this->stop('main_content') ?>
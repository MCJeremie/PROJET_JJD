<?php $this->layout('admin/layout', ['title' => 'Movie view']) ?>

<?php $this->start('main_content') ?>

<?php if (!empty($result)) { ?>
<div class="alert alert-success">Votre film a bien été envoyé</div>
<script>setTimeout(function() { location.href = "<?= $this->url('movie_view', array('id' => $result['id'])) ?>"; }, 3000);</script>
<?php } else { ?>

<?php if (!empty($errors)) { ?>
<div class="alert alert-danger">
    <ul>
    <?php
    foreach($errors as $error) {
        echo '<li>'.$error.'</li>';
    }
    ?>
    </ul>
</div>
<?php } ?>

<form method="POST">

	<label for="title">Title : </label><input type="text" name="title" value="<?= $title ?>"><br>
	<label for="title">Synopsis : </label><textarea name="synopsis"><?= $synopsis ?></textarea>
	<hr>
	<input type="submit" value="Envoyer">

</form>

<?php } ?>

<?php $this->stop('main_content') ?>
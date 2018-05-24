<div class="col-md-4 int">
	<?php if ($int->hasImages()) : ?>
    	<img src="<?= $int->images()->first()->url() ?>" alt="Thumbnail Image" class="img-circle img-responsive intervenant">
    <?php endif ?>
    <h5><?= $int->title() ?> <br /><small class=""><?= $int->titre() ?></small></h5>
    <?= $int->bio()->kirbytext() ?>
</div>
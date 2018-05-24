<?php snippet('header') ?>

<div class="container-fluid">
  <div class="row">
  	<?= snippet('sidebar') ?>
    
    <div class="col-sm-10 section-nude scroll right">
          <div class="row">
            <div class="alert alert-warning">
             Le programme est encore en construction. Certains intervenants pourront encore s'ajouter au programme.
            </div>
            <h2 class="pl"><?= $page->title() ?></h2>
            <?= $page->text() ?>
          </div>
    </div>
  </div>
</div>


<?php snippet('footer') ?>
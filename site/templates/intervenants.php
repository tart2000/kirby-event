<?php snippet('header') ?>

<div class="container-fluid">
  <div class="row">
  	<?= snippet('sidebar') ?>
    
    <div class="col-sm-10 section-nude scroll right">
          <div class="row">
            <?php if ($page->text() != '') : ?>
                <div class="alert alert-warning">
                    <?= $page->text() ?>
                </div>
            <?php endif ?>
            <h2 class="pl"><?= $page->title() ?></h2>
            <?php foreach ($page->children() as $int) : ?>
                <?php snippet('intervenant', array('int' => $int)) ?>
            <?php endforeach ?> 
          </div>
    </div>
  </div>
</div>


<?php snippet('footer') ?>
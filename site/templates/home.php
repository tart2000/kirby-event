<?php snippet('header') ?>

<div class="container-fluid">
  <div class="row">
  	<?= snippet('sidebar') ?>
    
    <div class="col-sm-10 section-nude scroll right">
        <div class="row pb">
            <div class="alert alert-warning">
             Le programme est encore en construction. Certains intervenants pourront encore s'ajouter au programme.
            </div>
            <div class="col-sm-10 col-sm-offset-1">
	            <?= $page->text()->kirbytext() ?>
	        </div>
        </div> <!-- end row -->

  

      <?= snippet('logos') ?>

     </div>
</div> <!-- end row --> 


<?php snippet('footer') ?>
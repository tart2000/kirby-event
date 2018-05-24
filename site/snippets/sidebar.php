<div class="col-sm-2 sidebar pt text-center scroll left">
  <a href="<?= $site->url() ?>">
    <img class="img-responsive" src="assets/images/APCovoit_logo.png">
  </a>
  
  <div class="row pt date">
    <div class="alert alert-danger">
      <h1><i class="cal fa fa-calendar"></i> 9</h1>
      <h3>novembre</h3>
      <h2>2018</h2>
      <h3><i class="fa fa-map-marker"></i> Lyon</h3>
    </div>
  </div>
  <!-- Menu -->
  <?php foreach ($site->pages()->visible() as $p) : ?>
    <a class="btn btn-simple" href="<?= $p->url() ?>"><?= $p->title() ?></a>
  <?php endforeach ?>
</div>
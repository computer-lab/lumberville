<footer class="content-info">
  <img class="logo-centered" src="<?= wp_upload_dir()['url'] ; ?>/lgs-icon.png">
  <div class="container">
    <p class="pull-left">2016 Lumberville General Store</p>
    <div class="pull-right">
      <a href="<?= the_field('facebook') ?>" class="icon-link fa-lg">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-facebook fa-inverse fa-stack-1x"></i>
        </span>
      </a>
      <a href="<?= the_field('twitter') ?>" class="icon-link fa-lg">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-twitter fa-inverse fa-stack-1x"></i>
        </span>
      </a>
      <a href="<?= the_field('google_plus') ?>" class="icon-link fa-lg">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-google-plus fa-inverse fa-stack-1x"></i>
        </span>
      </a>
      <a href="<?= the_field('instagram') ?>" class="icon-link fa-lg">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-instagram fa-inverse fa-stack-1x"></i>
        </span>
      </a>
    </div>
  </div>
</footer>

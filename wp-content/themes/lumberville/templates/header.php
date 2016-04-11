<header class="banner">
<div class="container hidden-xs large-menu">
  <div class="row">
    <div class="col-xs-5 flex">
      <ul class="center-block">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#menu">Menu</a>
        </li>
        <li>
          <a href="#events">Events</a>
        </li>
      </ul>
    </div>
    <div class="col-xs-2">
      <a href="<?= esc_url(home_url('/')); ?>">
        <img src="<?= wp_upload_dir()['url'] ; ?>/lgs-logo.png">
      </a>
    </div>
    <div class="col-xs-5 flex">
      <ul class="center-block">
        <li>
          <a href="#lgs">LGS</a>
        </li>
        <li>
          <a href="#merchandise">Merch</a>
        </li>
        <li>
          <a href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="small-menu">
  <div class="container">
    <a href="<?= esc_url(home_url('/')); ?>">
      <img src="<?= wp_upload_dir()['url'] ; ?>/lgs-type.png">
    </a>

    <a href="<?= the_field('facebook') ?>" class="icon-link fa-lg pull-right">
      <span class="fa-stack">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-bars fa-inverse fa-stack-1x"></i>
      </span>
    </a>
    <ul class="pull-right hidden-xs hidden-sm">
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a href="#menu">Menu</a>
      </li>
      <li>
        <a href="#events">Events</a>
      </li>
      <li>
        <a href="#lgs">LGS</a>
      </li>
      <li>
        <a href="#merchandise">Merch</a>
      </li>
      <li>
        <a href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</div>
</header>

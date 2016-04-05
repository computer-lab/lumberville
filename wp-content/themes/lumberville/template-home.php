<?php
/**
 * Template Name: Home Template
 */
?>
<!-- HOME -->
<section id="home" class="container">
  <div class="row">
    <div class="col-xs-8 bordered">
      <img class="slider" src="<?= wp_upload_dir()['url'] ; ?>/slider-filler-1.jpg">
    </div>
    <div class="col-xs-4 bordered">
      <div class="info">
        <img src="<?= wp_upload_dir()['url'] ; ?>/welcome.png">
        <?= the_field('home_blurb') ?>
        <br>
        <h4>Visit Us</h4>
        <?= the_field('contact_info') ?>
      </div>
      <a href="/index.php/menu" class="center-block">
        <img class="center-block" src="<?= wp_upload_dir()['url'] ; ?>/view-menu.png">
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6 flex">
      <img class="pull-left v-center" src="<?= wp_upload_dir()['url'] ; ?>/newsletter.png">
      <a class="button pull-left active" href="http://visitor.r20.constantcontact.com/d.jsp?llr=gy7ai5jab&p=oi&m=1110190355206&sit=qqkz4n4gb&f=9bbe2447-1b40-46a7-be09-507ced0e59a3">Sign Up</a>
    </div>
    <div class="col-xs-6">
      <div class="pull-right">
        <a href="#" class="social-link fa-lg">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-inverse fa-stack-1x"></i>
          </span>
        </a>
        <a href="#" class="social-link fa-lg">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-inverse fa-stack-1x"></i>
          </span>
        </a>
        <a href="#" class="social-link fa-lg">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-google-plus fa-inverse fa-stack-1x"></i>
          </span>
        </a>
        <a href="#" class="social-link fa-lg">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-instagram fa-inverse fa-stack-1x"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- MENU -->
<section id="menu" class="bg-brown">
  <div class="container">
    <div class="row">
      <div class="col-xs-5">
        <img class="img-responsive text-image" src="<?= wp_upload_dir()['url'] ; ?>/local-natural.png">
        <img class="slider" src="<?= wp_upload_dir()['url'] ; ?>/menu-filler-1.jpg">
        <h4>Lunch</h4>
        <h5>Served 11:30 am - 3:00 pm</h5>
        <p>Lunch copy lorem ipsum</p>
      </div>
      <div class="col-xs-7">
        <ul>
          <li>Bean and Leaf</li>
          <li>Bean and Leaf</li>
          <li>Bean and Leaf</li>
          <li>Bean and Leaf</li>
          <li>Bean and Leaf</li>
          <li>Bean and Leaf</li>
        </ul>
        <ul>
          <li>Salads and Soups</li>
          <li>Sandwiches</li>
          <li>Bean and Leaf</li>
          <li>Bean and Leaf</li>
          <li>Bean and Leaf</li>
        </ul>
        <ul>
          <li>
            <h5>Health Kick - 7.95</h5>
            <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
          </li>
          <li>
            <h5>Health Kick - 7.95</h5>
            <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
          </li>
          <li>
            <h5>Health Kick - 7.95</h5>
            <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
          </li>
          <li>
            <h5>Health Kick - 7.95</h5>
            <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
          </li>
          <li>
            <h5>Health Kick - 7.95</h5>
            <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
          </li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-4">
        <h4>Dinners To Go</h4>
        <p>Lorem ipsum</p>
      </div>
      <div class="col-xs-4">
        <h4>Daily Specials</h4>
        <p>Lorem ipsum</p>
      </div>
      <div class="col-xs-4">
       <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/lgs-otroyb.png">
      </div>
    </div>
  </div>
</section>
<!-- EVENTS -->
<div class="bg-banner" style="background-image: url('<?= wp_upload_dir()['url'] ; ?>/banner-filler.jpg');"></div>
<section id="events" class="container">
<div class="row">
  <div class="col-xs-12">
    <img class="center-block text-image" src="<?= wp_upload_dir()['url'] ; ?>/events.png">
    <p class="text-center">Events blurb.</p>
  </div>
</div>
<div class="row">
  <div class="col-xs-7">
    <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/slider-filler-1.jpg">
  </div>
  <div class="col-xs-5">
    <h4>Book A Party</h4>
    <p>Party blurb</p> </div> </div>
</section>
<!-- LGS -->
<section id="lgs" class="bg-dark-tan">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/history.png">
        <a class="button active" href="#">History</a>
        <a class="button" href="#">Pedestrian Bridge</a>
        <a class="button" href="#">Pedestrian Bridge</a>
      </div>
      <div class="col-xs-8">
        <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/lgs-filler.jpg">
        <h4>History</h4>
        <p>Blurb</p>
        <h4>Past</h4>
        <p>Blurb</p>
      </div>
    </div>
  </div>
</section>
<!-- MERCHANDISE  -->
<div class="bg-banner" style="background-image: url('<?= wp_upload_dir()['url'] ; ?>/banner-filler.jpg');"></div>
<section id="merchandise" class="container">
  <div class="row">
    <div class="col-xs-12">
      <img class="center-block text-image" src="<?= wp_upload_dir()['url'] ; ?>/merch.png">
      <p class="text-center">Merch blurb.</p>
      <ul>
        <li>Merch</li>
        <li>Merch</li>
        <li>Merch</li>
        <li>Merch</li>
        <li>Merch</li>
        <li>Merch</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <img class="center-block text-image" src="<?= wp_upload_dir()['url'] ; ?>/local-goods.png">
      <p class="text-center">Goods blurb.</p>
      <ul>
        <li>Goods</li>
        <li>Goods</li>
        <li>Goods</li>
        <li>Goods</li>
        <li>Goods</li>
      </ul>
    </div>
  </div>
</section>
<!-- CONTACT  -->
<section id="contact" class="bg-brown">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <img src="<?= wp_upload_dir()['url'] ; ?>/contact.png">
        <?= the_field('contact_info') ?>
        <h5>Hours</h5>
        <p>Hours blurb</p>
      </div>
      <div class="col-xs-8">
        <p>Map</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
         <p>Contact Form</p>
      </div>
    </div>
  </div>
</section>

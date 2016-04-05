<?php
/**
 * Template Name: Home Template
 */
?>
<!-- HOME -->
<div class="row">
  <div class="col-xs-8 bordered">
    <img class="slider" src="<?= wp_upload_dir()['url'] ; ?>/slider-filler-1.jpg">
  </div>
  <div class="col-xs-4 bordered">
    <div class="info">
      <img src="<?= wp_upload_dir()['url'] ; ?>/welcome.png">
      <?= the_field('home_blurb') ?>
      <h4>Visit Us</h4>
      <?= the_field('contact_info') ?>
    </div>
    
    <div class="flex">
      <a href="/index.php/menu" class="h-centered">
        <img src="<?= wp_upload_dir()['url'] ; ?>/view-menu.png">
      </a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <img class="pull-left" src="<?= wp_upload_dir()['url'] ; ?>/newsletter.png">
    <a class="button pull-left" href="http://visitor.r20.constantcontact.com/d.jsp?llr=gy7ai5jab&p=oi&m=1110190355206&sit=qqkz4n4gb&f=9bbe2447-1b40-46a7-be09-507ced0e59a3">Sign Up Now</a>
  </div>
</div>
<!-- MENU -->
<div class="row">
  <div class="col-xs-5">
    <img class="slider" src="<?= wp_upload_dir()['url'] ; ?>/local-natural.png">
    <img class="slider" src="<?= wp_upload_dir()['url'] ; ?>/menu-filler-1.jpg">
    <h4>Lunch</h4>
    <h6>Served 11:30 am - 3:00 pm</h6>
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
        <h6>Health Kick - 7.95</h6>
        <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
      </li>
      <li>
        <h6>Health Kick - 7.95</h6>
        <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
      </li>
      <li>
        <h6>Health Kick - 7.95</h6>
        <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
      </li>
      <li>
        <h6>Health Kick - 7.95</h6>
        <p>Lorem ipsum dolor grandola topped with Greek yogurt.</p>
      </li>
      <li>
        <h6>Health Kick - 7.95</h6>
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
<!-- EVENTS -->
<div class="row">
  <div class="col-xs-12">
    <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/banner-filler.jpg">
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <img src="<?= wp_upload_dir()['url'] ; ?>/events.png">
    <p>Events blurb.</p>
  </div>
</div>
<div class="row">
  <div class="col-xs-7">
    <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/slider-filler-1.jpg">
  </div>
  <div class="col-xs-5">
    <h4>Book A Party</h4>
    <p>Party blurb</p>
  </div>
</div>
<!-- LGS -->
<div class="row">
  <div class="col-xs-4">
    <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/history.png">
    <a class="button pull-left" href="http://visitor.r20.constantcontact.com/d.jsp?llr=gy7ai5jab&p=oi&m=1110190355206&sit=qqkz4n4gb&f=9bbe2447-1b40-46a7-be09-507ced0e59a3">Sign Up Now</a>
    <a class="button pull-left" href="http://visitor.r20.constantcontact.com/d.jsp?llr=gy7ai5jab&p=oi&m=1110190355206&sit=qqkz4n4gb&f=9bbe2447-1b40-46a7-be09-507ced0e59a3">Sign Up Now</a>
    <a class="button pull-left" href="http://visitor.r20.constantcontact.com/d.jsp?llr=gy7ai5jab&p=oi&m=1110190355206&sit=qqkz4n4gb&f=9bbe2447-1b40-46a7-be09-507ced0e59a3">Sign Up Now</a>
  </div>
  <div class="col-xs-8">
    <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/lgs-filler.jpg">
    <h4>History</h4>
    <p>Blurb</p>
    <h4>Past</h4>
    <p>Blurb</p>
  </div>
</div>
<!-- MERCHANDISE  -->
<div class="row">
  <div class="col-xs-12">
    <img class="img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/banner-filler.jpg">
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <img src="<?= wp_upload_dir()['url'] ; ?>/merch.png">
    <p>Merch blurb.</p>
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
    <img src="<?= wp_upload_dir()['url'] ; ?>/local-goods.png">
    <p>Goods blurb.</p>
    <ul>
      <li>Goods</li>
      <li>Goods</li>
      <li>Goods</li>
      <li>Goods</li>
      <li>Goods</li>
    </ul>
  </div>
</div>
<!-- CONTACT  -->
<div class="row">
  <div class="col-xs-4">
    <img src="<?= wp_upload_dir()['url'] ; ?>/contact.png">
    <?= the_field('contact_info') ?>
    <h6>Hours</h6>
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

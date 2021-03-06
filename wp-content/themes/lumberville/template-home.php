<?php
/**
* Template Name: Home Template
*/
?>
<!-- HOME -->
<style>
input, textarea{
  box-shadow: 
    2px 0 0 0  #fffbf6, 
    0 2px 0 0 #fffbf6, 
    2px 2px 0 0 #fffbf6,   /* Just to fix the corner */
    2px 0 0 0 #fffbf6 inset, 
    0 2px 0 0 #fffbf6 inset !important;
}
</style>
<section id="home" class="container">
  <div class="row bordered-dark">
    <div class="col-xs-12 col-lg-8 ">
      <div id="carousel-home" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php foreach(get_field('home_gallery') as $i=>$image): ?>
          <div class="item <?= $i == 0 ? "active" : '' ?>">
            <img src="<?php echo $image['url']; ?>">
            <div class="carousel-caption">
              <p><?= $image['caption']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-xs-12 col-lg-4">
      <div>
        <div class="info">
          <img src="<?= wp_upload_dir()['url'] ; ?>/welcome.png">
          <?= the_field('home_blurb') ?>
          <br>
          <h4>Visit Us</h4>
          <?= the_field('contact_info') ?>
        </div>
        <a class="hidden-xs hidden-sm" href="#menu">
          <img class="img-responsive center-block" src="<?= wp_upload_dir()['url'] ; ?>/view-menu.png">
        </a>
      </div>
    </div>
  </div>
  <div class="row hidden-xs">
    <div class="col-xs-6">
      <img class="pull-left" style="margin-top: 11px;" src="<?= wp_upload_dir()['url'] ; ?>/newsletter.png">
      <a class="button green pull-left"  target="_blank" href="http://visitor.r20.constantcontact.com/d.jsp?llr=gy7ai5jab&p=oi&m=1110190355206&sit=qqkz4n4gb&f=00b8ba1e-a725-492e-91ae-e20c1f70f3f1">Sign Up</a>
    </div>
    <div class="col-xs-6">
      <div class="pull-right">
        <a href="<?= the_field('facebook') ?>" class="icon-link fa-lg" target="_blank">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-inverse fa-stack-1x"></i>
          </span>
        </a>
        <a href="<?= the_field('twitter') ?>" class="icon-link fa-lg" target="_blank">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-inverse fa-stack-1x"></i>
          </span>
        </a>
        <a href="<?= the_field('google_plus') ?>" class="icon-link fa-lg" target="_blank">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-google-plus fa-inverse fa-stack-1x"></i>
          </span>
        </a>
        <a href="<?= the_field('instagram') ?>" class="icon-link fa-lg" target="_blank">
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
      <div class="col-xs-12 col-md-4">
        <img class="img-responsive text-image center-block-mobile" src="<?= wp_upload_dir()['url'] ; ?>/local-natural.png">
        <div class="menu-blurbs">
          <div id="bean_and_leaf-blurb">
            <?= the_field('bean_and_leaf_menu_blurb') ?>
          </div>
          <div id="breakfast-blurb">
            <?= the_field('breakfast_menu_blurb') ?>
          </div>
          <div id="lunch-blurb">
            <?= the_field('lunch_menu_blurb') ?>
          </div>
          <div id="treats-blurb">
            <?= the_field('treats_menu_blurb') ?>
          </div>
          <div id="gluten_free-blurb">
            <?= the_field('gluten_free_menu_blurb') ?>
          </div>
          <div id="supper_club-blurb">
            <?= the_field('supper_club_menu_blurb') ?>
          </div>
        </div>
        <br>
      </div>
      <div class="col-xs-12 col-md-7 col-md-offset-1">
        <div class="menu-selector row" role="tablist">
          <div class="col-sm-4 col-xs-6">
            <a href="#bean_and_leaf">Bean & Leaf</a>
          </div>
          <div class="col-sm-4 col-xs-6">
            <a class="active" href="#breakfast">Breakfast</a>
          </div>
          <div class="col-sm-4 col-xs-6">
            <a href="#lunch">Lunch</a>
          </div>
          <div class="col-sm-4 col-xs-6">
            <a  href="#treats">Treats</a>
          </div>
          <div class="col-sm-4 col-xs-6">
            <a href="#gluten_free">Gluten-Free</a>
          </div>
          <div class="col-sm-4 col-xs-6">
            <a href="#supper_club">Supper Club</a>
          </div>
        </div>
        <div class="menus"> 
          <?php 
            $menus = ['bean_and_leaf','breakfast','lunch',
                       'treats','gluten_free','supper_club'];

            foreach($menus as $menu):
          ?>
            <div id="<?= $menu ?>">
              <div class="flex">
                <ul class="submenu-selector center-block" role="tablist">
                  <?php foreach(get_field($menu . '_submenus') as $i=>$row): ?>
                  <li role="presentation" class="<?= $i == 0 ? 'active': '' ?>">
                    <a href="#<?= $menu ?>-<?= $i ?>" data-toggle="tab">
                      <?= $row['submenu_name'] ?>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="flex">
                <div class="tab-content content-block">
                  <?php foreach(get_field($menu . '_submenus') as $i=>$row): ?>
                  <div role="tabpanel" class="tab-pane <?= $i == 0 ? 'active': '' ?>" id="<?= $menu ?>-<?= $i ?>">
                    <?= $row['submenu_content'] ?>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <!-- end .menus -->
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <?= the_field('menu_highlight_1') ?>
      </div>
      <div class="col-xs-12 col-md-4">
        <?= the_field('menu_highlight_2') ?>
      </div>
      <div class="col-xs-12 hidden-sm col-md-4">
        <br class="visible-xs">
        <br class="visible-xs">
        <img style="max-height: 150px;" class="center-block img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/lgs-otroyb.png">
      </div>
    </div>
  </div>
</section>
<!-- EVENTS -->
<div class="bg-banner" style="background-image: url('<?= wp_upload_dir()['url'] ; ?>/banner-1.jpg');"></div>
<section id="events" class="container">
  <div class="row">
    <div class="col-xs-12">
      <img class="center-block text-image img-responsive" src="<?= wp_upload_dir()['url'] ; ?>/events.png">
      <div class="text-center subtitle">
        <?= the_field('events_blurb') ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 text-center">
      <ul role="tablist" style="display: inline-block;">
        <li role="presentation" class="active">
          <a href="#parties" class="button" role="tab" data-toggle="tab">Private
          Parties</a>
        </li>
        <li role="presentation">
          <a href="#party-menus" role="tab" class="button" data-toggle="tab">Party
            Menus</a>
        </li>
        <li role="presentation">
          <a href="#calendar" role="tab" class="button"
            data-toggle="tab">Calendar</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12"> 
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="parties">
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <div id="carousel-events" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <?php foreach(get_field('private_parties_gallery') as $i=>$image): ?>
                  <div class="item <?= $i == 0 ? "active" : '' ?>">
                    <img src="<?php echo $image['url']; ?>">
                    <div class="carousel-caption">
                      <p><?= $image['caption']; ?></p>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-events" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-events" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <?= the_field('private_parties_blurb') ?>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="party-menus">
          <div id="party-menus-carousel" class="carousel slide bordered-dark title-carousel" data-interval="false" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <a class="left" href="#party-menus-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right" href="#party-menus-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <?php foreach(get_field('party_menus') as $i=>$row): ?>
              <div class="item <?= $i == 0 ? "active" : '' ?>">
                <div class="carousel-content">
                  <h4 class="title"><?= $row['party_menu_title']; ?></h4>
                  <?= $row['party_menu_body']; ?>
                  <div style="margin-top: 16px;" class="bg-dark-tan padded">
                    <?= $row['party_menu_pricing']; ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <!-- Controls -->
          </div>
        </div>
        <div role="tabpanel" class="tab-pane bordered-dark" style="padding: 0px 15px;" id="calendar">
          <?php foreach(get_field('calendar_items') as $i=>$row): ?>
            <div class="bordered-bottom-dark">
              <?= $row['calendar_item_body'] ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div> 
  </div>
</section>
<!-- LGS -->
<section id="lgs" class="bg-dark-tan">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <img class="img-responsive center-block-mobile" src="<?= wp_upload_dir()['url'] ; ?>/history.png">
        <ul role="tablist">
          <li role="presentation" class="active">
            <a href="#history" class="button" role="tab" data-toggle="tab">History</a>
          </li>
          <li role="presentation">
            <a href="#pedestrian-bridge" role="tab" class="button" data-toggle="tab">Pedestrian Bridge</a>
          </li>
          <li role="presentation">
            <a href="#canal-and-towpath" role="tab" class="button"
              data-toggle="tab">Canal & Towpath</a>
          </li>
          <li role="presentation">
            <a href="#black-bass-hotel" role="tab" class="button"
              data-toggle="tab">The Black Bass Hotel</a>
          </li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-7 col-md-offset-1">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="history">
            <?= the_field('history_blurb') ?>
          </div>
          <div role="tabpanel" class="tab-pane" id="pedestrian-bridge">
            <?= the_field('pedestrian_bridge_blurb') ?>
          </div>
          <div role="tabpanel" class="tab-pane" id="canal-and-towpath">
            <?= the_field('canal_and_towpath_blurb') ?>
          </div>
          <div role="tabpanel" class="tab-pane" id="black-bass-hotel">
            <?= the_field('black_bass_hotel_blurb') ?>
          </div>
        </div>
      </div>
  <div>
</section>
<!-- MERCHANDISE  -->
<div class="bg-banner" style="background-image: url('<?= wp_upload_dir()['url'] ; ?>/banner-2.jpg');"></div>
<section id="merchandise" class="container">
  <div class="row">
    <div class="col-xs-12">
      <img class="center-block text-image" src="<?= wp_upload_dir()['url'] ; ?>/merch.png">
      <div class="text-center subtitle">
        <?= the_field('merchandise_blurb') ?>
      </div>
      <div class="row">
        <div class="center-block">
        <?php foreach(get_field('merchandise') as $i=>$image): ?>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <img class="center-block" src="<?php echo $image['sizes']['medium']; ?>">
            <h4 class="center-block"><?= $image['caption'] ?></h4>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <img class="center-block text-image" src="<?= wp_upload_dir()['url'] ; ?>/local-goods.png">
      <div class="text-center subtitle">
        <?= the_field('goods_blurb') ?>
      </div>
      <div class="row">
        <?php foreach(get_field('goods') as $i=>$image): ?>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <img class="center-block" src="<?php echo $image['sizes']['medium']; ?>">
            <h4 class="center-block"><?= $image['caption'] ?></h4>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!-- CONTACT  -->
<section id="contact" class="bg-brown">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <img class="img-responsive center-block-mobile" src="<?= wp_upload_dir()['url'] ; ?>/contact.png">
        <br>
        <br>
        <div class="contact">
          <?= the_field('contact_info') ?>
          <br>
          <h4>Hours</h4>
        </div>
        <div class="hours">
          <?= the_field('hours') ?>
        </div>
        <br>
      </div>
      <div class="col-xs-12 col-md-8 hidden-xs hidden-sm">
        <?php $location = get_field('location'); ?>
        <div class="acf-map">
          <div class="marker" data-lat="<?= $location['lat']; ?>" data-lng="<?= $location['lng']; ?>"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <?= do_shortcode( '[contact-form-7 id="130" title="Contact form 1"]' ); ?>
      </div>
    </div>
  </div>
</section>

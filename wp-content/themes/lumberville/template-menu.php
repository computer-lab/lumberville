<?php
/**
 * Template Name: Menu Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
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

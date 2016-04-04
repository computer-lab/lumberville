<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
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

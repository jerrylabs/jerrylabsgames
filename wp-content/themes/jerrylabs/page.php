<?php get_header(); ?>

<?php if (has_post_thumbnail()) : ?>
  <div class="jumbotron">
    <div class="jumbotron__bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
    <div class="container">
      <h1 class="jumbotron__title"><?php the_title(); ?></h1>
    </div>
  </div>
<?php else : ?>
  <div class="container">
    <h1><?php the_title(); ?></h1 >
  </div>
<?php endif; ?>

<div class="container">


  <?php the_content(); ?>

</div>

<?php get_footer(); ?>
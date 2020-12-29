<?php
/**
* Template Name: News overview
*/
get_header();

?>

<h1><?php jumbotron_title(); ?></h1 >

<div class="container cards">

<?php

$q = new WP_Query('cat=1');

?>

  <?php if ($q->have_posts()) : while($q->have_posts()) : $q->the_post(); ?>

    <a class="card card--horizontal card--half" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
      <div class="card__image"
        <?php if (has_post_thumbnail()) : ?>
          style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
        <?php else: ?>
          style="background-image: url(<?php echo(get_template_directory_uri()) ?>/img/jllogostars.png);background-size:contain;"
        <?php endif; ?>
      >
      </div>
      <div class="card__content">
        <div class="card__date"><?php echo get_the_date(); ?></div>
        <h3 class="card__title"><?php the_title(); ?></h3>
        <div class="card__description">
          <?php the_excerpt(); ?>
        </div>

      </div>
    </a>

  <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>

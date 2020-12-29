<?php
get_header();
?>

<div class="container">
    <h1><?php the_title(); ?></h1 >
</div>

<div class="container cards">

  <?php if (have_posts(['category' => 'posts'])) : while(have_posts(['category' => 'posts'])) : the_post(); ?>

    <a class="card card--horizontal card--half" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
      <div class="card__image"
        <?php if (has_post_thumbnail()) : ?>
          style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
        <?php endif; ?>
      >
      </div>
      <div class="card__content">
        <h3 class="card__title"><?php the_title(); ?></h3>
        <div class="card__description">
          <?php the_excerpt(); ?>
        </div>

      </div>
    </a>
  <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>

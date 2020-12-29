<?php
/**
* Template Name: Games overview
*/

get_header('center');
jumbotron_title();

?>



<div class="container">
  <section>
  <?php the_content(); ?>
    <div class="container cards ">
      <?php $q = new WP_Query(array('post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => 23,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'));

        if ($q->have_posts()) : while($q->have_posts()) : $q->the_post();
      ?>
        <a class="card card--vertical card--third card--centered image-fix" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <img class="card__image" src="<?php jerrylabs_image(); ?>" alt="<?php the_title(); ?>">
          <div class="card__content">
            <h3 class="card__title"><?php the_title(); ?></h3>
            <div class="card__description">
              <?php echo get_post_meta(get_the_ID(), 'description', true); ?>
            </div>
          </div>
        </a>
      <?php endwhile; endif; ?>

    </div>
  </section>
</div>

<?php get_footer(); ?>


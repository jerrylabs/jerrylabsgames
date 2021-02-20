<?php get_header(); ?>



<div class="jumbotron">

  <div class="jumbotron__bg" style="background-image: url(<?php echo(get_template_directory_uri()) ?>/img/jumbotron.jpg);"></div>

  <div class="container">

    <div class="jumbotron__text">

      <h1>JerryLabs Games</h1>

      <p>Design &gt; Code &gt; Print &gt; Play</p>

    </div>

  </div>

</div>

      <div class="container">
        <p class="big center">
          Welcome in JerryLabs, independent webdesign and boardgame studio.
          Our <a href="/games">board games</a> are available for free to download, print and play under the <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank"  rel="noreferrer noopener">CC BY-NC-ND</a> license.
          We will greatly appreciate if you consider supporting us to continue developing the games and keeping the world happy and enjoyable place <span role="img" aria-label="(^.^)">😊</span>
      </p>
      </div>
      <section id="games">
        <div class="container">

          <h2 class="center">Our games</h2>

        </div>

        <div class="container cards ">

          <?php $q = new WP_Query(array('post_type'      => 'page',

            'posts_per_page' => -1,

            'post_parent'    => 23,

            'order'          => 'ASC',

            'orderby'        => 'menu_order'));



            if ($q->have_posts()) : while($q->have_posts()) : $q->the_post();

          ?>

            <a class="card card--vertical card--third card--centered image-fix<?php if (get_the_ID() == 82) : ?> label new<?php endif; ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

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



<!--

      <section id="news">

        <div class="container">

          <h2 class="center">Latest news</h2>

        </div>

        <div class="container news">

          ...

          <Link to="/hry/" class="card--quarter card--more">

            <span>More news</span>

          </Link>

        </div>

      </section>

    -->

<?php get_footer(); ?>
<?php

/**

* Template Name: Game

*/

get_header();

?>



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



<div class="container game__panel">

  <div class="game__download">

    <p class="big">

      <?php echo get_post_meta(get_the_ID(), 'download_description', true); ?>

    </p>

    <h3 class="center">Support JerryLabs!</h3>

    <div class="donate">

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

        <input type="hidden" name="cmd" value="_s-xclick">

        <input type="hidden" name="hosted_button_id" value="RJXN94FPWP28S">

        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button">

        <img alt="" border="0" src="https://www.paypal.com/en_CZ/i/scr/pixel.gif" width="1" height="1">

      </form>

      <a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/JerryLabs">

        <img src="https://cdn.buymeacoffee.com/buttons/bmc-new-btn-logo.svg" alt="Buy me a coffee">

        <span style="margin-left:4px;font-size:20px !important;">

          Buy me a coffee

        </span>

      </a>

       <a href="https://www.patreon.com/bePatron?u=32255021" class="patreon-button">

      <svg viewBox="0 0 569 546" xmlns="http://www.w3.org/2000/svg"><g>

        <circle cx="362.589996" cy="204.589996" fill="white" id="Oval" r="204.589996"></circle>

        <rect fill="black" height="545.799988" id="Rectangle" width="100" x="0" y="0"></rect>

      </g></svg>

      <span>Become a Patron</span>

    </a>

    </div>

    <p class="center">Or <span role="img" aria-label="donate">🎁</span> by transfering to BIC: AIRACZPP, IBAN: CZ9330300000001126400055<br></p>

    <img src="<?php echo(get_template_directory_uri()) ?>/img/ad.jpg" alt="Here can be your ad" style="max-width:100%;margin:1rem 0 2rem">

  </div>



  <div class="gameInfo game__info">

    <div class="gameInfo__fields">

      <div class="gameInfo__field">

        <div class="gameInfo__value">

          <span role="img" aria-labelledby="lblPls">👪</span>

        <?php echo get_post_meta(get_the_ID(), 'players', true); ?>

        </div>

        <div class="gameInfo__label" id="lblPls">Players</div>

      </div>

      <div class="gameInfo__field">

        <div class="gameInfo__value">

          <span role="img" aria-labelledby="lblTime">⏰</span>

        <?php echo get_post_meta(get_the_ID(), 'time', true); ?>

        </div>

        <div class="gameInfo__label" id="lblTime">Time</div>

      </div>

      <div class="gameInfo__field">

        <div class="gameInfo__value">

          <span role="img" aria-labelledby="lblAge">👶</span>

          <?php echo get_post_meta(get_the_ID(), 'age', true); ?>

        </div>

        <div class="gameInfo__label" id="lblAge">Age</div>

      </div>

    </div>

    <?php

      $tags = get_the_tags();

      if ($tags) {

        echo '<div class="gameInfo__tags">';

        foreach($tags as $tag) {

          echo '<span class="gameInfo__tag">' .$tag->name. '</span>';

        }

        echo '</div>';

      }

    ?>



    <?php



      $args = array(

        'numberposts' => -1, // Using -1 loads all posts

        'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager

        'order'=> 'ASC',

        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos

        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded

        'post_status' => null,

        'post_type' => 'attachment'

      );



      $images = get_children( $args );



      if($images){ ?>

        <h2>Galerie</h2>

        <div class="gameInfo__gallery">

          <?php foreach($images as $image) { ?>



<a class="gameInfo__preview" data-fancybox="game"

  style="background-image: url(<?php echo $image->guid; ?>);"

  data-caption="<?php echo $image->guid; ?>"

  href="<?php echo $image->guid; ?>">

</a>



          <?php } ?>

        </div>

      <?php } ?>



    </div>

  </div>

</div>



<section>

  <div class="container">

    <?php the_content(); ?>

  </div>

</section>









<?php get_footer(); ?>
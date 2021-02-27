 <?php

/**

* Template Name: Contact

*/



get_header();

jumbotron_title();



?>



<div class="container">

  <?php the_content(); ?>

  <ul class="contact__social center">

    <li>

      <a href="http://facebook.com/jerrylabsgames" target="_blank" rel="noopener noreferrer">

        <img alt="JerryLabs Games - Facebook" title="JerryLabs Games na Facebooku"  src="<?php echo(get_template_directory_uri()) ?>/img/logos/logo-facebook.png" />

      </a>

    </li>

    <li>

      <a href="http://twitter.com/jerrylabs" target="_blank" rel="noopener noreferrer">

        <img alt="JerryLabs @ Twittter" title="JerryLabs @ Twittter"  src="<?php echo(get_template_directory_uri()) ?>/img/logos/logo-twitter.png" />

      </a>

    </li>

    <li>

      <a href="https://www.linkedin.com/in/jerrylabs" target="_blank" rel="noopener noreferrer">

        <img alt="Jaroslav Kameň na LinkedIn" title="Jaroslav Kameň na LinkedIn"  src="<?php echo(get_template_directory_uri()) ?>/img/logos/logo-linkedin.png" />

      </a>

    </li>

    <li>

      <a href="http://instagram.com/jerrousz" target="_blank" rel="noopener noreferrer">

        <img alt="Jerry @ Instagram" title="Jerry @ Instagram"  src="<?php echo(get_template_directory_uri()) ?>/img/logos/logo-instagram.png" />

      </a>

    </li>

    <li>

      <a href="http://www.imdb.com/name/nm6707588/" target="_blank" rel="noopener noreferrer">

        <img alt="Jaroslav Kameň na IMDb" title="Jaroslav Kameň na IMDb"  src="<?php echo(get_template_directory_uri()) ?>/img/logos/logo-imdb.png" />

      </a>

    </li>

    <li>

      <a href="https://jihomoravsky.pirati.cz/lide/jaroslav-kamen" target="_blank" rel="noopener noreferrer">

        <img alt="Jaroslav Kameň - Česká pirátská strana" title="Jaroslav Kameň - Česká pirátská strana"  src="<?php echo(get_template_directory_uri()) ?>/img/logos/logo-cps.png" />

      </a>

    </li>

  </ul>



  <div class="contact">

    <div class="contact__address">

      <p>

        Jerry Kameň<br />

        CEO of JerryLabs<br />

        Orlová, Czech Republic<br />

        IČO 02598248<br />

        mail: <a href="mailto:jerrylabs@seznam.cz">jerrylabs@seznam.cz</a>

      </p>

    </div>

    <img class="contact__photo"  src="<?php echo(get_template_directory_uri()) ?>/img/jerry-photo.jpg" alt="Jaroslav Kameň" title="Jaroslav Kameň" />

  </div>



  <iframe title="Kontaktní formulář" class="form"

    src="https://docs.google.com/forms/d/e/1FAIpQLSdxHJnOUOi5jz-Zo7QRMHmLm_PyCCqL-CkaFIpqT34hdOOWUw/viewform?embedded=true&hl=en"

    width="640" height="725" frameBorder="0" marginHeight="0" marginwidth="0"

  >

    Loading…

  </iframe>



</div>



<?php get_footer(); ?>
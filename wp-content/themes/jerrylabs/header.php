<!DOCTYPE html>



<html>



  <head>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500|Norican:400,500&amp;display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script data-ad-client="ca-pub-9930200041929997" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <?php wp_head(); ?>

  </head>



<body <?php body_class(); ?>>



<header>



<div class="container">

  <div class="header__homelink">

    <a href="/" class="logo">

      <img src="<?php echo(get_template_directory_uri()) ?>/img/logo-jerrylabs-white.png" alt="Logo" data-pin-nopin="true" />

    </a>

    <a href="/" class="textlogo">

      JerryLabs

    </a>

  </div>



  <a href="http://www.jerrylabs.cz" title="Czech version" class="language-switch">

  </a>



<?php

  wp_nav_menu(

    array(

      'theme_location' => 'main-menu',

      'menu_class' => 'header__navigation'

    )

  );

?>





  <button id="btnMenu" class="mobile-menu-icon" onClick="toggleMobileMenu();">

      <img class="close" src="<?php echo(get_template_directory_uri()) ?>/img/cross.svg" alt="Menu" />

      <img class="open" src="<?php echo(get_template_directory_uri()) ?>/img/menu.svg" alt="Menu" />

  </button>

</div>



</header>


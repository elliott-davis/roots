<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><span>That</span><span class="blue">Oven</span><span>Feelin&#146;</span></a>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse navbar-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

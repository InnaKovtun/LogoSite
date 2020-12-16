<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logo</title>
    <?php wp_head();?>
  </head>
  <body>

  <header class="header">
    <div class="header-content">
      <div class="header-logo">
        <a href="<?php echo home_url();?>">
          <img src="<?php bloginfo('template_directory')?>/assets/img/logo.png" alt="logo">
        </a>
      </div>
      <div class="nav-menu">
        <div id="menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'top',
            'menu_class' => 'menu'
          )); ?>
        </div>
      </div>
    </div>
    
  </header>
 
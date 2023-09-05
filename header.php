<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <title>
    <?php
      if(is_404()) {
        echo 'Error 404';
      } else {
        the_title();
      }
    ?>
  </title>
</head>

<body>
  <header id="header">
    <section class="container">
      <div class="header-menu">
      <?php the_custom_logo();?>
      <?php 
        wp_nav_menu( [
          'theme_location' => 'header_menu',
          'container' => '',
          'menu_class' => '',
          'menu_id' => 'nav-bar'
        ]);
      ?>
        <div id="button-burger">
          <span class="button-burger-line"></span>
        </div>
        <?php 
        wp_nav_menu( [
          'theme_location' => 'header_menu',
          'container' => '',
          'menu_class' => '',
          'menu_id' => 'nav-bar-burger'
        ]);
      ?>
        <nav id="nav-bar-burger">
          <a href="./home.html" class="nav-bar-a__active">ГЛАВНАЯ</a>
          <a href="./products.html">ПРОДУКЦИЯ</a>
          <a href="./catalog.html">КАТАЛОГ СТЕКЛА</a>
          <a href="./stock.html">АКЦИИ</a>
          <a href="./services.html">УСЛУГИ</a>
          <a href="./about.html">О НАС</a>
          <a href="./contacts.html">КОНТАКТЫ</a>
        </nav>
      </div>
    </section>
  </header>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!--  <link rel="stylesheet" href="../style.css" />-->
  <?php wp_head(); ?>
  <title>СВ-СТЕКЛО</title>
</head>

<body>
  <header id="header">
    <section class="container">
      <div class="header-menu">
      <?php the_custom_logo();?>
        <nav id="nav-bar">
          <a href="./home.html" class="nav-bar-a__active">ГЛАВНАЯ</a>
          <a href="./products.html">ПРОДУКЦИЯ</a>
          <a href="./catalog.html">КАТАЛОГ СТЕКЛА</a>
          <a href="./stock.html">АКЦИИ</a>
          <a href="./services.html">УСЛУГИ</a>
          <a href="./about.html">О НАС</a>
          <a href="./contacts.html">КОНТАКТЫ</a>
        </nav>
        <div id="button-burger">
          <span class="button-burger-line"></span>
        </div>
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
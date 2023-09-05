<?php 
/* 
Template Name: Главная
*/

get_header();
?>

<main>
  <section class="home-slider">
    <div class="container">

    </div>
  </section>

  <?php get_sidebar(); ?>

  <section class="home-advantages">
    <div class="container">
      <h2>НАША ПРОДУКЦИЯ</h2>
      <div class="home-advantages-list">
        <div class="advantages-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/factory-1067.svg" alt="">
          <h5>СОВРЕМЕННОЕ СОБСТВЕННОЕ ПРОИЗВОДСТВО</h5>
        </div>
        <div class="advantages-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/book-4981.svg" alt="">
          <h5>ЛЮБЫЕ ИЗДЕЛИЯ ПОД ЗАКАЗ</h5>
        </div>
        <div class="advantages-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/check-7047.svg" alt="">
          <h5>ПОЛНЫЙ ЦИКЛ ОБРАБОТКИ СТЕКЛА</h5>
        </div>
        <div class="advantages-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/thumbs-up-11229.svg" alt="">
          <h5>ГИБКИЕ УСЛОВИЯ ОПЛАТЫ</h5>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
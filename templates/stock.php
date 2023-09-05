<?php 
/* 
Template Name: Скидки
*/

get_header();
?>

    <main class="stock">
      <section class="container">
        <div class="stock-content">
          <h2>СПЕШИТЕ КУПИТЬ ВЫГОДНО!</h2>
          <div class="stock-block">
            <?php 
              $stocks = CFS()->get('stock');
              foreach ($stocks as $stock_item) {
                ?>
                <div class="stock_item">
                  <img src="<?= $stock_item['stock_photo'] ?>" alt="">
                  <div class="stock_description">
                    <h4><?= $stock_item['stock_title'] ?></h4>
                    <p><?= $stock_item['stock_discription'] ?></p>
                  </div>
                </div>
                <?php } ?>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>

<?php
/* 
Template Name: Главная
*/

get_header();
?>

<main>
  <section class="home-slider" style="background-image: url(<?= CFS()->get('bg_home_slider'); ?>);">
    <div class="container slider-container">
      <?php echo do_shortcode('[slick-slider extra_class="slider-sv" design="design-2" dots="false" hover_pause="true" image_fit="true" sliderheight="250"]'); ?>
    </div>
  </section>

  <div class="products">
    <div class="container home-main">
      <aside class="products-block-list">
        <div class="name-product-list">
          <h5>НАША ПРОДУКЦИЯ</h5>
        </div>
        <div class="products-list">
          <?php $terms = get_terms([
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
            'parent' => 41
          ]);
          foreach ($terms as $single_cat) {
            echo '<a href="' . get_term_link($single_cat) . '" class="products-item"> <h6 class="product-item-title">' . $single_cat->name . '</h6> </a>';
          }
          ?>
        </div>
      </aside>
      <?php
      $discription_main = CFS()->get('discription_home_page');
      ?>
      <section class="home-main-info">
        <div class="home-about">
          <h3>КОМПАНИЯ ОДО «СВ-СТЕКЛО»</h3>
          <p>
            <?= $discription_main[0]['home_discription_company'] ?>
          </p>
        </div>
        <div class="home-our-main-services">
          <h3>НАШИ ОСНОВНЫЕ УСЛУГ</h3>
          <p>
            <?= $discription_main[0]['our_main_services'] ?>
          </p>
          <div class="home-services-list">
            <?php
            $posts = get_posts([
              'post_type' => 'product',
              'category' => 'services',
              'numberposts' => 5,
            ]);
            foreach ($posts as $post) {
            ?>
              <div class="home-services-item">
                <div class="home-services-item-img-block">
                  <?= get_the_post_thumbnail($post); ?>
                </div>
                <p><?= $post->post_title; ?></p>
              </div>
            <?php
            }
            ?>
            <a href="" class="home-services-all-btn">
              <h3>Посмотреть <br> все услуги</h3>
            </a>
          </div>
        </div>
        <div class="home-catalog-products">
          <h3>КАТАЛОГ ПРОДУКЦИИ</h3>
          <p>
            <?= $discription_main[0]['home_discription_catalog_products'] ?>
          </p>
          <div class="home-catalog-list">
            <?php echo do_shortcode('[products category="accessories" limit="4"]') ?>
          </div>
          <?php
          ?>
        </div>
      </section>
    </div>
  </div>

  <section class="home-advantages" style="background-image: url(<?= CFS()->get('bg_home_advantages'); ?>);">
    <div class="container">
      <h2>
        <?= get_category(7, ARRAY_A)['name'] ?>
      </h2>
      <div class="home-advantages-list">
        <?php
        $advantages_list = get_posts([
          'numberposts' => 4,
          'category' => 7,
          'orderby' => 'title',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true
        ]);

        foreach ($advantages_list as $advantage) {
          setup_postdata($advantage);
        ?>
          <div class="advantages-item">
            <?php echo get_the_post_thumbnail($advantage->ID, 'adv_thumbnail') ?>
            <h5><?= $advantage->post_title ?></h5>
          </div>
        <?php
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
<?php
/* 
Template Name: Продукция
*/

get_header();

$products_cat = get_terms([
  'taxonomy' => 'product_cat',
  'hide_empty' => false,
  'parent' => 41
]);

?>

<main>
  <section class="products">
    <div class="container">
      <h2 class="products-page-title"><?= the_title(); ?></h2>
      <div class="products-page-list">
        <?php
        foreach ($products_cat as $single_cat) {
          $term_image_id = get_term_meta( $single_cat->term_id, 'thumbnail_id', true );
          $term_image = wp_get_attachment_url( $term_image_id );
        ?>
          <div class="products-page-item">
            <div class="products-page-item-img-block">
              <img src="<?= $term_image ?>" alt="">
            </div>
            <p><?= $single_cat->name; ?></p>
            <a href="<?= get_term_link($single_cat); ?>">Подробнее</a>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
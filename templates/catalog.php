<?php
/* 
Template Name: Каталог стекла
*/

get_header();

$products_cat = get_posts([
  'numberposts' => -1,
  'category' => 'services',
]);
?>

<main>
  <section class="catalog">
    <div class="container">
      <h2 class="catalog-page-title"><?= the_title(); ?></h2>
      <div class="catalog-page-list">
        <?php
        foreach ($products_cat as $single_cat) {
          $term_image_id = get_term_meta( $single_cat->term_id, 'thumbnail_id', true );
          $term_image = wp_get_attachment_url( $term_image_id );
        ?>
          <div class="catalog-page-item">
            <div class="catalog-page-item-img-block">
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
<?php
/* 
Template Name: Услуги
*/

get_header();

$services_posts = get_posts([
  'post_type' => 'product',
  'product_cat' => 'services',
]); 
?>

<main>
  <section class="products">
    <div class="container">
      <h2 class="catalog-page-title"><?= the_title(); ?></h2>
      <div class="catalog-page-list">
        <?php
        foreach ($services_posts as $single_post) {
        ?>
          <div class="catalog-page-item">
            <div class="catalog-page-item-img-block">
              <?= get_the_post_thumbnail($single_post); ?>
            </div>
            <p><?= $single_post->post_title; ?></p>
            <a href="<?= $single_post->guid ?>">Подробнее</a>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
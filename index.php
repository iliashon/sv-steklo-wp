<?php 
/* 
Template Name: Главная
*/

get_header();
?>

<main>
  <section class="home-slider" style="background-image: url(<?= CFS()->get('bg_home_slider'); ?>);">
    <div class="container">

    </div>
  </section>

  <?php get_sidebar(); ?>

  <section class="home-advantages" style="background-image: url(<?= CFS()->get('bg_home_advantages'); ?>);">
    <div class="container">
      <h2>
        <?= get_category( 7, ARRAY_A)['name'] ?>
      </h2>
      <div class="home-advantages-list">
        <?php 
        $advantages_list = get_posts( [
          'numberposts' => 4,
          'category' => 7,
          'orderby' => 'title',
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true
        ] );

        foreach ($advantages_list as $advantage) {
          setup_postdata($advantage);
          ?>
            <div class="advantages-item">
              <?php echo get_the_post_thumbnail( $advantage->ID, 'adv_thumbnail') ?>
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
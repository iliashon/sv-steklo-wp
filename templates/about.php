<?php 
/* 
Template Name: О нас
*/

get_header();
?>

    <main class="about">
      <section class="container">
        <div class="about-block">
          <div class="about-info">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
          <img src="<?= CFS()->get('photo_about'); ?>" alt="" />
        </div>
      </section>
    </main>

    <?php get_footer(); ?>

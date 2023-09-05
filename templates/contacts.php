<?php 
/* 
Template Name: Контакты
*/

get_header();

$contacts_list = get_posts( [
  'numberposts' => -1,
  'category' => 12,
  'order' => 'ASC',
  'post_type' => 'post',
  'suppress_filters' => true
] );
?>

    <main class="contacts">
      <section class="container">
        <h2>наши контакты</h2>
        <div class="contacts-block">
          <div class="contacts-map">
            <?php echo $contacts_list[5]->post_content ?>
          </div>
          <div class="contacts-info">

          <?php 

        foreach ($contacts_list as $contact) {
          if ($contact->ID === 102) {
            break;
          }
          setup_postdata($contact);
          ?>
          <h4> <?php echo $contact->post_title ?>: </h4>
              <?php echo $contact->post_content ?>
          <?php
           }
           wp_reset_postdata();
          ?> 

          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>
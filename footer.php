<?php
$contacts = get_posts([
  'category' => 'contacts',
  'include' => '92,94,100'
]);
?>

<footer id="footer">
  <section class="container">
    <div class="footer-menu">
      <?php
      foreach ($contacts as $contacts_item) {
      ?>
        <div class="footer-info">
          <h4><?= $contacts_item->post_title; ?>:</h4>
          <?= $contacts_item->post_content; ?>
        </div>
      <?php
      }
      ?>
    </div>
  </section>
</footer>
<?php wp_footer(); ?>

<script>
  jQuery(document).ready(function($) {
    $(".woocommerce-product-gallery__image").click(function() {
      $(".woocommerce-product-gallery__trigger").trigger('click');
    });
  });s
</script>
</body>

</html>
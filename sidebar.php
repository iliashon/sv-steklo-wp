 <section class="products">
    <div class="container">
      <aside class="products-block-list">
        <div class="name-product-list">
          <h5>НАША ПРОДУКЦИЯ</h5>
        </div>
        <ul class="products-list">
          <?php $all_categories = get_categories('hide_empty=0');
          foreach( $all_categories as $single_cat ){
            echo '<li class="products-item"> <a href="' . get_category_link($single_cat->term_id) . '"> <h6 class="product-item-title">' . $single_cat->name . '</h6></a> </li>';
          }
          ?>
        </ul>
      </aside>
    </div>
  </section>
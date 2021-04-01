<?php 
  $brand = array_map(function($item) {return $item['item_type'];}, $product_shuffle);
  $unique = array_unique($brand);
  sort($unique);
  shuffle($product_shuffle);

  // Request Method Post
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['special_price_submit'])) {
      // If the above condition satisfied then we call the addToCart method.
      $cart->addToCart($_POST['user_id'], $_POST['item_id']); // To get the post data $_POST is used.
    }
  }
?>

<section id="special-price">
      <div class="container">
        <h4>Category Products</h4>
        <div class="text-center">
          <div id="filters" class="button-group">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <?php 
              array_map(function($item) {
                printf('<button class="btn" data-filter=".%s">%s</button>',$item, $item);
              }, $unique);
            ?>
          </div>
        </div>

        <div class="grid">
          <?php array_map(function($item) { ?>
              <div class="grid-item border pb-3 <?php echo $item['item_type'] ?? 'Type'; ?>">
              <div class="item" style="width: 250px;">
                <div class="product">
                  <a href="#"><img src="<?php echo $item['item_image'] ?? './Images/products/Shoe/shoe.jpg'; ?>" alt="Product image" class="img-fluid"></a>
                  <div class="text-center">
                    <h6 class="h6"><?php echo $item['item_name'] ?? 'Unknown'; ?></h6>
                    <div class="rating text-warning">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      $ <?php echo $item['item_price'] ?? '0'; ?>
                    </div>
                    <form method="post">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                      <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                      <button type="submit" class="btn btn-warning" name="special_price_submit">Add to cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php },$product_shuffle); ?>
      </div>
    </section>
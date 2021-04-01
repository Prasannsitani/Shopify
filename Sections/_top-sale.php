<?php 
  shuffle($product_shuffle);

  // Request Method Post
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['top_sale_submit'])) {
      // If the above condition satisfied then we call the addToCart method.
      $cart->addToCart($_POST['user_id'], $_POST['item_id']); // To get the post data $_POST is used.
    }
  }
?>
<section id="top-sale">
      <div class="container py-5">
        <h4>Top Sale</h4>
        <hr>
        <div class="owl-carousel owl-theme">

        <?php foreach($product_shuffle as $item) { ?>
        <!-- Item - 1 -->
          <div class="item py-2 bg-light">
            <div class="product">
              <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? './Images/products/camera/camera.jpg'; ?>" alt="Product image" class="img-fluid"></a>
              <div class="text-center">
                <h6 class="h6"> <?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                <div class="rating text-warning">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                 $<?php echo $item['item_price'] ?? '0' ?>
                </div>
                <form method="post">
                  <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                  <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                  <button type="submit" class="btn btn-warning" name="top_sale_submit">Add to cart</button>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
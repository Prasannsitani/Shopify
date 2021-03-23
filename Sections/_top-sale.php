<?php 
  $product_shuffle = $product->getData();
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
              <a href="#"><img src="<?php echo $item['item_image'] ?? './Images/products/camera/camera.jpg'; ?>" alt="Product image" class="img-fluid"></a>
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
                <button type="submit" class="btn btn-warning">Add to cart</button>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
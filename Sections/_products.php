  <!-- Product Section -->
  <?php 
    $item_id = $_GET['item_id'] ?? 1;
    foreach($product->getData() as $item) : 
      if($item['item_id'] == $item_id) : 
  ?>
  <section id="product" class="py-3">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
            <img src="<?php echo $item['item_image'] ?? './Images/products/Shoe/shoe.jpg'; ?>" alt="Product Image" class="img-fluid">
            <div class="row pt-4">
              <div class="col">
                <button class="btn btn-danger form-control">Proceed to Buy</button>
              </div>
              <div class="col">
                <button class="btn btn-warning form-control">Add to Cart</button>
              </div>
            </div>
            </div>
            <div class="col-sm-6">
              <h5 class="m-0"><?php echo $item['item_name'] ?? 'Unknown'; ?></h5>
              <p class="text-black-50 m-0">by <?php echo $item['item_brand'] ?? 'Brand'?></p>
              <div class="d-flex">
                <div class="rating text-warning">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <a href="#" class="mx-2">2000 ratings | 300+ answered questions</a>
              </div>
              <hr class="m-2">
              <table class="my-3">
                <tr>
                  <td style="padding: 0 10px 0 0;">M.R.P : </td>
                  <td><strike>$<span><?php echo $item['item_price'] ?? '0'; ?></span></strike></td>
                </tr>
                <tr>
                  <td style="padding: 0 10px 0 0;">Discount Price : </td>
                  <td class="text-danger" style="font-size: 20px;">$<?php $update = $item['item_price'] - $item['item_price']/10; $update = $update.'.00'; echo $update; ?><small style="font-size: 14px;" class="text-dark">&nbsp;&nbsp;inclusive of all taxes</small></td>
                </tr>
                <tr>
                  <td>You save : </td>
                  <td class="text-danger" style="font-size: 16px;"><span>$ <?php $save = $item['item_price']/10; $save = $save . '.00'; echo $save; ?></span></td>
                </tr>
              </table>

              <!-- Policy -->
              <div id="policy">
                <div class="d-flex">
                  <div class="return text-center mr-5">
                    <div class="my-2 color-primary">
                      <span style="color: #93329e;" class="fas fa-retweet border p-3 rounded-pill"></span>
                    </div>
                    <a href="#">10 Days <br> Replacement</a>
                  </div>
                  <div class="return text-center mx-5">
                    <div class="my-2 color-primary">
                      <span style="color: #93329e;" class="fas fa-truck border p-3 rounded-pill"></span>
                    </div>
                    <a href="#">Fastest Shopify <br> Delivery</a>
                  </div>
                  <div class="return text-center mr-5">
                    <div class="my-2 color-primary">
                      <span style="color: #93329e;" class="fas fa-check-double border p-3 rounded-pill"></span>
                    </div>
                    <a href="#">1 Year <br> Warranty</a>
                  </div>
                </div>
              </div>
              <hr>
              
              <!-- Color and size section -->
              <div class="row">
                <div class="col-6">
                  <!-- Color Section -->
                  <div class="color my-3">
                    <div class="d-flex justify-content-between">
                      <h6>Color : </h6>
                      <div style="background: goldenrod" class="p-2 rounded-circle"><button class="btn"></button></div>
                      <div class="color-primary-bg p-2 rounded-circle"><button class="btn"></button></div>
                      <div style="background: green;" class="p-2 rounded-circle"><button class="btn"></button></div>
                    </div>
                  </div>
                </div>
                <div class="col-6 my-3">
                  <div class="qty d-flex">
                    <h6>Quantity:</h6>
                    <div class="px-4 d-flex">
                      <button class="qty-up border bg-light" data-id="prod1"><i class="fas fa-angle-up"></i></button>
                      <input type="text" data-id="prod1" class="qty-input border px-2 w-50 bg-light" value="1" placeholder="1" disabled>
                      <button data-id="prod1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Shoe Size -->
              <div class="size my-3">
                <h5>Size : </h5>
                <div class="d-flex justify-content-between w-75">
                  <div class="border p-2 rounded-circle">
                    <button class="btn text-dark">S</button>
                  </div>
                  <div class="border p-2 rounded-circle">
                    <button class="btn text-dark">M</button>
                  </div>
                  <div class="border p-2 rounded-circle">
                    <button class="btn text-dark">L</button>
                  </div>
                  <div class="border p-2 rounded-circle">
                    <button class="btn text-dark">XL</button>
                  </div>
                  <div class="border p-2 rounded-circle">
                    <button class="btn text-dark">XXL</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <div class="col-12">
            <h4>Product Description</h4>
            <hr>
            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat enim explicabo facilis? Laborum dolore asperiores molestiae quibusdam laudantium, rerum consequuntur incidunt nulla esse, expedita fugiat omnis sed placeat? Corporis, dicta! </p>
            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat enim explicabo facilis? Laborum dolore asperiores molestiae quibusdam laudantium, rerum consequuntur incidunt nulla esse, expedita fugiat omnis sed placeat? Corporis, dicta! </p>
          </div>
        </div>
    </section>
    <?php 
      endif;
    endforeach;
    ?>
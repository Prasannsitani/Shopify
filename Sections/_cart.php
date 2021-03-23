 <!-- Shopping Cart Section -->
 <section id="cart" class="py-5">
        <div class="container-fluid w-75">
            <h5 style="font-size: 20px;">Shopping Cart</h5>
            <!-- Shopping Cart Items -->
            <div class="row">
                <div class="col-sm-9">
                    <!-- Item -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="./Images/products/Shoe/shoe.jpg" alt="Cart item image" class="img-fluid" style="height: 120px; object-fit:cover">
                        </div>
                        <div class="col-sm-8">
                            <h5>Nike Revolution 5</h5>
                            <small>by Nike</small>
                            <div class="d-flex">
                                <div class="rating text-warning">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2">2,034 ratings</a>
                            </div>

                            <!-- Quantity Section -->
                            <div class="qty d-flex pt-2">
                                <div class="d-flex w-25">
                                    <button class="qty-up border bg-light" data-id="prod1"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="prod1" class="qty-input border px-2 w-100 bg-light" value="1" placeholder="1" disabled>
                                    <button data-id="prod1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                </div>
                                <button type="submit" class="btn text-danger px-3 border">Delete</button>
                                <button type="submit" class="btn text-danger px-3 border">Save for later</button>
                            </div>

                        </div>
                        <div class="col-sm-2">
                            <div style="font-size: 20px; float: right;" class="text-danger">
                                <span class="product">$250</span>
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="./Images/products/Shoe/shoe4.jpg" alt="Cart item image" class="img-fluid" style="height: 120px; object-fit:cover">
                        </div>
                        <div class="col-sm-8">
                            <h5>Canvas Sneakers</h5>
                            <small>by Canvas</small>
                            <div class="d-flex">
                                <div class="rating text-warning">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2">5,476 ratings</a>
                            </div>

                            <!-- Quantity Section -->
                            <div class="qty d-flex pt-2">
                                <div class="d-flex w-25">
                                    <button class="qty-up border bg-light" data-id="prod2"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="prod2" class="qty-input border px-2 w-100 bg-light" value="1" placeholder="1" disabled>
                                    <button data-id="prod2" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                </div>
                                <button type="submit" class="btn text-danger px-3 border">Delete</button>
                                <button type="submit" class="btn text-danger px-3 border">Save for later</button>
                            </div>

                        </div>
                        <div class="col-sm-2">
                            <div style="font-size: 20px; float: right;" class="text-danger">
                                $<span class="product">100</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <!-- Subtotal Section -->
                    <div class="subtotal text-center mt-2 border">
                        <h6 style="font-size: 14px;" class="text-success py-3"><i class="fas fa-check"></i> You are eligible for FREE delivery</h6>
                        <div class="border-top py-4">
                            <h5>Subtotal(2 item):&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price">250</span></span></h5>
                            <button class="btn btn-warning mt-3" type="submit">Proceed to Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
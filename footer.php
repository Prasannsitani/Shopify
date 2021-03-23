 <!-- Footer Section -->
    <footer id="footer" class="bg-dark text-white pt-5 pb-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12">
            <h4>Shopify</h4>
            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum, ab!</p>
          </div>
          <div class="col-lg-4 col-12">
            <h4>Newsletter</h4>
            <form class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Email *">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="col-lg-2 col-12">
            <h4>Information</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="text-white-50 pb-1">About Us</a>
              <a href="#" class="text-white-50 pb-1">Delivery Indormation</a>
              <a href="#" class="text-white-50 pb-1">Privacy Policy</a>
              <a href="#" class="text-white-50 pb-1">Terms & Conditions</a>
            </div>
          </div>
          <div class="col-lg-2">
            <h4>Account</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="text-white-50 pb-1">My Account</a>
              <a href="#" class="text-white-50 pb-1">Order History</a>
              <a href="#" class="text-white-50 pb-1">Wish List</a>
              <a href="#" class="text-white-50 pb-1">Newsletters</a>
            </div>
          </div>

          <div class="copyright text-center bg-dark text-white pt-5 pb-1">
            <p>
              &copy; Copyrights by <a href="#">Shopify</a> 2021.
            </p>
          </div>
        </div>
      </div>
    </footer>
</main>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <!-- Isotope -->
    <script src="./Javascript/isotope.pkgd.min.js"></script>

    <!-- Owl Carousel Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script>
        $('#top-sale .owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          dots: false,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:5
              }
          }
      })

      // init Isotope
      var $grid = $('.grid').isotope({
        // options
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
      });

      // filter items on button click
      $('.button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
      });

      // New Products Carousel
      $('#new-products .owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:false,
          dots: true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:5
              }
          }
      })

      // Blogs Carousel
      $('#latest-blogs .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              }
          }
      })

    //  Quantity Section by Data-id Part 
    var qtyUp = $('.qty-up');
    var qtyDown = $('.qty-down');

    // Increase value of input tag
    qtyUp.on('click', function(e) {
        let qtyInput = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if(qtyInput.val() < 10 && qtyInput.val() >= 1) {
            qtyInput.val((i, old) => {
                return ++old;
            });    
        }
    });

    // Decrease Value of input tag
    qtyDown.click(function() {
        let qtyInput = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if(qtyInput.val() <= 10 && qtyInput.val() > 1) {
            qtyInput.val((i, old) => {
                return --old;
            });    
        }
    });

    </script>
  </body>
</html>
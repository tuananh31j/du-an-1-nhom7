  <!-- FOOTER -->
  <footer>

      <div class="container footer ">
          <div class="footer-about">
              <h2>HAI LẦN COFFEE CPG</h2>
              <p>Hai Lần coffee là dự án của sinh viên của trường cao đẳng thực hàng FPT polytechnic</p>
              <img src="img/logo 1.svg" alt="">
          </div>

          <div class="footer-address">
              <h2>THÔNG TIN CÔNG TY</h2>
              <p>
                  FPT phố Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội
              </p>
              <p>Số điện thoại: 0123456789</p>
              <p>hailan@gmail.com</p>
          </div>

          <div class="footer-menu">
              <h2>MENU</h2>
              <ul>

                  <li><a href="">TRANG CHỦ</a></li>
                  <li><a href="">SẢN PHẨM</a></li>
                  <li><a href="">GIỚI THIỆU</a></li>
              </ul>

          </div>

          <!-- chăm sóc khách hàng -->
          <div>
              <h2>TỔNG ĐÀI HỖ TRỢ</h2>
              <div class="footer-contact">
                  <div class="footer-contact-icon">
                      <i class="fa-solid fa-phone-volume"></i>
                  </div>
                  <div class="footer-contact-text">
                      <h3>Lỗi sản phẩm: <span>019999999</span></h3>
                      <h3>Mua hàng: <span>018888888</span></h3>
                      <p>hailan@gmail.com</p>
                  </div>
              </div>
              <div class="footer-social">
                  <h3>FOLLOW US</h3>
                  <div>
                      <span><i class="fa-brands fa-facebook-f"></i></span>
                      <span><i class="fa-brands fa-twitter"></i></span>
                      <span><i class="fa-brands fa-youtube"></i></span>
                      <span><i class="fa-brands fa-square-instagram"></i></span>
                  </div>
              </div>
              <div>

              </div>
          </div>
      </div>
  </footer>
  <section class="splide" aria-label="Basic Structure Example">
      <div class="splide__track">
          <ul class="splide__list">
              <li class="splide__slide">
                  <div class="img-box">

                  </div>
              </li>
              <li class="splide__slide">
                  <div class="img-box">

                  </div>
              </li>
              <li class="splide__slide">
                  <div class="img-box">

                  </div>
              </li>
              <li class="splide__slide">
                  <div class="img-box">

                  </div>
              </li>
              <li class="splide__slide">
                  <div class="img-box">

                  </div>
              </li>
          </ul>
      </div>
  </section>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
// Lấy tất cả các phần tử có class "quantity"
const quantityInputs = document.querySelectorAll('.quantity');

// Thêm sự kiện tăng giảm số lượng cho từng phần tử
quantityInputs.forEach(input => {
    input.nextElementSibling.addEventListener('click', function() {
        increaseQuantity(input);
    });

    input.previousElementSibling.addEventListener('click', function() {
        decreaseQuantity(input);
    });
});

// Hàm tăng số lượng
function increaseQuantity(input) {
    let quantity = parseInt(input.value);
    quantity += 1;
    updateQuantity(input, quantity);
}

// Hàm giảm số lượng, đảm bảo số lượng không âm
function decreaseQuantity(input) {
    let quantity = parseInt(input.value);
    if (quantity > 1) {
        quantity -= 1;
        updateQuantity(input, quantity);
    }
}

// Hàm cập nhật số lượng vào thẻ input
function updateQuantity(input, quantity) {
    input.value = quantity;
}


var splide = new Splide('.splide', {
    type: 'loop',
    perPage: 5,
    focus: 'center',
});

splide.mount();
  </script>
  </body>
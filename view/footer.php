</div>
</div>
<div class="full-footer">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <img src="view/images/logo-white.png" width="200px" height="200px">
                    <p class="text-body-secondary">HTQBook - Trang bán sách số 1 Việt Nam</p>
                </div>
                <div class="footer-col-2">
                    <h3>Dịch vụ</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Điều khoản sử dụng</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Chính sách bảo mật thông tin</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Chính sách bảo mật thanh toán</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Hệ thống trung tâm - Nhà sách</a></li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>Chính sách</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Chính sách đổi - trả - hoàn tiền</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Chính sách bảo hành</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Chính sách vận chuyển</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Phương thức thanh toán</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Tài khoản</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Đăng nhập/Tạo mới tài khoản</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Thay đổi địa chỉ</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Chi tiết tài khoản</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Lịch sử mua hàng</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Copyright 2023</p>
        </div>
    </div>


    <!-- ------------------- js for toggle menu-------------- -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }

    </script>
<script>
    let currentIndex = 0;
    const images = document.querySelectorAll('.left-section .poster-img');
    const totalImages = images.length;
    let autoSlideInterval;

    function showImage(index) {
        images.forEach((img, i) => {
            img.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % totalImages;
        showImage(currentIndex);
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        showImage(currentIndex);
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextImage, 5000); // Change the interval as needed (2000ms = 2 seconds)
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Initially show the first image
    showImage(currentIndex);

    // Set up click events for next and previous buttons
    document.querySelector('.left-section').addEventListener('click', nextImage);

    // Start automatic slide
    startAutoSlide();
</script>

</body>

</html>
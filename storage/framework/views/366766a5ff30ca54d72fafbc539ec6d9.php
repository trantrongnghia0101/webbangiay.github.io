<nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="img/logo.jpg" alt="Nike Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="/tintuc">Thông tin mới</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/shop">Nam</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/shop">Nữ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Về chúng tôi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/giohang"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a>
              </li>
            </ul>
            <div class="d-flex">
              <a href="/dangky" class="btn2 btn-primary me-2">Đăng ký</a>
              <a href="/dangnhap" class="btn2 btn-outline-primary">Đăng nhập</a>
            </div>
          </div>
        </div>
        <form action="<?php echo e(route('shop.search')); ?>" method="GET">
          <input type="text" name="query" placeholder="Tìm kiếm sản phẩm">
          <button type="submit">Tìm kiếm</button>
        </form>

    </nav><?php /**PATH C:\laragon\www\wd18313\demo2\resources\views/header.blade.php ENDPATH**/ ?>
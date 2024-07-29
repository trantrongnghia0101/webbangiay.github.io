<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="container">
      <a class="navbar-brand" href="/">
          <img src="<?php echo e(asset('img/logo.jpg')); ?>" alt="Nike Logo" class="navbar-logo">
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
                  <a class="nav-link" href="<?php echo e(route('giohang')); ?>">
                      <i class="fas fa-cart-shopping"></i> Giỏ hàng <?php echo e(count((array) session('cart'))); ?>

                  </a>
              </li>
          </ul>
          <?php if(!Session::get('login')): ?>
              <div class="d-flex">
                  <a href="/dangky" class="btn2 btn-primary me-2">Đăng ký</a>
                  <a href="/dangnhap" class="btn2 btn-outline-primary">Đăng nhập</a>
              </div>
          <?php else: ?>
              <div class="d-flex">
                  <div class="dropdown">
                      <a style="text-decoration: none" class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-user"></i> <?php echo e(Session::get('name')); ?>

                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="<?php echo e(route('dangxuat')); ?>">Đăng xuất</a></li>
                          
                      </ul>
                  </div>
              </div>
          <?php endif; ?>
      </div>
  </div>
  <form action="<?php echo e(route('shop.search')); ?>" method="GET" class="d-flex align-items-center">
      <div class="input-group">
          <input class="form-control" type="search" name="query" placeholder="Tìm kiếm" aria-label="Search">
          <button  class="btn2 btn-primary" type="submit">
              <i class="fas fa-search"></i>
          </button>
      </div>
  </form>
</nav><?php /**PATH C:\laragon\www\wd18313\demo4\resources\views/header.blade.php ENDPATH**/ ?>
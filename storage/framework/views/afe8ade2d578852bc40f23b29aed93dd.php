<?php $__env->startSection('title','Online Shop | Giay'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
  <h1>Shopping Cart</h1>
  <div class="row">
    <div class="col-md-9">
      <div class="card">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/hinh2.webp" alt="Product Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Nike Air Force 1 '07 </h5>
              <p class="card-text">Price: 3.000.000đ</p>
              <button class="btn-xoa btn btn-danger">Xóa <i class="fa-solid fa-trash"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/hinh1.webp" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Nike Air Force 1 '07 </h5>
                <p class="card-text">Price: 3.000.000đ</p>
                <button class="btn-xoa btn btn-danger">Xóa <i class="fa-solid fa-trash"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/hinh3.webp" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Nike Air Force 1 '07 </h5>
                <p class="card-text">Price: 3.000.000đ</p>
                <button class="btn-xoa btn btn-danger">Xóa <i class="fa-solid fa-trash"></i></button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="mt-3">
        <h4>Tổng: 9.000.000đ</h4>
        <h5>Phương thức thanh toán:</h5>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentOption" id="paymentOption1" checked>
          <label class="form-check-label" for="paymentOption1">
            Thẻ ngân hàng
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentOption" id="paymentOption2">
          <label class="form-check-label" for="paymentOption2">
            PayPal
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentOption" id="paymentOption3">
          <label class="form-check-label" for="paymentOption3">
            Tiền mặt
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-3">
    <button class="btn2 btn-primary">Checkout</button>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo2\resources\views/giohang.blade.php ENDPATH**/ ?>
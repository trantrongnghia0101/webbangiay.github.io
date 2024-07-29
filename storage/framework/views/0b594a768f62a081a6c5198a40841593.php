<?php $__env->startSection('title','Online Shop | Giay'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
  <h1>Shopping Cart</h1>
  <?php if(session('success')): ?>
    <div class="alert alert-success mt-3">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
  <div class="row">
    <div class="col-md-9">
      
      

      <?php if(session('cart')): ?>
      <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card">
              <div class="row g-0">
                  <div class="col-md-4">
                      <img src="<?php echo e(asset('uploaded/'.$item['img'])); ?>" alt="Product Image" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title"><?php echo e($item['name']); ?></h5>
                          <p class="card-text"><?php echo e($item['price']); ?></p>
                          <p class="card-text">Số lượng: <?php echo e($item['quantity']); ?></p>
                          <form action="<?php echo e(route('removeFromCart', $id)); ?>" method="GET">
                              <?php echo csrf_field(); ?>
                              <button type="submit" class="btn2 btn-danger">Remove</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
      <div><h2>Bạn chưa có sản phẩm nào trong giỏ hàng. Hãy chọn cho mình 1 sản phẩm <a style="color: blue" href="<?php echo e(route ('shop')); ?>">Shop</a></h2></div>
     
     <?php endif; ?>

      </div>
    <div class="col-md-3">
      <div class="mt-3">
        <?php
            $totalQuantity = 0;
            foreach (session('cart') as $item) {
                $totalQuantity += $item['quantity'];
            }
        ?>
        
        <h5>Số lượng sản phẩm: <?php echo e($totalQuantity); ?></h5> 
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
    <a href="<?php echo e(route('checkout')); ?>"><button class="btn2 btn-primary">Check out</button></a>
    <a href="<?php echo e(route('clearCart')); ?>" class="btn2 btn-danger">Xóa tất cả</a>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo3\resources\views/giohang.blade.php ENDPATH**/ ?>
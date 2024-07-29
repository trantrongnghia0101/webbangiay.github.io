<?php $__env->startSection('title','Online Shop | Giay'); ?>
<?php $__env->startSection('content'); ?>

<div class="container2">
        <h1>Đăng ký</h1>
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
          </div>
          <div class="mb-3">
            <label for="confirm-password" class="form-label">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Xác nhận mật khẩu">
          </div>
          <button type="submit" class="btn2 btn-primary">Đăng ký</button>
        </form>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo2\resources\views/dangky.blade.php ENDPATH**/ ?>
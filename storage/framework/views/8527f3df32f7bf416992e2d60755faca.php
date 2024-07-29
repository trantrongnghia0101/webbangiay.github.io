<?php $__env->startSection('title','Online Shop | Giay'); ?>
<?php $__env->startSection('content'); ?>

<div class="container2 mb-5">
  <h1>Đăng nhập</h1>
  <?php if(session('status')): ?>
  <div class="alert alert-success mt-3">
      <?php echo e(session('status')); ?>

  </div>
<?php endif; ?>
  <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="username" class="form-label">Tên đăng nhập</label>
      <input name="name" type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mật khẩu</label>
      <input name="password" type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
    </div>
    <button type="submit" class="btn2 btn-primary">Đăng nhập</button>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo3\resources\views/dangnhap.blade.php ENDPATH**/ ?>
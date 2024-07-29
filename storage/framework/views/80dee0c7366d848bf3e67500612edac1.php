<?php $__env->startSection('title','Online Shop | Giay'); ?>
<?php $__env->startSection('content'); ?>
<style>
  .pagination .page-link {
    background-color: #fffefe; /* Màu nền */
    color: #030303; /* Màu chữ */
}

.pagination .page-item.active .page-link {
    background-color: #000000; /* Màu nền khi trang hiện tại được chọn */
    color: #ffffff; /* Màu chữ khi trang hiện tại được chọn */
}

.pagination .page-link:hover {
    background-color: #545854; /* Màu nền khi di chuột vào */
    color: #000000; /* Màu chữ khi di chuột vào */
}
</style>
<div class="container">
  <h1>SHOP</h1>
  <section class="row">
    <article class="col-9">
      <?php if(isset($products)): ?>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
            <div class="card-header">
              <img src="<?php echo e(asset('uploaded/'.$item->img)); ?>" alt="" class="img-fluid">
              <div class="overlay">
                <form action="<?php echo e(route('addToCart', $item->id)); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="btn2 btn-primary">Thêm vào giỏ hàng</button>
              </form>
                
              </div>
            </div>
            <a href=" <?php echo e(route('chitiet', $item->id)); ?> " style="text-decoration: none;">
                <div class="card-body">
                  <strong><?php echo e($item->name); ?> </strong><br>
                  <h6 class="text-muted">Men's Shoes</h6>
                  <strong><?php echo e($item->price); ?></strong>₫
                </div>
            </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>

    
      <!-- Thêm các div card khác tương tự -->
    </article>
    
    <aside class="col-3">
      <h2>Shoes(451)</h2>
      <ul class="list-unstyled mt-3">
          
          
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('productByCategory', $item->id)); ?>" class="text-decoration-none link-gray"><strong><?php echo e($item->name); ?></strong> </a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li><a style="text-decoration: none;" href="<?php echo e(route('bestSelling')); ?>"><strong>Đang giảm giá</strong></a></li>
            <li><a style="text-decoration: none;" href="<?php echo e(route('bestView')); ?>"><strong>Bán chạy nhất</strong></a></li>
        
          
        </ul>
      <div class="accordion mt-3" id="sizeAccordion">
        
        
      </div>
      </div>
      
        
      </div>
      
    </aside>
    
  </section>
</div>
<div class="container">
  <div class="pagination-container">
    <nav aria-label="Page navigation example" class="col-lg-6">
      <ul class="pagination">
        
        <li class="page-item">
         
      </li>
      <?php echo e($products->links('pagination::bootstrap-4')); ?>

      <li class="page-item">
          
      </li>
      </ul>
    </nav>
    
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo4\resources\views/shop.blade.php ENDPATH**/ ?>
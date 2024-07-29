<?php $__env->startSection('title','Online Shop | Giay'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <h1>SHOP</h1>
  <section class="row">
    <article class="col-9">
      <?php if(isset($products)): ?>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
            <div class="card-header">
              <img src="<?php echo e(asset('storage/uploaded/'.$item->img)); ?>" alt="" class="img-fluid">
              <div class="overlay">
                <a href="/giohang"><button class="btn btn-primary">Thêm sản phẩm</button></a>
              </div>
            </div>
            <a href=" <?php echo e(route('chitiet', ['id' => $item->id])); ?>" style="text-decoration: none;">
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
            <li><a href="<?php echo e(route('product.categories', $id = $item->id)); ?>" class="text-decoration-none link-gray"><strong><?php echo e($item->name); ?></strong> </a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
          
        </ul>
      <div class="accordion mt-3" id="sizeAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading20">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
              Size
            </button>
          </h2>
          <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#sizeAccordion">
            <div class="accordion-body">
              <div class="row">
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px; background-color: aliceblue;">43</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px; background-color: aliceblue;">42</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px; background-color: aliceblue;">41</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px; background-color: aliceblue;">40</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px; background-color: aliceblue;">39</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px; background-color: aliceblue;">38</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px; background-color: aliceblue;">37</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px; background-color: aliceblue;">36</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">35</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">34</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">33</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">32</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">31</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">30</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">29</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">28</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">27</button>
                </div>
                <div class="col-4 mb-3">
                  <button class=" size-box" style="width: 70px; height: 30px;background-color: aliceblue;">26</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading21">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
              Mức giá
            </button>
          </h2>
          <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#sizeAccordion">
            <div class="accordion-body">
              <div class="form-check">
                <input class="form-check-input border-dark" type="checkbox" value="" id="price1">
                <label class="form-check-label" for="price1">
                  1 triệu - 2 triệu
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input border-dark" type="checkbox" value="" id="price2">
                <label class="form-check-label" for="price2">
                  2 triệu - 3 triệu
                </label>
              </div>
              <!-- Các mức giá khác -->
            </div>
          </div>
        </div>
      
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading22">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
              Dành cho
            </button>
          </h2>
          <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#sizeAccordion">
            <div class="accordion-body">
              <div class="form-check">
                <input class="form-check-input border-dark" type="checkbox" value="" id="gender-male">
                <label class="form-check-label" for="gender-male">
                  Nam
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input border-dark" type="checkbox" value="" id="gender-female">
                <label class="form-check-label" for="gender-female">
                  Nữ
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input border-dark" type="checkbox" value="" id="gender-child">
                <label class="form-check-label" for="gender-child">
                  Trẻ em
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      
        
      </div>
      
    </aside>
  </section>
</div>
<div class="container">
  <div class="pagination-container">
    
    <?php echo e($products->links("pagination.default")); ?>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo2\resources\views/shop.blade.php ENDPATH**/ ?>
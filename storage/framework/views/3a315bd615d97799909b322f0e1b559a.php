<?php $__env->startSection('title','Online Shop | Giay'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <h1>Chi tiết sản phẩm giày</h1> <br>

  <?php if(isset($product)): ?>
  <div class="row">
    <div class="col-lg-6">
        <img src="<?php echo e($product->img); ?>" alt="Ảnh sản phẩm" class="img-fluid">
    </div>
    
    <div class="col-lg-6">
        <h1><?php echo e($product->name); ?></h1> <br>
        <h4><?php echo e($product->price); ?></h4> <br>
        <p>Size: 42</p>
        <a href="/giohang" class="btn2 btn-primary me-lg-5">Mua ngay</a>
        <a href="/giohang" class="btn2 btn-outline-primary">Thêm vào giỏ hàng</a>
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
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading21">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                    Chi tiết sản phẩm
                </button>
              </h2>
              <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#sizeAccordion">
                <div class="accordion-body">
                    <p>Sản phẩm này được thiết kế có trách nhiệm sử dụng các vật liệu tái chế từ chất thải sau sử dụng của người tiêu dùng hoặc từ chất thải sau quá trình sản xuất. Một trong những bước quan trọng nhất trên hành trình chuyển đổi thành carbon và chất thải không còn là việc chọn lựa vật liệu, vì chúng chiếm hơn 70% lượng tác động của bất kỳ sản phẩm nào. Bằng cách tái sử dụng nhựa, sợi và vải hiện có, chúng tôi giảm đáng kể lượng khí thải gây ra. 
                        Mục tiêu của chúng tôi là sử dụng nhiều vật liệu tái chế nhất có thể mà không ảnh hưởng đến hiệu suất, độ bền và phong cách của sản phẩm. </p>
                </div>
              </div>
            </div>
          </div>
    </div>
    
</div>
  <?php endif; ?>

  

</div> <br>
<div class="container">
  <h1>Sản phẩm liên quan</h1>
  <div class="overflow-auto row">
    <div class="d-flex flex-nowrap ">
      <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
          <a href="/chitiet"><div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
            <div class="card-header">
              <img src="img/hinh1.webp" alt="" class="img-fluid">
              <div class="overlay">
                <a href="/giohang"><button class="btn btn-primary">Thêm sản phẩm</button></a>
              </div>
            </div>
            <div class="card-body">
              <strong>Nike Air Force 1 '07 </strong><br>
              <h6 class="text-muted">Men's Shoes</h6>
              <strong>3,239,000</strong>₫
            </div>
          </div></a>
           </div>
      <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
          <a href="/chitiet"><div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
            <div class="card-header">
              <img src="img/hinh2.webp" alt="" class="img-fluid">
              <div class="overlay">
                <button class="btn btn-primary">Thêm sản phẩm</button>
              </div>
            </div>
            <div class="card-body">
              <strong>Nike Air Force 1 '07 </strong><br>
              <h6 class="text-muted">Men's Shoes</h6>
              <strong>3,239,000</strong>₫
            </div>
          </div></a>
           </div>
       <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
          <a href="/chitiet"><div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
            <div class="card-header">
              <img src="img/hinh3.webp" alt="" class="img-fluid">
              <div class="overlay">
                <button class="btn btn-primary">Thêm sản phẩm</button>
              </div>
            </div>
            <div class="card-body">
              <strong>Nike Air Force 1 '07 </strong><br>
              <h6 class="text-muted">Men's Shoes</h6>
              <strong>3,239,000</strong>₫
            </div>
          </div></a>
           </div>
       <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
          <a href="/chitiet"><div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
            <div class="card-header">
              <img src="img/hinh4.webp" alt="" class="img-fluid">
              <div class="overlay">
                <button class="btn btn-primary">Thêm sản phẩm</button>
              </div>
            </div>
            <div class="card-body">
              <strong>Nike Air Force 1 '07 </strong><br>
              <h6 class="text-muted">Men's Shoes</h6>
              <strong>3,239,000</strong>₫
            </div>
          </div></a>
           </div>
       <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
        <a href="/chitiet"><div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
          <div class="card-header">
            <img src="img/hinh5.webp" alt="" class="img-fluid">
            <div class="overlay">
              <button class="btn btn-primary">Thêm sản phẩm</button>
            </div>
          </div>
          <div class="card-body">
            <strong>Nike Air Force 1 '07 </strong><br>
            <h6 class="text-muted">Men's Shoes</h6>
            <strong>3,239,000</strong>₫
          </div>
        </div></a>
         </div>
       </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo2\resources\views/chitiet.blade.php ENDPATH**/ ?>
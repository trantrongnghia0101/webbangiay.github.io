
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Chuyên mục</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Chuyên mục</li>
                  </ol>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                  data-target="#modal-default">
                  Thêm chủ đề
              </button>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                      <!-- /.card-header -->
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Tên danh mục</th>
                                      <th scope="col">Thao tác</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#cate">
                                                <i class="fa-solid fa-pen-to-square"></i> Sửa
                                            </button>
                                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                                Xóa</a>
                                        </td>
                                        
                                    </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <div class="modal fade" id="cate">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h4 class="modal-title">Sửa chủ đề</h4>
                                                  <button type="button" class="close" data-dismiss="modal"
                                                      aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <form action="" method="POST">
                                                  <input type="text" name="id" value="" hidden>
                                                  <div class="modal-body">
                                                      <div class="mb-3">
                                                          <label for="cate-name" class="col-form-label">Tên
                                                              chủ đề:</label>
                                                          <input type="text" class="form-control" name="name"
                                                              placeholder="Tên chủ đề" value="">
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer justify-content-between">
                                                      <button type="button" class="btn btn-secondary"
                                                          data-dismiss="modal">Close</button>
                                                      <button type="submit" class="btn btn-primary"
                                                          name="btn-change">Lưu thay đổi</button>
                                                  </div>
                                              </form>

                                          </div>
                                          <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                  </div>

                              </tbody>
                              <!-- <tfoot>
                  <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên chủ đề</th>
                        <th scope="col">Chế độ</th>
                        <th scope="col">Số lượng câu hỏi</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </tfoot> -->
                          </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Thêm chủ đề</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="" method="POST">
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="topic-name" class="col-form-label">Tên chủ đề:</label>
                      <input type="text" class="form-control" name="name" placeholder="Tên chủ đề">
                  </div>
                  <div class="mb-3">
                      <label for="topic-name" class="col-form-label">Hình ảnh:</label>
                      <input type="text" class="form-control" name="password" placeholder="Hình ảnh">
                  </div>
              </div>
              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="addCate">Thêm</button>
              </div>
          </form>

      </div>
      <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo2\resources\views/admin/danhmuc.blade.php ENDPATH**/ ?>
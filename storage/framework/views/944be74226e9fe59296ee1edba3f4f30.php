
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Thành viên</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Thành viên</li>
                  </ol>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
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
                                      <th scope="col">Tên chủ đề</th>
                                  </tr>
                              </thead>
                              <tbody>
                
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($item->id); ?></td>
                  <td><?php echo e($item->name); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
              <h4 class="modal-title">Thêm thành viên mới</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="" method="POST">
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="topic-name" class="col-form-label">Username:</label>
                      <input type="text" class="form-control" name="username" placeholder="Tên tài khoản">
                  </div>
                  <div class="mb-3">
                      <label for="topic-name" class="col-form-label">Password:</label>
                      <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                  </div>
                  <div class="mb-3">
                      <div class="form-group">
                          <label for="level" class="col-form-label">Chức vụ:</label>
                          <select class="form-control select2" name="level">
                              <option selected value="member">Thành viên</option>
                              <option value="admin">Quản trị viên</option>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </form>

      </div>
      <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo2\resources\views/admin/user.blade.php ENDPATH**/ ?>
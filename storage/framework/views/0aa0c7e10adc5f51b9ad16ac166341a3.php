
<?php $__env->startSection('titlepage', 'Quản lý danh mục'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Quản lý danh mục</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Danh sách danh mục</h4>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td><?php echo e($category->description); ?></td>
                                <td>
                                    <a href="<?php echo e(route('editCategory', $category->id)); ?>">Sửa</a>
                                    -
                                    <a href="<?php echo e(route('deleteCategory', $category->id)); ?>">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h4>Thêm/Sửa danh mục</h4>
                <form action="<?php echo e(isset($category) ? route('updateCategory', $category->id) : route('addCategory')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php if(isset($category)): ?>
                        <?php echo method_field('PUT'); ?>
                    <?php endif; ?>
                    <input type="text" name="name" value="<?php echo e($selectedCategoryName ?? old('name')); ?>" placeholder="Tên danh mục">
                    <input type="submit" value="<?php echo e(isset($category) ? 'Cập nhật' : 'Thêm'); ?>">
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo4\resources\views/admin/categories.blade.php ENDPATH**/ ?>
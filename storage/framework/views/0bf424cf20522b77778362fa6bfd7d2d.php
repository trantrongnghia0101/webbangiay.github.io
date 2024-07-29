
<?php $__env->startSection('titlepage','Danh sách sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
<h1>Danh sách Bills</h1>

    <?php $__currentLoopData = $groupedBills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userBills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2>Đơn hàng: <?php echo e($userBills[0]->user_id); ?></h2>

        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    
                    <th>Tên người nhận</th>
                    <th>Số điện thoại nguời nhận</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Hình ảnh sản phẩm</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $userBills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        
                        <td><?php echo e($bill->billing_name); ?></td>
                        <td><?php echo e($bill->shipping_phone); ?></td>
                        <td><?php echo e($bill->shipping_address); ?></td>
                        <td>
                            <img src="<?php echo e(asset('uploaded/'.$productImages[$bill->product_id])); ?>" alt="Product Image" width="50">
                        </td>
                    </tr>
                   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <h2> Tổng tiền: <?php echo e($bill->total); ?> VND </h2>
            </tbody>
        </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wd18313\demo4\resources\views/admin/bill.blade.php ENDPATH**/ ?>
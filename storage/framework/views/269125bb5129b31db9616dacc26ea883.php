<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
    <script src="https://kit.fontawesome.com/416b6db665.js" crossorigin="anonymous"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
</head>
<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('content'); ?>    
     
</body>  
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html><?php /**PATH C:\laragon\www\wd18313\demo4\resources\views/layout.blade.php ENDPATH**/ ?>
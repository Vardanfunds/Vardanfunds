<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->make('partials.admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- SweetAlert2 (preferred) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Or original SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert@2"></script>
</head>

<body>
    <div class="wrapper">
        <?php echo $__env->make('partials.admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="main-panel">
            <?php echo $__env->make('partials.admin.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="page-wrapper">
			    <div class="page-content">
                    <?php echo $__env->yieldContent('admincontent'); ?>
                </div>
            </div>
        </div>


    </div>
    <?php echo $__env->make('partials.admin.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>

</html>
<?php /**PATH /home/wqq189w694ht/public_html/resources/views/layouts/admin.blade.php ENDPATH**/ ?>
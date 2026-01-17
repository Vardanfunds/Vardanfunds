<?php $__env->startSection('content'); ?>
    <!-- TEAM HEADER -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary"><?php echo e($teamsModel->name); ?></h4>
                </div>
            </div>
        </div>


        <!-- PROFILE SECTION -->
        <div class="container mb-5">
            <div class="row align-items-start">

                <!-- LEFT IMAGE -->
                <div class="col-md-4">
                    <img src="<?php echo e(asset($teamsModel->img)); ?>" style="width:260px; max-width:100%; border-radius:4px;">
                </div>

                <div class="col-md-8">
                    <ul class="profile-list">
                       <?php echo $teamsModel->description; ?>

                    </ul>
                </div>

            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\VardanFunds\resources\views/pages/teamview.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<!-- TEAM HEADER -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    
                    <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-primary">Team</h4>
                    </div>
                </div>
            </div>


<!-- TEAM GRID -->
<div class="container py-5 text-center">

    <div class="row g-4"> <!-- Added gap -->
        <?php if(isset($teamsModel)): ?>
            <?php $__currentLoopData = $teamsModel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="col-6 col-md-4 col-lg-4"> <!-- 3 Columns on Desktop/Tablet -->
                    <div class="team-item">
                        <div class="team-img-wrapper">
                            <a href="<?php echo e(('team/view').'/'.$item['id']); ?>">
                                <img src="<?php echo e(asset($item->img)); ?>" class="img-fluid w-100 team-image" alt="<?php echo e($item['name']); ?>">
                            </a>
                        </div>
                        <div class="mt-3 text-center">
                            <h5 class="team-name mb-0">
                                <a href="<?php echo e(('team/view').'/'.$item['id']); ?>" class="text-dark text-decoration-none"><?php echo e($item['name']); ?></a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\VardanFunds\resources\views/pages/teams.blade.php ENDPATH**/ ?>

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

    <div class="row gy-5">
        <?php if(isset($teamsModel)): ?>
            <?php $__currentLoopData = $teamsModel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <!-- Row 1 -->
                <div class="col-6 col-md-4">
                    <img src="<?php echo e(asset($item->img)); ?>" style="width:210px; height:210px;" alt="Team Image">
                    <div class="text-danger mt-2" style="font-size:13px; font-weight:600;"><a href="<?php echo e(('team/view').'/'.$item['id']); ?>" style="color:black"><?php echo e($item['name']); ?></a></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
       
       
      
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/wqq189w694ht/public_html/resources/views/pages/teams.blade.php ENDPATH**/ ?>
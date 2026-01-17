<?php $__env->startSection('content'); ?>

<!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-primary">Partners & Associates</h4>
                        <div class="row mt-4">
                           
                                 <?php if(isset($newspaper)): ?>
                                    <?php $__currentLoopData = $newspaper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-3 d-flex flex-column align-items-center text-center" style="margin-top: 50px">
                                       
                                            <img src="<?php echo e($item->partner); ?>" style="width:290px; height:180px;" alt="Team Image"/>
                                  
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                           
                        </div>
                        
                     </div>

                </div>
            </div>
        </div>
<!-- About End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\VardanFunds\resources\views/pages/partner.blade.php ENDPATH**/ ?>
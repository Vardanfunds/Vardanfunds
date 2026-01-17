<?php $__env->startSection('content'); ?>

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary">Vardan Venus</h4>
                    <div class="row">

                        
                       <div class="col-lg-12 mt-4">
                                <table class="table table-striped table-bordered"> 
                                    
                                    <tbody>
                                        <?php if(isset($newspaper)): ?>
                                            <?php $__currentLoopData = $newspaper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><a href="<?php echo e(asset($item->file)); ?>" class="text-dark" target="_blank"><?php echo e($item['name']); ?></a></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                         </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- About End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\VardanFunds\resources\views/pages/fundvenus.blade.php ENDPATH**/ ?>
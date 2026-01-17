
<?php $__env->startSection('content'); ?>

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary">Newsletter</h4>
                    <div class="row">

                        <?php if(isset($newspaper)): ?>
                            <?php $__currentLoopData = $newspaper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                <div class="col-lg-3 d-flex flex-column align-items-center text-center" style="margin-top: 50px">
                                    <a href="<?php echo e(asset($item->file)); ?>" class="text-dark" target="_blank">
                                        <img src="<?php echo e($item->img ? asset($item->img) : asset('assets/img/newsletter.png')); ?>"
                                            class="img-fluid mb-2"
                                            style="width:210px; height:210px;"
                                            alt="Team Image"/>
                                    </a>
                                    <h5 class="mt-2">
                                        <a href="<?php echo e(asset($item->file)); ?>" class="text-dark" target="_blank">
                                            <?php echo e($item['name']); ?>

                                        </a>
                                    </h5>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- About End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/wqq189w694ht/public_html/resources/views/pages/newspaper.blade.php ENDPATH**/ ?>
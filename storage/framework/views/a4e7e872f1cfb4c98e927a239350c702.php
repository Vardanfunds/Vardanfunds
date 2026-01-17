<?php $__env->startSection('content'); ?>
<style>
.team-card {
    position: relative;
    width: 210px;
    height: 210px;
    overflow: hidden;
    border-radius: 20px;
}



/* Overlay */
.team-overlay {
    position: absolute;
    inset: 0;
    background: rgba(187, 190, 194, 0.9) ;  /* dark blue overlay */
    color: #41464b;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

    opacity: 0;
    transition: all 0.4s ease;
}

/* Hover effect */
.team-card:hover .team-overlay {
    opacity: 1;
}

/* Text styling */
.team-overlay .designation {
    font-size: 1rem;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin-bottom: 8px;
}

.team-overlay .name {
    font-size: 18px;
    font-weight: 700;
}

</style>
<!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-primary">Portfolio</h4>
                        <div class="row g-4 justify-content-center justify-content-lg-start"> <!-- Mobile: Center, Desktop: Start (Left) -->
                           
                                 <?php if(isset($newspaper)): ?>
                                    <?php $__currentLoopData = $newspaper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div class="team-card mx-auto"> <!-- Center card in column -->
                                                <img src="<?php echo e($item->img); ?>" style="width:100%; height:100%; object-fit:contain;" alt="Portfolio Item"> <!-- Responsive image inside card -->

                                                <div class="team-overlay">
                                                    <p class="designation"><?php echo e($item['name'] ?? ''); ?></p>
                                                </div>
                                            </div>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web Devlopment\VardanFunds\resources\views/pages/portfilo.blade.php ENDPATH**/ ?>
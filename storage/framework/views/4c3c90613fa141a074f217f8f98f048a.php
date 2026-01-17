<?php $__env->startSection('content'); ?>
<div class="header-carousel owl-carousel">
    <?php $__currentLoopData = $silderModel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="header-carousel-item">

            <div class="slider-image">
                <img src="<?php echo e(asset($item->img)); ?>" alt="Slider Image">
            </div>

            <!-- CUSTOM CAPTION (NOT carousel-caption) -->
            <div class="slider-title">
                <h2><?php echo e($item->title); ?></h2>
            </div>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-3 col-xl-3 wow fadeInRight" data-wow-delay="0.3s">
                    <img src="<?php echo e(asset('assets/img/vision.jpg')); ?>" alt="Vision image" style="max-width: 95%; max-height: 75%; !important" class="img-fluid">
                </div>
                <div class="col-lg-9 col-xl-9 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary">Vision</h4>
                    <h5 class="mb-2">Partnering with Indian Entrepreneurs to create the<br/> "Business of Tomorrow"</h5>
                    <p class="mb-2"><br/>Indian entrepreneurs will be drivers of domestic & global economies. Their needs in
                        this journey would not only be limited to capital, but also extend to: Expanding Skills,
                        Capabilities, Processes & Strong Governance.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-item">
                        <div class="pb-5">
                            <h4 class="text-primary">Contact Us</h4>
                            <h5 class="mb-2">Get In Touch With Us</h5>
                            
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary btn-lg-square rounded-circle p-4"><i class="fa fa-home text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Address</h5>
                                <p class="mb-0">3rd Floor,Office No: 312, South Annexe Tower 2, One World Center,
                                    Senapati Bapat Marg, Lower Parel (w),
                                    Mumbai – 400013, India</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                    class="fa fa-phone-alt text-white"></i></div>
                            <div class="ms-4">
                                <h5>Contact No.</h5>
                                <p class="mb-0">+91 22-4964-2959</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-0">
                            <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                    class="fa fa-envelope-open text-white"></i></div>
                            <div class="ms-4">
                                <h5>Email</h5>
                                <p class="mb-0">reporting@vardanfunds.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <form id="contactfrom">

                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name"
                                        required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email"
                                        required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" id="phone" placeholder="Phone" required>
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <select class="form-control" id="txtfundtype" required>
                                        <option value="">Select Fund</option>
                                        <option value="Vardan Ceqube India Investment Fund">Vardan Ceqube India Investment Fund</option>
                                        <option value="Vardan Venus Investment Fund Series 1">Vardan Venus Investment Fund Series 1</option>
                                    </select>
                                    <label for="project">Select Fund</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                    </form>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" id="btncontact">Send Message</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/wqq189w694ht/public_html/resources/views/pages/index.blade.php ENDPATH**/ ?>
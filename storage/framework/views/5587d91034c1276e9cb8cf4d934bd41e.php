<!-- Navbar & Hero Start -->
        <div class="container-fluid sticky-top px-0">
            <div class="position-absolute text-primary" style="left: 0; top: 0; width: 100%; height: 100%;">
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                   <a href="<?php echo e(url('/')); ?>" class="navbar-brand p-0">
    <h1 class="text-primary m-0">
        <img src="<?php echo e(asset('assets/img/logo.png')); ?>" width="100px" alt="Logo">
    </h1>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="fa fa-bars text-white"></span>
</button>

<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">

        <!-- Home -->
        <a href="<?php echo e(url('/')); ?>"
           class="nav-item nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>">
           Home
        </a>

        <!-- Funds Dropdown -->
        <div class="nav-item dropdown <?php echo e(request()->is('our-funds','portfolio') ? 'active' : ''); ?>">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                Funds
            </a>
            <div class="dropdown-menu m-0">
                <a href="<?php echo e(url('our-funds')); ?>"
                   class="dropdown-item <?php echo e(request()->is('our-funds') ? 'active' : ''); ?>">
                   Our Funds
                </a>
                <a href="<?php echo e(url('portfolio')); ?>"
                   class="dropdown-item <?php echo e(request()->is('portfolio') ? 'active' : ''); ?>">
                   Portfolio
                </a>
            </div>
        </div>

        <!-- Our Approach Dropdown -->
        <div class="nav-item dropdown <?php echo e(request()->is('investment-strategy','sector','partner') ? 'active' : ''); ?>">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                Our Approach
            </a>
            <div class="dropdown-menu m-0">
                <a href="<?php echo e(url('investment-strategy')); ?>"
                   class="dropdown-item <?php echo e(request()->is('investment-strategy') ? 'active' : ''); ?>">
                   Investment Strategy
                </a>
                <a href="<?php echo e(url('sector')); ?>"
                   class="dropdown-item <?php echo e(request()->is('sector') ? 'active' : ''); ?>">
                   Sector & Research
                </a>
                <a href="<?php echo e(url('partner')); ?>"
                   class="dropdown-item <?php echo e(request()->is('partner') ? 'active' : ''); ?>">
                   Partners & Associates
                </a>
            </div>
        </div>

        <!-- Team -->
        <a href="<?php echo e(url('team')); ?>"
           class="nav-item nav-link <?php echo e(request()->is('team') ? 'active' : ''); ?>">
           Team
        </a>

        <!-- Newsletter (Standalone) -->
        <a href="<?php echo e(url('newsletter')); ?>"
           class="nav-item nav-link <?php echo e(request()->is('newsletter') ? 'active' : ''); ?>">
           Newsletter
        </a>

        <!-- Statutory Disclosure Dropdown -->
        <div class="nav-item dropdown <?php echo e(request()->is('vardan-ceqube','vardan-venus') ? 'active' : ''); ?>">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                Statutory Disclosure
            </a>
            <div class="dropdown-menu m-0">
                <a href="<?php echo e(url('vardan-ceqube')); ?>"
                   class="dropdown-item <?php echo e(request()->is('vardan-ceqube') ? 'active' : ''); ?>">
                   Vardan Ceqube
                </a>
                <a href="<?php echo e(url('vardan-venus')); ?>"
                   class="dropdown-item <?php echo e(request()->is('vardan-venus') ? 'active' : ''); ?>">
                   Vardan Venus
                </a>
            </div>
        </div>

    </div>
</div>


                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End --><?php /**PATH D:\Web Devlopment\Vardanfunds\resources\views/partials/nav.blade.php ENDPATH**/ ?>
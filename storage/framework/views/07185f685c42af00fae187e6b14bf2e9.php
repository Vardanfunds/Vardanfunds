<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?php echo e(asset('admin/assets/images/logo-icon.png')); ?>" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Vardan</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="<?php echo e(route('admin.index')); ?>">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('users')); ?>">
                <div class="parent-icon"><i class="bx bx-user-plus"></i></div>
                <div class="menu-title">Users</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('silder')); ?>">
                <div class="parent-icon"><i class="bx bx-columns"></i></div>
                <div class="menu-title">Slider</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('addteams')); ?>">
                <div class="parent-icon"><i class="bx bx-user-pin"></i></div>
                <div class="menu-title">Teams</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('addnewletter')); ?>">
                <div class="parent-icon"><i class="bx bx-news"></i></div>
                <div class="menu-title">Newsletter</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('addpartner')); ?>">
                <div class="parent-icon"><i class="bx bx-buildings"></i></div>
                <div class="menu-title">Partner & Associate</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('addportfilo')); ?>">
                <div class="parent-icon"><i class="bx bx-notepad"></i></div>
                <div class="menu-title">Portfilo</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('addfundpdf')); ?>">
                <div class="parent-icon"><i class="bx bx-detail"></i></div>
                <div class="menu-title">Fund PDF</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
<?php /**PATH D:\Web Devlopment\Vardanfunds\resources\views/partials/admin/sidebar.blade.php ENDPATH**/ ?>
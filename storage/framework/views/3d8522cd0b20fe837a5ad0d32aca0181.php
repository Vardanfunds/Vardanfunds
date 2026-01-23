<!-- jQuery (load first - only once) -->
<script src="<?php echo e(asset('admin/assets/js/jquery.min.js')); ?>"></script>

<!-- Bootstrap JS -->
<script src="<?php echo e(asset('admin/assets/js/bootstrap.bundle.min.js')); ?>"></script>

<!--plugins-->
<script src="<?php echo e(asset('admin/assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/plugins/chartjs/js/chart.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/js/index.js')); ?>"></script>

<!--app JS-->
<script src="<?php echo e(asset('admin/assets/js/app.js')); ?>"></script>
<script>
    new PerfectScrollbar(".app-container")
</script>

<!-- Summernote Editor JS (Free Open Source - MIT License) -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.js"></script>
<script>
    $(document).ready(function() {
        if ($('#editor').length) {
            $('#editor').summernote({
                height: 300,
                placeholder: 'Enter description...',
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview', 'help']]
                ]
            });
        }
    });
</script>

<!-- DataTables -->
<script src="<?php echo e(asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')); ?>"></script>

<!-- Base URL for AJAX -->
<script>
    var base_url = '<?php echo config("app.url"); ?>/';
</script>

<!-- Custom Scripts -->
<script src="<?php echo e(asset('admin/assets/js/myscript.js')); ?>"></script><?php /**PATH D:\Web Devlopment\Vardanfunds\resources\views/partials/admin/footer.blade.php ENDPATH**/ ?>
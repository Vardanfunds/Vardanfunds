<!-- Footer Start -->
     <footer class="footer">
        <div class="footer-links">
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ url('/policy') }}">Privacy Policy</a> |
            <a href="{{ url('/disclaimer') }}">Disclaimer</a> |
            <a href="{{ url('/termuse') }}">Terms of Use</a>
        </div>

        <div class="copyright" style="background-color: #ff0000 !important;">
            © Copyright 2020. Vardan Funds. All Rigths Reserved.
        </div>
    </footer>      
<!-- Footer End -->





        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <script>
        var base_url = '<?php echo config("app.url"); ?>';
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

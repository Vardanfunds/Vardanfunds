<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.admin.header')
    <!-- SweetAlert2 (preferred) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Or original SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert@2"></script>
</head>

<body>
    <div class="wrapper">
        @include('partials.admin.sidebar')

        <div class="main-panel">
            @include('partials.admin.nav')
            <div class="page-wrapper">
			    <div class="page-content">
                    @yield('admincontent')
                </div>
            </div>
        </div>


    </div>
    @include('partials.admin.footer')
</body>

</html>

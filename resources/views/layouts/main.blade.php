<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LMS - PCR</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/template/images/favicon.png') }}">
    <link href="{{ asset('assets/template/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/template/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('assets/template/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/template/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/template/css/style.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        {{-- header --}}
        @include('partials.header')

        {{-- sidebar --}}
        @include('partials.sidebar')

        {{-- content --}}
        <div class="content-body">
            @yield('content')
        </div>

        {{-- footer --}}
        @include('partials.footer')

    </div>

    <!-- Required vendors -->
    <script src="{{ asset('assets/template/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('assets/template/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}">
    </script>
    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/template/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/template/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/template/js/dashboard/dashboard-1.js') }}"></script>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker({
                inline: true,
            });
        });
    </script>
    <script src="{{ asset('assets/template/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script>
        (function($) {
            var table = $('#example5').DataTable({
                searching: false,
                paging: true,
                select: false,
                //info: false,         
                lengthChange: false

            });
            $('#example tbody').on('click', 'tr', function() {
                var data = table.row(this).data();

            });
        })(jQuery);
    </script>
</body>

</html>

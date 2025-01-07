<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Quantum | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('admin-assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
    <link href="{{ asset('admin-assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />

    <style>
        .app-loader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.85);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .app-loader.hide {
            display: none;
        }
    </style>
</head>

<body>
    <!-- BEGIN #app -->

    <div id="app" class="app">

        @yield('content')

    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script src="{{ asset('admin-assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('admin-assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/jvectormap-content/world-mill.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/demo/dashboard.demo.js') }}"></script>
    <!-- ================== END page-js ================== -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('load', function() {
                const loader = document.getElementById('loader');
                if (loader) {
                    loader.style.display = 'none';
                }
            });
        });
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-Y3Q0VGQKY3');
    </script>
</body>

</html>

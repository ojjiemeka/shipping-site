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
    <link href="{{ asset('admin-assets/css/admin-tables.css') }}" rel="stylesheet">

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <!-- BEGIN #app -->

    <div id="app" class="app">

        @include('components.error')

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

    <script src="{{ asset('admin-assets/plugins/%40highlightjs/cdn-assets/highlight.min.js ') }}" type="047a2bb72a06c9bc22b2cf97-text/javascript"></script>
    <script src="{{ asset('admin-assets/js/demo/highlightjs.demo.js ') }}" type="047a2bb72a06c9bc22b2cf97-text/javascript"></script>
    <script src="{{ asset('admin-assets/js/demo/ui-modal-notification.demo.js ') }}" type="047a2bb72a06c9bc22b2cf97-text/javascript"></script>
    <script src="{{ asset('admin-assets/js/demo/sidebar-scrollspy.demo.js ') }}" type="047a2bb72a06c9bc22b2cf97-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="047a2bb72a06c9bc22b2cf97-text/javascript"></script>
    <script type="047a2bb72a06c9bc22b2cf97-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
	
		gtag('config', 'G-Y3Q0VGQKY3');
	</script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="047a2bb72a06c9bc22b2cf97-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8fe633b61e0fef29","version":"2024.10.5","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}'
        crossorigin="anonymous"></script>

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

    @push('scripts')
    <script>
    function confirmDelete(event, packageId, trackingCount) {
        event.preventDefault();
        const form = event.target.closest('form');
        
        if (trackingCount > 0) {
            Swal.fire({
                title: 'Confirm Deletion',
                html: `This package has ${trackingCount} tracking records.<br>Delete anyway?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        } else {
            if (confirm('Delete this package permanently?')) {
                form.submit();
            }
        }
        
        return false;
    }
    </script>
    @endpush

    @stack('scripts')
</body>

</html>

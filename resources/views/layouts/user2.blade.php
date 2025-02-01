<!DOCTYPE html>
<html>
    
<!-- Mirrored from jthemes.net/themes/f-html/GO-Courier/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2025 21:02:10 GMT -->
<head>
        <title>GO Home-2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css') }}">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css') }}">
        <!-- Fonts Css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/font-elegant/elegant.css') }}">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel.2/assets/owl.carousel.css') }}">


        <!-- Animate Css -->       
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <!-- Main Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">


        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    </head>
    <body id="home">
        <!-- Preloader simplified -->
        <div id="preloader" class="d-flex justify-content-center align-items-center">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <main class="wrapper">
            @yield('content')
        </main>

        <!-- Componentized Sections -->
        @includeWhen(($includeSearchPopup ?? false), 'components.search-popup')
        @include('components.common-modals')

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong> GO </strong> for getting all details </p>                        

                        <div class="login-form clrbg-before">
                            <form class="login">
                                <div class="form-group"><input type="text" placeholder="Email address" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign in now </button>
                                </div>
                            </form>
                            <a href="#" class="gray-clr"> Forgot Passoword? </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Don't have an account? </a>  
                        <h2 class="title-2"> <a href="#" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

        <!-- Main Jquery JS -->
        <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>        
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js') }}" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="{{ asset('assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="{{ asset('assets/plugins/owl.carousel.2/owl.carousel.min.js') }}" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="{{ asset('assets/js/jquery.sticky.js') }}" type="text/javascript"></script>
        <!-- Wow JS -->
        <script src="{{ asset('assets/plugins/WOW-master/dist/wow.min.js') }}" type="text/javascript"></script>   

        <!-- Slider JS -->        


        <!-- Theme JS -->
        <script src="{{ asset('assets/js/theme.js') }}" type="text/javascript"></script>

    </body>


</html>
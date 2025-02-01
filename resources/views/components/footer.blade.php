<footer>
    <div class="footer-main pad-120 white-clr">
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-3 col-sm-6 footer-widget">
                    <a href="{{ route('home') }}">
                        <img class="logo" alt="Logo" src="{{ asset('assets/img/logo/logo-white.png') }}" />
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <h2 class="title-1 fw-900">Get in Touch</h2>
                    <ul class="social-icons list-inline">
                        @foreach(['facebook', 'twitter', 'linkedin'] as $social)
                            <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".{{ 20 + $loop->index * 5 }}s">
                                <a href="{{ config("social.$social") }}" class="fa fa-{{ $social }}"></a>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="payment-icons list-inline">
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-1.png" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-2.png" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-3.png" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-4.png" /> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>&copy; Copyright {{ date('Y') }}, All rights reserved</p>                            
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /.Footer -->

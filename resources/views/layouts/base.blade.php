<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Petsarakham</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/chblue.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen">
    
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.1.10.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>
    
    @livewireStyles
</head>
<body>
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><i class="fa fa-phone"></i> ++06666666</a></li>
                            <li><i class="fa fa-envelope"></i>
                                    contact@me</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><i class="fa fa-phone"></i>
                                    ++06666666</a></li>
                            <li class="text-right"><i
                                        class="fa fa-map-marker"></i> Mahasarakham , Thailand</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-right">
                            <li><i class="fa fa-comment"></i> Live Chat</li>
                            <li><i class="fa fa-map-marker"></i> Mahasarakham , Thailand</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="/"><img src="{{ asset('images/pet.png')}}" width="200px" height="110px"></a>
                    </li>
                    <li> <a href="{{ route('home.service_categories')}}"><b>Service Categories</b></a></li>
                    
                    <li> <a href="{{ route('service.all')}}"><b>บริการฝากสัตว์เลี้ยง</b></a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{ route('service.all')}}"><b>บริการทั้งหมด</b></a></li>
                            
                        </ul> 
                    </li>
                    
                    <li> <a href="#"><b>แผนที่</b></a></li>
                    <li> <a href="{{ route('show.news')}}"><b>ข่าวสารต่างๆ</b></a></li>

                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype==='ADM')
                            <li class="login-form"> <a href="#" title="Register"><b>My Account : {{ Auth::user()->name }}</b></a>
                                <ul class="drop-down one-column hover-fade">
                                    <li><a href="{{ route('admin.dashboard') }}"><b>Dashboard</b></a></li>
                                    <li><a href="{{ route('users') }}"><b>User Management</b></a></li>
                                    <li><a href="{{ route('all.booking') }}"><b>All Booking</b></a></li>
                                    <li><a href="{{ route('all.service') }}"><b>All Service</b></a></li>
                                    <li><a href="{{ route('admin.all.news') }}"><b>All News</b></a></li>
                                    <li><a href="{{ route('chatify') }}"><b>Message</b></a></li>
                                    <li><a href="{{ route('admin.service_categories') }}"><b>Service Categories</b></a></li>
                                    
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Logout</b></a></li>
                                </ul>
                            </li>

                            @elseif(Auth::user()->utype==='SVP')
                            <li class="login-form"> <a href="#" title="Register"><b>My Account : {{ Auth::user()->name }}</b></a>
                                <ul class="drop-down one-column hover-fade">
                                    <li><a href="{{ route('sprovider.dashboard') }}"><b>Dashboard</b></a></li>
                                    <li><a href="{{ route('profile') }}"><b>Profile</b></a></li>
                                    <li><a href="{{ route('change.password')}}"><b>Change password</b></a></li>
                                    <li><a href="{{ route('news.all') }}"><b>My News</b></a></li>
                                    <li><a href="{{ route('sprovider.services') }}"><b>My Services</b></a></li>
                                    <li><a href="{{ route('chatify') }}"><b>Message</b></a></li>
                                    <li><a href="#"><b>My Orders</b></a>
                                        <ul class="drop-down one-column hover-fade">
                                            <li><a href="{{ route('sprovider.orders_ordered')}}"><b>จองสำเร็จ</b></a></li>
                                            <li><a href="{{ route('sprovider.order')}}"><b>รออนุมัติ</b></a></li>
                                            <li><a href="{{ route('sprovider.orders_cancelled')}}"><b>ยกเลิกแล้ว</b></a></li>   
                                        </ul>
                                    </li>                                
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</b></a></li>
                                </ul>
                            </li>

                            @else
                            <li class="login-form"> <a href="#" title="Register">My Account : {{ Auth::user()->name }}</b></a>
                                <ul class="drop-down one-column hover-fade">
                                    <li><a href="{{ route('customer.dashboard') }}"><b>Dashboard</b></a></li>
                                    <li><a href="{{ route('profile') }}"><b>Profile</b></a></li>
                                    <li><a href="{{ route('change.password')}}"><b>Change password</b></a></li>
                                    <li><a href="{{ route('news.all') }}"><b>All News</b></a></li>
                                    <li> <a href="#"><b>My Booking</b></a>
                                        <ul class="drop-down one-column hover-fade">
                                            <li><a href="{{ route('my_booking_ordered')}}"><b>จองสำเร็จ</b></a></li>
                                            <li><a href="{{ route('my_booking')}}"><b>รออนุมัติ</b></a></li>
                                            <li><a href="{{ route('my_booking_cancelled')}}"><b>ยกเลิกแล้ว</b></a></li>                                   
                                        </ul> 
                                    </li>
                                    <li><a href="{{ route('chatify') }}"><b>Message</b></a></li>
                                    <li><a href="{{ route('all.pet') }}"><b>สัตว์เลี้ยง</b></a></li>         
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Logout</b></a></li>
                                </ul>
                            </li>
                            @endif      
                        <form id="logout-form" method="POST" action= "{{route('logout')}}">
                            @csrf
                        </form>           
                    @else
                    <li class="login-form"> <a href="{{route('register')}}" title="Register"><b>Register</b></a></li>
                    <li class="login-form"> <a href="{{route('login')}}" title="Login"><b>Login</b></a></li>
                    @endif
                @endif
                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>
        {{$slot}}
        <footer id="footer" class="footer-v1">
            <div class="container">
                <div class="row visible-md visible-lg">
                    
                    <div class="col-md-12">
                        <h3>CONTACT US</h3>
                        <ul class="contact_footer">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Mahasarakham , Thailand</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="#">contact@</a>
                            </li>
                            <li>
                                <i class="fa fa-headphones"></i> <a href="#">++6055</a>
                            </li>
                        </ul>
                        <h3 style="margin-top: 10px">FOLLOW US</h3>
                        <ul class="social">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row visible-sm visible-xs">
                    <div class="col-md-6">
                        <h3 class="mlist-h">CONTACT US</h3>
                        <ul class="contact_footer mlist">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Mahasarakham , Thailand</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="#">contact</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <a href="#">++605</a>
                            </li>
                        </ul>
                        <ul class="social mlist-h">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav-footer">
                                <li><a href="#">About Us</a> </li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="text-xs-center crtext">&copy; 2021 By Petsarakham. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>                
            </div>            
        </footer>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/nav/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/totop/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/accordion/accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/maps/gmap3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/carousel/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/filters/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/twitter/jquery.tweet.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flickr/jflickrfeed.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-options/theme-options.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-options/jquery.cookies.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.table2excel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/validation-rule.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
    
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>
    @stack('scripts')
    @livewireScripts
</body>
</html>
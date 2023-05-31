<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6T0MFC9H1N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6T0MFC9H1N');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9DF5FZSP2L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-9DF5FZSP2L');
    </script>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bocacosta Coffee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="keywords" content="coffee, bocacosta, Guatemala, shop">
    <meta name="description" content="Bocacosta Coffee Shop">
    <meta name="author" content="Szystems">
    {{-- <link rel="icon" href="{{ asset('bocacostacoffeeweb/images/logos/favico.ico') }}"> --}}

    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('favicon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('bocacostacoffeeweb/css/style.css') }}">

    {{-- material icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <style>

        /* {{-- whatsapp --}} */
        /* .whatsapp-chat{
            bottom: 10px;
            left: 50px;
            position: fixed;
        } */

        h4:target { padding-top: 100px; }
        option {
            color: black;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('bocacostacoffeeweb/images/logos/logorojo.png') }}" alt="">
            </a>

            <button class="navbar-toggler float-end" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
                @php
                    $categories=DB::table('categories')
                    ->where('status','=','1')
                    ->orderBy('name','asc')
                    ->get();

                    $config=DB::table('configs')->first();
                @endphp
                @if ($config->shopify == 1)
                        <a href="{{ $config->shopify_link }}" class="navbar-toggler float-end" target="_blank">
                            {{-- <img src="{{ asset('assets/imgs/logoshopify.png') }}" class="img-fluid"  alt="""> --}}
                            <span class="material-symbols-outlined">shopping_bag</span>
                        </a>
                @endif


            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active bg-gradient-info':''  }}"><a href="{{ url('/') }}" class="nav-link">{{ __('Home') }}</a></li>

                    <li class="nav-item dropdown {{ Request::is('history') ? 'active bg-gradient-info':''  }}">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ __('About') }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ url('history') }}">{{ __('History') }}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('category','ourcoffee') ? 'active bg-gradient-info':''  }}">
                        <a class="nav-link dropdown-toggle" href="{{ url('category') }}" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ __('Our Coffee') }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item" href="{{ url('category') }}">{{ __('Choose your type of flavor') }}</a>

                            @foreach ($categories as $cat)
                                <a class="dropdown-item" href="{{ url('view-category/'.$cat->slug) }}">
                                    {{ $cat->name }}
                                    @if ($cat->popular == "1")
                                        <span class="badge badge-info">{{ $cat->popular == '1'? 'Popular':''}}</span>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('contact') ? 'active bg-gradient-info':''  }}"><a href="{{ url('contact') }}" class="nav-link">{{ __('Contact') }}</a></li>
                    <li class="nav-item {{ Request::is('wholesale') ? 'active bg-gradient-info':''  }}"><a href="{{ url('wholesale') }}" class="nav-link">{{ __('Wholesale') }}</a></li>
                    <!-- <li class="nav-item"><a href="socialimpact.html" class="nav-link">Social Impact</a></li>
                    <li class="nav-item"><a href="coffeebenefits.html" class="nav-link">Coffee Benefits</a></li> -->
                    <!-- <li class="nav-item"><a href="" class="nav-link">Coffee Quiz</a></li> -->
                    @if ($config->shopify == 1)
                        <li class="nav-item t-10">
                            <a href="{{ $config->shopify_link }}" class="nav-link" target="_blank">
                                {{-- <img src="{{ asset('assets/imgs/logoshopify.png') }}" class="img-fluid"  alt="""> --}}
                                <span class="material-symbols-outlined">shopping_bag</span>
                            </a>
                        </li>
                    @endif
                    @if ($config->amazon == 1)
                        <li class="nav-item t-10">
                            <a href="{{ $config->amazon_link }}" class="nav-link" target="_blank">
                                <img src="{{ asset('assets/imgs/logoamazon.png') }}" class="img-fluid"  alt="">
                            </a>
                        </li>
                    @endif



                    @if ($config->store == 1)
                        @if (Auth::guest())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('Account') }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    <a class="dropdown-item" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                @php
                                    $usuario = Auth::user()->name; $nombre = explode(' ',trim($usuario));
                                @endphp
                                <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ ucwords($nombre[0]) }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown02">
                                    <a class="dropdown-item" href="{{ url('my-account') }}">- {{ __('Account') }}</a>
                                    <a class="dropdown-item" href="{{ url('wishlist') }}">- {{ __('Whishlist') }}</a>
                                    <a class="dropdown-item" href="{{ url('cart') }}">- {{ __('Cart') }}</a>
                                    <a class="dropdown-item" href="{{ url('my-orders') }}">- {{ __('Orders') }}</a>
                                    @if (Auth::user()->role_as == "1")
                                    <a class="dropdown-item" href="{{ url('dashboard') }}">- {{ __('Dashboard') }}</a>
                                    @endif
                                    <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><font color="red">- {{ __('Logout') }}</font>  </a>
                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    @endif
                    @if ($config->store == 1)
                        <li class="nav-item dropdown cart">
                            @if (Auth::guest())
                                <a class="nav-link " href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-shopping_cart"></span>
                                    <span class="bag d-flex justify-content-center align-items-center font-weight-bold text-white"><small>0</small></span>
                                </a>
                            @else
                                <a class="nav-link " href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-shopping_cart"></span>
                                    <span class="bag d-flex justify-content-center align-items-center cart-count-pill font-weight-bold text-white"><small>0</small></span>
                                </a>
                            @endif
                            <div class="dropdown-menu" aria-labelledby="dropdown02">
                                @if (Auth::guest())
                                    <div class="m-2">
                                        <font color="white"><p>Cart is empty.</p></font>
                                        <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Login') }}</a>
                                        <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Register') }}</a>
                                    </div>
                                @else
                                    @php
                                        $totalCart = 0;
                                        $cartitems = DB::table('carts as c')
                                        ->join('products as p','c.prod_id','=','p.id')
                                        ->join('categories as cat','p.cate_id','cat.id')
                                        ->where('c.user_id',Auth::id())
                                        ->select('c.id','c.user_id','c.prod_id as ProdID','c.prod_qty','p.name as Product','p.slug as ProdSlug','p.small_description','p.description','p.original_price','p.selling_price','p.image','p.qty','p.tax','p.status','p.trending','p.discount','p.cate_id','cat.name as Category','cat.slug as CatSlug')
                                        ->orderBy('p.name','asc')
                                        ->get();
                                    @endphp
                                    <div class="m-2">
                                        @if ($cartitems->count() > 0)
                                            @foreach ($cartitems as $prod)
                                                @php
                                                    if ($prod->discount == "1") {
                                                        $price = $prod->selling_price;
                                                    }else {
                                                        $price = $prod->original_price;
                                                    }
                                                @endphp
                                                <div class="product_data">
                                                    <input type="hidden" class="prod_id" value="{{ $prod->ProdID }}">
                                                    <table>
                                                        <tr>
                                                            <th><button class="btn-remove delete-cart-item"><i class="icon-close"></i></button> <a href="{{ url('category/'.$prod->CatSlug.'/'.$prod->ProdSlug) }}">{{ $prod->Product }}</a></th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <font color="white">
                                                                    {{-- <a href="{{ url('category/'.$prod->CatSlug.'/'.$prod->ProdSlug) }}">
                                                                        <img src="{{ asset('assets/uploads/product/'.$prod->image) }}" alt="{{ $prod->Product }}" width="50">
                                                                    </a>
                                                                    <br> --}}
                                                                    {{ $prod->prod_qty }}
                                                                    X
                                                                    @if ($prod->discount == "1")
                                                                    {{ $config->currency_simbol }}{{ number_format($prod->selling_price,2, '.', ',') }} <strike>{{ $config->currency_simbol }}{{ number_format($prod->original_price,2, '.', ',') }}</strike>
                                                                    @else
                                                                    {{ $config->currency_simbol }}{{ number_format($prod->original_price,2, '.', ',') }}
                                                                    @endif
                                                                    =
                                                                    @if (($prod->discount == "1"))
                                                                        @php
                                                                            $subtotal = $prod->prod_qty * $prod->selling_price;
                                                                        @endphp
                                                                        {{ $config->currency_simbol }}{{ number_format($subtotal,2, '.', ',') }}
                                                                    @else
                                                                        @php
                                                                            $subtotal = $prod->prod_qty * $prod->original_price;
                                                                        @endphp
                                                                        {{ $config->currency_simbol }}{{ number_format($subtotal,2, '.', ',') }}
                                                                    @endif
                                                                </font>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <br>
                                                @php
                                                    $totalCart +=  $price * $prod->prod_qty;
                                                @endphp
                                            @endforeach
                                            <div align="right">
                                                <h3><font color="white">Total: {{ $config->currency_simbol }}{{ number_format($totalCart,2, '.', ',') }}</font></h3>
                                            </div>

                                        @else
                                            <p><font color="white">Cart is empty.</font></p>
                                        @endif
                                        <br>
                                        <div align="center">
                                            <a href="{{ url('cart') }}" class="btn btn-primary">View Cart <span class="icon icon-shopping_cart"></span></a>
                                            @php
                                                $outofstock = 0;
                                                foreach($cartitems as $item)
                                                {
                                                    if ($item->qty < $item->prod_qty) {
                                                        $outofstock++;
                                                    }
                                                }
                                            @endphp

                                            @if ($cartitems->count() > 0)
                                                @if ($outofstock > 0)
                                                    <a href="{{ url('checkout') }}" class="btn btn-primary"><span>Checkout</span> <i class="icon-long-arrow-right"></i></a>
                                                    <br>
                                                @else
                                                    <a href="{{ url('checkout') }}" class="btn btn-primary"><span>Checkout</span> <i class="icon-long-arrow-right"></i></a>
                                                @endif

                                            @endif
                                        </div>

                                    </div>

                                @endif
                            </div>
                        </li>
                    @endif
                    {{-- <li class="nav-item cart">
                        @if (Auth::guest())
                            <a href="{{ route('login') }}" class="nav-link">
                                <span class="icon icon-shopping_cart"></span>
                                <span class="bag d-flex justify-content-center align-items-center font-weight-bold text-white"><small>0</small></span>
                            </a>
                        @else
                            <a href="{{ url('cart') }}" class="nav-link">
                                <span class="icon icon-shopping_cart"></span>
                                <span class="bag d-flex justify-content-center align-items-center cart-count-pill font-weight-bold text-white"><small>0</small></span>
                            </a>
                        @endif
                    </li> --}}
                    @if ($config->store == 1)
                        <li class="nav-item cart">
                            @if (Auth::guest())
                                <a href="{{ route('login') }}" class="nav-link">
                                    <span class="material-symbols-outlined">favorite</span>
                                    <span class="bag d-flex justify-content-center align-items-center font-weight-bold text-white"><small>0</small></span>
                                </a>
                            @else
                            <a href="{{ url('wishlist') }}" class="nav-link">
                                <span class="material-symbols-outlined">favorite</span>
                                <span class="bag d-flex justify-content-center align-items-center wish-count font-weight-bold text-white"><small>0</small></span>
                            </a>
                            @endif
                        </li>
                    @endif
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="material-symbols-outlined">language</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{ route('set_language', ['en']) }}"> <img src="{{ asset('assets/imgs/english.png') }}" width="30"> {{ __('English') }}</a>
                            <a class="dropdown-item" href="{{ route('set_language', ['es']) }}"> <img src="{{ asset('assets/imgs/spanish.png') }}" width="30"> {{ __('Spanish') }}</a>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <!-- Modal -->
    <div class="modal fade" id="promoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Advertisement') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <a href="{{ $config->advertisement_link }}" target="_blank">
                        <img src="{{ asset('assets/uploads/advertisements/'.$config->advertisement_image) }}" class="img-fluid"  alt="">
                    </a>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <a href="{{ $config->advertisement_link }}" class="btn btn-primary" target="_blank"><font color="white"><strong>{{ __('Go') }}!</strong></font></a>
                </div>
            </div>
        </div>
    </div>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 col-md-4 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">{{ __('About Us') }}</h2>
                        <p>{{ __('Our coffee flavors are truly unique, but they are exclusively available at Bocacosta Coffee.') }}
                        </p>
                        <p><strong>{{ __('ONLY IN BOCACOSTA COFFEE') }}</strong></p>
                        <ul class="ftco-footer-social list-unstyled float-md-center float-center mt-5">
                            <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> -->
                            <li class="ftco-animate"><a href="https://www.instagram.com/usbocacosta/" target="_blank"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-4 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">{{ __('Links') }}</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}" class="py-2 d-block">{{ __('Home') }}</a></li>
                            <li><a href="{{ url('category') }}" class="py-2 d-block">{{ __('Our Coffee') }}</a></li>
                            <!-- <li><a href="wholesale.html" class="py-2 d-block">Wholesale</a></li> -->
                            <li><a href="{{ url('social-impact') }}" class="py-2 d-block">{{ __('Social Impact') }}</a></li>
                            <li><a href="{{ url('faq') }}" class="py-2 d-block">{{ __("FAQ's") }}</a></li>
                            <!-- <li><a href="coffeebenefits.html" class="py-2 d-block">Coffee Benefits</a></li> -->
                            <li><a href="{{ url('contact') }}" class="py-2 d-block">{{ __('Contact') }}</a></li>
                            <!-- <li><a href="faq.html" class="py-2 d-block">FAQ</a></li> -->
                            @if ($config->store == 0)
                                @if (Auth::guest())
                                    <li>
                                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @else
                                    <li>
                                        @php
                                            $usuario = Auth::user()->name; $nombre = explode(' ',trim($usuario));
                                        @endphp
                                        <h4>{{ ucwords($nombre[0]) }} {{ __('Account') }}</h4>
                                    </li>
                                    <li>
                                        @if (Auth::user()->role_as == "1")
                                            <a href="{{ url('dashboard') }}">- {{ __('Dashboard') }}</a>
                                        @endif
                                    </li>
                                    <li>
                                        <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><font color="red">- {{ __('Logout') }}</font>  </a>
                                        <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">{{ __('Shop') }}</h2>
                        <ul class="list-unstyled">
                            @if ($config->shopify == 1)
                                <li>
                                    <a href="{{ $config->shopify_link }}" class="py-2 d-block">
                                        {{-- <img src="{{ asset('assets/imgs/shopifybtn.png') }}" class="img-fluid"  alt=""> --}}
                                        Shopify
                                    </a>
                                </li>
                            @endif
                            @if ($config->amazon == 1)
                                <li>
                                    <a href="{{ $config->amazon }}" class="py-2 d-block">
                                        {{-- <img src="{{ asset('assets/imgs/amazonbtn.png') }}" class="img-fluid"  alt=""> --}}
                                        Amazon
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <a href="https://szystems.com" target="_blank">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            {{ __('All rights reserved') }}
                        </a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#c70017" />
        </svg></div>

    <!-- Plugins JS whatsapp File -->
    {{-- <div class="whatsapp-chat">
        <a href="https://wa.me/50242153288?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank">
            <img src="{{ asset('assets/imgs/logow.png') }}" alt="whatsapp-chat" height="75px" width="75px">
        </a>
    </div> --}}
    <script src="{{ asset('bocacostacoffeeweb/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/popper.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/aos.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('bocacostacoffeeweb/js/main.js') }}"></script>
    {{-- Custom --}}
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('frontend/css/custom.css') }}"></script> --}}
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>

    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63dae358474251287910fb32/1go7gg4im';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script> --}}
    <!--End of Tawk.to Script-->
    <script>

        var availableTags = [];
        $.ajax({
            method: "GET",
            url: "/product-list",
            success: function (response) {
                //console.log(response);
                startAutoComplete(response);
            }
        });

        function startAutoComplete(availableTags)
        {
            $( "#search_product" ).autocomplete({
                source: availableTags
            });
        }


    </script>

    {{-- modal --}}
    @if ($config->advertisement == 1 and Request::is('/'))
    <script>
        $(document).ready(function(){
            $('#promoModal').modal('show')
        })
    </script>
    @endif

    @if (session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
    @endif
    @yield('scripts')

</body>

</html>

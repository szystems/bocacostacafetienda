@extends('layouts.frontend')
{{-- Trending products --}}
@section('content')
    <section class="home-slider owl-carousel" align="center">

        <div class="slider-item" style="background-image: url({{ asset('bocacostacoffeeweb/images/varias/2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <!-- <span class="subheading">Welcome</span> -->
                        <!-- <h1 class="mb-4">The Best Coffee Testing Experience</h1> -->
                        <img src="{{ asset('bocacostacoffeeweb/images/logos/logoorojo.png') }}" alt="">
                        <!-- <p class="mb-4 mb-md-5">High-altitude coffee, a coffee that in each cup you can feel the high quality and the best flavor you could imagine.</p> -->
                        <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/1.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <!-- <span class="subheading">Welcome</span> -->
                        <!-- <h1 class="mb-4">The Best Coffee Testing Experience</h1> -->
                        <img src="{{ asset('bocacostacoffeeweb/images/logos/logoorojo.png') }}" class="img-fluid" height="325px" width="200px"
                            alt="">
                        <!-- <p class="mb-4 mb-md-5">Our coffee comes from Guatemala, a country recognized for having one of the best and unique coffees in the world.</p> -->
                        <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <!-- <span class="subheading">Welcome</span> -->
                        <!-- <h1 class="mb-4">The Best Coffee Testing Experience</h1> -->
                        <img src="{{ asset('bocacostacoffeeweb/images/logos/logoorojo.png') }}" alt="">
                        <!-- <p class="mb-4 mb-md-5">High-altitude coffee, a coffee that in each cup you can feel the high quality and the best flavor you could imagine.</p> -->
                        <!-- <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p> -->
                    </div>

                </div>
            </div>
        </div>



    </section>

    {{-- <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info">
                    <div class="row no-gutters">
                        <!-- <div class="col-md-12 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>+1(346) 971 2038</h3>
                                <p>Call us we are here to solve your doubts</p>
                            </div>
                        </div> -->
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h2>Portland, Oregon, USA</h2>
                                <!-- <p> Portland Oregon, USA</p> -->
                            </div>
                        </div>
                        <!-- <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon icon-envelope"></span></div>
                            <div class="text">
                                <h3>info@bocacostacoffee.com</h3>
                                <p>We'd love to hear</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="book p-4">
                    <h3>Book a Table</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </section> --}}

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-choices"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('Easy to Order') }}</h3>
                            <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-delivery-truck"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('Fastest Delivery') }}</h3>
                            <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-coffee-bean"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('Quality Coffee') }}</h3>
                            <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="heading-section ftco-animate">
                            <!-- <span class="subheading" align="center">Discover</span> -->
                            <h2 class="mb-4" align="center">{{ __('Buy Our Coffee') }}</h2>
                            <p class="mb-4">{{ __("We select our coffee beans from the luscious region of Guatemala, known for its exceptional coffee varieties our 100% Arabica beans. We carefully choose the beans to ensure they are of the highest quality and unmatched excellence. And flavor in every cup due to the elevated terrain in which they are grown.") }}</p>
                        </div>
                        <div>
                            <h3>{{ __('Choose your type of flavor:') }}</h3>
                        </div>
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @php
                                    $first = 0
                                @endphp
                                @foreach ($categories as $cat)
                                    <a class="nav-link {{ $first == 0 ? 'active' : '' }}" id="v-pills-{{ $cat->id }}-tab" data-toggle="pill" href="#v-pills-{{ $cat->id }}" role="tab" aria-controls="v-pills-{{ $cat->id }}" aria-selected="true">
                                        {{ $cat->name }}
                                        @if ($cat->popular == "1")
                                            <span class="badge badge-info">{{ $cat->popular == '1'? 'Popular':''}}</span>
                                        @endif
                                    </a>
                                    @php
                                        $first = 1;
                                    @endphp
                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="tab-content ftco-animate" id="v-pills-tabContent">
                                @php
                                    $first = 0
                                @endphp
                                @foreach ($categories as $cat)
                                <div class="tab-pane fade show {{ $first == 0 ? 'active' : '' }}" id="v-pills-{{ $cat->id }}" role="tabpanel" aria-labelledby="v-pills-0-tab">
                                    @php
                                        $first = 1;
                                    @endphp
                                    <div class="row">
                                            @php
                                                $products=DB::table('products')
                                                ->where('status','=',1)
                                                ->where('cate_id', '=', $cat->id)
                                                ->orderBy('name','asc')
                                                ->get();

                                                $numProds = $products->count();
                                                if ($numProds > 4) {
                                                    $numProds = 3;
                                                }else {
                                                    $numProds = 12/$numProds;
                                                }
                                            @endphp
                                            @foreach ($products as $prod)
                                            <div class="col-md-{{ $numProds }} product_data">
                                                <input type="hidden" value="{{ $prod->id }}" class="prod_id">
                                                <input type="hidden" value="1" class="qty-input">
                                                <div class="menu-entry">
                                                    <div class="text text-center pt-4">
                                                        <h3><a href="{{ url('category/'.$cat->slug.'/'.$prod->slug) }}">
                                                            {{ $prod->name }}
                                                        </a></h3>

                                                    </div>
                                                    <a href="{{ url('category/'.$cat->slug.'/'.$prod->slug) }}" class="img" style="background-image: url({{ asset('assets/uploads/product/'.$prod->image) }});"></a>
                                                    <div class="text text-center pt-4">
                                                        <p>{{ $prod->description }}</p>

                                                            @if ($prod->discount == "1")
                                                                <p class="price">
                                                                    <span>{{ $config->currency_simbol }}{{ number_format($prod->selling_price,2, '.', ',') }}</span>
                                                                    <span><strike><font color="c70017">{{ $config->currency_simbol }}{{ number_format($prod->original_price,2, '.', ',') }}</font></strike></span>
                                                                    @if ($prod->discount == "1")
                                                                        <span class="badge badge-warning">{{ $prod->discount == '1'? '% Off':''}}</span>
                                                                    @endif
                                                                </p>
                                                            @else
                                                                <p class="price">
                                                                    <span>{{ $config->currency_simbol }}{{ number_format($prod->original_price,2, '.', ',') }}</span>
                                                                    @if ($prod->discount == "1")
                                                                        <span class="badge badge-warning">{{ __('% Off') }}</span>
                                                                    @endif
                                                                </p>
                                                            @endif


                                                        <p>
                                                            @if ($config->store == 1)
                                                                @if (Auth::guest())
                                                                    <div class="product-action-vertical">
                                                                        <a href="{{ route('login') }}" class="btn btn-link addToWishlist btn-outline-white"><span class="material-symbols-outlined">favorite</span></a>
                                                                    </div><!-- End .product-action-vertical -->
                                                                @else
                                                                    <div class="product-action-vertical">
                                                                        <a href="#" class="btn btn-link addToWishlist btn-outline-white"><span class="material-symbols-outlined">favorite</span></a>
                                                                    </div><!-- End .product-action-vertical -->
                                                                @endif
                                                            @endif

                                                            @if ($config->store == 1)
                                                                @if ($prod->qty > 0)
                                                                    @if (Auth::guest())
                                                                        <a href="{{ url('login') }}" class="btn btn-primary btn-outline-primary addToCartBtn">Add to Cart</a>
                                                                    @else
                                                                        <a href="#" class="btn btn-primary btn-outline-primary addToCartBtn">Add to Cart</a>
                                                                    @endif
                                                                @else
                                                                    <div class="product-action">
                                                                        <a href="{{ url('category/'.$prod->category->slug.'/'.$prod->slug) }}" class="btn-product"><i class="icon-search"></i><span> View Details...</span></a>
                                                                    </div><!-- End .product-action -->
                                                                    <a href="{{ url('category/'.$cat->slug.'/'.$prod->slug) }}" class="btn btn-primary btn-outline-primary">View Product...</a>
                                                                @endif

                                                            @endif

                                                            @if ($config->shopify == 1)

                                                                @if ($prod->shopify_link != null)
                                                                    <a href="{{ $prod->shopify_link }}" target="_blank">
                                                                        {{-- <img src="{{ asset('assets/imgs/buynowshopify.png') }}" class="img-fluid"  alt=""> --}}
                                                                        <a href="{{ $prod->shopify_link }}" class="btn btn-primary btn-outline-primary">Buy Now</a>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ $config->shopify_link }}" target="_blank">
                                                                        {{-- <img src="{{ asset('assets/imgs/buynowshopify.png') }}" class="img-fluid"  alt=""> --}}
                                                                        <a href="{{ $config->shopify_link }}" class="btn btn-primary btn-outline-primary">Buy Now</a>
                                                                    </a>
                                                                @endif

                                                            @endif
                                                            @if ($config->amazon == 1)
                                                                @if ($prod->shopify_link != null)
                                                                    <a href="{{ $prod->amazon_link }}" target="_blank">
                                                                        <img src="{{ asset('assets/imgs/buynowamazon.png') }}" class="img-fluid"  alt="">
                                                                    </a>
                                                                @else
                                                                    <a href="{{ $config->amazon_link }}" target="_blank">
                                                                        <img src="{{ asset('assets/imgs/buynowamazon.png') }}" class="img-fluid"  alt="">
                                                                    </a>
                                                                @endif
                                                            @endif
                                                            <br>
                                                            @if ($config->store == 1)
                                                                @if($prod->qty > 0)
                                                                    <span class="badge badge-success">{{ __('In stock') }}</span>
                                                                @else
                                                                    <span class="badge badge-danger">{{ __('Out of stock') }}</span>
                                                                @endif
                                                            @endif
                                                            @if ($prod->trending == "1")
                                                                <span class="badge badge-info">{{ __('Trending') }}</span>
                                                            @endif

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">{{ __('Categories') }}</h2>
            <p>{{ __('Choose one of our categories and buy the best coffee') }}</p>
          </div>
        </div>
        <div class="row">
            @php
                $numCats = $categories->count();
                if ($numCats > 4) {
                    $numCats = 3;
                }else {
                    $numCats = 12/$numCats;
                }
            @endphp
            @foreach ($categories as $cat)
                <div class="col-md-{{ $numCats }}">
                    <div class="menu-entry">
                        <a href="{{ url('view-category/'.$cat->slug) }}" class="img" style="background-image: url({{ asset('assets/uploads/category/'.$cat->image) }});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="{{ url('view-category/'.$cat->slug) }}">{{ $cat->name }}</a></h3>
                            <p>{{ $cat->description }}</p>
                            @if ($cat->popular == "1")
                                <span class="badge badge-info">{{ $cat->popular == '1'? 'Popular':''}}</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    	</div>
    </section> --}}

    {{-- <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/OUR-HISTORY_HW.jpg') }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <h2 class="mb-4">{{ __('Why Bocacosta Coffee?') }}</h2>
                </div>
                <div>
                    <p>{{ __("Bocacosta Coffee stands out as a premium coffee brand thanks to the expertise of our professionals with years of experience. Our competition coffee is unparalleled and cannot be found anywhere else. With Bocacosta, there is simply no comparison.") }}</p>
                    <p>{{ __("Each sip of our coffee reveals special notes unique to our collection. We take great care to guarantee the flavor and quality that our customers have come to expect from us. Choose Bocacosta Coffee for an unparalleled coffee experience that you won't find anywhere else.") }}</p>

                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-counter ftco-bg-dark img" id="section-counter"
        style="background-image: url({{ asset('bocacostacoffeeweb/images/varias/12.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-bean"></span></div>
                                    <strong class="number" data-number="6">0</strong>
                                    <span>{{ __('Coffee Branches') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="icon-globe"></span></div>
                                    <strong class="number">+</strong><strong class="number" data-number="6">0</strong>
                                    <span>{{ __('Countries around the world') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="icon-users"></span></div>
                                    <strong class="number" data-number="10567">0</strong>
                                    <span>{{ __('Happy Customer') }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Staff</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <!-- <span class="subheading">Discover</span> -->
                        <h2 class="mb-4">{{ __('Our Coffee') }}</h2>
                        <p class="mb-4">{{ __("Bocacosta Coffee is an exceptional blend of flavors that will elevate any experience. So whether you want to kickstart your morning routine, enjoy a warm cup with friends and family, impress colleagues at a business meeting, or unwind after a busy day, Bocacosta Coffee is the perfect choice. With each sip, you'll savor the rich aroma and distinctive taste that is the hallmark of this premium coffee brand. No matter the occasion, Bocacosta Coffee is the ideal beverage to enhance your day.") }}</p>
                        <p><a href="{{ url('category') }}" class="btn btn-primary btn-outline-primary px-4 py-3">{{ __('Our Coffee') }}</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="ourcoffee.html" class="img"
                                    style="background-image: url({{ asset('bocacostacoffeeweb/images/menu-14.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="ourcoffee.html" class="img"
                                    style="background-image: url({{ asset('bocacostacoffeeweb/images/menu-3.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="ourcoffee.html" class="img"
                                    style="background-image: url({{ asset('bocacostacoffeeweb/images/menu-4.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="ourcoffee.html" class="img"
                                    style="background-image: url({{ asset('bocacostacoffeeweb/images/menu-5.jpg') }});"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">

                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('bocacostacoffeeweb/images/varias/7.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('bocacostacoffeeweb/images/varias/16.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/3.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('bocacostacoffeeweb/images/pics2/4.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url({{ asset('bocacostacoffeeweb/images/varias/17.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <!-- <span class="subheading">Testimony</span> -->
                    <h2 class="mb-4">{{ __('Customers Says') }}</h2>
                    <p>{{ __('Your opinion is important to us.') }}</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;{{ __('I was looking for coffee from this region, and thanks to the internet, I found Bocacosta, and now I am buying here for my business.') }}&rdquo;</p>
                        </blockquote>
                        <!-- <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('bocacostacoffeeweb/images/person_1.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly
                                <span class="position">Illustrator Designer</span>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;{{ __('The smell when the coffee maker makes the coffee is simply spectacular, and when visitors come to my house, I recommend Bocacosta.') }}&rdquo;</p>
                        </blockquote>
                        <!-- <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('bocacostacoffeeweb/images/person_2.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly
                                <span class="position">Illustrator Designer</span>
                                </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;{{ __('My friend recommended this coffee to me, and I bought a bag. Then I started buying wholesale for my cafeterias, which is selling spectacularly.') }}&rdquo;</p>
                        </blockquote>
                        <!-- <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('bocacostacoffeeweb/images/person_2.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly
                                <span class="position">Illustrator Designer</span>
                                </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;{{ __("I thought I had tasted good coffee, and when I tried it, I knew it was good. I'm happy because I have already found my coffee supplier.") }}&rdquo;</p>
                        </blockquote>
                        <!-- <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{ asset('bocacostacoffeeweb/images/person_3.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Louise Kelly
                                <span class="position">Illustrator Designer</span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection



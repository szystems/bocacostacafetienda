@extends('layouts.frontend')
{{-- Trending products --}}
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <form action="{{ url('place-order') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="col-xl-12 ftco-animate">

                        <h3 class="mb-4 billing-heading">Billing and Shipping Details</h3>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger text-white" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row align-items-end">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Firt Name *</label>
                                    @php
                                        $usuario = Auth::user()->name;
                                        $nombre = explode(' ', trim($usuario));
                                        $names = str_word_count($usuario);
                                    @endphp

                                    <input type="text" name="fname" class="form-control" id="fname"
                                        placeholder="Enter First Name" value="{{ ucwords($nombre[0]) }}">
                                    <span id="fname_error" class="text-danger"></span>
                                    @if ($errors->has('fname'))
                                        <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('fname') }}</font>
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name *</label>
                                    @if ($names > 1)
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Enter Last Name" value="{{ ucwords($nombre[1]) }}">
                                    @else
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Enter Last Name">
                                    @endif
                                    <span id="lname_error" class="text-danger"></span>
                                    @if ($errors->has('lname'))
                                        <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('lname') }}</font>
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Email Address *</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter Email" value="{{ Auth::user()->email }}">
                                    <span id="email_error" class="text-danger"></span>
                                    @if ($errors->has('email'))
                                        <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('email') }}</font>
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone *</label>
                                    <input type="tel" name="phone" class="form-control" id="phone"
                                        placeholder="Enter Phone Number" value="{{ Auth::user()->phone }}">
                                    <span id="phone_error" class="text-danger"></span>
                                    @if ($errors->has('phone'))
                                        <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('phone') }}</font>
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="city">Town / City *</label>
                                    <input type="text" name="city" class="form-control" id="city"
                                        placeholder="Enter Town / City" value="{{ Auth::user()->city }}">
                                    <span id="city_error" class="text-danger"></span>
                                    @if ($errors->has('city'))
                                        <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('city') }}</font>
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="state">State*</label>
                                    <select class="form-control" name="state" id="state">
                                        <option selected value="{{ Auth::user()->state }}">{{ Auth::user()->state }}</option>

                                        <option value="AL Alabama">AL Alabama</option>
                                        <option value="AK Alaska">AK Alaska</option>
                                        <option value="AZ Arizona">AZ Arizona</option>
                                        <option value="AR Arkansas">AR Arkansas</option>
                                        <option value="CA California">CA California</option>
                                        <option value="CO Colorado">CO Colorado</option>
                                        <option value="CT Connecticut">CT Connecticut</option>
                                        <option value="DE Delaware">DE Delaware</option>
                                        <option value="DC District Of Columbia">DC District Of Columbia</option>
                                        <option value="FL Florida">FL Florida</option>
                                        <option value="GA Georgia">GA Georgia</option>
                                        <option value="HI Hawaii">HI Hawaii</option>
                                        <option value="ID Idaho">ID Idaho</option>
                                        <option value="IL Illinois">IL Illinois</option>
                                        <option value="IN Indiana">IN Indiana</option>
                                        <option value="IA Iowa">IA Iowa</option>
                                        <option value="KS Kansas">KS Kansas</option>
                                        <option value="KY Kentucky">KY Kentucky</option>
                                        <option value="LA Louisiana">LA Louisiana</option>
                                        <option value="ME Maine">ME Maine</option>
                                        <option value="MD Maryland">MD Maryland</option>
                                        <option value="MA Massachusetts">MA Massachusetts</option>
                                        <option value="MI Michigan">MI Michigan</option>
                                        <option value="MN Minnesota">MN Minnesota</option>
                                        <option value="MS Mississippi">MS Mississippi</option>
                                        <option value="MO Missouri">MO Missouri</option>
                                        <option value="MT Montana">MT Montana</option>
                                        <option value="NE Nebraska">NE Nebraska</option>
                                        <option value="NV Nevada">NV Nevada</option>
                                        <option value="NH New Hampshire">NH New Hampshire</option>
                                        <option value="NJ New Jersey">NJ New Jersey</option>
                                        <option value="NM New Mexico">NM New Mexico</option>
                                        <option value="NY New York">NY New York</option>
                                        <option value="NC North Carolina">NC North Carolina</option>
                                        <option value="ND North Dakota">ND North Dakota</option>
                                        <option value="OH Ohio">OH Ohio</option>
                                        <option value="OK Oklahoma">OK Oklahoma</option>
                                        <option value="OR Oregon">OR Oregon</option>
                                        <option value="PA Pennsylvania">PA Pennsylvania</option>
                                        <option value="RI Rhode Island">RI Rhode Island</option>
                                        <option value="SC South Carolina">SC South Carolina</option>
                                        <option value="SD South Dakota">SD South Dakota</option>
                                        <option value="TN Tennessee">TN Tennessee</option>
                                        <option value="TX Texas">TX Texas</option>
                                        <option value="UT Utah">UT Utah</option>
                                        <option value="VT Vermont">VT Vermont</option>
                                        <option value="VA Virginia">VA Virginia</option>
                                        <option value="WA Washington">WA Washington</option>
                                        <option value="WV West Virginia">WV West Virginia</option>
                                        <option value="WI Wisconsin">WI Wisconsin</option>
                                        <option value="WY Wyoming">WY Wyoming</option>
                                    </select>
                                    <span id="state_error" class="text-danger"></span>
                                    @if ($errors->has('state'))
                                        <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('state') }}</font>
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="zipcode">Postcode / ZIP *</label>
                                    <input type="text" name="zipcode" class="form-control" id="zipcode"
                                        placeholder="Enter Postcode / Zipcode" value="{{ Auth::user()->zipcode }}">
                                    <span id="zipcode_error" class="text-danger"></span>
                                    @if ($errors->has('zipcode'))
                                        <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('zipcode') }}</font>
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="country">Country *</label>
                                    <input readonly type="text" name="country" class="form-control" id="country" placeholder="Enter Country" value="United States">
                                <span id="country_error" class="text-danger"></span>
                                @if ($errors->has('country'))
                                    <span class="help-block opacity-7">
                                        <strong>
                                            <font color="red">{{ $errors->first('country') }}</font>
                                        </strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address2">Address 1 *</label>
                                    <input type="text" name="address1" class="form-control" id="address1"
                                        placeholder="House number and Street name" value="{{ Auth::user()->address1 }}">
                                    <span id="address1_error" class="text-danger"></span>
                                    @if ($errors->has('address1'))
                                        <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('address1') }}</font>
                                            </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address2">Address 2</label>
                                    <input type="text" name="address2" class="form-control" id="address2"
                                placeholder="House number and Street name (optional)" value="{{ Auth::user()->address2 }}">
                                </div>
                            </div>

                            <div class="w-100"></div>

                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <label for="postcodezip">Order Notes (optional)</label>
                                    <textarea class="form-control" id="note" name="note" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                </div>
                            </div> --}}

                            {{-- <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <div class="radio">
                                        <label class="mr-3"><input type="radio" name="optradio"> Create an Account?
                                        </label>
                                        <label><input type="radio" name="optradio"> Ship to different address</label>
                                    </div>
                                </div>
                            </div> --}}
                        </div>




                        <div class="row mt-5 pt-3 d-flex">
                            <div class="col-md-4 d-flex">
                                <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                    <h3 class="billing-heading mb-4">Cart Order</h3>
                                    @php
                                        $total = 0;
                                    @endphp
                                    <p class="d-flex">
                                        <h5>
                                            <span>Products</span>
                                        </h5>
                                    </p>
                                    @foreach ($cartProducts as $item)
                                        @php
                                            if ($item->products->discount == '1') {
                                                $price = $item->products->selling_price;
                                            } else {
                                                $price = $item->products->original_price;
                                            }
                                        @endphp

                                        <p class="d-flex">
                                            <span><a href="{{ url('category/' . $item->products->category->slug . '/' . $item->products->slug) }}">{{ $item->products->name }}</a></span>
                                            @if ($item->products->discount == '1')
                                                <span>{{ $item->prod_qty }} x
                                                    {{ $config->currency_simbol }}{{ number_format($item->products->selling_price, 2, '.', ',') }}
                                                    <strike>{{ $config->currency_simbol }}{{ number_format($item->products->original_price, 2, '.', ',') }}</strike>
                                                </span>
                                            @else
                                                <span>{{ $item->prod_qty }} x
                                                    {{ $config->currency_simbol }}{{ number_format($item->products->original_price, 2, '.', ',') }}
                                                </span>
                                            @endif
                                        </p>
                                        @php
                                            $total += $price * $item->prod_qty;
                                            $tax_total = 0;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                    <h3 class="billing-heading mb-4">Cart Total</h3>
                                    <p class="d-flex">
                                        <span>Subtotal</span>
                                        <span>{{ $config->currency_simbol }}{{ number_format($total, 2, '.', ',') }}</span>
                                    </p>
                                    {{-- <p class="d-flex">
                                        <span>Delivery</span>
                                        <span>$0.00</span>
                                    </p> --}}
                                    <p class="d-flex">
                                        @if ($config->tax_status == 1)
                                            @php

                                                $tax = $config->tax;
                                                $tax = $tax/100;
                                                $tax_total = $tax * $total;
                                                $total = $total + $tax_total;

                                            @endphp
                                            <span>Tax</span>
                                            <span>{{ $config->currency_simbol }}{{ number_format($tax_total, 2, '.', ',') }}</span>
                                            <input type="hidden" name="tax" value="{{ $tax_total }}" id="tax">
                                        @else
                                            @php
                                                $tax_total =  0;
                                            @endphp
                                            <input type="hidden" name="tax" value="{{ $tax_total }}">
                                        @endif
                                    </p>
                                    <hr>
                                    <p class="d-flex total-price">
                                        <span>Total</span>
                                        <span>{{ $config->currency_simbol }}{{ number_format($total, 2, '.', ',') }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cart-detail ftco-bg-dark p-3 p-md-4">
                                    <h3 class="billing-heading mb-4">Payment Method</h3>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div id="paypal-button-container"></div>
                                        </div>
                                    </div>

                                    <p><button type="submit"class="btn btn-primary py-3 px-4 ">Direct Bank Transfer</button></p>
                                    <input type="hidden" name="payment_mode" value="POD or DBT">
                                </div>
                            </div>
                        </div>
                    </div> <!-- .col-md-12 -->

                </form>
            </div>
        </div>
    </section> <!-- .section -->
@endsection

@section('scripts')
    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script
        src="https://www.paypal.com/sdk/js?client-id=AZcA7N1HfyovVsRKIMRhHPKInRReBAI2qEyto2N8CLRXO-kCcjhpZwYuWpMJ59TRZxxGmwA5uh1Pvfc-&currency=USD">
    </script>
    {{-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script> --}}
    <script>
        paypal.Buttons({
            onClick() {

                var fname = $('#fname').val();
                var lname = $('#lname').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var address1 = $('#address1').val();
                var address2 = $('#address2').val();
                var city = $('#city').val();
                var state = $('#state').val();
                var country = $('#country').val();
                var zipcode = $('#zipcode').val();
                var note = $('#note').val();

                if (fname.length == 0) {
                    fname_error = "First Name is required";
                    $('#fname_error').html('');
                    $('#fname_error').html('<font color="red"><strong>' + fname_error + '</strong></font>');
                } else {
                    fname_error = "";
                    $('#fname_error').html('');
                }

                if (lname.length == 0) {
                    lname_error = "Last Name is required";
                    $('#lname_error').html('');
                    $('#lname_error').html('<font color="red"><strong>' + lname_error + '</strong></font>');
                } else {
                    lname_error = "";
                    $('#lname_error').html('');
                }
                if (email.length == 0) {
                    email_error = "Email is required";
                    $('#email_error').html('');
                    $('#email_error').html('<font color="red"><strong>' + email_error + '</strong></font>');
                } else {
                    email_error = "";
                    $('#email_error').html('');
                }

                if (phone.length == 0) {
                    phone_error = "Phone is required";
                    $('#phone_error').html('');
                    $('#phone_error').html('<font color="red"><strong>' + phone_error + '</strong></font>');
                } else {
                    phone_error = "";
                    $('#phone_error').html('');
                }

                if (address1.length == 0) {
                    address1_error = "Address 1 is required";
                    $('#address1_error').html('');
                    $('#address1_error').html('<font color="red"><strong>' + address1_error + '</strong></font>');
                } else {
                    address1_error = "";
                    $('#address1_error').html('');
                }

                if (city.length == 0) {
                    city_error = "City is required";
                    $('#city_error').html('');
                    $('#city_error').html('<font color="red"><strong>' + city_error + '</strong></font>');
                } else {
                    city_error = "";
                    $('#city_error').html('');
                }

                if (state.length == 0) {
                    state_error = "State is required";
                    $('#state_error').html('');
                    $('#state_error').html('<font color="red"><strong>' + state_error + '</strong></font>');
                } else {
                    state_error = "";
                    $('#state_error').html('');
                }

                if (country.length == 0) {
                    country_error = "Country is required";
                    $('#country_error').html('');
                    $('#country_error').html('<font color="red"><strong>' + country_error + '</strong></font>');
                } else {
                    country_error = "";
                    $('#country_error').html('');
                }

                if (zipcode.length == 0) {
                    zipcode_error = "Zipcode is required";
                    $('#zipcode_error').html('');
                    $('#zipcode_error').html('<font color="red"><strong>' + zipcode_error + '</strong></font>');
                } else {
                    zipcode_error = "";
                    $('#zipcode_error').html('');
                }

                if (fname.length == 0 || lname.length == 0 || email.length == 0 || phone.length == 0 || address1
                    .length == 0 || city.length == 0 || state.length == 0 || country.length == 0 || zipcode
                    .length == 0) {
                    return false;
                }


            },
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ $total }}' // Can also reference a variable or function
                        }
                    }]
                });

            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For dev/demo purposes:
                    const transaction = orderData.purchase_units[0].payments.captures[0];
                    //begin data for app
                    var fname = $('#fname').val();
                    var lname = $('#lname').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var address1 = $('#address1').val();
                    var address2 = $('#address2').val();
                    var city = $('#city').val();
                    var state = $('#state').val();
                    var country = $('#country').val();
                    var zipcode = $('#zipcode').val();
                    var note = $('#note').val();
                    var tax = $('#tax').val();

                    $.ajax({
                        method: "POST",
                        url: "/place-order",
                        data: {
                            'fname' :fname,
                            'lname' :lname,
                            'email' :email,
                            'phone' :phone,
                            'address1' :address1,
                            'address2' :address2,
                            'city' :city,
                            'state' :state,
                            'country' :country,
                            'zipcode' :zipcode,
                            'note' :note,
                            'payment_mode' :"Paid by PayPal",
                            'tax' : tax,
                            'payment_id' : transaction.id,
                        },
                        success: function (response) {
                            alert("Order placed Sussesfully");


                            window.location.href = "/my-orders";
                        }
                    });

                    // When ready to go live, remove the alert and show a success message within this page. For example:
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }
        }).render('#paypal-button-container');
    </script>
@endsection

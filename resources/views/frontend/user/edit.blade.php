@extends('layouts.frontend')
{{-- Edit Account details --}}
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @php
                    $usuario = Auth::user()->name;
                    $nombre = explode(' ', trim($usuario));
                    $names = str_word_count($usuario);
                @endphp

                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>{{ ucwords($nombre[0]) }}'s <a href="{{ url('my-account') }}">{{ __('Dashboard') }}</a></h3>
                            <li><a href="{{ url('my-orders') }}">- {{ __('Orders') }} <!--<span>(12)</span>--></a></li>
                            <li><a href="{{ url('user-details/'.Auth::id()) }}"><font color="c70017">-> {{ __('Account Details') }} <!--<span>(12)</span>--></font></a></li>
                            <p>
                                <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary py-3 px-4 "><span>{{ __('Logout') }}</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ftco-animate">
                    @if (count($errors)>0)
                        <div class="alert alert-danger text-white" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <form action="{{ url('user-update/'.Auth::id()) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-sm-12">
                                <h3>{{ __('Edit Account Details') }}</h3>
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-4">
                                <label>{{ __('Name') }}</label>
                                <input  name="name" type="text" class="form-control" value="{{ $user->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('name') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-4">
                                <label>{{ __('Phone') }}</label>
                                <input name="phone" type="text" class="form-control" value="{{ $user->phone }}">
                                @if ($errors->has('phone'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('phone') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-4">
                                <label>Email</label>
                                <input readonly name="email" type="text" class="form-control" value="{{ $user->email }}">
                                <small class="form-text">{{ __("You can't change email") }}</small>
                                @if ($errors->has('email'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('email') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-3">
                                <label>{{ __('City') }}</label>
                                <input name="city" type="text" class="form-control" value="{{ $user->city }}">
                                @if ($errors->has('city'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('city') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-3">
                                <label>{{ __('State/Province') }}</label>
                                <select class="form-control" name="state" id="state">
                                    <option selected value="{{ $user->state }}">{{ $user->state }}</option>

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
                                @if ($errors->has('state'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('state') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-3">
                                <label>{{ __('Country') }}</label>
                                <input readonly name="country" type="text" class="form-control" value="United States">
                                @if ($errors->has('country'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('country') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-3">
                                <label>{{ __('Zipcode') }}</label>
                                <input name="zipcode" type="text" class="form-control" value="{{ $user->zipcode }}">
                                @if ($errors->has('zipcode'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('zipcode') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-12">
                                <label>{{ __('Address') }} 1</label>
                                <input name="address1" type="text" class="form-control" value="{{ $user->address1 }}">
                                @if ($errors->has('address1'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('address1') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-12">
                                <label>{{ __('Address') }} 2</label>
                                <input name="address2" type="text" class="form-control" value="{{ $user->address2 }}">
                                @if ($errors->has('address2'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('address2') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6">
                                <label>{{ __('Timezone') }}</label>
                                <select class="form-control" name="timezone" id="timezone">
                                    @foreach(Helpers::getTimeZoneList() as $timezone => $timezone_gmt_diff)
                                        <option value="{{ $timezone }}" {{ ( $timezone === old('timezone', $user->timezone)) ? 'selected' : '' }}>
                                            {{ $timezone_gmt_diff }}
                                        </option>
                                    @endforeach
                                </select>
                            </div><!-- End .col-sm-6 -->
                        </div>
                        <p>
                            <button type="submit" class="btn btn-primary py-3 px-4 "><span>{{ __('Save') }}</span></button>
                        </p>
                    </form>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection

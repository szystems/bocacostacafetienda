@extends('layouts.admin')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">people_alt</i>
                    </div>
                    <div class="text-center pt-1">
                        {{-- <p class="text-sm mb-0 text-capitalize">Today's Money</p> --}}
                        <h4 class="mb-0">{{ __('Users') }}</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div>
                <div class="card-body p-3 pt-2">
                    <h4><u>{{ __('Edit') }} {{ __('User') }}</u></h4>
                    @if (count($errors)>0)
                        <div class="alert alert-danger text-white" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <form action="{{ url('update-user/'.$user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="">{{ __('Role') }}</label>
                                <input readonly type="text" class="form-control border px-2 " name="role_as" value="{{ $user->role_as == '0' ?'User' : 'Admin' }}" >
                                @if ($errors->has('role_as'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('role_as') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">{{ __('Name') }}</label>
                                <input type="text" class="form-control border px-2 " name="name" value="{{ $user->name }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('name') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">Email</label>
                                <input readonly type="text" class="form-control border px-2 " name="email" value="{{ $user->email }}" >
                                @if ($errors->has('email'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('email') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">{{ __('Phone') }}</label>
                                <input type="text" class="form-control border px-2 " name="phone" value="{{ $user->phone }}" >
                                @if ($errors->has('phone'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('phone') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">{{ __('Address') }} 1</label>
                                <input type="text" class="form-control border px-2 " name="address1" value="{{ $user->address1 }}" >
                                @if ($errors->has('address1'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('address1') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">{{ __('Address') }} 2</label>
                                <input type="text" class="form-control border px-2 " name="address2" value="{{ $user->address2 }}" >
                                @if ($errors->has('address2'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('address2') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">{{ __('City') }}</label>
                                <input type="text" class="form-control border px-2 " name="city" value="{{ $user->city }}" >
                                @if ($errors->has('city'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('city') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">{{ __('State') }}</label>
                                <select class="form-select px-2" aria-label="Default select example" name="state" id="state">
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
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">{{ __('Country') }}</label>
                                <input type="text" class="form-control border px-2 " name="country" value="{{ $user->country }}" >
                                @if ($errors->has('country'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('country') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">{{ __('Zipcode') }}</label>
                                <input type="text" class="form-control border px-2 " name="zipcode" value="{{ $user->zipcode }}" >
                                @if ($errors->has('zipcode'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('zipcode') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="">{{ __('Timezone') }}</label>
                                <select class="form-select px-2" aria-label="Default select example" name="timezone" id="timezone">
                                    <option selected value="{{ $user->timezone }}">{{ $user->timezone }}</option>
                                    @foreach(Helpers::getTimeZoneList() as $timezone => $timezone_gmt_diff)
                                        <option value="{{ $timezone }}" {{ ( $timezone === old('timezone', $user->timezone)) ? 'selected' : '' }}>
                                            {{ $timezone_gmt_diff }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mb-3" >
                                <button type="submit" class="btn btn-success"><i class="material-icons">save</i> {{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> --}}
                </div>
            </div>
        </div>

    </div>

@endsection

@extends('layouts.admin')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">sell</i>
                    </div>
                    <div class="text-center pt-1">
                        {{-- <p class="text-sm mb-0 text-capitalize">Today's Money</p> --}}
                        <h4 class="mb-0">{{ __('Products') }}</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div>
                <div class="card-body p-3 pt-2">
                    <h4><u>{{ __('Add') }} {{ __('Product') }}</u></h4>
                    @if (count($errors)>0)
                        <div class="alert alert-danger text-white" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="">{{ __('Categoria') }}</label>
                                <select class="form-select px-2" aria-label="Default select example" name="cate_id">
                                    <option value="">{{ __('Select a Category') }}</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('cate_id'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('cate_id') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="">{{ __('Code') }}</label>
                                <input type="text" class="form-control border px-2 " name="code" value="{{ old('code') }}" >
                                @if ($errors->has('code'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('code') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="">{{ __('Name') }}</label>
                                <input type="text" class="form-control border px-2 " name="name" value="{{ old('name') }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('name') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">{{ __('Small Description') }}</label>
                                <textarea name="small_description" cols="30" rows="5" class="form-control border px-2 " >{{ old('small_description') }}</textarea>
                                @if ($errors->has('small_description'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="Red">{{ $errors->first('small_description') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">{{ __('Description') }}</label>
                                <textarea name="description" cols="30" rows="5" class="form-control border px-2 " >{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="Red">{{ $errors->first('description') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="">{{ __('Price') }}</label>
                                <div class="input-group input-group-dynamic mb-4">
                                    <span class="input-group-text">{{ $config->currency_simbol }}</span>
                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="original_price" value="{{ old('original_price') }}">
                                </div>
                                @if ($errors->has('original_price'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('original_price') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="">{{ __('Discount Price') }}</label>
                                <div class="input-group input-group-dynamic mb-4">
                                    <span class="input-group-text">{{ $config->currency_simbol }}</span>
                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="selling_price" value="{{ old('selling_price') }}">
                                </div>
                                @if ($errors->has('selling_price'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('selling_price') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="">Stock</label>
                                <input type="number" class="form-control border px-2 " name="qty" value="{{ old('qty') }}" >
                                @if ($errors->has('qty'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('qty') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">{{ __('Shopify Link') }}</label>
                                <input type="text" class="form-control border px-2 " name="shopify_link" value="{{ old('shopify_link') }}" >
                                @if ($errors->has('shopify_link'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('shopify_link') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">{{ __('Amazon Link') }}</label>
                                <input type="text" class="form-control border px-2 " name="amazon_link" value="{{ old('amazon_link') }}" >
                                @if ($errors->has('amazon_link'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('amazon_link') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="status" >
                                    <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Status') }}</label>
                                </div>
                                <label><font color="orange">{{ __('Enable in store') }}</font></label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="trending" >
                                    <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Trending') }}</label>
                                </div>
                                <label><font color="orange">{{ __('Enable') }} {{ __('Trending') }}</font></label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="discount" >
                                    <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Discount') }}</label>
                                </div>
                                <label><font color="orange">{{ __('Enable') }} {{ __('Discount') }}</font></label>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Image') }}</label>
                                <input type="file" name="image" class="form-control border">
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
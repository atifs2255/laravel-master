@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PRODUCTS MANAGEMENT') }}</div>
                <div class="card-body">
                  <a class="btn btn-success" href="{{url('add-new-product')}}">Add New Product</a>
                  <a class="btn btn-primary" href="{{url('view-products')}}">View Products</a>
                
                </div>
            </div>

        </div>
    </div>

</div>
@endsection

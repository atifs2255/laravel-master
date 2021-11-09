@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center" style="margin-top:50px;">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('MANAGE PRODUCTS') }}
            <a href="{{url('/')}}" class="btn btn-success" style="float:right">Back</a>
            </div>
            <div class="card-body">

              <table class="table table-stripped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @if(!empty($products))
              @foreach($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->product_title}}</td>
              <td>{{$product->description}}</td>
              <td>{{$product->price}}</td>
              <td>
                <a class="btn btn-primary" href="{{url('product/edit/'.$product->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{url('product/delete/'.$product->id)}}">Delete</a>
              </td>

            </tr>
                @endforeach
          @endif

        </tbody>
      </table>
        <a class="btn btn-info" href="{{url('export-products')}}">Export Products</a>
          </div>
        </div>
    </div>
</div>

</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD PRODUCTS') }}
                  <a href="{{url('/')}}" class="btn btn-success" style="float:right">Back</a>
                </div>
                <div class="card-body">
                  <form class="" action="{{url('update-product')}}" method="post">
                    @CSRF

                    <input type="hidden" name="p_id" value="{{$productData->id}}" required readonly>

                    <div class="form-group">
                      <label for="title">Product Title</label>
                      <input class="form-control" type="text" name="product_title" value="{{ $productData->product_title ?? '' }}" required placeholder="Product Title">
                    </div>

                    <div class="form-group">
                      <label for="Description">Product Description</label>
                      <textarea class="form-control" value="{{$productData->description ?? ''}}" name="detail" required>{{$productData->description ?? ''}}</textarea>
                    </div>

                    <div class="form-group">
                      <label for="price">Product Price</label>
                      <input type="number" class="form-control" name="price" value="{{$productData->price ?? ''}}" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success" type="submit" name="button">Update Product</button>
                    </div>


                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

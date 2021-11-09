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
                  <form class="" action="{{url('add-product')}}" method="post">
                    @CSRF
                    <div class="form-group">
                      <label for="title">Product Title</label>
                      <input class="form-control" type="text" name="product_title" value="" required placeholder="Product Title">
                    </div>

                    <div class="form-group">
                      <label for="Description">Product Description</label>
                      <textarea class="form-control" name="detail" required></textarea>
                    </div>

                    <div class="form-group">
                      <label for="price">Product Price</label>
                      <input type="number" class="form-control" name="price" value="" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success" type="submit" name="button">Add Product</button>
                    </div>


                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

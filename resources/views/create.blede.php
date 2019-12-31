@extends('layouts.app')

@section('content')

<p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Add Products
                </button>
                </p>
                <div class="collapse" id="collapseExample">
            
            <form action="{{ route('products.store') }}" method="POST">
            {{ csrf_field() }}
            
                <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input required type="text" name="product_name" class="form-control" id="product_name"  aria-describedby="emailHelp" placeholder="Enter Product Name">
                       
                    </div>

                    <div class="form-group">
                        <label for="product_inventory">Product Quantity</label>
                        <input required type="int" name="product_inventory" class="form-control" id="product_inventory"  aria-describedby="emailHelp" placeholder="Enter Product Quantity">
                    </div>

                    <div class="form-group">
                        <label for="productImage">Upload Product Image</label>
                        <input type="file" class="form-control-file" id="productImage">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
            </div>



@endsection
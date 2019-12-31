@extends('layouts.app')

@section('content')



<div class = "container-fluid">

    <div class = "row">


        <div class = "col-12">


        <!-- Editable table -->
                <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase">Products List</h3>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">

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
                                    <button type="submit" class="btn btn-primary mb-4">Submit</button>
                            
                            </form>
                    </div>

                    <table class="table table-bordered table-responsive-md  text-center">
                    <thead class="thead-dark text-center">
                            <tr>
                            <!-- <th class="text-center">#</th> -->
                            <th class="text-center">Name</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Photo</th>
                            <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        @foreach($products as $product)
                        <tbody>
                            <tr>
                            <!-- <td scope="row" class="text-center">{{$product->id}}</td> -->
                            <td class="pt-3-half" contenteditable="true">{{$product->product_name}}</td>
                            <td class="pt-3-half" contenteditable="true">{{$product->product_inventory}}</td>
                            <td class="pt-3-half" contenteditable="true">{{$product->product_photo}}</td>
                            <td>
                                <form  method="POST" action="{{ route('productsdelete',['id'=>$product->id]) }}">
                                        {{ csrf_field() }}
                                        <!-- <input name='id' style='visibility:hidden' value={{$product->id}}></input> -->
                                         <button type="submit">Delete</button>
                                    </form> 

                                    <a class="nav-link" method="POST" href="{{ url('/create') }}">Edit</a>

                            </td>
                            </tr>
                            @endforeach           
                        </tbody>
          <!-- This is our clonable table line -->
      </table>
 
  </div>
</div>



       

<!-- ------------------------------------------------------------------ -->
            <!-- <div class="shadow mt-3 bg-white rounded">
                <div class="card-fluid p-3">
                
               
                                   
                        <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>

                        @foreach($products as $product)
                        <tbody>
                            <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->product_inventory}}</td>
                            <td>{{$product->product_photo}}</td>
                            <td>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                            </tr>
                            @endforeach           
                        </tbody>
                    </table>
                    </div>
                </div> -->
<!-- --------------------------------------------------------------------------------------------------------- -->


        
        </div>


    </div>

</div>

@endsection

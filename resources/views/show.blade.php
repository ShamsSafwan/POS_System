@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<div class="container">

<div class="row">

<div class="col-12">
@foreach($products as $product)
<div class="shadow mt-3 bg-white rounded">
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-header">
        {{$product->product_name}}
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$product->product_inventory}}</li>
                <li class="list-group-item">{{$product->product_photo}}</li>
            </ul>
        </div>

        </div>

        @endforeach

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>

  @foreach($products as $product)
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$product->product_name}}</td>
      <td>{{$product->product_inventory}}</td>
      <td>{{$product->product_photo}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>

</div>
</div>





@endsection
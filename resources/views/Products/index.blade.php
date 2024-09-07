@extends('layout.layout')
@section('main')
<div class="container">
  <div class="text-right">
   <a href="/products/create" class="btn btn-dark mt-2">New Product</a>
  </div>
      
  <table class="table table-striped mt-2">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Action</th>
      </tr>

    </thead>
    <tbody>
      @foreach ($Products as $product)
      <tr>
        <td>{{$loop->index + 1}}</td>
        <td><a href="/products/{{$product->id}}/show" class="text-dark text-decoration-none"> {{$product->name}}</a></td>
        <td>{{$product->description}}</td>
        <td>
          <img src="products/{{$product->image}}" alt="not found" class="rounded-circle" width="50" height="50">
        </td>
        <td> 
          <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
          <a href="/products/{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
        </td>
        
        
       
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
  


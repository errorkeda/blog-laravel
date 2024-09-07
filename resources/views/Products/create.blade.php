@extends('layout.layout')
@section('main')
<div class="container">
  <h1>New Product</h1>

  <div class="row justify-content-center">
      <div class="col-sm-8">
         <div class="card mt-3 p-3">
         
          <form method="POST" action="/products/store" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name"  value="{{old('name')}}" class="form-control">
                  @if($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name')}}</span>
                  @endif
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            
            <div class="form-group">
                  <label for="">Image</label>
                  <input type="file"  name="image" class="form-control">
                  @if($errors->has('image'))
                  <span class="text-danger">{{$errors->first('image')}}</span>
                  @endif
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
         </div>
         
      </div>
  </div>
</div>
@endsection

     




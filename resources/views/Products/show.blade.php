@extends('layout.layout')
@section('main')
<div class="container">
    <div class="row mt-4">
    <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                <h4 class="card-header">{{$Products->name}}</h4><br>
                <p>{{$Products->description}}</p><br>
                <p><img src="/Products/{{$Products->image}}" alt=""  width="100%"></p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-deck">
            <div class="card bg-primary text-white">
              <div class="card-body text-center">
                <p class="card-text">Some text inside the first card </p><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fuga incidunt ratione impedit voluptatibus ipsam optio sint? Dolor fugiat iure facere, quaerat at enim doloribus suscipit assumenda aperiam possimus quia.
                Magnam vitae fugit optio quia ab velit molestias deserunt, debitis deleniti maiores, consequuntur dolor dignissimos perspiciatis aut iure eaque eius ratione distinctio, commodi molestiae. Eos quos iusto harum veniam doloribus?
                Illo quis esse quo nostrum magni aliquam .</p>
              </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
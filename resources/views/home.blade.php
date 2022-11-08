@extends('template')

@section('title', 'Home')



@section('content')

    <div class="container-fluid" style="padding-top: 80px">
        <div class="container d-flex">
            @foreach($data as $d)
            <div class="card" style="width: 18rem; margin-right: 30px">
                <img src={{$d->image_path}} class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$d->name}}</h5>
                  <p class="card-text">{{$d->desc}}</p>
                  <p class="card-text">{{$d->price}}</p>
                  @if ($d->type == "drink")
                    <span class="badge text-bg-danger">{{$d->type}}</span>
                  @elseif ($d->type == "snack")
                  <span class="badge text-bg-warning">{{$d->type}}</span>
                  @else
                    <span class="badge text-bg-primary">{{$d->type}}</span>
                  @endif
                </div>
              </div>
              @endforeach
        </div>
    </div>

@endsection

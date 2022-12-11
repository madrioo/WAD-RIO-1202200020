@extends('after.header')
@section('content')
 @auth

<!doctype html>
<html lang="en">

<body>

  <!-- List Start -->
  <section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Rio - 1202200020</p>
        <div class="d-flex gap-5">
        <h4><a href=""></a></h4>
        @foreach ($products as $product)
            <div class="col">
                <div class="card justify-center" style="width: 20rem;" align="center">
                    <img src="/image/{{$product->image}}" alt="gambar">  
                        <div class="card-body justify-center">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <div class="d-flex justify-content-center">
                                <div class="row g-1">
                                    <div class="col">
                                        <a href="/product/{{$product-> id}}" class="btn btn-primary">Detail</a>
                                    </div>
                                    <div class="col">
                                        <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
                                            @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- List End -->


@endauth
@endsection
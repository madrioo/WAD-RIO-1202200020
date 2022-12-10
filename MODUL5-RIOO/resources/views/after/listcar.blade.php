@extends('after.header')
@section('content')
 @auth

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>List Car | Rio_1202200020</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="/asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/asset/style/index.css" rel="stylesheet">
</head>

<body>

  <!-- List Start -->
  <section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Rio - 1202200020</p>
        <div class="d-flex gap-5">
        <h4><a href=""></a></h4>
          @foreach($products as $product)
          <tr>
							<td><p>{{$loop->iteration}}</p></td>
							<td><img src="/image/{{$product->image}}" width="100px" height="100px"/></td>
							<td class="cart_description">
								<h4>{{$product->brand}}</h4>
							</td>
							<td class="cart_price">
								<p>{{$product->description}}</p>
							</td>
              <td>
              <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
              <button class="btn btn-primary">Detail</button>
              <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Delete</button>
              </form>
              </td>
						</tr>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- List End -->


@endauth
@endsection
@extends('after.header')
@section('content')
 @auth

<!doctype html> 
<html lang="en">

<body>

  <!-- Form Start -->
  <section id='form'>
    <div class="container">
      <h1 class="add">Tambah Mobil</h1>
      <p class="addparagraf">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="/product" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="name" name="user_id" value="{{ Auth::user()->id }}">

        <label for="nama">Nama Mobil</label>
        <input type="text" id="name" name="name" placeholder="Masukkan Nama Mobil">

        <label for="pemilik">Nama Pemilik</label>
        <input type="text" id="owner" name="owner" placeholder="Masukkan Nama Pemilik">

        <label for="merk">Merk</label>
        <input type="text" id="name" name="merk" placeholder="Masukkan Merk Mobil">

        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="datetime-local" value="{{ now()->setTimezone('T')->format('Y-m-dTh:m') }}" class="form-control" id="name" name="tanggal">

        <label for="name">Deskripsi</label>
        <textarea name="deskripsi" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>

        <label for="inputGroupFile01">Foto</label>
        <input type="file" class="custom-file-input" id="img_path" name="img_path" style="height: 40px;">

        <label for="status">Status Pembayaran</label>
        <span class="d-flex">
          <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
          <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
        </span>
        <button type="submit" class="btn btn-primary" name="btn-simpan" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
  <!-- Form End -->
</body>

</html>

@endauth
@endsection
@extends('after.header')
@section('content')
@auth
   
    <div class="container my-3">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold"></h2>
                <p>{{$product->name}}</p>
                <p>{{$product->description}}</p>
                <img src="/image/{{$product->image}}" alt="" style="width: 18rem;">
            </div>
            <div class="col">
                <form action="/product/{{$product-> id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_id" value="{{$product->user_id}}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama mobil</label>
                            <input type="text" name="nama_mobil" class="form-control" value="{{$product->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama pemilik</label>
                            <input type="text" name="pemilik_mobil" class="form-control" value="{{$product->owner}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Merk</label>
                            <input type="text" name="merk_mobil" class="form-control" value="{{$product->brand}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                            <input type="datetime-local" name="tanggal_beli" class="form-control" value="{{$product->purchase_date}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control">{{$product->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Foto</label>
                            <input type="file" name="img_path" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status</label>
                            <div class="form-check">
                                <input type="radio"  id="option1" name="status" value="Lunas"  {{ ($product->status=="Lunas")? "checked" : "" }} >Lunas</label>
                                <input type="radio" id="option2" name="status" value="Belum Lunas" {{ ($product->status=="Belum Lunas")? "checked" : "" }} >Belum Lunas</label>
                            </div>
                        </div>
                    <input type="submit" class="btn btn-primary" name="edit" id="toastbtn" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</body></html>
@endauth
@endsection
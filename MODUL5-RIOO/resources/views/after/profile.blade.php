@extends('after.header')
@section('content')
      <!-- Navbar Start -->
@auth

    <!-- Form Start -->
    <section id="insert">
      <div class="container insert">
        
        <h1 class="titleInsert" align="center">Profile</h1>
        <form enctype="multipart/form-data" action="{{ route('profile.action') }}" method="POST" class="form-input">
            @csrf
        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
          <div class="mb-3">
            <label for="inputNamaMobil" >Email</label>
            <input disabled
              value="{{ Auth::user()->email }}"
              name="email"

            />
          </div>
          <div class="mb-3">
            <label for="inputNamaPemilik" class="form-label"
              >Nama</label
            >
            <input
              type="text"
              class="form-control"
              value="{{ Auth::user()->nama }}"
              name="name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Nomor handphone</label>
            <input
              type="text"
              class="form-control"
              value="{{ Auth::user()->no_hp }}"
              name="no_hp"
              required
            />
          </div>

          <div class="mb-3">
            <label for="inputTanggalBeli" class="form-label"
              >Kata sandi</label
            >
            <input type="password" class="form-control" name="new_password" placeholder="masukan kata sandi..." required />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Konfirmasi password</label>
           <input type="password" class="form-control" name="new_password_confirmation" placeholder="Ulangi kata sandi..." required />
          </div>
            
          <div class="mb-3 d-flex justify-content-center">
            <button  class="btn btn-primary" name="btn-update" >Update</button>
          </div>
        </form>
      </div>
    </section>
    <!-- End Form -->
    <div class="container">
    <div class="d-flex align-items-center gap-5 mt-5" align="center">
    <img src="<?php echo "../asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:15px;">Rio_1202200020</p>
    </div> 
    </div>
    @endauth
    @endsection
    @guest
    {{ route('logout') }}
    @endguest
    
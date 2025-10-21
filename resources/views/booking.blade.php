@extends('navbar')

@section('content')

<style>
  .card {
  color: white;
  background: #2b435772;
  transition: transform 0.3s ease, box-shadow 0.5s ease;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}
</style>

@guest
<div class="text-center">
  <h2>Anda belum melakukan login</h2>
  <a href="/login" class="btn btn-primary">Login</a>
</div>
@endguest

@auth
<div class="row text-center justify-content-center ">
  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{ asset('storage/images/foto_paket1wisudawan/foto_paket1wisudawan.jpg') }}" class="card-img-top my-3 col-sm-4" alt="...">
    <div class="card-body">
      <h5 class="card-title">Paket 1 Wisudawan</h5>
      <p class="card-text">
        <b>Rp.300.000,00</b>
        <br>1 jam sesi foto
        <br>Wisudawan + keluarga
        <br>20 edit foto
        <br>All Files original + edited via google drive
      </p>
      <a href="/formbooking?paket=Paket 1 Wisudawan" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{ asset('storage/images/foto_paketgrup23wisudawan/foto_paket2-3wisudawan.jpg') }}" class="card-img-top my-3" alt="...">
    <div class="card-body">
      <h5 class="card-title">Paket Grup 2-3 Wisudawan</h5>
      <p class="card-text">
        Price 500k
        <br>1 jam sesi foto
        <br>10 edit foto per orang
        <br>All Files original + edited via google drive
      </p>
      <a href="/formbooking?paket=Paket Grup 2-3 Wisudawan" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{ asset('storage/images/foto_paketgrup45wisudawan/foto_paket4-5wisudawan.jpg') }}" class="card-img-top my-3" alt="...">
    <div class="card-body">
      <h5 class="card-title">Paket Grup 4-5 Wisudawan</h5>
      <p class="card-text">
        Price 600k
        <br>1 jam sesi foto
        <br>10 edit foto per orang
        <br>All Files original + edited via google drive
      </p>
      <a href="/formbooking?paket=Paket Grup 4-5 Wisudawan" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{ asset('storage/images/foto_pasfoto/foto_pasfoto.jpg') }}" class="card-img-top my-3" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pas Foto</h5>
      <p class="card-text">
        Price 30k
        <br>1 file foto edit
        <br>1 file siap cetak ukuran 4x6/3x4
        <br>1 file foto original
        <br>All file via google drive
      </p>
      <a href="/formbooking?paket=Pas Foto" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{ asset('storage/images/foto_maternity/foto_maternity.jpg') }}" class="card-img-top my-3" alt="...">
    <div class="card-body">
      <h5 class="card-title">Maternity</h5>
      <p class="card-text">
        Price 750k
        <br>Indoor/Outdoor
        <br>1 jam sesi foto
        <br>Unlimited photoshoot
        <br>20 foto edit
        <br>2 foto cetak + frame 12R
        <br>All file via google drive
      </p>
      <a href="/formbooking?paket=Maternity" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{ asset('storage/images/foto_photoshoot/foto_photoshoot.jpg') }}" class="card-img-top my-3" alt="...">
    <div class="card-body">
      <h5 class="card-title">Photoshoot</h5>
      <p class="card-text">
        Price 300k/1 jam
        <br>200k/30 menit
        <br>Sewa Studio
        <br>Fotografer
        <br>Unlimited photoshoot
        <br>20 foto edit
        <br>All file via google drive
      </p>
      <a href="/formbooking?paket=Photoshoot" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{ asset('storage/images/foto_personal/foto_personal.jpg') }}" class="card-img-top my-3" alt="...">
    <div class="card-body">
      <h5 class="card-title">Personal</h5>
      <p class="card-text">
        Price 300k/1 jam
        <br>200k/30 menit
        <br>Sewa Studio
        <br>Fotografer
        <br>Unlimited photoshoot
        <br>20 foto edit
        <br>All file via google drive
      </p>
      <a href="/formbooking?paket=Personal" class="btn btn-primary">Booking</a>
    </div>
  </div>

  <div class="card g-col-4 mx-4 my-4" style="width: 16rem;">
    <img src="{{ asset('storage/images/foto_grup/foto_grup.jpg') }}" class="card-img-top my-3" alt="...">
    <div class="card-body">
      <h5 class="card-title">Grup</h5>
      <p class="card-text">
        Price 300k/1 jam
        <br>200k/30 menit
        <br>Sewa Studio
        <br>Fotografer
        <br>Unlimited photoshoot
        <br>20 foto edit
        <br>All file via google drive
      </p>
      <a href="/formbooking?paket=Grup" class="btn btn-primary">Booking</a>
  </div>
</div>
@endauth

@endsection

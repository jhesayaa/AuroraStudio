@extends('navbar')

@section('content')
<style>
    body{
        background-image: url('{{ asset('img/background.jpeg')}}');
        background-size: cover;
    }
</style>

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Booking Aurora Photostudio</h2>
                    <form id="bookingForm" action="/formbooking/kirim" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="name" autocomplete="name" required value="{{ Auth::check() ? Auth::user()->name : '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="nomor_wa" class="form-label">Nomor WA aktif</label>
                            <input type="number" class="form-control" id="nomor_wa" placeholder="Enter phone number" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" autocomplete="email" required value="{{ Auth::check() ? Auth::user()->email : '' }}">
                        </div>

                        <div class="mb-3">
                            <label for="selectPaket" class="form-label">Pilihan Paket</label>
                            <select class="form-select" id="selectPaket" name="paket" required>
                                <option value="">Pilih Paket</option>
                                <option value="Paket 1 Wisudawan">Paket 1 Wisudawan</option>
                                <option value="Paket Grup 2-3 Wisudawan">Paket Grup 2-3 Wisudawan</option>
                                <option value="Paket Grup 4-5 Wisudawan">Paket Grup 4-5 Wisudawan</option>
                                <option value="Pas Foto">Pas Foto</option>
                                <option value="Maternity">Maternity</option>
                                <option value="Photoshoot">Photoshoot</option>
                                <option value="Personal">Personal</option>
                                <option value="Grup">Grup</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="selectTempat" class="form-label">Tempat</label>
                            <select class="form-select" id="selectTempat" onchange="toggleLokasi()" name="tempat" required>
                                <option value="">Pilih Tempat</option>
                                <option value="Indoor">Indoor (Aurora Photostudio)</option>
                                <option value="Outdoor">Outdoor</option>
                            </select>
                        </div>
                        <div class="mb-3" id="lokasiContainer">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="hariTanggal" class="form-label">Hari dan Tanggal</label>
                                <input type="date" class="form-control" id="hariTanggal" name="booking_date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jamBooking" class="form-label">Jam Booking</label>
                                <input type="time" class="form-control" id="jamBooking" name="jam" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleLokasi() {
var selectTempat = document.getElementById('selectTempat');
var lokasiContainer = document.getElementById('lokasiContainer');

if (selectTempat.value === 'Outdoor') {
lokasiContainer.style.display = 'block';
} else {
lokasiContainer.style.display = 'none';
}
}

function validateForm() {
var form = document.getElementById('bookingForm');
var inputs = form.querySelectorAll('input, select');

var isValid = true;

inputs.forEach(function(input) {
if (!input.value) {
isValid = false;
input.classList.add('is-invalid');
} else {
input.classList.remove('is-invalid');
}
});

if (isValid) {
form.submit();
} else {
alert('Ada form yang belum dilengkapi.');
}
}

document.addEventListener('DOMContentLoaded', function() {
toggleLokasi();

const urlParams = new URLSearchParams(window.location.search);
const paket = urlParams.get('paket');

if (paket) {
document.getElementById('selectPaket').value = paket;
}
});
</script>

@endsection

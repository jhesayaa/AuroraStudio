@extends('layout/layout')
@section('navbaradmin')
<div>
    <h1>Add Bookings</h1>
    <div class="container row">
        <form action="/bookings/create/update" method="POST" class="form w-75 border border-secondary rounded-1">
            @csrf
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Nama Customer</label>
                <input type="text" class="border border-secondary rounded-1 col-6" name="name">
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Date</label>
                <input type="date" class="border border-secondary rounded-1 col-6" name="booking_date">
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Paket</label>
                <select class="custom-select border border-secondary rounded-1 col-6" id="inputGroupSelect01" name="paket">
                    <option value="Paket 1 Wisudawan">Paket 1 Wisudawan</option>
                    <option value="Paket grup 2-3 Wisudawan">Paket grup 2-3 Wisudawan</option>
                    <option value="Pas foto">Pas foto</option>
                    <option value="Maternity">Maternity</option>
                    <option value="Photoshoot">Photoshoot</option>
                    <option value="Personal">Personal</option>
                    <option value="Grup">Grup</option>
                </select>
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Phone</label>
                <input type="tel" class="border border-secondary rounded-1 col-6" name="phone">
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Email</label>
                <input type="text" class="border border-secondary rounded-1 col-6" name="email">
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Jam</label>
                <input type="time" class="border border-secondary rounded-1 col-6" name="jam">
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Tempat</label>
                <input type="text" class="border border-secondary rounded-1 col-6" name="tempat">
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Lokasi</label>
                <input type="text" class="border border-secondary rounded-1 col-6" name="lokasi">
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Status</label>
                <select class="custom-select border border-secondary rounded-1 col-6" id="inputGroupSelect01" name="status">
                    <option value="Confirmed">Confirmed</option>
                    <option value="Cancelled">Cancelled</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>
            <div class="box justify-content-evenly">
                <label class="form weight-bold col-5">Payment</label>
                <select class="custom-select border border-secondary rounded-1 col-6" id="inputGroupSelect01" name="payment_status">
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="button" class="btn btn-danger" onclick="history.go(-1);">Back</button>
        </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@endsection

<style>
    form{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .box{
        width: 300px;
        margin-bottom: 20px
    }
</style>
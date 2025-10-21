@extends('layout/layout')
@section('navbaradmin')
<div>
    <h1>Add Image</h1>
    <div class="container row">
        <form action="{{ route('images.edit',$images->id) }}" method="POST" class="form w-75 border border-secondary rounded-1 p-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Paket 1 Wisudawan</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_paket1wisudawan" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-6 col-form-label">Foto Personal</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_personal" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Grup</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_grup" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-6 col-form-label">Foto Maternity</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_maternity" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-6 col-form-label">Foto Photoshoot</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_photoshoot" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Paket Grup 2-3 Wisudawan</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_paketgrup23wisudawan" type="file" required>
                </div>
            </div>
            
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Paket Grup 4-5 Wisudawan</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_paketgrup45wisudawan" type="file" required>
                </div>
            </div>
            
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Pas Foto</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_pasfoto" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 1</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh1" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 2</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh2" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 3</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh3" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 4</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh4" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 5</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh5" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 6</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh6" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 7</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh7" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 8</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh8" type="file" required>
                </div>
            </div>
            <div class="box justify-content-evenly">
                <label class="col-sm-5 col-form-label">Foto Contoh 9</label>
                <div class="col-sm-12">
                    <input class="form-control" name="foto_contoh9" type="file" required>
                </div>
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
        height: 500px;
    }
    form div input{
        height:10px;
    }
    .box{
        width: 300px;
        margin-bottom: 20px
    }
</style>
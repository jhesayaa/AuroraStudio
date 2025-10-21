@extends('layout/layout')
@section('navbaradmin')
<div class="mt-5">
    <div class="col-12 table-responsive">
        <a class="btn btn-secondary" href="{{route('images.create')}}">Create</a>
        <a class="btn btn-warning" href="{{route('images.history')}}">History</a>
        <table id="table" class="table table-striped table-secondary table-hover table-borderless">
            <thead>
                <tr>
                    <th>Personal</th>
                    <th>Grup</th>
                    <th>Maternity</th>
                    <th>Photoshoot</th>
                    <th>1 Wisudawan</th>
                    <th>2-3 Wisudawan</th>
                    <th>4-5 Wisudawan</th>
                    <th>Pas Foto</th>
                    <th>Contoh 1</th>
                    <th>Contoh 2</th>
                    <th>Contoh 3</th>
                    <th>Contoh 4</th>
                    <th>Contoh 5</th>
                    <th>Contoh 6</th>
                    <th>Contoh 7</th>
                    <th>Contoh 8</th>
                    <th>Contoh 9</th>
                    <th>Status Aktif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $img)
                    <tr>
                        <td>
                            @if($img->foto_personal)
                                <img src="{{ asset('storage/images/foto_personal/foto_personal.jpg')}}" alt="Foto Personal" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_grup)
                                <img src="{{ asset('storage/images/foto_grup/foto_grup.jpg')}}" alt="Foto Grup" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_maternity)
                                <img src="{{ asset('storage/images/foto_maternity/foto_maternity.jpg')}}" alt="Foto Maternity" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_photoshoot)
                                <img src="{{ asset('storage/images/foto_photoshoot/foto_photoshoot.jpg')}}" alt="Foto Photoshoot" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_paket1wisudawan)
                                <img src="{{ asset('storage/images/foto_paket1wisudawan/foto_paket1wisudawan.jpg')}}" alt="Foto Paket 1 Wisudawan" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_paketgrup23wisudawan)
                                <img src="{{ asset('storage/images/foto_paketgrup23wisudawan/foto_paket2-3wisudawan.jpg')}}" alt="Foto Paket Grup 2-3 Wisudawan" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_paketgrup45wisudawan)
                                <img src="{{ asset('storage/images/foto_paketgrup45wisudawan/foto_paket4-5wisudawan.jpg')}}" alt="Foto Paket Grup 4-5 Wisudawan" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_pasfoto)
                                <img src="{{ asset('storage/images/foto_pasfoto/foto_pasfoto.jpg')}}" alt="Foto Pasfoto" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh1)
                                <img src="{{ asset('storage/images/foto_contoh1/foto_contoh1.jpg')}}" alt="Foto Contoh 1" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh2)
                                <img src="{{ asset('storage/images/foto_contoh2/foto_contoh2.jpg')}}" alt="Foto Contoh 2" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh3)
                                <img src="{{ asset('storage/images/foto_contoh3/foto_contoh3.jpg')}}" alt="Foto Contoh 3" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh4)
                                <img src="{{ asset('storage/images/foto_contoh4/foto_contoh4.jpg')}}" alt="Foto Contoh 4" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh5)
                                <img src="{{ asset('storage/images/foto_contoh5/foto_contoh5.jpg')}}" alt="Foto Contoh 5" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh6)
                                <img src="{{ asset('storage/images/foto_contoh6/foto_contoh6.jpg')}}" alt="Foto Contoh 6" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh7)
                                <img src="{{ asset('storage/images/foto_contoh7/foto_contoh7.jpg')}}" alt="Foto Contoh 7" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh8)
                                <img src="{{ asset('storage/images/foto_contoh8/foto_contoh8.jpg')}}" alt="Foto Contoh 8" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            @if($img->foto_contoh9)
                                <img src="{{ asset('storage/images/foto_contoh9/foto_contoh9.jpg')}}" alt="Foto Contoh 9" class="img-fluid">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        
                        <td>
                            {{$img->status_aktif}}
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('images.editpage', $img->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                                <a class="btn btn-danger" data-toggle="modal" data-target="#softdel{{ $img->id }}"><i class="fa-solid fa-trash"></i></a>
                                <form action="{{ route('images.softdelete', $img->id) }}" method="POST" class="modal fade" id="softdel{{ $img->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Are you sure you want to delete this item?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
    #table{
        border-radius: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-collapse: separate; 
    }
    .action-buttons{
        display: flex;
        flex-direction: row;
        gap: 10px;
    }
</style>
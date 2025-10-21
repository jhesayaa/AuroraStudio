@extends('layout/layout')
@section('navbaradmin')
<div class="mt-5">
    <div class="col-12 table-responsive">
        <a class="btn btn-danger" href="{{route('images')}}">Back</a>
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
                    <th>Status Aktif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $img)
                <tr>
                    <td>
                        @if($img->foto_personal)
                        <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_personal) }}" alt="Foto Personal" class="img-fluid">
                    @else
                        <p>No image available</p>
                    @endif
                    </td>
                    <td>
                        @if($img->foto_grup)
                        <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_grup) }}" alt="Foto Grup" class="img-fluid">
                    @else
                        <p>No image available</p>
                    @endif
                    </td>
                    <td>
                        @if($img->foto_maternity)
                        <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_maternity) }}" alt="Foto Maternity" class="img-fluid">
                    @else
                        <p>No image available</p>
                    @endif
                    </td>
                    <td>
                        @if($img->foto_photoshoot)
                        <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_photoshoot) }}" alt="Foto Photoshoot" class="img-fluid">
                    @else
                        <p>No image available</p>
                    @endif
                    </td>
                    <td>
                        @if($img->foto_paket1wisudawan)
                            <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_paket1wisudawan) }}" alt="Foto Paket 1" class="img-fluid">
                        @else
                            <p>No image available</p>
                        @endif
                    </td>
                    <td>
                        @if($img->foto_paketgrup23wisudawan)
                            <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_paketgrup23wisudawan) }}" alt="Foto Paket Grup 2-3" class="img-fluid">
                        @else
                            <p>No image available</p>
                        @endif
                    </td>
                    <td>
                        @if($img->foto_paketgrup45wisudawan)
                            <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_paketgrup45wisudawan) }}" alt="Foto Paket Grup 4-5" class="img-fluid">
                        @else
                            <p>No image available</p>
                        @endif
                    </td>
                    <td>
                        @if($img->foto_pasfoto)
                            <img src="data:image/jpeg;base64,{{ base64_encode($img->foto_pasfoto) }}" alt="Pas Foto" class="img-fluid">
                        @else
                            <p>No image available</p>
                        @endif
                    </td>
                    <td>
                        {{$img->status_aktif}}
                    </td>
                        <td>
                            <a href="{{ route('images.restore', $img->id) }}" class="btn btn-primary"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#del{{ $img->id }}"><i class="fa-solid fa-trash"></i></a>
                            <form action="{{ route('images.delete', $img->id) }}" method="POST" class="modal fade" id="del{{ $img->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                @csrf
                                @method('DELETE')
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
</style>
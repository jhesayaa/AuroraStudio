@extends('layout/layout')
@section('navbaradmin')
<div class="mt-5">
    <div class="col-12 table-responsive">
        <a class="btn btn-secondary" href="{{route('photography_sessions.create')}}">Create</a>
        <a class="btn btn-warning" href="{{route('photography_sessions.history')}}">History</a>
        <table id="table" class="table table-striped table-secondary table-hover table-borderless">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Photographer</th>
                    <th>Status_aktif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photography_sessions as $pho)
                    <tr>
                        <td>
                            {{$pho->customer}}
                        </td>
                        <td>
                            {{$pho->photographer->name}}
                        </td>
                        <td>
                            {{$pho->status_aktif}}
                        </td>
                        <td>
                            <a href="{{ route('photography_sessions.editpage', $pho->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#softdel{{ $pho->id }}"><i class="fa-solid fa-trash"></i></a>
                            <form action="{{ route('photography_sessions.softdelete', $pho->id) }}" method="POST" class="modal fade" id="softdel{{ $pho->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
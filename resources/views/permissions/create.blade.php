@extends('layouts.main', ['activePage'=>'roles', 'titlePage'=>'Nuevo permiso'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('permission.store')}}" method="POST" class="form-horizontal">
                     @csrf
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title">Permiso</h4>
                             <p class="card-category">Ingresar los datos</p>
                         </div>
                         <div class="card-body">
                             {{-- @if ($errors->any())
                             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach ($errors->all() as $error)
                                    <ul>
                                        <li>
                                           {{$error}} 
                                        </li>
                                    </ul>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                             @endif --}}
                             <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre del permiso</label>
                                <div class="col-sm 7">
                                    <input type="text" name="name" class="form-control"  autofocus>
                                </div>
                            </div>
                         </div>
                         <div class="card-footer ml-auto mr-auto">
                             <button type="submit" class="btn btn-primary">Guardar</button>
                         </div>
                     </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.main', ['activePage'=>'permissions', 'titlePage'=>'Editar permisos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('permission.update', $permission->id)}}" method="POST" class="form-horizontal">
                     @csrf
                     @method('PUT')
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title">Permisos</h4>
                             <p class="card-category">Editar datos</p>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm 7">
                                    <input type="text" name="name" value="{{$permission->name}}" class="form-control" autofocus>
                                    @if ($errors->has('name'))
                                      <span class="error text-danger" for="input-name">{{$errors->first('name')}}</span>                                        
                                    @endif
                                </div>
                            </div>
                         </div>
                         <div class="card-footer ml-auto mr-auto">
                             <button type="submit" class="btn btn-primary">Actualizar</button>
                         </div>
                     </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
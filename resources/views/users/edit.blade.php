@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Nuevo usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('users.update', $user->id)}}" method="POST" class="form-horizontal">
                     @csrf
                     @method('PUT')
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title">Usuarios</h4>
                             <p class="card-category">Editar datos</p>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm 7">
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Ingrese el nombre" autofocus>
                                    @if ($errors->has('name'))
                                     <span class="error text-danger" for="input-name">{{$errors->first('name')}}</span>                                        
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm 7">
                                    <input type="text" name="username" value="{{$user->username}}" class="form-control" placeholder="Ingrese el nombre de usuario" autofocus>
                                    @if ($errors->has('username'))
                                      <span class="error text-danger" for="input-name">{{$errors->first('username')}}</span>                                        
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm 7">
                                    <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Ingrese el email" autofocus>
                                    @if ($errors->has('email'))
                                      <span class="error text-danger" for="input-name">{{$errors->first('email')}}</span>                                        
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm 7">
                                    <input type="password" name="password" class="form-control" placeholder="Ingrese el contraseña solo en caso de modificar" autofocus>
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
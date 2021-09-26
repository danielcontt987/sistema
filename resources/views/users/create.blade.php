@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Nuevo usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('users.store')}}" method="POST" class="form-horizontal">
                     @csrf
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title">Usuarios</h4>
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
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm 7">
                                    <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre" value="{{old('name')}}" autofocus>
                                    @if ($errors->has('name'))
                                       <span class="error text-danger" for="input-name">{{$errors->first('name')}}</span>                                        
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm 7">
                                    <input type="text" name="username" class="form-control" placeholder="Ingrese el nombre de usuario" value="{{old('username')}}" autofocus>
                                    @if ($errors->has('username'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('username')}}</span>                                        
                                 @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm 7">
                                    <input type="email" name="email" class="form-control" placeholder="Ingrese el email" value="{{old('email')}}" autofocus>
                                    @if ($errors->has('email'))
                                      <span class="error text-danger" for="input-name">{{$errors->first('email')}}</span>                                        
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Conntraseña</label>
                                <div class="col-sm 7">
                                    <input type="password" name="password" class="form-control" placeholder="Ingrese el contraseña" value="{{old('password')}}" autofocus>
                                    @if ($errors->has('password'))
                                      <span class="error text-danger" for="input-name">{{$errors->first('password')}}</span>                                        
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach ($roles as $id => $role) 
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                                                            value="{{$id}}"
                                                                        >
                                                                        <span class="form-check-sign">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                 {{ $role }} 
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <!--End footer-->
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endsection
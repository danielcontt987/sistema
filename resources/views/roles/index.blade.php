@extends('layouts.main', ['activePage'=>'roles', 'titlePage'=>'Nuevo rol'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="cart-title">Roles</h4>
                          <p class="card-category">Roles registrados</p>
                        </div>
                        <div class="card-body">
                            @include('alertas.success')
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('roles.create')}}" class="btn btn-sm btn-facebook">Añadir usuario</a>
                                </div>
                            </div>
                          <div class="table-resposive">
                              <table class="table">
                                  <thead class="text-primary">
                                     <th>ID</th>
                                     <th>Nombre</th>
                                     <th>Guard_name</th>
                                     <th>Fecha de creación</th>
                                     <th>Permisos</th>
                                     <th class="text-center">Acciones</th>
                                  </thead>
                                  <tbody>
                                      @foreach ($roles as $rol)
                                      <tr>
                                        <td>{{$rol->id}}</td>
                                        <td>{{$rol->name}}</td>
                                        <td>{{$rol->guard_name}}</td>
                                        <td>{{$rol->created_at}}</td>
                                        <td>
                                            @forelse ($rol->permissions as $permission)
                                                <span class="badge badge-info">{{$permission->name}}</span>
                                            @empty
                                                <span class="badge badge-danger">No tienes permisos</span>
                                            @endforelse
                                        </td>
                                        <td class="td-actions text-center">
                                            <a href="{{route('roles.show', $rol->id)}}" class="btn  btn-info"><i class="material-icons">person</i></a>
                                            <a href="{{route('roles.edit', $rol->id)}}" class="btn  btn-danger"><i class="material-icons">edit</i></a>
                                            <form action="{{route('roles.destroy', $rol->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estas seguro de querer eliminar el usuario ')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn  btn-warning"><i class="material-icons">close</i></button>                               

                                            </form>
                                        </td>
                                        
                                    </tr>   
                                      @endforeach            
                                  </tbody>
                              </table>
                          </div>
                        </div>
                        <div class="card-footer mr-auto">
                            {{$roles->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
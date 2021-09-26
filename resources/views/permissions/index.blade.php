@extends('layouts.main', ['activePage'=>'permissions', 'titlePage'=>'Permisos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="cart-title">Permisos</h4>
                          <p class="card-category">Permisos registrados</p>
                        </div>
                        <div class="card-body">
                            {{-- @include('alertas.success') --}}
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('permission.create')}}" class="btn btn-sm btn-facebook">Añadir permisos</a>
                                </div>
                            </div>
                          <div class="table-resposive">
                              <table class="table">
                                  <thead class="text-primary">
                                     <th>ID</th>
                                     <th>Nombre</th>
                                     <th>Guard</th>
                                     <th>Fecha de creación</th>
                                     <th class="text-center">Acciones</th>
                                  </thead>
                                  <tbody>
                                      @foreach ($permissions as $permission)
                                      <tr>
                                        <td>{{$permission->id}}</td>
                                        <td>{{$permission->name}}</td>
                                        <td>{{$permission->guard_name}}</td>
                                        <td>{{$permission->created_at}}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{route('permission.show', $permission->id)}}" class="btn  btn-info"><i class="material-icons">person</i></a>
                                            <a href="{{route('permission.edit', $permission->id)}}" class="btn  btn-danger"><i class="material-icons">edit</i></a>
                                            <form action="{{route('permission.destroy', $permission->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estas seguro de querer eliminar el permiso? ')">
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
                            
                            {{$permissions->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
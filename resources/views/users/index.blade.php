@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Nuevo usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="cart-title">Usuarios</h4>
                          <p class="card-category">Usuarios registrados</p>
                        </div>
                        <div class="card-body">
                            @include('alertas.success')
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('users.create')}}" class="btn btn-sm btn-facebook">Añadir usuario</a>
                                </div>
                            </div>
                          <div class="table-resposive">
                              <table class="table">
                                  <thead class="text-primary">
                                     <th>Nombre</th>
                                     <th>Correo</th>
                                     <th>Username</th>
                                     <th>Last Seen</th>
                                     <th>Status</th>
                                     <th>Fecha de creación</th>
                                     <th>Rol</th>
                                     <th class="text-center">Acciones</th>
                                  </thead>
                                  <tbody>
                                      @foreach ($users as $user)
                                      <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>
                                            {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                        </td>
                                        <td>
                                            @if(Cache::has('user-is-online-' . $user->id))
                                                <span class="text-success">Online</span>
                                            @else
                                                <span class="text-secondary">Offline</span>
                                            @endif
                                        </td>
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                          @forelse ($user->roles as $role)
                                              <span class="badge badge-info">
                                                  {{$role->name}}
                                              </span>
                                          @empty
                                                <span class="badge badge-danger">
                                                    No tienes rol
                                                </span>
                                          @endforelse
                                        </td>
                                        <td class="td-actions text-center">
                                            <a href="{{route('users.show', $user->id)}}" class="btn  btn-info"><i class="material-icons">person</i></a>
                                            <a href="{{route('users.edit', $user->id)}}" class="btn  btn-danger"><i class="material-icons">edit</i></a>
                                            <form action="{{route('users.destroy', $user->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estas seguro de querer eliminar el usuario ')">
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
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
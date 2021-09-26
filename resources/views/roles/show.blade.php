@extends('layouts.main', ['activePage' => 'roles', 'titlePage' => 'Detalles del rol'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Roles</div>
            <p class="card-category">Vista detallada del rol {{ $role->name }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="{{ asset('img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mt-3">{{ $role->name }}</h5>
                        </a>
                        <p class="description">
                        {{ $role->guard_name }} <br>
                        {{ $role->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      @forelse ($role->permissions as $permission)
                          <span class="badge rounded-pill bg-primary text-white">{{$permission->name}}</span>
                      @empty
                      <span class="badge badge-danger bg-danger">No hay permisos</span>
                      @endforelse
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <button class="btn btn-sm btn-primary">Editar</button>
                      <a href="{{route('roles.index')}}" class="d-flex justify-content-end btn btn-sm btn-danger">Volver</a>
                    </div>
                  </div>
                </div>
              </div><!--end card user-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
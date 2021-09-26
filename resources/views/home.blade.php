@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">face</i>
                        </div>
                        <p class="card-category">Usuarios</p>
                         @php
                          use App\Models\User;
                          $cant_user = User::count();
                         @endphp
                        <h3 class="card-title">
                            {{$cant_user}}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-success">check_circle</i>
                            <a class="text-dark" href="{{route('users.index')}}">Usuarios</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">face</i>
                        </div>
                        <p class="card-category">Permisos</p>
                         @php
                          use Spatie\Permission\Models\Permission;
                          $cant_permi = Permission::count();
                         @endphp
                        <h3 class="card-title">
                            {{$cant_permi}}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-success">check_circle</i>
                            <a class="text-dark" href="{{route('permission.index')}}">Permisos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">lock</i>
                        </div>
                        <p class="card-category">Roles</p>
                         @php
                          use Spatie\Permission\Models\Role;
                          $role = Role::count();
                         @endphp
                        <h3 class="card-title">
                            {{$role}}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-success">check_circle</i>
                            <a class="text-dark" href="{{route('roles.index')}}">Roles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

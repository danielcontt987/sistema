<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg')}}"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('users.index')}}">
          <i class="material-icons">face</i>
            <p>{{ __('Usuarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('permission.index')}}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Permisos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('roles.index')}}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Roles') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'actividades' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">task</i>
            <p>{{ __('Actividades') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'actividades' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">list</i>
            <p>{{ __('Estatus') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'actividades' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">favorite</i>
            <p>{{ __('departamento') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'actividades' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">question_answer</i>
            <p>{{ __('Solicitudes') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>

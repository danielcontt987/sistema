@extends('layouts.main', ['activePage'=>'roles', 'titlePage'=>'Editar rol'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('roles.update', $role->id)}}" method="POST" class="form-horizontal">
                     @csrf
                     @method('PUT')
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title">Roles</h4>
                             <p class="card-category">Editar rol</p>
                         </div>
                         <div class="card-body">
                            <div class="row">
                              <label for="name" class="col-sm-2 col-form-label">Nombre del rol</label>
                              <div class="col-sm 7">
                                    <input type="text" name="name" value="{{$role->name}}" class="form-control" placeholder="Ingrese el nombre" autofocus>
                                    @if ($errors->has('name'))
                                     <span class="error text-danger" for="input-name">{{$errors->first('name')}}</span>                                        
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                              <label for="name" class="col-sm-2 col-form-label">Permisos</label>
                              <div class="col-sm-7">
                                <div class="form-group">
                                  <div class="tab-content">
                                    <div class="tab-pane active">
                                      <table class="table">
                                        <tbody>
                                          @foreach ($permissions as $id => $permission)
                                          <tr>
                                            <td>
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="checkbox" name="permissions[]"
                                                    value="{{ $id }}">
                                                  <span class="form-check-sign">
                                                    <span class="check"></span>
                                                  </span>
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              {{ $permission }}
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
              
                          <!--End body-->
              
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
                        
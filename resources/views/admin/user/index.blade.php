{{-- vista principal del modulo de administracion  --}}


{{-- extender la vista principal a la vista usuarios --}}
@extends('layouts.app')



{{-- inyectar el titulo dinamicamente en la vista --}}
@section('title', 'Listado de Usuarios')


{{-- agregar dinamicamnete el icono del titulo de la vista --}}
@section('icon_title')
    <i class="fa fa-fw fa-users"></i>
@endsection


{{-- seccion de contenido de la vista --}}
@section('content')

<div class="card">

    <div class="card-header">
      <h3 class="card-title">Listado de Usuarios</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            <a href="{{route('admin.user.create')}}" title="Crear Usuario">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha de Fin</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                    <tr>
                        <td><a href="{{route('admin.user.show', $user->id)}}">{{$user->firstname}}</a></td>
                        <td> {{$user->email}}</td>
                        <td> {{$user->username}}</td>
                        <td> {{$user->start_date}}</td>
                        <td> {{$user->end_date}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        {{-- aplicando paginacion a la tabla --}}
        {{$users->render()}}
    </div>


    <!-- /.card-body -->
    {{-- <div class="card-footer">
      Footer
    </div> --}}
    <!-- /.card-footer-->
</div>

@endsection

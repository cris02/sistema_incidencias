{{-- vista principal del modulo de administracion  --}}


{{-- extender la vista principal a la vista usuarios --}}
@extends('layouts.app')



{{-- inyectar el titulo dinamicamente en la vista --}}
@section('title', 'Listado de Usuarios')


{{-- agregar dinamicamnete el icono del titulo de la vista --}}
@section('icon_title')
    <i class="fa fa-fw fa-users"></i>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{route('admin.user.index')}}">Usuarios</a></li>
@endsection


{{-- seccion de contenido de la vista --}}
@section('content')

    @component('components.card')

        {{-- solo funcionan dentro de los componentes --}}
        @slot('title')
            Listado de Usuarios
        @endslot

        @slot('action')
            <a href="{{route('admin.user.create')}}" title="Crear Usuario">
                <i class="fa fa-plus"></i>
            </a>
        @endslot

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
    @endcomponent

@endsection

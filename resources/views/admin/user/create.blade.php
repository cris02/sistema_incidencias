
{{-- extender la vista principal a la vista usuarios --}}
@extends('layouts.app')



{{-- inyectar el titulo dinamicamente en la vista --}}
@section('title', 'Creacion de Usuario')


{{-- agregar dinamicamnete el icono del titulo de la vista --}}
@section('icon_title')
    <i class="fa fa-fw fa-user-plus"></i>
@endsection


{{-- seccion de contenido de la vista --}}
@section('content')
{{-- el el metodo open(['la ruta', 'el metodo']) --}}
{!! Form::open(['route' => 'admin.user.store', 'method' => 'post']) !!}
    <div class="card">

        <div class="card-header">
        <h3 class="card-title">Creacion de Usuario</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    {!! Field::text('firstname', ['required' => true, 'placeholder' => 'Nombres']) !!}
                </div>
                <div class="col-12 col-sm-6">
                    {!! Field::text('lastname', ['placeholder' => 'Apellidos']) !!}
                </div>
                <div class="col-12 col-sm-6">
                    {!! Field::text('username', ['required' => true, 'placeholder' => 'Usuario']) !!}
                </div>
                <div class="col-12 col-sm-6">
                    {!! Field::email('email', ['required' => true, 'placeholder' => 'Correo']) !!}
                </div>
                <div class="col-12 col-sm-6">
                    {!! Field::date('start_date', ['placeholder' => 'Fecha Inicio']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="float-right">
                <a href="{{ route('admin.user.index') }}" class="btn btn-outline-danger">Cancelar</a>
            <button type="submit" class="ml-2 btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@endsection

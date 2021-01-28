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
            <a href="" title="Crear Usuario">
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
                    <tr>
                        <td>Nombre 1</td>
                        <td>Correo 1</td>
                        <td>Usuario 1</td>
                        <td>Fecha Inicio 1</td>
                        <td>Fecha de Fin 1</td>
                    </tr>
                    <tr>
                        <td>Nombre 2</td>
                        <td>Correo 2</td>
                        <td>Usuario 2</td>
                        <td>Fecha Inicio 2</td>
                        <td>Fecha de Fin 2</td>
                    </tr>
                    <tr>
                        <td>Nombre 3</td>
                        <td>Correo 3</td>
                        <td>Usuario 3</td>
                        <td>Fecha Inicio 3</td>
                        <td>Fecha de Fin 3</td>
                    </tr>
                    <tr>
                        <td>Nombre 4</td>
                        <td>Correo 4</td>
                        <td>Usuario 4</td>
                        <td>Fecha Inicio 4</td>
                        <td>Fecha de Fin 4</td>
                    </tr>
                    <tr>
                        <td>Nombre 5</td>
                        <td>Correo 5</td>
                        <td>Usuario 5</td>
                        <td>Fecha Inicio 5</td>
                        <td>Fecha de Fin 5</td>
                    </tr>
                    <tr>
                        <td>Nombre 6</td>
                        <td>Correo 6</td>
                        <td>Usuario 6</td>
                        <td>Fecha Inicio 6</td>
                        <td>Fecha de Fin 6</td>
                    </tr>
                    <tr>
                        <td>Nombre 7</td>
                        <td>Correo 7</td>
                        <td>Usuario 7</td>
                        <td>Fecha Inicio 7</td>
                        <td>Fecha de Fin 7</td>
                    </tr>
                    <tr>
                        <td>Nombre 8</td>
                        <td>Correo 8</td>
                        <td>Usuario 8</td>
                        <td>Fecha Inicio 8</td>
                        <td>Fecha de Fin 8</td>
                    </tr>
                    <tr>
                        <td>Nombre 9</td>
                        <td>Correo 9</td>
                        <td>Usuario 9</td>
                        <td>Fecha Inicio 9</td>
                        <td>Fecha de Fin 9</td>
                    </tr>
                    <tr>
                        <td>Nombre 10</td>
                        <td>Correo 10</td>
                        <td>Usuario 10</td>
                        <td>Fecha Inicio 10</td>
                        <td>Fecha de Fin 10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- /.card-body -->
    {{-- <div class="card-footer">
      Footer
    </div> --}}
    <!-- /.card-footer-->
  </div>

@endsection

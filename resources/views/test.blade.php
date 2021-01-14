
{{-- hace uso de la vista app --}}
@extends('layouts.app')


{{-- hacer el titulo dinamico del contenido --}}
@section('title')
    Inicio 2
@endsection


{{-- icono del titulo del contenido --}}
@section('icon_title')
    <i class="fa fa-lg fa-fw fa-home"></i>
@endsection

{{-- hacer el titulo dinamico de la pagina web --}}
{{-- @section('web_title', 'Vista test') --}}


{{-- es un contenido de la vista principal --}}
@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Title</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    Start creating your amazing application!
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>

@endsection

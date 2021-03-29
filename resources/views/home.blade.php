
{{-- hace uso de la vista app --}}
@extends('layouts.app')

{{-- icono del titulo del contenido --}}
@section('icon_title')
    <i class="fa fa-lg fa-fw fa-home"></i>
@endsection


{{-- hacer el titulo dinamico del contenido --}}
@section('title')
    Inicio 2
@endsection


{{-- es un contenido de la vista principal --}}
@section('content')
    pagina de inicio
@endsection

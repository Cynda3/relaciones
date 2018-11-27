@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyecto:{{$proyecto->nombre}}</h2>
  <h3>Titulo:{{$proyecto->titulo}}</h3>
  <h3>Responsable:{{is_null($proyecto->empleado)?"":($proyecto->empleado->nombre)}}</h3>
  <h3>Colaboradores:</h3>

@endsection

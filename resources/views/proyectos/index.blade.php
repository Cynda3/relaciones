@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Responsable</th>
 	</tr>
  		@foreach($proyectos as $proyecto)
  		<tr>
	      <td><a href="/proyecto/{{$proyecto->id}}">{{$proyecto->id}}</a></td>
	      <td>{{$proyecto->nombre}}</td>
	      <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->empleado->nombre}}</td>
	    </tr>
	    @endforeach
  </table>

@endsection

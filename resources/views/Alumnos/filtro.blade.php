@extends('layouts.app')

@section('content')
<div class="container">

<!--  <div class="alert alert-success alert-dismissible" role="alert">-->
@if(Session::has('mensaje'))

    {{Session::get('mensaje')}}
   

@endif

<!--  <button type="button" class="close" data-dismiss="alert" arial-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
 -->
<!--  </div>-->

<a class="btn btn-primary" href="{{ url ('Alumnos/create') }}" role="button">registrar nuevo alumno</a>


<br><br>

<a  href="pruebate/exportexcel" class="btn btn-success">EXCEL</a>
<a  href="pruebate/exportpdf" class="btn btn-danger">PDF</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>carnet</th>
            <th>grado</th>
            <th>nombre_padre</th>
            <th>nombre_madre</th>
            <th>edad</th>
            <th>nota final</th>
           <!--  <th>foto</th> -->
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
         @foreach( $alumnos as $alumno)
        <tr>
           
            <td>{{ $alumno ->id }}</td>
            <td>{{ $alumno ->nombre }}</td>
            <td>{{ $alumno ->apellidos }}</td>
            <td>{{ $alumno ->carnet }}</td>
            <td>{{ $alumno ->grado }}</td>
            <td>{{ $alumno ->nombre_padre }}</td>
            <td>{{ $alumno ->nombre_madre }}</td>
            <td>{{ $alumno ->edad }}</td>
            <td>{{ $alumno ->nota_f }}</td>

            <!-- <td>
                  {{ $alumno ->foto }}
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$alumno->foto }}" width="100" value=""alt="">
            </td>  -->

            <td>           
           
                <a class="btn btn-warning" href="{{ url('/Alumnos/'.$alumno->id.'/edit') }}">Editar</a>
                
                <form action="{{ url('/Alumnos/'.$alumno->id ) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Quieres borrar?')" value="Borrar">
                </form>

            </td>
           
        </tr> 
        @endforeach
    </tbody>
   <!--  <tfoot>
        <tr>
            <th></th>
        </tr>
    </tfoot> -->
</table>
{!! $alumnos->links() !!}
</div>
@endsection
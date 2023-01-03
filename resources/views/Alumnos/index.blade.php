@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Session::get('mensaje')}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<br>

@endif

<label for="">Buscar alumno por el carnet: </label>
<input type="text" name="id" id="id" > 
<a href="/api/show/"  id="form_id" class="btn btn-success">Ver alumno</a>

<!-- <form action="{{ url ('/api/show/') }}" method="get" enctype="multipart/form-data">
   <button class="btn btn-danger" type="submit"></button>
</form> -->
<hr>

<a class="btn btn-primary" href="{{ url ('Alumnos/create') }}" role="button">registrar nuevo alumno</a>


<a  href="pruebatec/exportexcel" class="btn btn-success">EXCEL</a>
<a  href="pruebatec/exportpdf" class="btn btn-danger">PDF</a>
<a  href="pruebatec/exportcsv" class="btn btn-info">CSV</a>

<br><br>
<table  id="listaArticulos"  class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>carnet</th>
            <th>grado</th>
            <th>nombre del padre</th>
            <th>nombre de la madre</th>
            <th>edad</th>
            <th>nota final</th>
            <th>profesor</th>
            <th>opciones</th>
           
        </tr>
    </thead>
    <tbody>
         @foreach( $alumnos as $alumno)
        <tr class="articulo">
           
            <td>{{ $alumno ->id }}</td>
            <td>{{ $alumno ->nombre }}</td>
            <td>{{ $alumno ->apellidos }}</td>
            <td>{{ $alumno ->carnet }}</td>
            <td>{{ $alumno ->grado }}</td>
            <td>{{ $alumno ->nombre_padre }}</td>
            <td>{{ $alumno ->nombre_madre }}</td>
            <td>{{ $alumno ->edad }}</td>
            <td>{{ $alumno ->nota_f }}</td>
            <td>{{ $alumno ->profe_nombre }}</td>
          

            <td>           
           
                <a class="btn btn-warning" href="{{ url('/Alumnos/'.$alumno->id.'/edit') }}">Editar</a>
                
               <!-- <a class="btn btn-danger" href="{{ url('/pruebate/'.$alumno->id.'/show') }}">PDF</a>  -->

                <form action="{{ url('/Alumnos/'.$alumno->id ) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Quieres borrar?')" value="Borrar">
                </form>

                <a class="btn btn-info" href="{{ url('/Alumnos/show/'.$alumno->id) }}">PDF</a>

            </td>
            @endforeach
            
        </tr> 
       
    </tbody>
   <!--  <tfoot>
        <tr>
            <th></th>
        </tr>
    </tfoot> -->
</table>

</div>


<script>


    document.addEventListener("keyup", e=>{
        var elementVar = document.getElementById("id");
        var form = document.getElementById("form_id");
        form.setAttribute("href", "/api/show/" + elementVar.value);

    })

</script>


@endsection

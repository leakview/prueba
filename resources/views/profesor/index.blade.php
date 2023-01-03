@extends('layouts.app')

@section('content')
<div class="container">

 

<h6>REPORTE POR PROFESOR: (Selecciona Profesor)</h6>
<form action="{{ url('/profesor/show/{id}') }}" method="get" enctype="multipart/form-data">
    @csrf
    <select class="form-select" aria-label="Default select example"  name="profe_nombre"  id="profe_nombre">
    <option selected>ninguno</option>
        @foreach( $profesor as $alumno)
        <option value="{{ $alumno ->nombre_profe}} {{ $alumno ->apellidos_profe }}">{{ $alumno ->id_profe }} - {{ $alumno ->nombre_profe }} {{ $alumno ->apellidos_profe }}</option>
        @endforeach
    </select>    <br>

    <button class="btn btn-danger" type="submit">Ver reporte [PDF]</button>
</form>

<hr>
<br><br>
<a class="btn btn-primary" href="{{ url ('profesor/create') }}" role="button">registrar nuevo profesor</a>
<br><br>
<!-- <a  href="pruebatec/exportexcel" class="btn btn-success">EXCEL</a>
<a  href="pruebatec/exportpdf" class="btn btn-danger">PDF</a>
<a  href="pruebatec/exportcsv" class="btn btn-info">CSV</a> -->
<table  id="listaArticulos"  class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>grado</th>
            <th>edad</th>
            <th>sexo</th>
            <th>titulo</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
         @foreach( $profesor as $alumno)
        <tr class="articulo">
           
            <td>{{ $alumno ->id_profe }}</td>
            <td>{{ $alumno ->nombre_profe }}</td>
            <td>{{ $alumno ->apellidos_profe }}</td>
            <td>{{ $alumno ->grado_profe }}</td>
            <td>{{ $alumno ->edad_profe }}</td>
            <td>{{ $alumno ->sexo_profe }}</td>
            <td>{{ $alumno ->titulo_profe }}</td>
           

              
            <td>           
           
                <a class="btn btn-warning" href="{{ url('/profesor/'.$alumno->id_profe.'/edit') }}">Editar</a>
                
             

                <form action="{{ url('/Alumnos/'.$alumno->id_profe ) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Quieres borrar?')" value="Borrar">
                </form>

             
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
    $('.alert').alert()
</script>
@endsection
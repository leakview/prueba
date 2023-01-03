@extends('layouts.app')

@section('content')

<div class="container">

<h1>{{$modo}}Alumno</h1>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)    
        <li>   {{$error}}   </li> 
        @endforeach
    </ul>
</div>
@endif

<div class="form-gruop">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ isset($alumnos ->nombre)?$alumnos ->nombre:old('nombre') }}" id="nombre"><br>

    <label for="apellidos">apellidos</label>
    <input type="text" class="form-control" value="{{ isset($alumnos ->apellidos)?$alumnos ->apellidos:old('apellidos') }}" name="apellidos" id="nombre"><br>
    
    <label for="carnet">carnet</label>
    <input type="text" class="form-control" value="{{ isset($alumnos ->carnet)?$alumnos ->carnet:old('carnet') }}" name="carnet"  id="carnet"><br>
    
    <label for="grado">grado</label> 
    <input type="text" class="form-control" value="{{ isset($alumnos ->grado)?$alumnos ->grado:old('grado') }}" name="grado" id="grado"><br>
    
    <label for="nombre_padre">nombre del padre</label>
    <input type="text" class="form-control" value="{{ isset($alumnos ->nombre_padre)?$alumnos ->nombre_padre:old('nombre_padre') }}" name="nombre_padre" id="nombre_padre"><br>
    <!--<input type="file" name="nombre_padre" id="nombre_padre">  -->

    <label for="nombre_madre">nombre de la madre</label>
    <input type="text" class="form-control" value="{{ isset($alumnos ->nombre_madre)?$alumnos->nombre_madre:old('nombre_madre') }}" name="nombre_madre" id="nombre_madre"><br>

    <label for="edad">edad</label>
    <input type="text" class="form-control" value="{{ isset($alumnos ->edad)?$alumnos ->edad:old('edad')}}" name="edad" id="edad"><br>

    <label for="nota_f">nota final</label>
    <input type="text" class="form-control" value="{{ isset($alumnos ->nota_f)?$alumnos ->nota_f:old('nota_f')}}" name="nota_f"  id="nota_f"><br>

    
    <label for="profe_nombre">Nombre del profesor</label>
    <select class="form-select" aria-label="Default select example"  name="profe_nombre"  id="profe_nombre">
        <option value="{{ $alumnos ->profe_nombre }}" selected>{{ $alumnos ->profe_nombre }} - seleccionado</option>
        
        @foreach( $profesors as $alumno)
        <option value="{{ $alumno ->nombre_profe }} {{ $alumno ->apellidos_profe }}">{{ $alumno ->id_profe }} - {{ $alumno ->nombre_profe }} {{ $alumno ->apellidos_profe }}</option>
        @endforeach
        <option value="ninguno">ninguno</option>
        
    </select>           
</div>

    <br><hr>

    <input class="btn btn-success"  type="submit" value="{{ $modo }} datos">

    <br>
    <br>

    <a class="btn btn-primary" href="{{ url ('Alumnos') }}">Regresar</a>

    
</div>
@endsection
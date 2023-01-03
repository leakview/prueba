@extends('layouts.app')

@section('content')
 
<div class="container">
@foreach( $alumnoin as $alumnoin)
<h1>Alumno #{{ ($alumnoin ->id) }}</h1>


<div class="form-gruop">
    <label for="nombre">nombre</label>
    <input disabled type="text" name="nombre" class="form-control" value="{{ isset($alumnoin ->nombre)?$alumnoin ->nombre:old('nombre') }}" id="nombre"><br>

    <label for="apellidos">apellidos</label>
    <input disabled type="text" class="form-control" value="{{ isset($alumnoin ->apellidos)?$alumnoin ->apellidos:old('apellidos') }}" name="apellidos" id="nombre"><br>
    
    <label for="carnet">carnet</label>
    <input disabled type="text" class="form-control" value="{{ isset($alumnoin ->carnet)?$alumnoin ->carnet:old('carnet') }}" name="carnet"  id="carnet"><br>
    
    <label for="grado">grado</label> 
    <input disabled type="text" class="form-control" value="{{ isset($alumnoin ->grado)?$alumnoin ->grado:old('grado') }}" name="grado" id="grado"><br>
    
    <label for="nombre_padre">nombre del padre</label>
    <input disabled type="text" class="form-control" value="{{ isset($alumnoin ->nombre_padre)?$alumnoin ->nombre_padre:old('nombre_padre') }}" name="nombre_padre" id="nombre_padre"><br>
    <!--<input disabled type="file" name="nombre_padre" id="nombre_padre">  -->

    <label for="nombre_madre">nombre de la madre</label>
    <input disabled type="text" class="form-control" value="{{ isset($alumnoin ->nombre_madre)?$alumnoin->nombre_madre:old('nombre_madre') }}" name="nombre_madre" id="nombre_madre"><br>

    <label for="edad">edad</label>
    <input disabled type="text" class="form-control" value="{{ isset($alumnoin ->edad)?$alumnoin ->edad:old('edad')}}" name="edad" id="edad"><br>

    <label for="nota_f">nota final</label>
    <input disabled type="text" class="form-control" value="{{ isset($alumnoin ->nota_f)?$alumnoin ->nota_f:old('nota_f')}}" name="nota_f"  id="nota_f"><br>

    
    <label for="profe_nombre">Nombre del profesor</label>
    <input disabled type="text"  class="form-control" value="{{ ($alumnoin ->profe_nombre) }}"> 
    <br>
    
    <a href="/Alumnos/{{ ($alumnoin ->id) }}/edit" class="btn btn-warning"> Editar Alumnos</a>

    <br><br>        
</div>

@endforeach
</div>
@endsection
@extends('layouts.app')

@section('content')
@foreach( $profesors as $alumno)
<form action="{{ url('/profesor/'.$alumno->id_profe ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

<div class="container">

<h1>EDITAR PROFESOR</h1>

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

    <label for="nombre_profe">nombre</label>
    <input type="text" name="nombre_profe" class="form-control" value="{{ isset($alumno ->nombre_profe)?$alumno ->nombre_profe:old('nombre_profe') }}" id="nombre_profe"><br>

    <label for="apellidos_profe">apellidos</label>
    <input type="text" class="form-control" value="{{ isset($alumno ->apellidos_profe)?$alumno ->apellidos_profe:old('apellidos_profe') }}" name="apellidos_profe" id="nombre_profe"><br>
    
    <label for="grado_profe">grado</label> 
    <input type="text" class="form-control" value="{{ isset($alumno ->grado_profe)?$alumno ->grado_profe:old('grado_profe') }}" name="grado_profe" id="grado_profe"><br>
   
    <label for="edad_profe">edad</label>
    <input type="text" class="form-control" value="{{ isset($alumno ->edad_profe)?$alumno ->edad_profe:old('edad_profe')}}" name="edad_profe" id="edad_profe"><br>
    
    <label for="sexo_profe">sexo_profe</label>
    <input type="text" class="form-control" value="{{ isset($alumno ->sexo_profe)?$alumno ->sexo_profe:old('sexo_profe')}}" name="sexo_profe" id="sexo_profe"><br>
    
    <label for="titulo_profe">titulo_profe</label>
    <input type="text" class="form-control" value="{{ isset($alumno ->titulo_profe)?$alumno ->titulo_profe:old('titulo_profe')}}" name="titulo_profe" id="titulo_profe"><br>

  
    
    </div>


    <br><hr>

    <input class="btn btn-success"  type="submit" value="editar datos">
    

    <br>
    <br>

    <a class="btn btn-primary" href="{{ url ('profesor') }}">Regresar</a>

    
</div>
</form> @endforeach 
@endsection
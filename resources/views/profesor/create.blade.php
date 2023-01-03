@extends('layouts.app')

    
@section('content')

<form action="{{ url('/profesor') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
<h1>PROFESOR</h1>

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
    <input type="text" name="nombre_profe" class="form-control" value="" id="nombre_profe"><br>

    <label for="apellidos">apellidos</label>
    <input type="text" class="form-control" value="" name="apellidos_profe" id="apellidos_profe"><br>
    
    <label for="grado">grado</label> 
    <input type="text" class="form-control" value="" name="grado_profe" id="grado_profe"><br>
    
    <label for="edad">edad</label>
    <input type="text" class="form-control" value="" name="edad_profe" id="edad_profe"><br>

    <label for="sexo_profe">sexo</label>
    <input type="text" class="form-control" value="" name="sexo_profe"  id="sexo_profe"><br>

    <label for="titulo_profe">titulo_profe</label>
    <input type="text" class="form-control" value="" name="titulo_profe"  id="titulo_profe"><br>

    

    </div>

<hr>

    <input class="btn btn-success"  type="submit" value="GUARDAR DATOS">
    

    <br>
    <br>

    <a class="btn btn-primary" href="{{ url ('profesor') }}">Regresar</a>

    
</div>


</form>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <h1>Reporte por profesor</h1>

 <hr style="border-top: 1px solid red;"> 
    @foreach( $profesor as $alumno)
    <h1>Profesor: {{ $alumno ->profe_nombre }}</h1>

<h2>Nombre  del alumno: {{ $alumno ->nombre }}</h2>
     
<h3 style=" margin-left: 10px;">  <b>Id del alumno: </b>{{ $alumno ->id }}<br>
  <b>Nombre Completo: </b>{{ $alumno ->nombre }} {{ $alumno ->apellidos }}<br>
  <b>grado: </b>{{ $alumno ->grado }}<br>
< <b>edad: </b>{{ $alumno ->edad }}</h3>
<hr>
        @endforeach 

</body>
</html>
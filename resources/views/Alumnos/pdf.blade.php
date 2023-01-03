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
    <h1 style="text-transform:uppercase">Reporte de alumno</h1>

    @foreach( $alumnos as $alumno)

<h2 style="text-transform:uppercase">{{ $alumno ->nombre }}</h2>
   <hr style="border-top: 1px solid red;">    
 
<h3 style=" margin-left: 10px;">  <b>Id: </b>{{ $alumno ->id }}</h3>
<h3 style=" margin-left: 10px;" style="text-transform: capitalize;">  <b>Nombre Completo: </b>{{ $alumno ->nombre }} {{ $alumno ->apellidos }}</h3>
<h3 style=" margin-left: 10px;" style="text-transform: capitalize;">  <b>Carnet: </b>{{ $alumno ->carnet }}</h3>
<h3 style=" margin-left: 10px;" style="text-transform: capitalize;">  <b>grado: </b>{{ $alumno ->grado }}</h3>
<h3 style=" margin-left: 10px;" style="text-transform: capitalize;">  <b>Nombre del Padre: </b>{{ $alumno ->nombre_padre }}</h3>
<h3 style=" margin-left: 10px;" style="text-transform: capitalize;">  <b>Nombre de la Madre: </b>{{ $alumno ->nombre_madre }}</h3>
<h3 style=" margin-left: 10px;" style="text-transform: capitalize;">  <b>Edad: </b>{{ $alumno ->edad }}</h3>
<h3 style=" margin-left: 10px;" style="text-transform: capitalize;">  <b>Nota Final:</b> {{ $alumno ->nota_f }}</h3>
<h3 style=" margin-left: 10px;" style="text-transform: capitalize;">  <b>Nombre del profesor: </b>{{ $alumno ->profe_nombre }}</h3>    
        @endforeach 

</body>
</html>
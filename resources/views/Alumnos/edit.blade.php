<form action="{{ url('/Alumnos/'.$alumnos->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('alumnos.form', ['modo'=>'Editar'])

</form>

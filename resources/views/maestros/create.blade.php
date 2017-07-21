@extends('layouts.principal')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Maestro</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'maestros.store','method'=>'POST', 'enctype' => 'multipart/form-data'])!!}
		        <div class="form-group">
		            {!!Form::label('Nombre')!!}
		            {!!Form::text('nombre',null,['class'=>'form-control'])!!}
		        </div>
		        <div class="form-group">
		            {!!Form::label('Apellido')!!}
		            {!!Form::text('apellido',null,['class'=>'form-control'])!!}
		        </div>
		        <div class="form-group">
                            {!!Form::label('Correo')!!}
                            {!!Form::email('correo',null,['class'=>'form-control'])!!}
		        </div>
		        <div class="form-group">
		            {!!Form::label('Telefono')!!}
		            {!!Form::text('telefono','null',['class'=>'form-control'])!!}
		        </div>
		        <div class="form-group">
		            {!!Form::label('Foto')!!}
		            {!!Form::file('foto',null,['class'=>'form-control'])!!}
		        </div>
		        <div class="form-group">
		            {!!Form::label('Descripción')!!}
		            {!!Form::textarea('descripcion',null,['class'=>'form-control'])!!}
		        </div>
		        <div class="form-group">
		            <label for="">Especialidad</label>
		            <select class="form-control" name="categorias_id">
		                <option value="1">Gasfiter</option>
		                <option value="2">Electricista</option>
		                <option value="3">Carpintero</option>
		                <option value="4">Pintor</option>
		                <option value="5">Jardinero</option>
		                <option value="6">Cerrajero</option>
                            </select>
		        </div>
		        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.principal')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Maestros</div>
                <div class="panel-body">
                    @foreach ($maestros as $maes)
                    <div class="col-md-4">
                        <img src="imgmaes/{{$maes->foto}}" class="col-xs-12" />
                        <label>Nombre: {{$maes->nombre}} {{$maes->apellido}}</label>
                        <label>Correo: {{$maes->correo}}</label>
                        <label>Telefono: {{$maes->telefono}}</label>
                        <label>Descripcion: {{$maes->descripcion}}</label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

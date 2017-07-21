@extends('layouts.principal')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Ultimos Maestros</div>

				<div class="panel-body">

				<?php
				/* Extraigo los maestros de la base */
				$maestros = DB::table('maestros')->get();
				foreach($maestros as $mast){
					echo '
					<div class="col-xs-4">
						<img class="col-xs-12" src="imgmaes/'.$mast->foto.'" />
						Nombre: '.$mast->nombre.' '.$mast->apellido.' <br>
						Correo: '.$mast->correo.'<br>
					</div>';
					}
				?>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

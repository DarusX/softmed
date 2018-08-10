<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');
		html{
			max-height: 50%;
		}
		body {
			font-family: 'Open Sans', sans-serif;
			font-size: 11px;
		}
		img{
			max-height: 1in;
		}
		table {
			width: 100%;
		}

		hr {
			height: 10px;
			width: 100%;
			background-color: black;
		}
	</style>
</head>

<body>

	<div>
		<h3>Lic. Cecilia Jimenez Garcia</h3>
		<img src="{{public_path() . '/img/logo.png'}}">

		<br>
		<h3>Médico General</h3>
	</div>
	<div>
		<span style="float:right">
			<h3>Fecha:{{\Carbon\carbon::now()}}</h3>
		</span>
		<h3>Paciente: {{$receta->consulta->paciente->nombreCompleto}}</h3>

	</div>
	<table>
		<thead>
			<tr>
				<th>Diágnostico</th>
			</tr>
		</thead>
		<tbody>
			@foreach($receta->enfermedades as $enfermedad)
			<tr>
				<td>{{$enfermedad->enfermedad}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<table>
		<thead>
			<tr>
				<th>Medicamento</th>
				<th>Dosis</th>
			</tr>
		</thead>
		<tbody>
			@foreach($receta->medicamentos as $medicamento)
			<tr>
				<td>
					{{$medicamento->nombre}} - {{$medicamento->presentacion}}
					<br>
					<small>{{$medicamento->compuesto}}</small>
				</td>
				<td>
					{{$medicamento->pivot->dosis}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<table>
		<thead>
			<tr>
				<th>Estudios</th>
			</tr>
		</thead>
		<tbody>
			@foreach($receta->estudios as $estudio)
			<tr>
				<td>{{$estudio->estudio}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
</body>

</html>
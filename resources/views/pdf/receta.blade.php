<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');
		body{
			font-family: 'Open Sans', sans-serif;
			font-size: 11px;
		}
		table{
			width: 100%;
		}
	</style>
</head>
<body>
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
					{{$medicamento->nombre}} - {{$medicamento->presentacion}}<br>
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
</body>
</html>
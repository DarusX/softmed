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
			font-size: 12px;
		}
		img{
			width:70px;
			height: 70px;
		}
		table {
			width: 100%;
			background-color:antiquewhite;
		}
		hr {
			height: 2px;
			width: 100%;
			background-color: blue;
		}		

	</style>
</head>

<body>

	<div>
		<span style="float:right">
		<p><h3>Lic. Cecilia Jiménez</h3></p>
		<p><h3>Médico General (ced.prof:1234)</h3></p>
		<p><h3>Universidad del valle</h3></p>
		</span>
		<img src="{{public_path() . '/img/logo.png'}} ">
	<hr>
	</div>	

	<div>
		<span style="float:right">
			<h3>Fecha:{{\Carbon\carbon::now()}}</h3>
		</span>
		<u><h3>Paciente: {{$receta->consulta->paciente->nombreCompleto}}</h3></u>
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
	<div>
				<i><h5 align="right">Firma:____________________________</h5></i>
	</div>
	<hr>
	<div>
			<table>
					<thead>
						<tr>
							<th>Dirección: Av. De los rios #13</th>
							<th>Telefono:3-50-11-12</th>
							<th>Correo: medico@softmed.mx</th>
						</tr>
					</thead>
			</table>
	</div>
</body>


</html>
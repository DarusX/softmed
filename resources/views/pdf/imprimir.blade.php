<!DOCTYPE html>
<html>
<title>imprimir receta</title>
<body>
<h2> Prueba de PDF </h2>

<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Ap_Paterno</th>
		<th>Ap_Materno</th>
		<th>Nacimiento</th>
		<th>CURP</th>
		<th>Domicilio</th>
	</tr>
@foreach($pacientes AS $p)
<tr>
	<td>{{$p->id}}</td>
	<td>{{$p->nombre}}</td>
	<td>{{$p->paterno}}</td>
	<td>{{$p->materno}}</td>
	<td>{{$p->nacimiento}}</td>
	<td>{{$p->curp}}</td>
	<td>{{$p->domicilio}}</td>
</tr>
@endforeach
</table>

</body>
</html> 
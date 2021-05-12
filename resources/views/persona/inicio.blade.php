<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel=”stylesheet” type=”text/css” href=”css/boostrap-grid.css”>
<h1>INICIO REGISTRO</h1>
 <br>
<a class="btn btn-primary" href="{{url('/personas/create')}}" role="button">Agregar Matricula</a>
<br>
<br>
<table border="1">	
	<thead>
		<tr>
			<th>#</th>
			<th>DNI</th>			
			<th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombres</th>
            <th>Fecha de Nacimiento</th>
            <th>Ubigeo</th>
            <th>Sexo</th>
            <th>Estado Civil</th>
		</tr>
	</thead>
	<tbody>
    @foreach ($personas as $persona)	
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$persona->dni}}</td>
            <td>{{$persona->appaterno}}</td>
            <td>{{$persona->apmaterno}}</td>    
            <td>{{$persona->nombres}}</td>
            <td>{{$persona->fechanacimiento}}</td>
            <td>{{$persona->fechadeubigeo}}</td>
            <td>{{$persona->sexo}}</td>    
            <td>{{$persona->estadocivil}}</td>
            <td>
            <a href="{{ url('/personas/'.$persona->id.'/edit') }}"  class="btn btn-warning" onclick="return confirm('Desea Actualizar?');"  > Actualizar</a>			
			
			| 
		
			<form method="post" action="{{url('/personas/'.$persona->id)}}" style="display:inline" >
			  
			  {{ csrf_field() }}
			  {{ method_field('DELETE') }}
			  <button class="btn btn-danger" type="submit" onclick="return confirm('Desea borrar?');">Eliminar</button>
			</form>
            </td>
		</tr>
		@endforeach
	</tbody>
	</tbody>
</table>

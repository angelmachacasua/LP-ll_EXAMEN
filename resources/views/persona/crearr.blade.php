<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel=”stylesheet” type=”text/css” href=”css/boostrap-grid.css”>

<h1 >Nuevo Registro </h1>



<div class="container">
<form action="{{url('/personas')}}" method="post" class="fw-bold">
{{ csrf_field() }} 
DNI:<input type="text" placeholder="DNI" name="dni" id="dni" value="" class="text-primary">
<br>
Ap. Paterno:<input type="text" placeholder="Apellido Paterno" name="appaterno" id="appaterno" value="" class="text-primary">
<br>
Ap. Materno:<input type="text" placeholder="Apellido Materno" name="apmaterno" id="apmaterno" value="" class="text-primary">
<br>
Nombres:<input type="text" placeholder="Nombres" name="nombres" id="nombres" value="" class="text-primary">
<br>
Fecha Nacimiento:<input type="date" name="fechanacimiento" id="fechanacimiento" value="" class="text-primary">

<br>
Ubigeo:<input type="text" placeholder="N° de Ubigeo" name="fechadeubigeo" id="fechadeubigeo" value="" class="text-primary">
<br>



Sexo:<select class="form-select"  name="sexo" id="sexo" aria-label="Default select example" value="" class="text-primary">
    <option selected>Seleccione</option>
     <option value="M">Masculino</option>
    <option value="F">Femenino</option>
    </select>

<br>
Estado Civil: <select class="form-select"  name="estadocivil" id="estadocivil" aria-label="Default select example" value="" class="text-primary">
  <option selected>Seleccione</option>
  <option value="S">Soltero(a)</option>
  <option value="C">Casado(a)</option>
  <option value="V">Viudo(a)</option>
</select>
<br>

<input type="submit" class="btn btn-outline-success" value="Registrar">


<a href="{{ url('/personas/') }}" class="btn btn-warning" > Volver </a>

</form>
</div>

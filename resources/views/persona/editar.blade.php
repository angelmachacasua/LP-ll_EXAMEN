<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel=”stylesheet” type=”text/css” href=”css/boostrap-grid.css”>


<h1>Actualizar Registro</h1>
<div class="container">
<form action="{{url('/personas/'.$persona->id)}}" method="post" class="fw-bold">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<label for="DNI" class="control-label" >{{'DNI'}}</label>
<input type="Integer" placeholder="DNI" name="dni" id="dni" value="{{ isset($persona->dni)?$persona->dni:old('dni') }}" class="text-primary">
{!! $errors->first('dni','<div class="invalid-feedback">:message</div>') !!}
<br class="text-secondary">

<label for="Paterno" class="control-label" >{{'Ap. Paterno'}}</label>
<input type="text" placeholder="Apellido Paterno" name="appaterno" id="appaterno" value="{{ isset($persona->appaterno)?$persona->appaterno:old('appaterno') }}" class="text-primary" >
{!! $errors->first('appaterno','<div class="invalid-feedback">:message</div>') !!}
<br class="text-secondary">

<label for="Materno" class="control-label" >{{'Ap. Materno'}}</label>
<input type="text" placeholder="Apellido Materno" name="apmaterno" id="apmaterno" value="{{ isset($persona->apmaterno)?$persona->apmaterno:old('apmaterno') }}" class="text-primary">
{!! $errors->first('apmaterno','<div class="invalid-feedback">:message</div>') !!}
<br class="text-secondary">

<div class="form-group">
<label for="Nombres" class="control-label" >{{'Nombres'}}</label>
<input type="text" placeholder="Nombres" name="nombres" id="nombres" value="{{ isset($persona->nombres)?$persona->nombres:old('nombres') }}" class="text-primary">
{!! $errors->first('nombres','<div class="invalid-feedback">:message</div>') !!}
<br class="text-secondary">

<label for="Fecha Nacimiento" class="control-label" >{{'Fecha Nacimiento'}}</label>
<input type="date" name="fechanacimiento" id="fechanacimiento" value="{{ isset($persona->fechanacimiento)?$persona->fechanacimiento:old('fechanacimiento') }}" class="text-primary">
{!! $errors->first('fechanacimiento','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Ubigeo" class="control-label" >{{'Ubigeo'}}</label>
<input type="Integer"  placeholder="N° de Ubigeo" name="fechadeubigeo" id="fechadeubigeo" value="{{ isset($persona->fechadeubigeo)?$persona->fechadeubigeo:old('fechadeubigeo') }}" class="text-primary">
{!! $errors->first('dni','<div class="invalid-feedback">:message</div>') !!}
<br class="text-secondary"> 

<label for="Sexo" class="control-label" >{{'Sexo'}}</label>
<select class="form-select" aria-label="Default select example"  name="sexo" id="sexo" value="{{ isset($persona->sexo)?$persona->sexo:old('sexo') }}" >
  <option selected>Seleccione</option>
  <option value="M">Masculino</option>
  <option value="F">Femenino</option>
</select>
{!! $errors->first('sexo','<div class="invalid-feedback">:message</div>') !!}
<br class="text-secondary">


<label for="Estado Civil" class="control-label" >{{'Estado Civil'}}</label>
<select class="form-select" aria-label="Default select example" placeholder="estadocivil" name="estadocivil" id="estadocivil" value="{{ isset($persona->estadocivil)?$persona->estadocivil:old('estadocivil') }}" >
  <option selected>Seleccione</option>
  <option value="S">Soltero(a)</option>
  <option value="C">Casado(a)</option>
  <option value="V">Viudo(a)</option>
</select>

{!! $errors->first('estadocivil','<div class="invalid-feedback">:message</div>') !!}
<br>
<center>
<input type="submit" class="btn btn-outline-success" value="Actualizar"></div></form>
</div></center>
<center>
<a href="{{ url('/personas/') }}" class="btn btn-danger" > Cancelar </a>
</center>

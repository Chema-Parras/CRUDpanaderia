<h1>{{$modo}} Panadero</h1>

<div class="form-group">

<label for="Nombre">Nombre</label>
<input type="text" class="form-control"name="Nombre" value="{{isset($panadero->Nombre)?$panadero->Nombre:''}}" id="Nombre">
</div>
<div class="form-group">
<label for="Apellido">Apellido</label>
<input type="text" class="form-control"name="Apellido" value="{{isset($panadero->Apellido)?$panadero->Apellido:''}}"id="Apellido">
</div>
<div class="form-group">
<label for="Telefono">Teléfono</label>
<input type="text" class="form-control"name="Telefono"value="{{isset($panadero->Telefono)?$panadero->Telefono:''}}"id="Telefono">
</div>
<div class="form-group">
<label for="DNI">DNI</label>
<input type="text" class="form-control"name="DNI"value="{{isset($panadero->DNI)?$panadero->DNI:''}}"id="DNI">
<div class="form-group">
<label for="Movil">Móvil</label>
<input type="text" class="form-control"name="Movil"value="{{isset($panadero->Movil)?$panadero->Movil:''}}"id="Movil">
</div>
<div class="form-group">
<label for="Correo">Correo Electrónico</label>
<input type="text" class="form-control"name="Correo"value="{{isset($panadero->Correo)?$panadero->Correo:''}}"id="Correo">
</div>
<div class="form-group">
<label for="Direccion">Dirección</label>
<input type="text" class="form-control"name="Direccion"value="{{isset($panadero->Direccion)?$panadero->Direccion:''}}"id="Direccion">
</div>
<div class="form-group">
<label for="CodPostal">Código Postal</label>
<input type="text" class="form-control"name="CodPostal"value="{{isset($panadero->CodPostal)?$panadero->CodPostal:''}}"id="CodPostal">

<input class="btn btn-success"type="submit" value="{{$modo}}  datos">

<a class="btn btn-primary"href="{{url('pan')}}">Volver</a>


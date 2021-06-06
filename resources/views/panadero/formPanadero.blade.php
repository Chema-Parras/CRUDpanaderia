

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($panadero->Nombre)?$panadero->Nombre:''}}" id="Nombre"><br>

<label for="Apellido">Apellido</label>
<input type="text" name="Apellido" value="{{isset($panadero->Apellido)?$panadero->Apellido:''}}"id="Apellido"><br>

<label for="Telefono">Teléfono</label>
<input type="text" name="Telefono"value="{{isset($panadero->Telefono)?$panadero->Telefono:''}}"id="Telefono"><br>

<label for="DNI">DNI</label>
<input type="text" name="DNI"value="{{isset($panadero->DNI)?$panadero->DNI:''}}"id="DNI"><br>

<label for="Movil">Móvil</label>
<input type="text" name="Movil"value="{{isset($panadero->Movil)?$panadero->Movil:''}}"id="Movil"><br>

<label for="Correo">Correo Electrónico</label>
<input type="text" name="Correo"value="{{isset($panadero->Correo)?$panadero->Correo:''}}"id="Correo"><br>

<label for="Direccion">Dirección</label>
<input type="text" name="Direccion"value="{{isset($panadero->Direccion)?$panadero->Direccion:''}}"id="Direccion"><br>

<label for="CodPostal">Código Postal</label>
<input type="text" name="CodPostal"value="{{isset($panadero->CodPostal)?$panadero->CodPostal:''}}"id="CodPostal"><br>

<input type="submit" value="{{$}} datos">

<a href="{{url('panadero')}}">Regresar</a>
<br>
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($pan->Nombre)?$pan->Nombre:''}}" id="Nombre"><br>

<label for="Ingredientes">Ingredientes</label>
<input type="text" name="Ingredientes"value="{{isset($pan->Ingredientes)?$pan->Ingredientes:''}}"id="Ingredientes"><br>

<label for="ClasePan">Clase Pan</label>
<input type="text" name="ClasePan"value="{{isset($pan->ClasePan)?$pan->ClasePan:''}}"id="ClasePan"><br>

<label for="FechaHecho">Fecha Hecho</label>
<input type="date" name="FechaHecho"value="{{isset($pan->FechaHecho)?$pan->FechaHecho:''}}"id="FechaHecho"><br>


<label for="Foto">Foto</label>
@if(isset($pan->Foto))
<img src="{{asset('storage').'/'.$pan->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto"value="" id="Foto"><br>


<label for="Coste">Coste</label>
<input type="text" name="Coste"value="{{isset($pan->Coste)?$pan->Coste:''}}"id="Coste"><br>

<label for="Panadero_id">Panadero_id</label>
<input type="text" name="Panadero_id"value="{{isset($pan->Panadero_id)?$pan->Panadero_id:''}}"id="Panadero_id"><br>

<input type="submit" value="Guardar datos">

<a href="{{url('pan')}}">Regresar</a>
<br>
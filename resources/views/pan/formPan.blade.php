<h1>{{$modo}} panesito</h1>

<div class="form-group">

<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{isset($pan->Nombre)?$pan->Nombre:''}}" id="Nombre">
</div>
<div class="form-group">
<label for="Ingredientes">Ingredientes</label>
<input type="text" class="form-control"name="Ingredientes"value="{{isset($pan->Ingredientes)?$pan->Ingredientes:''}}"id="Ingredientes">
</div>
<div class="form-group">
<label for="ClasePan">Clase Pan</label>
<input type="text" class="form-control"name="ClasePan"value="{{isset($pan->ClasePan)?$pan->ClasePan:''}}"id="ClasePan">
</div>
<div class="form-group">
<label for="FechaHecho">Fecha Hecho</label>
<input type="date" class="form-control"name="FechaHecho"value="{{isset($pan->FechaHecho)?$pan->FechaHecho:''}}"id="FechaHecho">
</div>
<div class="form-group">
<label for="Foto"></label>
@if(isset($pan->Foto))
<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$pan->Foto}}" width="100" alt="">
@endif
<input type="file" class="form-control"name="Foto"value="" id="Foto">
</div>
<div class="form-group">
<label for="Coste">Coste</label>
<input type="text" class="form-control"name="Coste"value="{{isset($pan->Coste)?$pan->Coste:''}}"id="Coste">
</div>
<div class="form-group">
<label for="Panadero_id">Panadero_id</label>
<input type="text" class="form-control"name="Panadero_id"value="{{isset($pan->Panadero_id)?$pan->Panadero_id:''}}"id="Panadero_id">
</div>

<input class="btn btn-success"type="submit" value="{{$modo}}  datos">

<a class="btn btn-primary"href="{{url('pan')}}">Volver</a>


b-5<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Ingredientes</th>
            <th>Clase Pan</th>
            <th>Fecha Hecho</th>
            <th>Foto</th>
            <th>Coste</th>
            <th>Panadero_id</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pans as $pan)
        <tr>
            <td>{{$pan->id_Pan}}</td>
            <td>{{$pan->Nombre}}</td>
            <td>{{$pan->Ingredientes}}</td>
            <td>{{$pan->ClasePan}}</td>
            <td>{{$pan->FechaHecho}}</td>

            <td>
            <img src="{{asset('storage').'/'.$pan->Foto}}" alt="">
            
            </td>

            <td>{{$pan->Coste}}</td>
            <td>{{$pan->Panadero_id}}</td>
            <td>
                 <a href="{{url('/pan/'.$pan->id_Pan.'/edit')}}" width="100" alt="">
                Editar
                 </a>
            
             |
            
            
                <form action="{{url('/pan/'.$pan->id_Pan)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar de verdad de la buena?')" value="Borrar">
                </form>
             </td>
        </tr>
        @endforeach
    </tbody>
</table>
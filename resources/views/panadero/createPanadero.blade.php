
<form action="{{url('/panadero')}}"method="post"enctype="multipart/form-data">
@csrf
@include('panadero.form')


</form>
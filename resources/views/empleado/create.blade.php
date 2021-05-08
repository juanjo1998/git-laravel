@extends('layout')

@section('content')
<form class="form shadow border mt-3 p-3" action="{{route('empleado.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres" class="form-control">
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" class="form-control">
  </div>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" class="form-control">
  </div>
  <div class="form-group">
      <label for="foto">Foto:</label>
      <input type="file" name="foto" class="form-control">
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
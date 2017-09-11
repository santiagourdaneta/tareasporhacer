@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <img src="uploads/avatars/{{ $user->avatar }}" alt="" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
    <h1>{{ $user->name }}</h1>
    <form action="/profile" enctype="multipart/form-data" method="post">
      <label for="">Actualiza tu avatar</label>
      <input type="file" name="avatar">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" class="btn btn-success pull-right" value="Actualizar">
    </form>
  </div>
</div>
@endsection

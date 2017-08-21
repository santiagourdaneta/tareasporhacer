@extends('app')
@section('content')

<h1 class="page-header text-center">Bienvenido</h1>

<div id="crud" class="row">
	<div class="col-xs-12">
		<h3 class="page-header">Muestra de CRUD</h3>
	</div>
	<div class="col-sm-7">
		<a href="" class="btn btn-success pull-right">Nueva tarea</a>
		<table class="table table-hover table-sprite">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tarea</th>
					<th colspan="2">
						&nbsp;
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="10px">1</td>
					<td>Tarea 1</td>
					<td width="10px">
					<a href="#" class="btn btn-warning btn-sm">Editar</a>
					</td>
					<td width="10px">
					<a href="#" class="btn btn-danger btn-sm">Eliminar</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-sm-5">
		<pre>
			@{{ $data }}
		</pre>
	</div>
</div>

@endsection
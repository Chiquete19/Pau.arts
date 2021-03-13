@extends('welcome')
@section('Edicion')

	<li>
		 <a style="margin-top: 8px;" class="navbar-brand" style="color:black;" href="{{route('editarPulseras')}}"><h5 style="color:#1FC8EC;">Editar Catalogo</h5></a>
	</li>
	<li></li>
	<li>
		 <a style="margin-top: 8px;" class="navbar-brand" style="color:black;" href="{{route('agregar')}}"><h5 style="color:#1FC8EC;">Agrega</h5></a>
	</li>

@endsection()
@section('Cambia')

		<div class="container" style="margin-top: 40px;">
			<center>
			<form method="POST" action="{{route('Agrega')}}">
				@csrf
				<div class="form-group" >
					<label><h4 style="color:white;">Nombre del producto:</h4></label>
					<input style="width: 55%" class="form-control" type="text" name="Nombre">
				</div>
				<div class="form-group">
					<label><h4 style="color:white;">Descripcion del Producto:</h4></label>
					<input style="width: 55%" class="form-control" type="text" name="Descripcion">
				</div>
				<div class="form-group">
					<label><h4 style="color:white;">Descripcion de imagen:</h4></label>
					<input style="width: 55%" class="form-control" type="text" name="DescripcionIMG">
				</div>
				<div class="form-group">
					<label><h4 style="color:white;">Url de imagen:</h4></label>
					<input style="width: 55%" class="form-control" type="text" name="Url">
				</div>
				<input class="btn btn-danger"  value="Subir" type="submit" name="">
			</form>
			
			</center>
			<br><br>
		</div>


@endsection()
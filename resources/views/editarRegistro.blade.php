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
	<?php
		$id = $_GET["id"];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "pau_art";

		$conexion = new mysqli($servername, $username, $password, $database);

		$consulta = "SELECT * FROM catalogos where id=$id";

		$datos = $conexion->query($consulta);
		$pulsera = mysqli_fetch_assoc($datos);

	?>
	<center><h1 style="color:white;">Editar Registro</h1></center><hr>
	<div class="container">
		<form method="GET" action="{{route('ActualizaDatos')}}">
		  <div class="form-group">
		    <label style="color:white;" for="nombre">Nombre de la Pulsera</label>
		    <input name="Nombre" type="text" class="form-control" placeholder="Teclea el nombre de la sucursal" required value="<?php echo $pulsera['nombre'] ?>">
		  </div>
		  <div class="form-group">
		    <label style="color:white;" for="exampleFormControlTextarea1">Nombre de la imagen</label>
		    <input name="Url" type="text" class="form-control" placeholder="Teclea el nombre de la sucursal" required value="<?php echo $pulsera['img'] ?>">
		  </div>
		  <div class="form-group">
		    <label style="color:white;" for="Horario">Descripcion de la imagen</label>
		    <input name="DescripcionIMG" type="text" class="form-control" placeholder="Selecciona el horario" required value="<?php echo $pulsera['imgdescripciones']; ?>">
		  </div>
		  <div class="form-group">
		    <label style="color:white;" for="nombre">Descripcion de la Pulsera</label>
		    <input name="Descripcion" type="text" class="form-control" required value="<?php echo $pulsera['descripcion']; ?>">
		  </div>
		  <input name="id" type="hidden" value="<?php echo $pulsera['id']; ?>">
		  <div>
		  	<input type="submit" class="btn btn-primary" value="Editar">
		  </div>
		</form>
	</div>
@endsection()
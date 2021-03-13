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
	//Conexion
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "pau_art";

	$conexion = new mysqli($servername, $username, $password, $database);

	$id = $_GET["id"];

	$sql = "DELETE from catalogos WHERE id = $id";

	if($conexion->query($sql) === TRUE){
		?>
		<button><a href="{{route('editarPulseras')}}">Regresar</a></button>
		<?php
	}else{
		echo "adiosw";
	}

 ?>
 @endsection()
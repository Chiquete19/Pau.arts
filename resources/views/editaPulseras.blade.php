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
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "pau_art";

		$conexion = new mysqli($servername, $username, $password, $database);
		$consulta = "SELECT * FROM catalogos";
		$datos = $conexion->query($consulta);
	 ?>
	 <div class="container">
		<table class="table table-dark" style="align-content:left; color:white;">
			<thead>
				<tr>
					<th>ID</th>
					<th>Img</th>
					<th>ImgDescripciones</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if($datos->num_rows >0){
						while ($row = $datos->fetch_assoc()) {
							echo "<tr>";
								echo "<td>".$row["id"]."</td>";
								echo "<td>".$row["img"]."</td>";
								echo "<td>".$row["imgdescripciones"]."</td>";
								echo "<td>".$row["nombre"]."</td>";
								echo "<td>".$row["descripcion"]."</td>";
					?>			<td>
								<form method="GET" action="{{route('editarRegistro')}}">
									<input name="id" type="hidden" value="<?php echo $row["id"] ?>">
									<input type="submit" class="btn btn-primary" value="Editar">
								</form>
								<form action="{{route('eliminarRegistro')}}" method="GET">
									<input name="id" type="hidden" value="<?php echo $row["id"] ?>">
									<input type="submit" class="btn btn-danger" value="Eliminar">
								</form>
								</td>
				<?php
							echo "</tr>";
						}
					}
				?>
			</tbody>
		</table>
	</div>

@endsection()
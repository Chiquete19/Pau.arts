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

        $nombre = $_GET["Nombre"];
        $descripcion = $_GET["Descripcion"];
        $DescripcionIMG = $_GET["DescripcionIMG"];
        $Url = $_GET["Url"];
        $id = $_GET["id"];

        $sql = "UPDATE catalogos SET nombre='$nombre', Descripcion='$descripcion', imgdescripciones='$DescripcionIMG', img='$Url' WHERE id=$id";

        if($conexion->query($sql) === TRUE){ 
        ?>
            <center>
             <h1 style='color:white;'>Registro Actualizado</h1><hr>
             <button style="align-items: center;" class="btn btn-danger"><a style="color:white;" href="{{route('editarPulseras')}}">Regresar a los Registros</a></button>
             </center>
        <?php
        } else {
          echo "Error: ". $sql . "<br><br>".$conexion->error."<br><br>";
        }
      ?>
    
@endsection()
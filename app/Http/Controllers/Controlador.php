<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Controlador extends Controller
{
  public function inicio()
    {
    	return view('Principal');
    }
  public function pulseras()
  {
  	$catalogos=App\Catalogo::all();
  	return view('Pulseras',compact('catalogos'));
  }
  public function sesion()
    {
    	return view('Sesion');
    }
  public function cuenta(Request $Datos)
  {
    $fomulario= new App\Catalogo;
    $fomulario->correo=$Datos->Correo;
    $fomulario->contrasena=$Datos->Contrasena;

    if ($fomulario->correo==="Hola@adios"&&$fomulario->contrasena==="What") {
        return view('agregar');
    }elseif ($fomulario->correo!="Hola@adios"||$fomulario->contrasena!="What")
      {
        return back()->with('mensaje','La Constraseña o el Correo son incorrectos');
      }

  }
  public function Agrega(Request $Salva)
  {
    $Guarda= new App\Catalogo;
    $Guarda->nombre=$Salva->Nombre;
    $Guarda->descripcion=$Salva->Descripcion;
    $Guarda->imgdescripciones=$Salva->DescripcionIMG;
    $Guarda->img=$Salva->Url;

    $Guarda->save();
    return view('editaPulseras');
  }
  public function editarPulseras()
  {
    return view('editaPulseras');
  }
  public function agregar()
  {
    return view('agregar');
  }
  public function editarRegistro()
  {
    return view('editarRegistro');
  }
  public function eliminarRegistro()
  {
    return view('eliminarRegistro');
  }
  public function ActualizaDatos()
  {
    return view('ActualizaDatos');
  }
}

@extends('welcome')
@section('Sesion')
@endsection()

@section('Cambia')
<center>
<div class="container" style="margin-top: 100px">

			@if(session('mensaje'))
				<div class="alert alert-danger" style="border-radius: 1rem;padding: 0.5rem 1rem;" role="alert">
				  <b>{{session('mensaje')}}</b>
				</div>
			@endif()
	
					
					<div class="col-4"></div>
					<div class="col-4" style="">
						<form method="POST" action="{{route('Cuenta')}}" style="border:1px solid ;border-radius: 25px; background-color: white;">
							@csrf
							<div class="form-group" style="margin-top: 10px;">
							<label><h5>Correo Electronico:</h5></label>
							<input class="form-control" type="email" name="Correo" placeholder="example@email.com" style="width: 55%">
							</div>
							<div class="form-group">
							<label><h5>Contraseña:</h5></label>
							<input style="width: 55%" class="form-control" type="password" name="Contrasena">
							</div>
							<button class="btn btn-danger" type="submit">Entrar</button>
							<br>
							&nbsp;
						</form>
					</div>
					<div class="col-4"></div>

					<br><br><br><br><br><br>
				
	
</div>
</center>
@endsection()

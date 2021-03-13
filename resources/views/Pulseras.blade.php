@extends('welcome')

@section('Cambia')


	<div class="container">
	<div class="row" style="margin-left: 30px;"><br>
	@foreach($catalogos as $info)
	<div class="col-4" style="margin-top: 30px;">
		<div class="card" style="width: 18rem;height: 27rem;background-color: #A6EDF3;">
		  <center><br>
		  <img style="width: 250px; height: 240px;" src="{{$info->img}}" class="card-img-top" alt="{{$info->imgdescripciones}}" ></center>
		  <div class="card-body">
		    <h5 class="card-title">{{$info->nombre}}</h5>
		    <hr>
		    <p style="font-size: 17px;" class="card-text">{{$info->descripcion}}</p>
		  </div>
		</div>
	</div>
	@endforeach()
	</div>
	</div>
@endsection()
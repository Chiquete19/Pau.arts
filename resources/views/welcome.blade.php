<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pau_Art._</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="icon" href="logo.jpg">
    
</head>
<body style="background-color: #262835;">
    <nav class="navbar navbar-dark" style="background-color: #492D61;">
        <ul class="nav nav-pills">
          <li class="nav-item active">  
            <a class="navbar-brand" style="color:black;" href="{{route('Principal')}}"><img src="logo.jpg" style="margin-left: 10px; width:45px;height: 45px;"></a>
          </li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item active">  
            <a style="margin-top: 8px;" class="navbar-brand" style="color:black;" href="{{route('Pulseras')}}"><h5 style="color: #BB80DD;">Catalogo</h5></a>
          </li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          @yield('Edicion')
        </ul>
        <ul class="nav nav-pills">
          <li class="nav-item active" style="margin-top: 8px; align-self: all ; margin-right:9px; ">  
            <a class="navbar-brand" style="color:#4B326C;" href="{{route('Sesion')}}"><h5>Inicia Sesion</h5></a>
          </li>
        <ul>
    </nav>
    @yield('Cambia')


</body>
</html>
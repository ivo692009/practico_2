 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pedidos YA!</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
<style>
    body{
background: url(../imagenes/fondo.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">

	<div class="collapse navbar-collapse js-navbar-collapse">
		
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        </ul>
	</div><!-- /.nav-collapse -->
    </nav>
</div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--base href="http://192.168.1.65/depasycasas/"-->
    <title>Compra, Venta, Traspasos | Casas, Departamentos, Bienes y Raices</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <!--link rel="stylesheet" media="screen and (min-device-width: 800px)" href="css/app.css" /-->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/vendor/modernizr.js"></script>

    <script src="js/vendor/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/jquery.ajax-progress.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/knockoutjs.min.js"></script>

  </head>
  <body>

	@section('header')
    <header>
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><img src="img/menu.logo.png" class="show-for-large" /></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <li class=""><a href="#">Crear cuenta</a></li>
            <li class=""><a href="#">Login</a></li>
          </ul>

          <!-- Left Nav Section -->
          <ul class="left">
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Publica Gratis</a></li>
            <!--li><a href="#">Left Nav Button</a></li-->
          </ul>
        </section>
      </nav>
    </header>
	@show

 	@yield('content')

	@section('footer')
    <footer class="row fullWidth ">
      <div class="columns large-2"></div>
      <div class="columns large-8 fix-font75">depasycasas.com.mx, &copy; 2014 | Jupiter #31 Col. Marte, Polanco, Miguel Hidalgo | 5559-55-55-999 | info@depasycasas.com.mx</div>
      <div class="columns large-2"></div>
    </footer>
	@show

    <script>
      $(document).foundation();
    </script>
  </body>
</html>

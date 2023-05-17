<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INICIO</title>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCysQc1fy9gizdUrRdWqUEi713ZjW5B4Nw&libraries=places&callback=initMap">
	</script>

</head>

<body>
	<header>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">Kantharo</a>
				</div>


				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url(); ?>/menus/desayunos">DESAYUNOS <span class="sr-only">(current)</span></a></li>
						<li><a href="<?php echo site_url(); ?>/menus/almuerzos">ALMUERZOS</a></li>
						<li><a href="<?php echo site_url(); ?>/menus/postres">POSTRES</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
					<img src="<?php echo base_url() ?>/assets/images/logo4.png" alt="" width="10%">
				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->

		</nav>
	</header>


	<div class="container">
		<div class="row">
			<div class="col-md-8" Align="justify">
				<h1 Align="center">¿QUIENES SOMOS?</h1>
				<P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam deleniti earum quam in minus voluptas magni eaque, ad quos laboriosam minima, magnam modi beatae id voluptates corporis! Cum maiores minima veritatis accusamus alias ipsum? Dolore nihil, minima officiis quam illo dolor error minus debitis quisquam iure molestias ex aliquam modi similique dicta tenetur, vitae maxime alias unde doloribus vel vero dolorem! Hic consequuntur sint voluptate doloremque facilis, voluptatem atque accusantium quibusdam nostrum saepe vel modi porro magni cum, maxime iusto consequatur. Facilis, quidem! Consectetur eaque beatae voluptatibus corrupti itaque expedita dolores odio fugiat quos vitae illo eligendi necessitatibus, aliquid modi!</P>
			</div>
			<div class="col-md-4">
				<img src="<?php echo base_url() ?>/assets/images/terraza-r.png" alt="" width="125%" height="220px">
			</div>
		</div>
		<h1 style="color: #F7AE1B;">_________________________________________________________</h1>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12" Align="center">
				<h1>¿QUE TE GUSTA?</h1>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel aliquid expedita consequuntur perferendis dignissimos? Cupiditate possimus culpa qui, odio asperiores placeat aliquam itaque necessitatibus ab doloribus optio ipsa non explicabo.</p>
			</div>

		</div>
		<div class="row">
			<div class="col-xs-8 col-md-3">

				<img src="<?php echo base_url() ?>/assets/images/pla.png" alt="" width="90%">
				<br>
				<br>
				<img src="<?php echo base_url() ?>/assets/images/pla1.png" alt="" width="90%">
				<br>
				<br>
				<img src="<?php echo base_url() ?>/assets/images/pla2.png" alt="" width="90%">
				<br>
				<br>

			</div>
			<div class="col-xs-8 col-md-3">

				<img src="<?php echo base_url() ?>/assets/images/pla3.png" alt="" width="90%">
				<br>
				<br>
				<img src="<?php echo base_url() ?>/assets/images/pla4.png" alt="" width="90%">
				<br>
				<br>
				<img src="<?php echo base_url() ?>/assets/images/pla5.png" alt="" width="90%">
				<br>


			</div>
			<div class="col-xs-8 col-md-3">

				<img src="<?php echo base_url() ?>/assets/images/pla6.png" alt="" width="80%">
				<br>
				<br>
				<img src="<?php echo base_url() ?>/assets/images/pla7.png" alt="" width="90%">
				<br>
				<br>
				<img src="<?php echo base_url() ?>/assets/images/pla8.png" alt="" width="90%">
				<br>
				<br>

			</div>
			<div class="col-xs-4 col-md-3">

				<img src="<?php echo base_url() ?>/assets/images/pla9.png" alt="" width="90%">
				<br>
				<br>
				<img src="<?php echo base_url() ?>/assets/images/pla10.png" alt="" width="90%">
				<br>
				<br>
				<img src="<?php echo base_url() ?>/assets/images/pla11.png" alt="" width="90%">
				<br>
				<br>

			</div>
		</div>
		<h1 style="color: #F7AE1B;">_________________________________________________________</h1>
	</div>

	<div class="container" Align="center">
		<div class="row">
			<div class="col-md-12">
				<h1>¡SIGUENOS!</h1>
				<br>
			</div>
			<div class="col-xs-8 col-md-3">
				<a href="#">
					<img src="<?php echo base_url() ?>/assets/images/fb.png" alt="" width="50%">
				</a>
			</div>
			<div class="col-xs-8 col-md-3">
				<a href="#">
					<img src="<?php echo base_url() ?>/assets/images/ig.png" alt="" width="50%">
				</a>
			</div>
			<div class="col-xs-8 col-md-3">
				<a href="#">
					<img src="<?php echo base_url() ?>/assets/images/tw.png" alt="" width="50%">
				</a>
			</div>
			<div class="col-xs-8 col-md-3">
				<a href="#">
					<img src="<?php echo base_url() ?>/assets/images/wh.png" alt="" width="50%">
				</a>
			</div>
		</div>
		<h1 style="color: #F7AE1B;">_________________________________________________________</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12" Align="center">
				<h1>¡ENCUENTRANOS!</h1>
			</div>
			<br>
			<div class="col-md-12" Align="center">
				<div id="mapaDireccion" style="width: 100%; height:350px;"></div>
			</div>
			<script type="text/javascript">
				function initMap() {
					var coordenadaCentral = new google.maps.LatLng(-0.1298373695149817, -78.47812223090486);
					var mapa1 = new google.maps.Map(
						document.getElementById('mapaDireccion'), {
							center: coordenadaCentral,
							zoom: 15,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						}
					);
				}
			</script>

		</div>
	</div>
	<br>





	<h1 style="color: white; background-color:black"></h1>

	<footer>
		<div class="panel-body" style="background-image: linear-gradient(45deg, #1a0209e3 45%, black 100%); color:white">
			<div class="container">

				<div class="row">
					<div class="col-md-8">
						<h4>Bryan Cornejo © </h4>

					</div>
					<div class="col-md-4">

						<img src="img/RD.png" alt="">
					</div>
				</div>

			</div>
			<hr>
		</div>
	</footer>

</body>

</html>
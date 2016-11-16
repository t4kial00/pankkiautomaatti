<!DOCTYPE html>
<html>
<head>
	<title>Hallintajärjestelmä</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		min-height: 2000px
		padding-top: 140px;
	</style>


</head>

<body>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Hallintasivu</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo site_url('etusivu');?>">Etusivu</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown toggle" data-toggle="dropdown">Tilien hallinta<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('tili/naytaTilit');?>">Näytä tilit</a></li>
							<li><a href="<?php echo site_url('nosto/naytaNostot');?>">Näytä nostot</a></li>
						</ul>

						<li class="dropdown">
						<a href="#" class="dropdown toggle" data-toggle="dropdown">Asiakkaiden hallinta<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('asiakas/naytaAsiakkaat');?>">Näytä asiakkaat</a></li>
							<li><a href="<?php echo site_url('asiakas/lisaaAsiakas');?>">Lisää asiakas</a></li>
						</ul>
						</li>

						<li class="dropdown">
						<a href="#" class="dropdown toggle" data-toggle="dropdown">Korttien hallinta<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('kortti/naytaKortit');?>">Näytä kortit</a></li>
							<li><a href="<?php echo site_url('kortti/lisaaKortti');?>">Lisää kortti</a></li>
						</ul>
						</li>
					</li>

					</ul>
										 <ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('etusivu/logout');?>">Kirjaudu ulos</a></li>

				</ul>
			</div>
		</div>
	</nav>

	<div class="container">

	


		



	
	
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
		padding-top: 70px;
	</style>


</head>

<body>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
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
						<a href="#" class="dropdown toggle" data-toggle="dropdown">Tilit<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('tili/naytaTilit');?>">Näytä tilit</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	


		



	
	
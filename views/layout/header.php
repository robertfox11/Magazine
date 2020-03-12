<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= URL ?>assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= URL ?>assets/css/default.css">
	<title>Magazine</title>
</head>

<body class="d-flex flex-column bg-light">
	<header>
		<!-- company logo navigation menu-->
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand " href="<?= URL ?>index.php">
				<img class="d-inline-flex mx-5 mb-2 " width="150" height="40" src="<?= URL ?>assets/img/logoImproving.png" alt="logo">
			</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav text-center headimg mb-2">
					<li class="nav-item active mx-2 ">
						<a class="nav-link text-dark" href="<?= URL ?>index.php">Bebida</a>
					</li>
					<li class="nav-item mx-2  ">
						<a class="nav-link  text-dark" href="about.html">Frescos</a>
					</li>
					<li class="nav-item mx-2 ">
						<a class="nav-link btn text-dark" href="services.html">Conservacion</a>
					</li>
					<li class="nav-item mx-2 ">
						<a class="nav-link text-dark" href="galery.html">Mundo Animal</a>
					</li>
					<li class="nav-item mx-2 ">
						<a class="nav-link text-dark" href="form.html">Distribución</a>
					</li>
				</ul>
				<ul class="nav navbar-nav flex-row justify-content-between ml-auto">
					<li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
					<li class="dropdown order-1">
						<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right mt-2">
							<li class="px-3 py-2">
								<form class="form" role="form">
									<div class="form-group">
										<input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
									</div>
									<div class="form-group">
										<input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">Login</button>
									</div>
									<div class="form-group text-center">
										<small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
										<small><a href="<?= URL ?>user/register">Registrese aqui</a></small>
									</div>
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<main class="container my-4 bg-light">
	
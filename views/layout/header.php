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
						<a class="nav-link text-dark" href="<?= URL ?>">Bebida</a>
					</li>
				</ul>
				<ul class="nav navbar-nav flex-row justify-content-between ml-auto">
					<li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
					<li class="dropdown order-1">
						<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right mt-2">
							<li class="px-3 py-2">
							<?php if (!isset($_SESSION['identity'])) : ?>
								<form action="<?= URL ?>user/login" method="POST" class="form">
									<div class="form-group">
									<input type="email" name="email" class="form-control form-control-sm" placeholder="Email" />
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-block" value="login">
									</div>
									<div class="form-group text-center">
										<small><a href="<?= URL ?>user/register">Registrese aqui</a></small>
									</div>
								</form>
								<?php else : ?>
									<h3><?= $_SESSION['identity']->name ?> <?= $_SESSION['identity']->lastname ?></h3>
								<?php endif; ?>
							</li>
							<li px-3 py-2>
							<a class="category category-blue" href="<?= URL ?>user/logout">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<main class="container my-4 bg-light">
	
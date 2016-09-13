<!DOCTYPE html>
<html>
    <head>
        <title>Galego</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
		<?php wp_head();/**/ ?>
    </head>
    <body id="home">
		<div class="menu" style="background-color: #f9faef  ">
	<div class="container text-center">
	<a href="#"><img src="/img/logo-galego.png"></a>
</div>
	<nav role="navigation" class="navbar navbar-default" id="menu">
	<div class="navbar-header">
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

	</div>
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<?php
		wp_nav_menu(
				array(
					'container' => FALSE,
					'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
					'theme_location' => 'header-menu'
				)
				);
		?>
<!--		<ul class="nav navbar-nav">
			<li class="active"><a href="#home">INICIO</a></li>
			<li><a href="#servicios">SERVICIOS</a></li>
			<li><a href="#proyectos">PROYECTOS</a></li>
			<li><a href="#clientes">CLIENTES</a></li>
			<li><a href="#equipo">EQUIPO</a></li>
			<li><a href="#contactanos">CONTACTANOS</a></li>
		</ul>-->
	</div>
</nav>
<?php
session_start();

//Verificar si el usuario ha iniciado sesión
if(!isset($_SESSION["userEmail"]) {
	//Si no ha iniciado sesión, redirige a la página de inicio de sesión
	header("Location: login.html");
	exit();
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>CYBERPLAZA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							<header id="header">
								<div class="inner">

									<!-- Logo -->
										<h1><a href="index.html" id="logo">CYBERPLAZA</a></h1>

									<!-- Navegación -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="index.html">BIENVENID@</a></li>
												<li>
													<a href="#">MENÚ</a>
													<ul>
														<li><a href="#">COMPONENTES</a></li>
														<li><a href="#">PERIFÉRICOS</a></li>
														<li>
															<a href="#">CATEGORÍA</a>
															<ul>
																<li><a href="#">COMPONENTES</a></li>
																<li><a href="#">PERIFÉRICOS</a></li>
																<li><a href="#">MONITORES</a></li>
																<li><a href="#">PC COMPLETA</a></li>
															</ul>
														</li>
														<li><a href="#">SERVICIOS</a></li>
													</ul>
												</li>
												<li><a href="nosotros.html">NOSOTROS</a></li>
												<li><a href="distribuidores.html">DISTRIBUIDORES</a>
												<ul>
													<li><a href="#">SERVICIO TÉCNICO DE PC</a></li>
													<li><a href="#">SERVICIO TÉCNICO DE LAPTOP</a></li>
													<li><a href="#">SERVICIO DE IMPRESORA</a></li>
												</ul>
											</li>
												<li><a href="tiendas.html">TIENDAS</a></li>
												<li><a href="Login.html">Login</a></li>
											</ul>
										</nav>

								</div>
							</header>

						<!-- Banner -->
							<div id="banner">
								<h2><strong>WILSON:</strong> AQUÍ ENCUENTRAS DE TODO
								<br />
								Y AL MEJOR PRECIO</h2>
								<p>AL HACER CLIC AL BOTÓN TE ATENDEREMOS MÁS RÁPIDO, ¿Aceptas?</p>
								<a href="#" class="button large icon solid fa-check-circle">Sí, acepto</a>
							</div>

					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style1">
						<div class="inner">

							<!-- Características  -->
								<section class="container box feature1">
									<div class="row">
										<div class="col-12">
											<header class="first major">
												<h2>LO MÁS IMPORTANTE DE TODO ES QUE...</h2>
												<p>Aquí encontrarás de todo al <strong>MEJOR PRECIO</strong> ...</p>
											</header>
										</div>
										<div class="col-4 col-12-medium">
											<section>
												<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
												<header class="second icon solid fa-user">
													<h3>INFOTEC</h3>
													<p>EXPERTOS EN VENTA DE PC Y LAPTOP</p>
												</header>
											</section>
										</div>
										<div class="col-4 col-12-medium">
											<section>
												<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
												<header class="second icon solid fa-cog">
													<h3>MI PC LISTA</h3>
													<p>EXPERTOS BRINDANDO SERVICIOS</p>
												</header>
											</section>
										</div>
										<div class="col-4 col-12-medium">
											<section>
												<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
												<header class="second icon solid fa-chart-bar">
													<h3>GRUPO MENDOZA</h3>
													<p>EXPERTOS EN SERVICIOS TÉCNICOS</p>
												</header>
											</section>
										</div>
										<div class="col-12">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto eligendi error accusamus! Pariatur, rem quasi. Aut sapiente expedita asperiores ea ex quam dolorem! Iste magni necessitatibus ratione soluta corporis ipsa..</p>
										</div>
									</div>
								</section>

						</div>
					</div>
					<div class="wrapper style2">
						<div class="inner">

							<!-- Característica 2 -->
								<section class="container box feature2">
									<div class="row">
										<div class="col-6 col-12-medium">
											<section>
												<header class="major">
													<h2>Aquí va una información de nosotros</h2>
													<p>Algo brevemente importante</p>
												</header>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
													Recusandae aut a ducimus, quo perferendis quasi repellendus illum sequi porro perspiciatis optio in delectus.
													In alias consequatur dolorum iusto tempore possimus?</p>
												<footer>
													<a href="#" class="button medium icon solid fa-arrow-circle-right">¿Estás de acuerdo?</a>
												</footer>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<header class="major">
													<h2>Aquí va nuestra misión</h2>
													<p>Algo impactante</p>
												</header>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
													Recusandae aut a ducimus, quo perferendis quasi repellendus illum sequi porro perspiciatis optio in delectus.
													In alias consequatur dolorum iusto tempore possimus?</p>
												<footer>
													<a href="#" class="button medium alt icon solid fa-info-circle">¿Estás listo para comenzar?</a>
												</footer>
											</section>
										</div>
									</div>
								</section>

							</div>
					</div>
					<div class="wrapper style3">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="col-8 col-12-medium">

										<!-- Lista de artículos -->
											<section class="box article-list">
												<h2 class="icon fa-file-alt">Reseñas recientes</h2>

												<!-- Excerpt (extracto) -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">16 de Febrero</span>
																<h3><a href="#">Reparación de una laptop</a></h3>
															</header>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
																Recusandae aut a ducimus, quo perferendis quasi repellendus illum sequi porro perspiciatis optio in delectus.
																In alias consequatur dolorum iusto tempore possimus?</p>
														</div>
													</article>

												<!-- Excerpt (extracto) -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic05.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">18 de Marzo</span>
																<h3><a href="#">Aquí pude encontrar la PC soñada para mi hijo</a></h3>
															</header>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
																Recusandae aut a ducimus, quo perferendis quasi repellendus illum sequi porro perspiciatis optio in delectus.
																In alias consequatur dolorum iusto tempore possimus?</p>
														</div>
													</article>

												<!-- Excerpt (extracto) -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">06 de Mayo</span>
																<h3><a href="#">Aquí pude dar solución a mi impresora</a></h3>
															</header>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
																Recusandae aut a ducimus, quo perferendis quasi repellendus illum sequi porro perspiciatis optio in delectus.
																In alias consequatur dolorum iusto tempore possimus?</p>
														</div>
													</article>

											</section>
									</div>
									<div class="col-4 col-12-medium">

										<!-- Destacados -->
											<section class="box spotlight">
												<h2 class="icon fa-file-alt">Destacados</h2>
												<article>
													<a href="#" class="image featured"><img src="images/pic07.jpg" alt=""></a>
													<header>
														<h3><a href="#">Comentario destacado</a></h3>
														<p>Aquí pude encontrar la PC soñada para mi hijo</p>
													</header>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
														Recusandae aut a ducimus, quo perferendis quasi repellendus illum sequi porro perspiciatis optio in delectus.
														In alias consequatur dolorum iusto tempore possimus?</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
														Recusandae aut a ducimus, quo perferendis quasi repellendus illum sequi porro perspiciatis optio in delectus.
														In alias consequatur dolorum iusto tempore possimus?</p>
													<footer>
														<a href="#" class="button alt icon solid fa-file-alt">Continuar leyendo</a>
													</footer>
												</article>
											</section>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer Wrapper -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links de las empresas -->
									<section>
										<h2>Enlaces de relleno</h2>
										<ul class="divided">
											<li><a href="#">Quam turpis feugiat dolor</a></li>
											<li><a href="#">Amet ornare in hendrerit </a></li>
											<li><a href="#">Semper mod quisturpis nisi</a></li>
											<li><a href="#">Consequat etiam phasellus</a></li>
											<li><a href="#">Amet turpis, feugiat et</a></li>
											<li><a href="#">Ornare hendrerit lectus</a></li>
											<li><a href="#">Semper mod quis et dolore</a></li>
											<li><a href="#">Amet ornare in hendrerit</a></li>
											<li><a href="#">Consequat lorem phasellus</a></li>
											<li><a href="#">Amet turpis, feugiat amet</a></li>
											<li><a href="#">Semper mod quisturpis</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section>
										<h2>Más links</h2>
										<ul class="divided">
											<li><a href="#">Quam turpis feugiat dolor</a></li>
											<li><a href="#">Amet ornare in in lectus</a></li>
											<li><a href="#">Semper mod sed tempus nisi</a></li>
											<li><a href="#">Consequat etiam phasellus</a></li>
										</ul>
									</section>

								<!-- Links -->
									<section>
										<h2>Algunos links de servicios</h2>
										<ul class="divided">
											<li><a href="#">Quam turpis feugiat dolor</a></li>
											<li><a href="#">Amet ornare hendrerit lectus</a></li>
											<li><a href="#">Semper quisturpis nisi</a></li>
											<li><a href="#">Consequat lorem phasellus</a></li>
										</ul>
									</section>

							</div>
							<div class="col-6 col-12-medium imp-medium">

								<!-- Sobre nosotros -->
									<section>
										<h2><strong>Cyberplaza</strong></h2>
										<p>Hola, somos <strong>Cyberplaza</strong>, un lugar donde podrás adquirir tu equipo de la manera más confiable y segura
										</p>
										<a href="#" class="button alt icon solid fa-arrow-circle-right">Saber más</a>
									</section>

								<!-- Contacto -->
									<section>
										<h2>Enlaces de contacto</h2>
										<div>
											<div class="row">
												<div class="col-6 col-12-small">
													<dl class="contact">
														<dt>Twitter</dt>
														<dd><a href="https://twitter.com/home">@UTP</a></dd>
														<dt>Facebook</dt>
														<dd><a href="#">facebook.com/UTP</a></dd>
														<dt>WWW</dt>
														<dd><a href="www.utp.edu.pe">www.utp.edu.pe</a></dd>
														<dt>Email</dt>
														<dd><a href="admision@utp.edu.pe">admision@utp.edu.pe</a></dd>
													</dl>
												</div>
												<div class="col-6 col-12-small">
													<dl class="contact">
														<dt>Encuéntranos en:</dt>
														<dd> <br>
															Av. Garcilaso de la Vega<br />
															1348, Lima<br />
															Lunes - Sábado: 9am - 9pm <br>
															Domingo: 9am - 6pm
														</dd>
														<dt>Teléfono</dt>
														<dd>(51) 960309336</dd>
													</dl>
												</div>
											</div>
										</div>
									</section>

							</div>
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Todos los derechos reservados para el mejor grupo de la UTP 2024</li><li>Design: <a href="https://class.utp.edu.pe/">GRUPO SOA</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

		</div>

		<!-- Scripts importantes -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>
<!DOCTYPE HTML>
<!--
	Forty by 
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->


<?php
$nombre = isset($_GET['nombre'])?$_GET['nombre']:'';
$email = isset($_GET['email'])?$_GET['email']:'';
$empresa = isset($_GET['empresa'])?$_GET['empresa']:'';
$telefono = isset($_GET['telefono'])?$_GET['telefono']:'';
//$mensaje = isset($_GET['message'])?str_replace("%0A","<br>", $_GET['message']):'';
//$mensaje = isset($_GET['message'])?$_GET['message']:'';

session_start();
if(isset($_SESSION['mensaje'])){
	$nombre = $_SESSION['nombre'];
	$email = $_SESSION['email'];
	$empresa = $_SESSION['empresa'];
	$telefono = $_SESSION['telefono'];
	$mensaje = $_SESSION['mensaje'];
	unset($_SESSION['mensaje']);
}
?> 


<html>
	<head>
		<title>static </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../css/noscript.css"/>

		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
    <div id="preloader"><div id="loader">&nbsp;</div></div>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
                <header id="header" class="alt">
        <a href="../../index.html" class="logo">
          <img src="../../images/logo.png" alt="" />
          <strong>Solis</strong>
          <span>Topografia</span>
        </a>
        <nav>
          <a href="#menu">Menu</a>
        </nav>
      </header>

      <!-- Menu -->
      <nav id="menu">
        <ul class="links">
          <li><a href="../../index.php">Home</a></li>
          <li><a href="../../obra-civil-mallorca.php">Obra civil</a></li>
          <li><a href="../../edificacion-mallorca.php">Edificación</a></li>
          <li><a href="../../campos-golf-mallorca.php">Campos de Golf</a></li>
		  <li><a href="../../catastro-mallorca.php">Catastro</a></li>

		  
        </ul>
        <ul class="actions stacked">
          <li><a href="../../experiencia-mallorca.php" class="button primary fit">Experiencia</a></li>
          <li><a href="../../contactar-topografo.php" class="button fit">Contacto</a></li>
        </ul>
      </nav>
				
				
				
				
				
					
		<article class="container box style3">
			<section>
				<header>
					<h3>MESSAGE HAS BEEN SENT CORRECTLY:</h3>
				</header>
				<div class="table-wrapper">
					<table class="default">
						<tbody>
							<tr>
								<td><strong>Nombre: </strong></td>
								<td><?php echo $nombre ?></td>
								<td><strong>Mail: </strong></td>
								<td><?php echo $email ?></td>
							</tr>
							<tr>
								<td><strong>Empresa: </strong></td>
								<td><?php echo $empresa ?></td>
								<td><strong>Teléfono: </strong></td>
								<td><?php echo $telefono ?></td>
							</tr>
							<tr>
								<td colspan="2"><strong>Mensaje: </strong></td>
								<td colspan="2"><textarea style="width:100%; border: 0px; rows="10" onchange="check_text(1000);" onkeyup="check_text(1000);" onkeydown="hide_error('messge');"><?php echo $mensaje ?></textarea></td>
							</tr>
						</tbody>
					</table>
				</div>	
			</section>		
		</article>
		
		<section>
			<footer style="text-align:center;">
				<a href="../../index.php" class="button style2 scrolly">ATRAS</a>
			</footer>
		</section>
	

			


				<!-- Footer -->
                <footer id="footer">
        <div class="inner">
          <ul class="copyright">
            <li><a href="../../legal.php" rel="nofollow noindex">© Solís Topografía</a></li>
        </ul>
        </div>
      </footer>

			</div>

		<!-- Scripts -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.scrolly.min.js"></script>
    <script src="../js/jquery.scrollex.min.js"></script>
    <script src="../js/browser.min.js"></script>
    <script src="../js/breakpoints.min.js"></script>
    <script src="../js/util.js"></script>
    <script src="../js/main.js"></script>
	<script src="../js/loader.js"></script>


	</body>
</html>
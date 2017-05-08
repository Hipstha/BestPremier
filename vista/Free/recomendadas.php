<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.css">
<script src="../../js/jquery-1.12.0.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="estilo.css">

	<head>
		<title>Bienvenido</title>
	</head>

	<body>
		
		<style type="text/css">

			body{background-color:#2D2C2C ;}
			
		</style>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				
				<!-- Brand -->
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					</button>
					<a href="index.php" class="navbar-brand"><strong>BestPremier</strong></a>
				</div>

				<div class="collapse navbar-collapse" id="global">
					<ul class="nav navbar-nav">
						
						<li>
							<a href="cartelera.php" class="active">En cartelera <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="estrenos.php">Próximos estrenos <span class="sr-only">(current)</span></a>
						</li>

						<li class="active">
							<a href="#">Películas recomendadas <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="peliculas.php">Ver películas <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<form action="buscar.php" method="POST" class="navbar-form navbar-left">
								<div class="form-group">
									<input type="text" size="50" class="form-control" name="titulo" id="titulo" placeholder="Buscar título">
								</div>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
							</form>
						</li>

						<li align="right">
							<a href="faqs.php">FAQ's
							 <span class="sr-only">(current)</span></a>
						</li>

						<li align="right">
							<a href="#" data-toggle="modal" data-target="#myModal">Iniciar sesión <span class="sr-only">(current)</span></a>
						</li>

					</ul>
				</div>
			</div>
		</nav>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 align="center" class="modal-title" id="myModalLabel">Ingresa tus datos</h3>
					</div>
					<div class="modal-body">
						<form action="#" method="POST" >
							
							<table align="center">
								<tr>
									<th>Usuario: </th>
									<td>
										<input type="text" id="usuario" size="40" name="usuario" class="form-control" placeholder="Ingresa tu nombre de usuario" required>
									</td>
								<tr></tr>
								<tr>
									<th>Contraseña: </th>
									<td>
										<input type="password" id="pass" size="40" name="pass" class="form-control" placeholder="Ingresa tu contraseña" required>
									</td>
								</tr>
							</table>

							<hr>
							<div align="center">
								<a href="registro.php">¿No tienes cuenta? Registrate!</a>
							</div>
							<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Entrar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
						</form>
					</div>
				</div>
			</div>
		</div>



	<!-- Trailer 1 -->
		<div class="modal fade" id="Trailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 align="center" class="modal-title" id="myModalLabel">The big bang theory</h3>
					</div>
					<div class="modal-body">
						<iframe width="560" height="315" src="http://streamplay.to/embed-41k7vd39riud.html" frameborder="0" allowfullscreen></iframe>
					</div>
					<hr>
					<h4 class="text-center">Sinópsis</h4>
					<p>Leonard y Sheldon son científicos destacados en Caltech , amigos a su vez de Howard y Raj, que son presentados como unos completos geeks, alejados de las inquietudes y problemas de la gente común. En el curso de la serie se muestra la dificultad de los protagonistas masculinos para relacionarse con personas de fuera de su entorno, principalmente de sexo femenino, dando lugar a situaciones cómicas.</p>
					<hr>
					<h3 class="text-center">Comentarios</h3>
					<div class="fb-comments" data-href="http://localhost:8080/BestPremier/vista/Free/cartelera.php?=latin" data-numposts="5"></div>
				</div>
			</div>
		</div>
		<!-- Final Trailer 1 -->

		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="thumbnail">
						<img src="../../img/guardianes.jpg" width=200px height=100px>
						<div class="caption">
							<h3 align="center">The big bang theory</h3>
							<p><strong>Duración:</strong> 43 minutos</p>
							<p><strong>Actores:</strong> Johnny Galecki</p>
							<p><strong>Director:</strong> Chuck Lorre</p>
							<p><strong>Clasificación:</strong> B</p>
							<p><strong>Género:</strong> Comedia</p>	
							<p><strong>Popularidad:</strong> 550 votos</p>	
							<p class="text-center"><a data-toggle="modal" data-target="#Trailer" href="#" class="btn btn-primary">Ver Película <span class="glyphicon glyphicon-facetime-video"></span></a></p>
						</div>
					</div>
				</div>

			</div>
		</div>




			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	</body>

	<script type="javascript">
		$(document).ready(function(){
			$('#myModal').on('shown.bs.modal', function () {
  				$('#myInput').focus()
			})
			$('#Trailer').on('shown.bs.modal', function () {
  				$('#myTrailer').focus()
			})
			$('#Trailer2').on('shown.bs.modal', function () {
  				$('#myTrailer').focus()
			})
			$('#Trailer3').on('shown.bs.modal', function () {
  				$('#myTrailer').focus()
			})
		});
	</script>

	<script type="javascript">
		$(document).ready(function(){
			$('#myModal').on('shown.bs.modal', function () {
  				$('#myInput').focus()
			})
		});
	</script>

</html>
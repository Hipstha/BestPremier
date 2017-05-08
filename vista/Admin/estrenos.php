<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="estilo.css">
<script src="../../js/jquery-1.12.0.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

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
						
						<li class="active">
							<a href="#">Proximos estrenos <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="recomendadas.php">Películas recomendadas <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="subidas.php">Películas subidas <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="free.php">Películas free <span class="sr-only">(current)</span></a>
						</li>


						<li>
							<a href="usuarios.php">Usuarios <span class="sr-only">(current)</span></a>
						</li>

						<li align="right">
							<a href="faqs.php">FAQ's
							 <span class="sr-only">(current)</span></a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nombre de usuario <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labellebdy="dropdownMenu1">
								<li align="center">
									<a href="main.php">Mi cuenta</a>
								</li>
								<li align="center">
									<a href="#">Cerrar sesión</a>
								</li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover fondotabla">
						<tr>
							<th class="text-center">Agregar proximo estreno: </th>
							<td class="text-center">
								<a href="ingresar_estreno.php" class="btn btn-success">Agregar nuevo <span class="glyphicon glyphicon-plus"></span></a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

			<!-- Trailer 1 -->
		<div class="modal fade" id="Trailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 align="center" class="modal-title" id="myModalLabel">No digas su nombre</h3>
					</div>
					<div class="modal-body">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/hsF_eGBmw3g" frameborder="0" allowfullscreen></iframe>
					</div>
					<hr>
					<h4 class="text-center">Comentarios</h4>
					<div class="fb-comments" data-href="http://localhost:8080/BestPremier/vista/Free/estrenos.php?=No-digas" data-numposts="5"></div>
				</div>
			</div>
		</div>
		<!-- Final Trailer 1 -->

		<!-- Trailer 2 -->
		<div class="modal fade" id="Trailer2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 align="center" class="modal-title" id="myModalLabel">Piratas del caribe</h3>
					</div>
					<div class="modal-body">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/YgU6L94rKxA" frameborder="0" allowfullscreen></iframe>
					</div>
					<hr>
					<h4 class="text-center">Comentarios</h4>
					<div class="fb-comments" data-href="http://localhost:8080/BestPremier/vista/Free/estrenos.php?=Piratas" data-numposts="5"></div>
				</div>
				</div>
			</div>
		</div>
		<!-- Final Trailer 2 -->

		<!-- Trailer 2 -->
		<div class="modal fade" id="Trailer3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 align="center" class="modal-title" id="myModalLabel">Mujer Maravilla</h3>
					</div>
					<div class="modal-body">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/HNPmlblP4rw" frameborder="0" allowfullscreen></iframe>
					</div>
					<hr>
					<h4 class="text-center">Comentarios</h4>
					<div class="fb-comments" data-href="http://localhost:8080/BestPremier/vista/Free/estrenos.php?=Maravilla" data-numposts="5"></div>
				</div>
			</div>
		</div>
		<!-- Final Trailer 2 -->


		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="thumbnail">
						<img src="../../img/nunca.jpg" width=200px height=100px>
						<div class="caption">
							<h3 align="center">No Digas su Nombre</h3>
							<p><strong>Actores:</strong> Douglas Smith</p>
							<p><strong>Director:</strong>  Stacy Title</p>
							<p><strong>Género:</strong> Terror</p>	
							<p class="text-center"><a data-toggle="modal" data-target="#Trailer" href="#?=no-digas" class="btn btn-primary">Ver trailer <span class="glyphicon glyphicon-facetime-video"></span></a></p>
							<p class="text-center"><a href="modificar_Estreno.php" class="btn btn-success">Modificar <span class="glyphicon glyphicon-pencil"></span></a></p>
						</div>
					</div>
				</div>
				
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="thumbnail">
						<img src="../../img/piratas.jpg" width=200px height=100px>
						<div class="caption">
							<h3 align="center">Piratas del Caribe:</h3>
							<p><strong>Actores:</strong> Johnny Depp</p>
							<p><strong>Director:</strong> Joachim Rønning</p>
							<p><strong>Género:</strong> Aventura</p>	
							<p class="text-center"><a data-toggle="modal" data-target="#Trailer2" href="#" class="btn btn-primary">Ver trailer <span class="glyphicon glyphicon-facetime-video"></span></a></p>
							<p class="text-center"><a href="#" class="btn btn-success">Modificar <span class="glyphicon glyphicon-pencil"></span></a></p>
						</div>
					</div>
				</div>

				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="thumbnail">
						<img src="../../img/acechada.jpg" width=200px height=100px>
						<div class="caption">
							<h3 align="center">Mujer Maravilla</h3>
							<p><strong>Actores:</strong>  Gal Gadot, Chris Pine</p>
							<p><strong>Director:</strong>  Patty Jenkins</p>
							<p><strong>Género:</strong>  Ciencia Ficción</p>	
							<p class="text-center"><a data-toggle="modal" data-target="#Trailer3" href="#" class="btn btn-primary">Ver trailer <span class="glyphicon glyphicon-facetime-video"></span></a></p>
							<p class="text-center"><a href="#" class="btn btn-success">Modificar <span class="glyphicon glyphicon-pencil"></span></a></p>
						</div>
					</div>
				</div>

			</div>
		</div>

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
		});
	</script>

</html>
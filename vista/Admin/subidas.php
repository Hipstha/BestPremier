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
						
						<li>
							<a href="estrenos.php">Estrenos <span class="sr-only">(current)</span></a>
						</li>

						<li >
							<a href="recomendadas.php">Películas recomendadas <span class="sr-only">(current)</span></a>
						</li>

						<li class="active">
							<a href="#">Películas subidas <span class="sr-only">(current)</span></a>
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
							<th class="text-center">Agregar nueva película: </th>
							<td class="text-center">
								<a href="#" class="btn btn-success">Agregar nuevo <span class="glyphicon glyphicon-plus"></span></a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

			<!-- Trailer 1 -->
		<div class="modal fade modal-inverse" id="Trailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 align="center" class="modal-title" id="myModalLabel">La leyenda de Aang</h3>
					</div>
					<div class="modal-body">
						<video src="../../movie/Leyenda-ang.mp4" controls preload="auto" width=100%  height=100% poster="../../img/ang.jpg" ></video>
					</div>
					<hr>
					<h4 class="text-center">Sinopsis</h4>
					<p>La historia transcurre en un mundo de gente principalmente asiática (el estilo de vida en la serie se basa en la primera mitad del siglo XIX), donde predominan las artes marciales y la manipulación de los elementos en combinación con el misticismo oriental, dando seguimiento a las aventuras de Aang, el más reciente sucesor de una larga línea de avatares, y sus amigos en un intento por salvar su místico mundo de la despiadada Nación del Fuego que busca conquistar a las demás naciones.</p>
					<hr>
					<h4 class="text-center">Comentarios</h4>
					<div class="fb-comments" data-href="http://localhost:8080/BestPremier/vista/Admin/subidas.php?=Avatar" data-numposts="5"></div>
				</div>
			</div>
		</div>
		<!-- Final Trailer 1 -->


		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="thumbnail">
						<img src="../../img/ang.jpg" width=200px height=100px>
						<div class="caption">
							<h3 align="center">La leyenda de Aang</h3>
							<p><strong>Actores:</strong> animado</p>
							<p><strong>Director:</strong> Animado</p>
							<p><strong>Género:</strong> Acción</p>	
							<p class="text-center"><a data-toggle="modal" data-target="#Trailer" href="#?=no-digas" class="btn btn-primary">Ver Película <span class="glyphicon glyphicon-facetime-video"></span></a></p>
							<p class="text-center"><a href="modificar_pelicula.php" class="btn btn-success">Modificar <span class="glyphicon glyphicon-pencil"></span></a></p>
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
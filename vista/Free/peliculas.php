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

						<li>
							<a href="recomendadas.php">Películas recomendadas <span class="sr-only">(current)</span></a>
						</li>

						<li class="active">
							<a href="#">Ver películas <span class="sr-only">(current)</span></a>
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

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover fondotabla">
						
						<tr>
							<th class="text-center">Imágen</th>
							<th class="text-center">Título</th>
							<th class="text-center">Duración</th>
							<th class="text-center">Género</th>
							<th class="text-center">Clasificación</th>
							<th class="text-center">Popularidad</th>
							<th class="text-center">Enlace</th>
						</tr>

						<tr>
							<th class="text-center"><img src="../../img/volver.jpg" width=200px height=150px></th>
							<td class="text-center">Volver al futuro</td>
							<td class="text-center">120 min</td>
							<td class="text-center">Ciencia Ficción</td>
							<td class="text-center">B</td>
							<td class="text-center">50 votos</td>
							<td class="text-center"><a href="" class="btn btn-success">Ver película <span class="glyphicon glyphicon-facetime-video"></span></a></td>
						</tr>

						<tr>
							<th class="text-center"><img src="../../img/forest.jpg" width=200px height=150px></th>
							<td class="text-center">Forest Gump</td>
							<td class="text-center">120 min</td>
							<td class="text-center">Drama</td>
							<td class="text-center">B</td>
							<td class="text-center">45 votos</td>
							<td class="text-center"><a href="" class="btn btn-success">Ver película <span class="glyphicon glyphicon-facetime-video"></span></a></td>
						</tr>

						<tr>
							<th class="text-center"><img src="../../img/pokemon.jpg" width=200px height=150px></th>
							<td class="text-center">Pokemon 3</td>
							<td class="text-center">120 min</td>
							<td class="text-center">Aventura</td>
							<td class="text-center">A</td>
							<td class="text-center">45 votos</td>
							<td class="text-center"><a href="" class="btn btn-success">Ver película <span class="glyphicon glyphicon-facetime-video"></span></a></td>
						</tr>

						<tr>
							<th class="text-center"><img src="../../img/ventajas.jpg" width=200px height=150px></th>
							<td class="text-center">Las ventajas de ser invisible</td>
							<td class="text-center">120 min</td>
							<td class="text-center">Drama</td>
							<td class="text-center">B15</td>
							<td class="text-center">40 votos</td>
							<td class="text-center"><a href="" class="btn btn-success">Ver película <span class="glyphicon glyphicon-facetime-video"></span></a></td>
						</tr>



					</table>
				</div>
			</div>
		</div>

	</body>

	<script type="javascript">
		$(document).ready(function(){
			$('#myModal').on('shown.bs.modal', function () {
  				$('#myInput').focus()
			})
		});
	</script>

</html>
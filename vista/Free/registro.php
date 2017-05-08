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
							<a href="cartelera.php">En cartelera <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="estrenos.php">Próximos estrenos <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="recomendadas.php">Películas recomendadas <span class="sr-only">(current)</span></a>
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

						<li class="active" align="right">
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
					<form action="#" method="POST" enctype="multipart/form-data">
						<table class="table table-bordered table-hover fondotabla">
							
							<tr>
								<th colspan="2" class="text-center">Ingresa tus datos</th>
							</tr>

							<tr>
								<th class="text-center">Nombre: </th>
								<td>
									<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required>
								</td>
							</tr>

							<tr>
								<th class="text-center">Nombre de usuario: </th>
								<td>
									<input type="text" class="form-control" name="user" id="user" placeholder="Ingresa tu nombre de usuario" required>
								</td>
							</tr>

							<tr>
								<th class="text-center">Contraseña: </th>
								<td>
									<input type="password" class="form-control" name="pass" id="pass" placeholder="Ingresa tu contraseña" required>
								</td>
							</tr>

							<tr>
								<th class="text-center">Repetir contraseña: </th>
								<td>
									<input type="password" class="form-control" name="pass2" id="pass2" placeholder="Repite tu contraseña" required>
								</td>
							</tr>

							<tr>
								<th class="text-center">Correo electrónico: </th>
								<td>
									<input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo electrónico" required>
								</td>
							</tr>

							<tr>
								<td class="text-center">
									<a href="index.php" class="btn btn-danger">Volver</button>
								</td>
								<td class="text-center">
									<button type="submit" class="btn btn-success">Registrar</button>
								</td>
							</tr>

						</table>
					</form>
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
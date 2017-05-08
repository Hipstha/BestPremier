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
							<a href="estrenos.php">Proximos estrenos <span class="sr-only">(current)</span></a>
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
							<th>Nombre: </th>
							<td>
								<input class="form-control" type="text" value="No Digas su Nombre" required>
							</td>
						</tr>

						<tr>
							<th>Actor principal: </th>
							<td>
								<input class="form-control" type="text" value=" Douglas Smith" required>
							</td>
						</tr>

						<tr>
							<th>Director: </th>
							<td>
								<input class="form-control" type="text" value="Stacy Title">
							</td>
						</tr>

						<tr>
							<th>Género: </th>
							<td>
								<select class="form-control" value="Terror">
									<option>Terror</option>
									<option>Comedia</option>
									<option>Romance</option>
									<option>Drama</option>
								</select>
							</td>
						</tr>

						<tr>
							<th>Enlace de Trailer</th>
							<td>
								<input class="form-control" type="text" value="https://www.youtube.com/embed/hsF_eGBmw3g" required>
							</td>
						</tr>

						<tr>
							<td class="text-center"><a href="estrenos.php" class="btn btn-danger">Volver <span class="glyphicon glyphicon-arrow-left"></span></a></td>
							<td class="text-center"><a href="#" class="btn btn-success">Modificar <span class="glyphicon glyphicon-pencil"></span></a></td>
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
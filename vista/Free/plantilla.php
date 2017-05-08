<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.css">
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
					<a href="#" class="navbar-brand"><strong>BestPremier</strong></a>
				</div>

				<div class="collapse navbar-collapse" id="global">
					<ul class="nav navbar-nav">
						
						<li>
							<a href="#">En cartelera <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="#">Próximos estrenos <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="#">Películas recomendadas <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<a href="#">Ver películas <span class="sr-only">(current)</span></a>
						</li>

						<li>
							<form action="#" method="POST" class="navbar-form navbar-left">
								<div class="form-group">
									<input type="text" size="50" class="form-control" name="titulo" id="titulo" placeholder="Buscar título">
								</div>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
							</form>
						</li>

						<li align="right">
							<a href="#">FAQ's
							 <span class="sr-only">(current)</span></a>
						</li>

						<li align="right">
							<a href="#">Iniciar sesión <span class="sr-only">(current)</span></a>
						</li>

					</ul>
				</div>
			</div>
		</nav>

	</body>

	<script type="javascript">
		$(document).ready(function(){
			$('#myModal').on('shown.bs.modal', function () {
  				$('#myInput').focus()
			})
		});
	</script>

</html>
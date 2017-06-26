<html>
<head>
	<title>Clase 2 Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Estilo fila completa</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<h1>Estilo mitad 1</h1>
		</div>
		<div class="col-md-5">
			<h1>Estilo mitad 2</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<form method="GET" action="index.php">
				<div class="form-group">
					<label>Valor 1</label>
					<div class="input-group">
      					<div class="input-group-addon">
      						valor 
      						<i class="glyphicon glyphicon-star"></i>
      						1
      					</div>
						<input type="text" name="valor1" placeholder="0" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label>Valor 2</label>
					<div class="input-group">
						<div class="input-group-addon">
							valor 2
						</div>
						<input type="text" name="valor2" placeholder="0" class="form-control">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-star"></span>
						</div>
					</div>
				</div>
				<input type="submit" value="enviar" class="btn btn-success btn-lg btn-block">
				<br>
				<input type="submit" value="enviar" class="btn btn-success btn-lg form-control">
			</form>
		</div>
	</div>
</body>
</html>
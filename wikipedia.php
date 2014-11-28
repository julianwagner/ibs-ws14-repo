<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/global.css">
<meta charset="UTF-8">
<title>IBS WS14: Wikipedia</title>
</head>
<body onload="setActiveClass('wikipedia')">
<?php include ("navigation.php"); ?>
	<section>
			<h1 class="text-center">Wikipedia Suche</h1>
		<div class="suche">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Wikipedia Suche">
				</div>
				<button type="submit" class="btn btn-default">Suchen</button>
			</form>
		</div>
	</section>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/global.js"></script>
</body>
</html>
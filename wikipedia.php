<!DOCTYPE html>
<html lang="de">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/global.css">
<meta charset="UTF-8">
<title>IBS WS14: Wikipedia</title>
</head>
<body onload="setActiveClass('wikipedia')">
<?php include ("navigation.php"); ?>
	<section class="container">
		<div class="jumbotron">
			<h1 style="text-align: center;">Wikipedia</h1>
			<div id="wcag" class="row">
				<a
					title="http://wave.webaim.org/report#/http://raphaelharzer.cloudcontrolled.com/wikipedia.php"
					href="http://wave.webaim.org/report#/http://raphaelharzer.cloudcontrolled.com/wikipedia.php"><img
					src="img/wcag2AAA.png" alt="WCAG 2.0 WAI-AAA Logo" /></a>
			</div>
			<div id="label" class="row">
				<label for="search">Suchanfrage:</label>
			</div>
			<div id="form" class="row">
				<form class="navbar-form" role="search" method="post"
					action="http://de.wikipedia.org/wiki/Spezial:Suche">
					<div class="form-group">
						<input type="text" class="form-control" id="search" name="search"
							placeholder="Suchen">
					</div>
					<input class="btn btn-default" type="submit" id="go" name="go"
						value="Artikelsuche" /> <input class="btn btn-default"
						type="submit" id="fulltext" name="fulltext" value="Volltextsuche" />
				</form>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/global.js"></script>
</body>
</html>
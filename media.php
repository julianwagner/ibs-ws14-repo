<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/global.css">
<meta charset="UTF-8">
<title>IBS WS14: Media</title>
</head>
<body onload="setActiveClass('media')">
<?php include ("navigation.php"); ?>
	<section class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Bootstrap Beispiele</h1>
				</div>
			</div>
			<h2 id="second_h2" class="text-center">Video</h2>
			<div id="video" class="row">
				<!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" width="640" height="360"
						src="//www.youtube.com/embed/cvaIgq5j2Q8?feature=player_detailpage"
						frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<hr />
			<div id="karussell" class="row">
				<div class="col-md-12 text-center">
					<h2 class="text-center">Bilder-Karussell</h2>
					<div id="carousel-example-generic" class="carousel slide"
						data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0"
								class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
							<li data-target="#carousel-example-generic" data-slide-to="5"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/cat.jpg" alt="Katze Kopf Großaufnahme">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="img/cat_red.jpg" alt="Katze Rot Kopf Großaufnahme">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="img/kitten.jpg" alt="Katze Kitten Pilz">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="img/eagle.jpg" alt="Weisskopfseeadler">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="img/parrot.jpg" alt="Papagei Blau">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="img/squirrel.jpg" alt="Eichhoernchen">
								<div class="carousel-caption"></div>
							</div>
						</div>

						<!-- Controls -->
						<a class="carousel-control left" href="#carousel-example-generic"
							role="button" data-slide="prev"> <span
							class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a> <a class="carousel-control right"
							href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"
							aria-hidden="true"></span> <span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/global.js"></script>
</body>
</html>
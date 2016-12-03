<!DOCTYPE html>
<html>
<head>
	<title>Pan Tadeusz</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<header class="container jumbotron text-center">
		<h3>Pan Tadeusz, czyli Ostatni zajazd na Litwie: </br>Historia szlachecka z roku 1811 i 1812 </br>we dwunastu księgach wierszem</h3>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<ul class="list-group">
					<?php
						for ($i=1; $i <= 12; $i++) 
							{
							echo ('<li class="list-group-item"><a href="./index.php?k='.$i.'">Księga '.$i.'</a></li>');
							}
					?>
				</ul>
			</div>
			<div class="col-md-4 col-sm-12">
				<?php
					$book="./k".$_GET[k].".html";
					require_once($book);
				?>
			</div>
		</div>
	</div>

	<footer class="container">
		<p>&copy; 2016 Bartłomiej Augustyn KrDZIs3011Si 185769, Uniwersytet Ekonomiczny w Krakowie</p>
	</footer>


</body>
</html>
<!DOCTYPE html>
<?php require_once 'model/PDO.php';  ?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Kitsune</title>
		<meta name="Kitsune" content="files-voyager"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="view/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css"/>
	</head>

	<body>
		<header>
			<article class="container">
				<div class="row">
					<div class="col-lg-2">
						<img src="">
					</div>

					<div class="col-lg-6 col-lg-offset-1">
						<h1>Kitsune</h1>

					</div>

					<div class="col-lg-1 col-lg-offset-1">
						<img src="">
					</div>
				</div>
			</article>
		</header>

		<main>
			<article class="container">
				<div class="row">
					<div id="form_container" class="col-lg-4 col-lg-offset-6">
						<form class="" action="controller/send_files.php" method="post">
							<?php require_once "view/php/form.php" ?>
						</form>
					</div>
				</div>
			</article>
		</main>

		<footer>
			<p>Emmanuel.G, Lauriane.P et Sarah.R</p>
		</footer>
	</body>
</html>

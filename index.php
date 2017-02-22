<!DOCTYPE html>
<?php require_once 'model/PDO.php';

require_once 'controller/class.form.php';
$form = new FORM($pdo);
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Kitsune</title>
		<meta name="Kitsune" content="files-voyager"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
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

					<div class="col-lg-1 col-lg-offset-8">
						<img src="">
					</div>
				</div>
			</article>
		</header>

		<main>
			<article class="container">
				<div class="row">
					<div id="form_container" class="col-lg-4 col-lg-offset-8">
						<form name="formulaire" class="" action="controller/send_files.php" method="post" enctype="multipart/form-data">
							<?php require_once "view/php/form.php" ?>

							<script type="text/javascript" src="view/js/ajax.js"></script>

						</form>
					</div>
				</div>
			</article>
		</main>

		<footer>
			<article class="container">
				<div class="row">
					<div id="form_container" class="col-lg-4 col-lg-offset-8">
						<p>Emmanuel.G, Lauriane.P et Sarah.R</p>
					</div>
				</div>
			</article>
		</footer>
	</body>
</html>

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
		<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="view/css/style.css"/>
	</head>

	<body>
		<header>
			<svg style="z-index:2; position:relative; left:0px; top:0px;" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			width="1920px" height="200px" viewBox="0 0 1920 200" enable-background="new 0 0 1920 200" xml:space="preserve">
				<g id="under_x5F_panneau">
					<g id="under_x5F_panneau1">
						<rect opacity="0.7" x="1171.282" fill="#F9EFCE" width="374.23" height="200"/>
						<rect x="1171.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1196.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1171.282" y="20" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1171.282" y="175" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1171.282" y="42.144" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1171.282" y="64.286" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1171.282" y="86.429" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1171.282" y="108.572" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1171.282" y="130.715" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1171.282" y="152.857" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1221.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1246.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1271.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1296.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1321.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1346.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1371.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1396.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1421.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1446.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1471.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1496.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1521.282" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1171.282" y="180" fill="#5B3919" width="374.23" height="20"/>
						<rect x="1171.282" fill="#5B3919" width="374.23" height="20"/>
						<rect x="1525.514" fill="#5B3919" width="20" height="200"/>
						<rect x="1150.92" fill="#5B3919" width="20" height="200"/>
					</g>
					<g id="under_x5F_panneau2">
						<rect opacity="0.7" x="375.213" fill="#F9EFCE" width="374.23" height="200"/>
						<rect x="744.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="719.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="394.444" y="20" fill="#7D4D1D" width="355" height="5"/>
						<rect x="394.444" y="175" fill="#7D4D1D" width="355" height="5"/>
						<rect x="394.444" y="42.144" fill="#7D4D1D" width="355" height="5"/>
						<rect x="394.444" y="64.286" fill="#7D4D1D" width="355" height="5"/>
						<rect x="394.444" y="86.429" fill="#7D4D1D" width="355" height="5"/>
						<rect x="394.444" y="108.572" fill="#7D4D1D" width="355" height="5"/>
						<rect x="394.444" y="130.715" fill="#7D4D1D" width="355" height="5"/>
						<rect x="394.444" y="152.857" fill="#7D4D1D" width="355" height="5"/>
						<rect x="694.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="669.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="644.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="619.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="594.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="569.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="544.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="519.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="494.443" fill="#7D4D1D" width="5" height="200"/>
						<rect x="469.443" fill="#7D4D1D" width="5" height="200"/>
						<rect x="444.443" fill="#7D4D1D" width="5" height="200"/>
						<rect x="419.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="394.444" fill="#7D4D1D" width="5" height="200"/>
						<rect x="375.213" y="180" fill="#5B3919" width="374.23" height="20"/>
						<rect x="375.213" fill="#5B3919" width="374.23" height="20"/>
						<rect x="375.213" fill="#5B3919" width="20" height="200"/>
						<rect x="749.443" fill="#5B3919" width="20" height="200"/>
					</g>
					<animateTransform  fill="freeze" type="translate" repeatCount="0" xlink:href="#under_x5F_panneau1" accumulate="none" additive="replace" calcMode="linear" attributeName="transform" dur="4s" restart="always" begin="0s" to="375" from="0">
						</animateTransform>
					
						<animateTransform  fill="freeze" type="translate" repeatCount="0" xlink:href="#under_x5F_panneau2" accumulate="none" additive="replace" calcMode="linear" attributeName="transform" dur="4s" restart="always" begin="0s" to="-375" from="0">
						</animateTransform>
				</g>
				<g id="panneaux">
					<g id="panneaux1">
						<rect opacity="0.7" x="980.92" fill="#F9EFCE" width="374.23" height="200"/>
						<rect x="980.92" fill="#7D4D1D" width="4.999" height="200"/>
						<rect x="1005.919" fill="#7D4D1D" width="5" height="200"/>
						<rect x="980.92" y="20" fill="#7D4D1D" width="355" height="5"/>
						<rect x="980.92" y="175" fill="#7D4D1D" width="355" height="5"/>
						<rect x="980.92" y="42.144" fill="#7D4D1D" width="355" height="5"/>
						<rect x="980.92" y="64.286" fill="#7D4D1D" width="355" height="5"/>
						<rect x="980.92" y="86.429" fill="#7D4D1D" width="355" height="5"/>
						<rect x="980.92" y="108.572" fill="#7D4D1D" width="355" height="5"/>
						<rect x="980.92" y="130.715" fill="#7D4D1D" width="355" height="5"/>
						<rect x="980.92" y="152.857" fill="#7D4D1D" width="355" height="5"/>
						<rect x="1030.919" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1055.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1080.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1105.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1130.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1155.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1180.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1205.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1230.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1255.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1280.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1305.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="1330.92" fill="#7D4D1D" width="5" height="200"/>
						<rect x="980.92" y="180" fill="#5B3919" width="374.23" height="20"/>
						<rect x="980.92" fill="#5B3919" width="374.23" height="20"/>
						<rect x="960.92" fill="#5B3919" width="20" height="200"/>
						<rect x="1335.782" fill="#5B3919" width="20" height="200"/>
					</g>
					<g id="panneaux2">
						<rect opacity="0.7" x="565.576" fill="#F9EFCE" width="374.23" height="200"/>
						<rect x="934.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="909.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="584.807" y="20" fill="#7D4D1D" width="355" height="5"/>
						<rect x="584.807" y="175" fill="#7D4D1D" width="355" height="5"/>
						<rect x="584.807" y="42.144" fill="#7D4D1D" width="355" height="5"/>
						<rect x="584.807" y="64.286" fill="#7D4D1D" width="355" height="5"/>
						<rect x="584.807" y="86.429" fill="#7D4D1D" width="355" height="5"/>
						<rect x="584.807" y="108.572" fill="#7D4D1D" width="355" height="5"/>
						<rect x="584.807" y="130.715" fill="#7D4D1D" width="355" height="5"/>
						<rect x="584.807" y="152.857" fill="#7D4D1D" width="355" height="5"/>
						<rect x="884.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="859.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="834.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="809.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="784.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="759.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="734.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="709.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="684.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="659.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="634.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="609.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="584.807" fill="#7D4D1D" width="5" height="200"/>
						<rect x="565.576" y="180" fill="#5B3919" width="374.23" height="20"/>
						<rect x="565.576" fill="#5B3919" width="374.23" height="20"/>
						<rect x="565.576" fill="#5B3919" width="20" height="200"/>
						<rect x="939.807" fill="#5B3919" width="20" height="200"/>
					</g>
					
						<animateTransform  fill="freeze" type="translate" repeatCount="0" xlink:href="#panneaux1" accumulate="none" additive="replace" calcMode="linear" attributeName="transform" dur="4s" restart="always" begin="0s" to="565" from="0">
						</animateTransform>
					
						<animateTransform  fill="freeze" type="translate" repeatCount="0" xlink:href="#panneaux2" accumulate="none" additive="replace" calcMode="linear" attributeName="transform" dur="4s" restart="always" begin="0s" to="-565" from="0">
						</animateTransform>
				</g>
			</svg>
			
			<h1>kitsune</h1>
		</header>

		<main>
			<article class="container">
				<div class="row">
					<div id="form_container" class="col-lg-4 col-lg-offset-8">
						<form name="formulaire" class="" action="controller/send_files.php" method="post" enctype="multipart/form-data">
							<?php require_once "view/php/form.php" ?>
						</form>
					</div>
				</div>
			</article>
		</main>

		<footer>
			<article class="container">
				<div class="row">
					<div class="col-lg-4 col-lg-offset-8">
						<p>Emmanuel.G, Lauriane.P et Sarah.R</p>
					</div>
				</div>
			</article>
		</footer>
		
		<script type="text/javascript">

			$(document).ready(function(){

					$("form[name='formulaire']").submit(function(e) {
					var formData = new FormData($(this)[0]);

							$.ajax({
							url: "controller/send_files.php",
							type: "POST",
							data: formData,
							async: false,
							success: function (msg) {
							$("#form_container").html(msg);
							},
							cache: false,
							contentType: false,
							processData: false
							});

					e.preventDefault();
					});
			});

		</script>
		
	</body>
</html>

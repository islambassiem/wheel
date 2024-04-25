<?php
include 'connect.php';

$stmt = $conn->prepare("SELECT * FROM users where active = 1 order by rand();");
$stmt->execute();
$names = $stmt->fetchAll(PDO::FETCH_OBJ);

?>

<!doctype html>
<html>

<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='chrome=1'>
	<title>Lucky Draw</title>
	<link rel='stylesheet' href='stylesheets/styles.css'>
	<link rel='stylesheet' href='stylesheets/github-light.css'>
	<meta name='viewport' content='width=device-width'>
</head>

<body background="bg.jpeg">
	<div class="names" style="display: none;">
		<?php
		foreach ($names as $name) {
			echo "<div>$name->user_name</div>";
		}
		?>
	</div>
	<div class="img-container">
		<img src="https://csmonline.net/assets/img/logo.png" alt="">
	</div>
	<div class="title">
		Lucky Draw
	</div>
	<div class='wrapper'>
		<section>
			<div id='wheel'>
				<canvas id='canvas' width='1000' height='600'></canvas>
			</div>
			<div id='students' style="display: none;">
				<ul />
			</div>
			<div class="winner" style="display:none;"></div>
		</section>

	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js' crossorigin='anonymous'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/tinysort/2.3.6/tinysort.min.js' crossorigin='anonymous'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/tinysort/2.3.6/jquery.tinysort.min.js' crossorigin='anonymous'></script>
	<script src='javascripts/scale.fix.js'></script>
	<script src='javascripts/wheel.js'></script>
</body>

</html>
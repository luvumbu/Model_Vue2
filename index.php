<?php
session_start();
include("ip.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	include("link.html");
	?>
	<title>Bokonzi</title>
</head>
<body>
	<div id="body">
		<header>
			<?php
			include("model/header.php");
			?>
		</header>
		<section>
			<?php
			include("model/section.php");
			?>
		</section>

		<footer>
			<?php
			include("model/footer.php");
			?>
		</footer>
		<?php
			include("vue.html");
		?>
	</div>
</body>
<script src="controller/header.js"></script>
<script src="controller/section.js"></script>
<script src="controller/footer.js"></script>
<script src="vue.js"></script>
</html>
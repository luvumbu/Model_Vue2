<?php
session_start();
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "::1" || $REMOTE_ADDR == "127.0.0.1") {
	include("class/ip_in.php");
} else {
	include("class/ip_out.php");
}
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
	<link rel="icon" href="https://pbs.twimg.com/profile_images/1244325575659061249/YjvhVutG_400x400.jpg" type="image/gif" sizes="16x16">
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
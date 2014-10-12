<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/middle.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/contentlight.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href=""> -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<script src="app/app.js"></script>
	<script type="text/javascript">
</script>
	<title>Qui sommes nous ?</title>
</head>

<body>
	<div class="container">
		<section class="row main">
			<div class="col-lg-12">
				<header class="row">
					<?php include 'html/header.html'; ?>
				</header>
				<section class="row">
					<div class="col-lg-12 blue blue-ombre">
					<?php
						if (isset($_GET['sheet'])) {
							$tmp = $_GET['sheet'];
							$nav = 0;
						    if ($tmp == "cadiceaMama")
						        $nav = 1;
						    elseif ($tmp == "gamme")
						        $nav = 2;
							include 'html/menu.php';
							if ($tmp == "quiSommesNous")
								include 'html/quiSommesNous.html';
							elseif ($tmp == "cadiceaMama")
								include 'html/cadiceaMama.html';
							elseif ($tmp == "gamme")
								include 'html/gamme.html';
						}
					?>
					</div>
				</section>
				</section>
			</div>
		</section>
	</div>
<footer style="width: 100%;">
		<div class="container">
			<?php include 'html/footer.html'; ?>
		</div>
	</footer>
</body>
</html>
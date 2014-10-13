<?php 
			header ("Refresh: 2;URL=index.php");
			// Redirection vers page_suivante.php après un délai de 5 secondes
			// durant lesquelles la page actuelle (page_premiere.php, par exemple) est affichée
?>
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
	<!-- <link rel="stylesheet" type="text/css" href=""> -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<title>Cadicea</title>
</head>
<body>
	<div class="container">
		<section class="row main">
			<div class="col-lg-12">
				<header class="row">
					<?php include 'html/header.html'; ?>
				</header>
				<?php 
					if($_GET['state'] == 'succes'){
						echo '<h1>Votre message a été envoyé avec succès</h1>';
					}
					elseif($_GET['state'] == 'missing'){
						echo '<h1>Veuillez renseigner tout les champs</h1>';
					}
					else {
						echo '<h1>Un problème a été rencontré</h1>';
					}
				?>

			</div>
		</section>
	</div>
</body>
</html>
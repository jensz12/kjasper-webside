<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>404 - Kjasper</title>
<meta name="description" content="Siden blev ikke fundet">
<link rel="icon" href="https://kjasper.dk/favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@kjasperguy">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="404 - Kjasper">
<meta name="twitter:description" content="Siden blev ikke fundet">
<meta name="twitter:image:src" content="https://dl.kjasper.dk/banner.jpg">
<?php require 'header.php';?>
</head>
<body>
<header>
	<?php require 'navbar.php';?>
</header>
<main role="main" id="content" class="container">
	<div class="row">
		<article class="col-lg-9 col-md-8">
			<div class="jumbotron">				
				<h1>404</h1>
				<h1>Siden blev ikke fundet.</h1>
				<p class="lead">Mere ved vi ikke. Her er et par ting du kan gøre</p>
				<div class="btn-group btn-group-justified">
    <a href="/" class="btn btn-primary">Gå til forsiden</a>
    <a href="/faq" class="btn btn-info">Om Kjasper</a>
</div>
			</div>
		</article>
		<?php
		require 'sidebar.php';
		?>
	</div>
	<?php require 'footer.php';?>
</body>
</html>
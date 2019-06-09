<?php
require_once 'inc/JensFunctions.php';

JensFunctions::loadConfig('config.php');

$playlists = JensFunctions::getYouTubePlaylists();
?>
<!DOCTYPE html>
<html lang="da">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">

<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Serier - Kjasper</title>
<meta name="description" content="Oversigt over serier på Kjaspers kanal">
<link rel="icon" href="https://kjasper.dk/favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@kjasperguy">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Serier - Kjasper">
<meta name="twitter:description" content="Oversigt over serier på Kjasper kanal">
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
				<div class="row">
				<?php foreach ($playlists as $playlist): ?>
				<div class="col-sm-6">
					<section class="thumbnail">
						<a href="https://youtube.com/playlist?list=<?php echo $playlist->id; ?>">
							<img class="img-responsive" src="<?php echo $playlist->thumbnail; ?>" width="100%" />
						</a>
						<div class="caption">
							<a href="https://youtube.com/playlist?list=<?php echo $playlist->id; ?>"><h4 class="text-ellipsis"><?php echo $playlist->title;?></h4></a>
						</div>
					</section>
				</div>
				<?php endforeach; ?>
			</div>
		</article>
		<?php require 'sidebar.php';?>
	</div>
<?php require 'footer.php';?>
</body>
</html>

<?php
require_once 'inc/JensFunctions.php';

JensFunctions::loadConfig('config.php');

$twitch_sub_count = JensFunctions::getTwitchSubCount();
$twitch_subs = JensFunctions::getTwitchSubs();
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Subscribers - Kjasper</title>
<meta name="description" content="Folk der subscriber til Kjasper">
<link rel="icon" href="https://kjasper.dk/favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@kjasperguy">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Subscribers - Kjasper">
<meta name="twitter:description" content="Folk der subscriber til Kjasper">
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
			<div class="well">
				<h1>Folk der subscriber til Kjasper på Twitch.<small> I alt: <?php echo $twitch_sub_count; ?></small></h1>
				<p><a href="https://subs.twitch.tv/kjasperloop">Klik her for at subscribe</a></p>
				</div>
			<div class="panel panel-default">
			<div class="panel-body">
			<div class="row">
			<div class="twitch-subs">
				<?php foreach ($twitch_subs as $sub): ?>
				<img src="<?php echo $sub->avatar; ?>" height="60" width="60" class="player" data-toggle="tooltip" data-placement="top" title="<?php echo $sub->name; ?> - <?php echo JensFunctions::getTwitchSubMonths($sub->created_at); ?>"/>
				<?php endforeach; ?>
			</div>
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

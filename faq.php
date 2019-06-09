<?php
  //date in mm/dd/yyyy
  $birthDate = "01/06/2000";
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>FAQ & Setup - Kjasper</title>
<meta name="description" content="Alt om Kjasper, og hans udstyr">
<link rel="icon" href="https://kjasper.dk/favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@kjasperguy">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="FAQ & Setup - Kjasper">
<meta name="twitter:description" content="Alt om Kjasper, og hans udstyr">
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
				<h1 id="faq">FAQ</h1>
			</div>
			<div class="jumbotron">
				<ul>
				<li><h3><strong>Navn</strong>: Kasper Tofting</h3></li>
				<li><h3><strong>Alder</strong>: <?php echo $age; ?></h3></li>
				<li><h3><strong>By</strong>: <a href="https://www.google.dk/maps/place/8722+Hedensted/@55.7691088,9.6654534,13z/data=!3m1!4b1!4m5!3m4!1s0x464c865d0dd44865:0x950e952685f0ba9b!8m2!3d55.771718!4d9.70228" target="_blank">Hedensted</a></h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h2 id="udstyr"><strong>Udstyr:</strong></h2>
				<ul>
				<li><h3><strong>Skærm</strong>: <a href="https://www.asus.com/dk/Monitors/VG248QE/" target="_blank">ASUS-VG248QE</a></h3></li>
				<li><h3><strong>Mus </strong>: <a href="https://steelseries.com/gaming-mice/rival-310" target="_blank">Steelseries Rival 310</a></h3></li>
				<li><h3><strong>Tastatur</strong>: <a href="http://www.roccat.org/da-DK/Products/Gaming-Keyboards/Isku-Series/Isku/" target="_blank">Roccat Isku</a></h3></li>
				<li><h3><strong>Headset</strong>: <a href="http://www.hyperxgaming.com/us/headsets/cloud-gaming-headset" target="_blank">HyperX Cloud 2</a></h3></li>
				<li><h3><strong>Mikrofon</strong>: <a href="https://www.audio-technica.com/cms/wired_mics/c75c5918ed57a8d0/index.html" target="_blank">Audio Technia AT-2020 </a></h3></li>
				<li><h3><strong>Mikrofon stativ</strong>: <a href="http://www.rode.com/accessories/psa1" target="_blank">Røde PSA1 </a></h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h2 id="computer"><strong>Computer:</strong></h2>
				<ul>
				<li><h3><strong>CPU</strong>: <a href="http://ark.intel.com/products/88195/Intel-Core-i7-6700K-Processor-8M-Cache-up-to-4_20-GHz" target="_blank">Intel Core i7 6700K</a></h3></li>
				<li><h3><strong>Grafikkort</strong>: <a href="http://www.geforce.com/hardware/desktop-gpus/geforce-gtx-1070" target="_blank">NVIDIA GeForce GTX 1070</a></h3></li>
				<li><h3><strong>Ram</strong>: 32 GB</h3></li>
				<li><h3><strong>Motherboard</strong>: <a href="https://www.asus.com/dk/Motherboards/B150M-A-M-2//" target="_blank">ASUSTeK COMPUTER INC. B150M-A/M.2</a></h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h2 id="software"><strong>Software:</strong></h2>
				<ul>
				<li><h3><strong>Optagelse</strong>: <a href="http://bandicam.com" target="_blank">Bandicam</a></h3></li>
				<li><h3><strong>Streaming</strong>: <a href="http://obsproject.com" target="_blank">OBS</a></h3></li>
				<li><h3><strong>Redigering</strong>: <a href="http://www.adobe.com/dk/products/premiere.html" target="_blank">Adobe Premiere Pro CC</a></h3></li>
				<li><h3><strong>Thumbnail</strong>: <a href="https://www.gimp.org/" target="_blank">GIMP</a></h3></li>
				</ul>
			</div>
			
			<div class="jumbotron">
				<div class="embed-responsive embed-responsive-16by9 hidden-print">
				<iframe class="embed-responsive-item" src="https://youtube.com/embed/qyhpJEJRiX0?showinfo=0&color=white&theme=light&fs=1">Brug en moderne browser TAK!!</iframe>
				</div>
			</div>
			<div class="jumbotron">
				<div class="embed-responsive embed-responsive-16by9 hidden-print">
				<iframe class="embed-responsive-item" src="https://youtube.com/embed/DTMsExFiouA?showinfo=0&color=white&theme=light&fs=1">Brug en moderne browser TAK!!</iframe>
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

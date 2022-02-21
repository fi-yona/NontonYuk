<!DOCTYPE html>
<html>
	<head>
		<title>NontonYuk!</title>
		<link rel="stylesheet" href="assets/style/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php 
			include_once("function.php");
		?>
		<header>
			<?php
				useHeader();
			?>
			<nav>
				<ul>
		            <li><a href="#about-us">About Us</a></li>
		            <li><a href="cek_bioskop.php">Cek Bioskop</a></li>
		        </ul>
			</nav>
		</header>
		<main>
			<div id="intro" class="intro">
				<div class="icon-intro">
					<img src="assets/icon/cinema.png" class="cinema-intro" alt="cinema" title="cinema">
					<br>
					<br>
				</div>
				<div class="text-intro">
					Ingin mencari bioskop?<br>
					<a href="cek_bioskop.php"><b>CEK DISINI!</b></a><br>
				</div>
			</div>
			<br>
			<div id="about-us" class="about-us">
				<div class="sub-judul-about-us">
					<h2>
						ABOUT US
						<br>
					</h2>
				</div>
				<div class="icon-about-us">
					<img src="assets/icon/clapperboard.png" class="img-about-us" alt="clapperboard" title="clapperboard">
					<img src="assets/icon/popcorn.png" class="img-about-us" alt="popcorn" title="popcorn">
					<img src="assets/icon/map.png" class="img-about-us" alt="location" title="location"><br>
				</div>
				<div class="text-about-us">
					<p>
						Kami akan membantu anda mencari bioskop dengan bantuan mengecek provinsi dan kota sesuai pilihan anda!
					</p>
				</div>
			</div>
		</main>
		<footer>
			<?php
				useFooter();
			?>
		</footer>
	</body>
</html>
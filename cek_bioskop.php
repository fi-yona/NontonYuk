<!DOCTYPE html>
<html>
	<head>
		<title>
			NontonYuk!
		</title>
		<link rel="stylesheet" href="assets/style/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php
			include_once("function.php");
			include_once("getKota.php");
		?>
		<header>
			<?php
				useHeader();
			?>
			<nav>
				<ul>
		            <li><a href="index.php">About Us</a></li>
		            <li><a href="#cek-bioskop">Cek Bioskop</a></li>
		        </ul>
			</nav>
		</header>
		<main>
			<div id="cek-bioskop" class="cek-bioskop">
				<div class="sub-judul-cek-bioskop">
					<h2>
						CEK BIOSKOP
						<br>
					</h2>
				</div>
				<div class="text-cek-bioskop">
					<form method="post" name="cek-bioskop">
						<table align="center">
							<tr>
								<th>Pilih Kota/Kabupaten</th>
								<td>
									<select class="pilih-kota" id="kota" name="city_name" required>
										<option value="" selected>--Pilih Kota/Kabupaten--</option>
										<?php
											foreach($dataKota as $data){
												echo "<option value=\"" . $data["city_name"] . "\" id_kota='".$data["city_id"]."'>" . $data["type"] . " " . $data["city_name"]."</option>";
											}
										?>
									</select>
								</td>
							</tr>
						</table>
						<br>
						<br>
						<div class="bioskop-button">
							<input type="submit" id="bioskop-button" class="bioskop-button" name="submit-cek-bioskop" value="Cek Bioskop">
						</div>
					</form>
					<br>
					<br>
				</div>
			</div>
			<?php
				if(isset($_POST["submit-cek-bioskop"])){
					?>
						<div id="hasil" class="hasil-tampil">
							<div class="sub-judul-cek-bioskop">
								<h2>
									HASIL CEK
									<br>
								</h2>
							</div>
							<div class="text-hasil-tampil">
								Hasil untuk : 
								<?php
									$kota = $_POST["city_name"];
									echo ($kota);
									?>
									<br>
									<br>
									<?php

									function http_request($url){
									    $ch = curl_init();
									    curl_setopt($ch, CURLOPT_URL, $url);
									    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
									    $output = curl_exec($ch);
									    curl_close($ch);
									    return $output;
									 }

									 $dataBioskop = http_request("https://bioskop-api-zahirr.herokuapp.com/api/daftar/bioskop?daerah=" . $kota);
									 $getBioskop = json_decode($dataBioskop, TRUE);

									foreach($getBioskop['result']['hasil'] as $data){
										if(!empty($data)){
											?>
											<br>
											<center>
											<div class="img-bioskop"> 
											<?php
											echo "<img src=\"".$data['image']."\" class=\"img-bioskop\"><br><b>"; // tampilkan foto
											echo ($data['nama']); // tampilkan nama bioskop
											echo "</b>";
											?>
											</div>
											<br>
											</center>
											<?php
										}
									}
								?>
							</div>
						</div>
					<?php
				}
			?>
		</main>
		<footer>
			<?php
			useFooter();
			?>
		</footer>
	</body>
</html>
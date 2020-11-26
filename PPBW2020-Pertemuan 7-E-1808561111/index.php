<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PBW2020-Pertemuan7-E</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<section class="awal">	
			<div class="container">
				<form action="hasil.php" method="POST">
					<fieldset class="margin">
					<legend class="tengah">NILAI AKHIR</legend>
					<div class="konten">
						<label>Nama</label>
						<input type="text" name="nama">
					</div>					
					<div class="konten">
						<label>NIM</label>
						<input type="text" name="nim">
					</div>
					<br>					
					<div class="konten">
						<label>Nilai Tugas Anda</label>
						<input type="number" name="tugas">
					</div>					
					<div class="konten">
						<label>Nilai UTS Anda</label>
						<input type="number" name="uts">
					</div>					
					<div class="konten">
						<label>Nilai UAS Anda</label>
						<input type="number" name="uas">
					</div>
					<div class="konten">
						<input type="submit">
					</div>
					</fieldset>
				</form>
			</div>
		</section>
		
	</body>
</html>
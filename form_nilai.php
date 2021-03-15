<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>wow</title>

</head>
<body align = center>

				<img src="kg.jpg" alt="" width="250px">
				<h2>Hasil Anda</h2>
		
					<p class="card-text"><?php
					$proses= $_GET['proses'];
					$nama_siswa = $_GET['nama'];
					$mata_kuliah = $_GET['matkul'];
					$nilai_uts = $_GET['nilai_uts'];
					$nilai_uas = $_GET['nilai_uas'];
					$nilai_tugas = $_GET['nilai_tugas'];

					echo '<br/>Nama : '.$nama_siswa;
					echo '<br/>Mata Kuliah : '.$mata_kuliah;
					echo '<br/>Nilai UTS : '.$nilai_uts;
					echo '<br/>Nilai UAS : '.$nilai_uas;
					echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
					?></p>
					
</body>
</html>

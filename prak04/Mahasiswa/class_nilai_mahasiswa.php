<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Nilai Mahasiswa</title>
</head>
<body>
<div class="container-fluid" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
		<div class="col-12 col-md-6 m-auto">
			<h3>Form Nilai Ujian</h3>
			<hr class="featurette-divider mx-auto">
			<form class="form-horizontal" method="POST" action="class_nilaimahasiswa.php">
				<div class="form-group row">
					<label for="nim" class="col-4 col-form-label text-end"><b>NIM</b></label>
					<div class="col-8">
						<div class="input-group mb-3">
							<input id="nim" name="nim" type="text" class="form-control" value="" placeholder="NIM" aria-label="NIM" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="matkul" class="col-4 col-form-label text-end"><b>Pilih MK</b></label>
					<div class="col-8">
						<div class="input-group mb-3">
							<select class="form-select" aria-label="Mata Kuliah" name="matkul">
								<option selected value="" class="text-muted">Pilih Mata Kuliah</option>
								<option value="Pancasila dan Pendidikan Kewarganegaraan">Pancasila dan Pendidikan Kewarganegaraan</option>
								<option value="Bahasa Inggris 1">Bahasa Inggris 1</option>
								<option value="Basis Data">Basis Data</option>
								<option value="Jaringan Komputer">Jaringan Komputer</option>
								<option value="User Interface & User Experience">User Interface & User Experience</option>
								<option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
								<option value="Pemrograman Web 2">Pemrograman Web 2</option>
								<option value="Komunikasi Efektif">Komunikasi Efektif</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="nilai" class="col-4 col-form-label text-end"><b>Nilai</b></label>
					<div class="col-4">
						<div class="input-group mb-3">
							<input id="nilai" name="nilai" type="number" class="form-control" value="" min="0" max="100" placeholder="Nilai" aria-label="Nilai" aria-describedby="basic-addon2">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-4 col-8">
						<input type="submit" class="btn btn-success" value="Simpan" name="submit">
					</div>
				</div>
			</form>
			<hr class="featurette-divider mx-auto">
			<?php
			require_once "class_nilaimahasiswa.php";
			$submit = $_POST['submit'];
			$nim = $_POST['nim'];
			$matakuliah = $_POST['matkul'];
			$nilai = $_POST['nilai'];

			if (!empty($submit)) {
				echo 'NIM : ' . $ujian->nim;
				echo '</br>Nama Mata Kuliah : ' . $ujian->matakuliah;
				echo '</br>Nilai : ' . $ujian->nilai;
				echo '</br>Hasil Ujian : ' . $ujian->grade;
				echo '</br>Grade : ' . $ujian->hasil;
			}
			?>
		</div>
	</div>
    
    <!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
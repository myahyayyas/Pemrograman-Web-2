<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h4>Sistem Penilaian</h4>
    </header>
    <div class="section">
        <h3 class="text-center">Form Nilai Siswa</h3>
        <form method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                    <option value="BDI">Basis Data I</option>
                    <option value="WEB2">Pemrograman Web 2</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
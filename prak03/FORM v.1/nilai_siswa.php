<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <p class="font-result">Data Siswa</p>
        <?php
        require_once 'libfungsi.php';
        $proses = $_POST['submit'];
        $nama_siswa = $_POST['nama'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['uts'];
        $nilai_uas = $_POST['uas'];
        $nilai_tugas = $_POST['tugas'];

        $nilai_rata2 = (intval($nilai_uts + $nilai_uas + $nilai_tugas)) / 3;
        
        echo '<ul>';
        echo '<li>Proses : '. $proses. '</li>';
        echo '<li>Nama Siswa : '. ucwords($nama_siswa). '</li>';
        echo '<li>Mata Kuliah : '. $mata_kuliah . '</li>';
        echo '<li>Nilai UTS : '. $nilai_uts. '</li>';
        echo '<li>Nilai UAS : '. $nilai_uas. '</li>';
        echo '<li>Nilai Tugas : '. $nilai_tugas. '</li>';
        echo '</ul>';

        echo '<hr>';
        echo '<p class="font-result">Hasil Nilai Keseluruhan</p>';
        echo '<ul>';
        echo '<li>Nilai Rata-Rata : '. round($nilai_rata2). '</li>';
        echo '<li>Pernyataan Lulus : '. kelulusan($nilai_rata2). '</li>';
        echo '<li>Grade Nilai : '. peringkat($nilai_rata2). '</li>';
        echo '<li>Predikat : '. keterangan($nilai_rata2). '</li>';
        echo '</ul>';
        ?>
    </div>

</body>
</html>
<?php

function kelulusan($nilai_rata2) {
    if ($nilai_rata2 > 55) {
        return $lulus = "Selamat Anda Dinyatakan Lulus!";
    } else {
        return $lulus = "Mohon Maaf Anda Harus Mengulang Pada Tahun Ajaran Berikutnya";
    }
}

function peringkat($nilai_rata2) {
    if ($nilai_rata2 <= 35) {
        return $grade = 'E';
    } elseif ($nilai_rata2 <= 55) {
        return $grade = 'D';
    } elseif ($nilai_rata2 <= 69) {
        return $grade = 'C';
    } elseif ($nilai_rata2 <= 84) {
        return $grade = 'B';
    } elseif ($nilai_rata2 <= 100) {
        return $grade = 'A';
    } else {
        return $grade = 'I';
    }
}

function keterangan($nilai_rata2) {
    switch (peringkat($nilai_rata2)) {
        case 'A':
            return $predikat = 'Sangat Memuaskan';
            break;
        case 'B':
            return $predikat = 'Memuaskan';
            break;
        case 'C':
            return $predikat = 'Cukup';
            break;
        case 'D':
            return $predikat = 'Kurang';
            break;
        case 'E':
            return $predikat = 'Sangat Kurang';
            break;
        default:
            return $predikat = 'Tidak Ada';
            break;
    }
}
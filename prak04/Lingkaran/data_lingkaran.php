<?php
    require_once "class_lingkaran.php";

    echo "NILAI PHI " . Lingkaran::PHI;
    echo "<br>";
    $lingkar1 = new Lingkaran(10);
    $lingkar2 = new Lingkaran(4);
    echo "<br>Luas Lingkaran 1 : " . $lingkar1->getLuas();
    echo "<br>Luas Lingkaran 2 : " . $lingkar2->getLuas();
    echo "<br>";
    echo "<br>Keliling Lingkaran 1 : " . $lingkar1->getKeliling();
    echo "<br>Keliling Lingkaran 2 : " . $lingkar2->getKeliling();
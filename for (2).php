<?php
 
 //$kelas = 2;
// $makskelas = 12;

//for($kelas ; $kelas <= $makskelas; $kelas = ++$kelas){
//    echo "kelas anda = $kelas <br>";
//}

 //$kelas = 0;
// $makskelas = 12;

//for($kelas ; $kelas <= $makskelas; $kelas = ++$kelas){
//    echo "kelas anda = $kelas <br>";
//}

//fibonacci
$kelas = 1;
$makskelas = 0;

for($kelas = 0; $kelas <= 13; $kelas++){
        echo "kelas anda = $kelas <br>";

    $tambah = $makskelas+$kelas;   
    $kelas = $makskelas;   
    $makskelas =$tambah;
}
?>

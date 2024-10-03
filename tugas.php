<?php
for ($i = 1; $i <= 20; $i++){
    if($i % 3 == 0  && $i % 2 ==  1) {
        $kinerja = "istimewa";
    } else if ($i % 2 == 1) {
        $kinerja = "memuaskan";
     } else {
        $kinerja = "cemerlang";
        }
        echo "karyawan $i. $kinerja <br>";
    }
?>

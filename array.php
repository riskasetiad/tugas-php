<?php
// Array input angka
$angka = [3, 5, 2, 1, 3, 7, 6, 2, 5];

// Menghitung frekuensi kemunculan setiap angka
$frekuensi = array_count_values($angka);

// Array untuk menyimpan angka sama
$sama = [];

// Menyimpan angka yang muncul lebih dari sekali ke dalam array sama
foreach ($frekuensi as $angka => $jumlah) {
    if ($jumlah > 1) {
        $sama[] = $angka;
    }
}

// Menampilkan angka sama dalam format array
echo "Angka yang sama: [" . implode(", ", $sama) . "]\n";

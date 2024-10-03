<?php
function deretAngkaHuruf($panjang)
{
    // Inisialisasi variabel untuk menyimpan deret
    
    $deret = [];

    // Loop untuk menambahkan angka dan huruf sesuai pola
    for ($i = 1; $i <= $panjang; $i++) {
        if ($i % 2 != 0) { // Jika ganjil, angka
            $deret[] = $i;
        } else { // Jika genap, huruf
            $huruf = chr(95 + ($i)); // Menggunakan ASCII untuk mengonversi angka ke huruf
            $deret[] = $huruf;
        }
    }

    // Gabungkan deret menjadi string dengan spasi
    echo implode(' ', $deret);
}

// Panggil fungsi dengan panjang deret yang diinginkan
deretAngkaHuruf(100); // Panjang deret diatur ke 8 untuk menghasilkan: 1 b 3 d 5 f 7 h

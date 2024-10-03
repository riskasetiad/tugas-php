 <?php
function tampilkanPilihan()
{
    echo "Pilih salah satu:\n";
    echo "1. Batu\n";
    echo "2. Gunting\n";
    echo "3. Kertas\n";
}

function tentukanPemenang($pemain1, $pemain2)
{
    if ($pemain1 == $pemain2) {
        return "Seri!";
    } elseif (
        ($pemain1 == 1 && $pemain2 == 2) ||
        ($pemain1 == 2 && $pemain2 == 3) ||
        ($pemain1 == 3 && $pemain2 == 1)
    ) {
        return "pemain1 Menang!";
    } else {
        return "pemain2 Menang!";
    }
}


tampilkanPilihan();
$pemain1 = intval(trim(fgets(STDIN)));

if ($pemain1 < 1 || $pemain1 > 3) {
    echo "Pilihan tidak valid!\n";
    exit;
}

$pemain2 = rand(1, 3);

// Menampilkan pilihan pengguna dan komputer
$pilihan = ["", "Batu", "Gunting", "Kertas"];
echo "pemain1 memilih: " . $pilihan[$pemain1] . "\n";
echo "pemain2 memilih: " . $pilihan[$pemain2] . "\n";

// Menentukan pemenang
$hasil = tentukanPemenang($pemain1, $pemain2);
echo $hasil . "\n";

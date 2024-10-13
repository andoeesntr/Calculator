<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    
    // Validasi input
    if (is_numeric($angka1) && is_numeric($angka2) && $angka2 != 0) {
        // Hitung sisa pembagian
        echo "<h1>Hitung Sisa Pembagian</h1>";
        $hasil = $angka1 % $angka2;
        echo "$angka1 % $angka2 = $hasil";
    } else {
        echo "Masukan angka yang valid dan pastikan angka kedua tidak nol.";
    }
}
?>

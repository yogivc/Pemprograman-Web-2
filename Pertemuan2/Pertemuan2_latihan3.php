<html>
<head>
    <title>Latihan 3 - Perhitungan Belanja</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }
        input {
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>

<h2>Form Perhitungan Belanja</h2>

<form method="post">
    Nama Barang: <input type="text" name="nama"><br>
    Harga: <input type="number" name="harga"><br>
    Jumlah: <input type="number" name="jumlah"><br>
    Diskon (%): <input type="number" name="diskon"><br><br>

    <input type="submit" name="hitung" value="Hitung">
</form>

<hr>

<?php
if (isset($_POST['hitung'])) {

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $diskon = $_POST['diskon'];

    $total = $harga * $jumlah;
    $potongan = ($diskon / 100) * $total;
    $bayar = $total - $potongan;

    echo "<h3>Hasil Perhitungan</h3>";
    echo "Nama Barang: $nama <br>";
    echo "Total Harga: Rp $total <br>";
    echo "Diskon: Rp $potongan <br>";
    echo "<b>Total Bayar: Rp $bayar</b>";
}
?>

</body>
</html>
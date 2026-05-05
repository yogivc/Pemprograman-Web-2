<html>
<head>
    <title>Counter Pengunjung</title>
</head>

<body>

<?php
$nama_file = "counter.dat";

if (file_exists($nama_file)) {

    $berkas = fopen($nama_file, "r");
    $pencacah = (int) trim(fgets($berkas));
    fclose($berkas);

    $pencacah++;

} else {
    $pencacah = 1;
}

// simpan kembali
$berkas = fopen($nama_file, "w");
fwrite($berkas, $pencacah);
fclose($berkas);

// tampilkan
echo "Anda pengunjung ke-$pencacah <br>";
?>

</body>
</html>
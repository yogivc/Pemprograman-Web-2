<?php
// nama barang
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";

// harga
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

// jumlah
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

// total per item
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;

// total semua
$tharga = $th1 + $th2 + $th3 + $th4;

// diskon
$diskon = 5;
$tdiskon = ($diskon * $tharga) / 100;

// total bayar
$tdibayar = $tharga - $tdiskon;
?>

<html>
<head>
    <title>Daftar Peralatan</title>
    <style>
        body { font-size: 14pt; }
        table { font-size: 16pt; }
    </style>
</head>

<body>
<center>

<h2>Daftar Pemesanan Peralatan Kantor</h2>

<table border="1" cellspacing="0" cellpadding="5">
<tr>
    <th>Nama</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Total</th>
</tr>

<tr>
    <td><?= $brg1 ?></td>
    <td><?= $jmlbrg1 ?></td>
    <td><?= $harga1 ?></td>
    <td><?= $th1 ?></td>
</tr>

<tr>
    <td><?= $brg2 ?></td>
    <td><?= $jmlbrg2 ?></td>
    <td><?= $harga2 ?></td>
    <td><?= $th2 ?></td>
</tr>

<tr>
    <td><?= $brg3 ?></td>
    <td><?= $jmlbrg3 ?></td>
    <td><?= $harga3 ?></td>
    <td><?= $th3 ?></td>
</tr>

<tr>
    <td><?= $brg4 ?></td>
    <td><?= $jmlbrg4 ?></td>
    <td><?= $harga4 ?></td>
    <td><?= $th4 ?></td>
</tr>

<tr>
    <td colspan="3" align="right">Total Harga</td>
    <td><?= $tharga ?></td>
</tr>

<tr>
    <td colspan="3" align="right">Diskon (<?= $diskon ?>%)</td>
    <td><?= $tdiskon ?></td>
</tr>

<tr>
    <td colspan="3" align="right"><b>Total Bayar</b></td>
    <td><b><?= $tdibayar ?></b></td>
</tr>

</table>

</center>
</body>
</html>
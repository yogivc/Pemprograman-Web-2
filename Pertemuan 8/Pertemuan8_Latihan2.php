<html>
<head>
    <title>Contoh Penggunaan Function</title>
</head>

<body>

<form method="post">

    Masukkan Bilangan Pertama : <br>
    <input type="number" name="A"><br><br>

    Masukkan Bilangan Kedua : <br>
    <input type="number" name="B"><br><br>

    <input type="submit" value="Hitung">

</form>

<?php

function jumlah($A, $B)
{
    return $A + $B;
}

function kurang($A, $B)
{
    return $A - $B;
}

function kali($A, $B)
{
    return $A * $B;
}

function bagi($A, $B)
{
    return $A / $B;
}

if (isset($_POST['A']) && isset($_POST['B'])) {

    $A = $_POST['A'];
    $B = $_POST['B'];

    echo "<hr>";

    echo "Bilangan Pertama : $A <br>";
    echo "Bilangan Kedua : $B <br><br>";

    echo "Penjumlahan : " . jumlah($A, $B) . "<br>";
    echo "Pengurangan : " . kurang($A, $B) . "<br>";
    echo "Perkalian : " . kali($A, $B) . "<br>";
    echo "Pembagian : " . bagi($A, $B) . "<br>";
}
?>

</body>
</html>
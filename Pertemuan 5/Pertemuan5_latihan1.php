<?php
$file = fopen("test1.txt", "r");

if ($file) {
    echo fgets($file); // baca 1 baris pertama
    fclose($file);
} else {
    echo "File tidak ditemukan";
}
?>
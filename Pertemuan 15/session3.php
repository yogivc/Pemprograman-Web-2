<?php

setcookie("username", "", time() - 3600);
setcookie("namalengkap", "", time() - 3600);

echo "<h1>Cookie berhasil dihapus.</h1>";

echo "<h2><a href='cookie1.php'>Buat Cookie Lagi</a></h2>";
echo "<h2><a href='cookie2.php'>Periksa Cookie</a></h2>";

?>
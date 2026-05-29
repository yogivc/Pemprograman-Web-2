<?php

$value = "rahadian";
$value2 = "rahadi ramelan";

setcookie("username", $value);
setcookie("namalengkap", $value2, time() + 3600);

echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2><a href='cookie2.php'>Periksa Cookie</a></h2>";

?>
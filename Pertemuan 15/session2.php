<?php

if(isset($_COOKIE['username'])){
    echo "<h1>Cookie 'username' ada. Isinya : "
    . $_COOKIE['username'] . "</h1>";
}else{
    echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}

if(isset($_COOKIE['namalengkap'])){
    echo "<h1>Cookie 'namalengkap' ada. Isinya : "
    . $_COOKIE['namalengkap'] . "</h1>";
}else{
    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}

echo "<h2><a href='cookie1.php'>Buat Cookie</a></h2>";
echo "<h2><a href='cookie3.php'>Hapus Cookie</a></h2>";

?>
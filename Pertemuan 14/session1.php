<?php
session_start();

if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "rahadian" && $pass == "123") {
        $_SESSION['login'] = $user;

        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'>di sini</a> untuk menuju halaman pemeriksaan session</h2>";
    } else {
        echo "<h2>Username atau password salah!</h2>";
        echo "<a href='session1.php'>Coba Login Lagi</a>";
    }
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Session</title>
</head>
<body>

<h2>Login Here...</h2>

<form action="" method="post">
    Username :
    <input type="text" name="user" required>
    <br><br>

    Password :
    <input type="password" name="pass" required>
    <br><br>

    <input type="submit" name="Login" value="Log In">
</form>

</body>
</html>

<?php
}
?>
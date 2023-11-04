<?php
include "konek.php";

$email = $_POST['email'];
$password =$_POST['password'];

$sql = "SELECT * FROM pengguna WHERE email='$email' AND password='$password'";
$login = mysqli_query($conn, $sql);
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);
if ($ketemu > 0) {
    session_start();
    $_SESSION['nama'] = $r['nama'];
    $_SESSION['id'] = $r['id'];

    echo "USER BERHASIL LOGIN<br>";
    echo "nama =", $_SESSION['nama'], "<br>";
    echo "id = ", $_SESSION['id'], "<br>";
} else {
    echo "<center>Login gagal! username & password tidak benar<br>";
    echo "<a href=../form_login.php><b>ULANGI LAGI</b></a></center>";
}
mysqli_close($conn);
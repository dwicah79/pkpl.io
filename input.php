<?php
include "konek.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO pengguna (id, nama , password , email) VALUES ('$id', '$nama', '$password','$email')";
$query = mysqli_query($conn, $sql);

if($query){
    echo "ANDA BERHASIL MENDAFTAR";
    echo "<br><a href=login.php><b>Log In sekarang</b></a></center><br>";
}else{
    echo "Gagal menambahkan pengguna";
}

mysqli_close($conn); 
// header("location:daftar.php");
?>

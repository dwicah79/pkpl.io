<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkir";


//membuat koneksi dengan database

$conn = new mysqli($servername, $username, $password,$dbname);

//cek koneksi dengan database
// if($conn->connect_error){
//     die("koneksi gagal : " . $conn->error);
// }else{
//     echo"BERHASIL";
// }
?>
<?php
include "koneksi.php";
$username = $_POST[username];
$password = $_POST[password];
$login = mysqli_query($conn, "SELECT *FROM users Where username = '$username' and password = '$password' ");
$cek = mysqli_num_rows($login);

if ($cek > 0)
{
    header("location:home.php");
}
else
{
    header("location:index.php/alert=gagal");
}
?>
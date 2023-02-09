<?php

include 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];


mysqli_query($koneksi,"update t_login set username='$username', password='$password', level='$level' where id='$id'");

header("location:tampildata.php");
?>
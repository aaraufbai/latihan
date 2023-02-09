<?php

include 'koneksi.php';

$id = ['id'];
$username = $_POST['username'];
$password = md5($_POST['username']);
$level = $_POST['level'];

mysqli_query($koneksi, "insert into t_login value('$id', '$username', '$password', '$level')");

header("location:tampildata.php?id=$id");

?>
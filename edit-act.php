<?php

include 'koneksi.php';

$id = ['id'];
$username = $_POST['username'];
$password = md5($_POST['username']);
$level = $_POST['level'];


mysqli_query($koneksi,"update t_login set username='$username', password='$password', level='$level' where id='$id'");

header("location:tampildata.php?id=$id");

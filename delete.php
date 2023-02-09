<?php

include 'koneksi.php';
$id = $_GET ['id'];

mysqli_query($koneksi, "delete from t_login where id='$id'");

header("location:tampildata.php?id=$id");
?>
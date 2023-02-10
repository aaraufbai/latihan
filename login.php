<?php
    session_start();
    include 'koneksi.php';
   
    $username = $_POST['username'];
    $password =md5($_POST['password']);

    $data = mysqli_query($koneksi,"SELECT * FROM t_login WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['status'] = true;
        $_SESSION['username'] = $username;
        header('location:tampildata.php');
    }else{
        header("location:index.php?data=gagal");
    }
?>
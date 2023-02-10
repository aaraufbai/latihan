<?php
session_start();
if (isset($_SESSION['status'])) {
    session_destroy();
    session_unset();
    $_SESSION = [''];
}

require 'header.php';
?>
<!-- login -->
<div class="caontainer mt-5">
    <div class="card col-md-4 offset-md-4">
        <div class="card-body">
            <div class="card-header my-3 text-center">
                <h1>Login</h1>
            </div>
            <form action="login.php" method="post">
                <?php
                if (isset($_GET['data'])) {
                    if ($_GET['data'] == "gagal") {
                        echo "<div class='alert alert-danger'>login GAGAL !!</div>";
                    } else if ($_GET['data'] == "logout") {
                        echo "<div class='alert alert-info'>berhasil LOG OUT !!</div>";
                    } else if ($_GET['data'] == "belum_login") {
                        echo "<div class='alert alert-danger'>Anda Belum Login !!</div>";
                    }
                }
                ?>
                <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary col-12">Submit</button>
            </form>
        </div>
    </div>
</div>
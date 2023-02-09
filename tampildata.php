<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['status'])) {
    header('location:index.php?data=belum_login');
};
?>
<?php
require 'header.php';
?>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid me-5">
        <a class="navbar-brand" href="tampildata.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter;">
                <path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm9-8.586 6 6V15l.001 5H6v-9.586l6-6z"></path>
                <path d="M12 18c3.703 0 4.901-3.539 4.95-3.689l-1.9-.621c-.008.023-.781 2.31-3.05 2.31-2.238 0-3.02-2.221-3.051-2.316l-1.899.627C7.099 14.461 8.297 18 12 18z"></path>
            </svg></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto "></ul>
            <p class="mb-2 mb-lg-0 mx-3 "><?php echo $_SESSION['username']; ?></p>
            <a class="btn btn-danger" href="logout.php" onclick="return confirm('jadi logout')">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            include 'koneksi.php';

            // if (isset($_GET['s'])) {
            //   $name = $_GET['s'];
            //   $query = mysqli_query($koneksi, "SELECT * FROM t_buku where nm_buku like '%" . $name . "%' or lorong like '%" . $name . "%'");
            // } else if (isset($_GET['s'])) {
            //   $name = $_GET['s'];
            //   $query = mysqli_query($koneksi, "SELECT * FROM t_buku where nm_buku like '%" . $name . "%'");
            // }
            $query = mysqli_query($koneksi, "SELECT * FROM t_login");


            $hitung = mysqli_num_rows($query);
            while ($d = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $d['username']; ?></td>
                    <td><?= $d['password']; ?></td>
                    <td><?= $d['level']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                        <a class="btn btn-warning" href="delete.php?id=<?php echo $d['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a class="btn btn-warning" href="register.php">Tambah Data</a>
</div>
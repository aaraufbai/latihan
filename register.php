<?php
require 'header.php';
?>
<div class="caontainer mt-5">
    <div class="card col-md-4 offset-md-4">
        <div class="card-body">
            <div class="card-header my-3 text-center">
                <h1>Tambah Data</h1>
            </div>
            <form action="register-act.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <select class="form-select" name="level" aria-label="Default select example">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <button type="submit" class="btn btn-primary col-12" onclick="return confirm('Tambah Data Selesai')">Tambah data</button>
            </form>
        </div>
    </div>
</div>
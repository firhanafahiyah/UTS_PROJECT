<?php

require_once 'dbkoneksi.php';


// Mendapatkan nilai id dari parameter GET
$_id = $_GET['id'];

// Membuat query SQL untuk mengambil data produk dengan id tertentu
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);

// Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
$st->execute([$_id]);

// Mengambil hasil query dan menyimpannya ke dalam variabel $row
$row = $st->fetch();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container-fluid m-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td><?= $row['id'] ?></td>
                        </tr>
                        <tr>
                            <th>Kode</th>
                            <td><?= $row['kode'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama Produk</th>
                            <td><?= $row['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td><?= $row['harga'] ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td><?= $row['stok'] ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Produk</th>
                            <td><?= $row['jenis_produk'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
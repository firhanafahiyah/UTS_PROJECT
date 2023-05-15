<?Php

include_once 'template/topbar.php';
include_once 'template/sidebar.php';
require_once 'dbkoneksi.php';

// select all data from table "produk"
$sql = "SELECT * FROM produk";
// execute the query
$rs = $dbh->query($sql);

?>
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Halaman Produk</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
            </ol>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">

            <div class="card shadow mt-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Tempat Wisata</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Jenis Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($rs as $row) :
                        ?>
                            <tr>
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?= $row['kode'] ?>
                                </td>
                                <td>
                                    <?= $row['nama'] ?>
                                </td>
                                <td>
                                    <?= $row['harga'] ?>
                                </td>
                                <td>
                                    <?= $row['stok'] ?>
                                </td>
                                <td>
                                    <?= $row['jenis_produk'] ?>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="detail_produk.php?id=<?= $row['id'] ?>" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->

<?php
include_once 'template/footer.php';
?>
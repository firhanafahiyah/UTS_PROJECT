<?php

require_once 'dbkoneksi.php';



$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$produk = $st->fetch();

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="container px-5 my-5">
                <form id="contactForm" action="proses_produk.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="kode">Kode</label>
                        <input class="form-control" name="kode" id="kode" type="text" value="<?= $produk['kode'] ?>" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="kode:required">Kode is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="namaKotaHotel">Nama Tempat Wisata</label>
                        <input class="form-control" name="nama" id="namaKotaHotel" type="text" value="<?= $produk['nama'] ?>" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="namaKotaHotel:required">Nama Tempat Wisata is
                            required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="harga">Harga </label>
                        <input class="form-control" name="harga" id="harga" type="text" value="<?= $produk['harga'] ?>" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="harga:required">Harga is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="stok">Stok</label>
                        <input class="form-control" name="stok" id="stok" type="text" value="<?= $produk['stok'] ?>" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="stok:required">Stok is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jenisProduk">Jenis Produk</label>
                        <select class="form-select" name="jenis_produk" id="jenisProduk" aria-label="Jenis Produk">
                            <option value="1" <?= $produk['jenis_produk'] == '1' ? 'selected' : '' ?>>
                                1</option>
                            <option value="2" <?= $produk['jenis_produk'] == '2' ? 'selected' : '' ?>>
                                2</option>
                            <option value="3" <?= $produk['jenis_produk'] == '3' ? 'selected' : '' ?>>
                                3</option>
                            <option value="4" <?= $produk['jenis_produk'] == '4' ? 'selected' : '' ?>>
                                4</option>
                            <option value="5" <?= $produk['jenis_produk'] == '5' ? 'selected' : '' ?>>
                                5</option>
                        </select>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" value="<?= $produk['id'] ?>" name="id">
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
                    </div>
                </form>
            </div>
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </div>
    </div>
</div>
<?php

require_once 'dbkoneksi.php';


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="container px-5 my-5">
                <form id="contactForm" action="proses_produk.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="kode">Kode</label>
                        <input class="form-control" name="kode" id="kode" type="text" placeholder="Kode"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="kode:required">Kode is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="namaKotaHotel">Nama Produk</label>
                        <input class="form-control" name="nama" id="namaKotaHotel" type="text" placeholder="Nama Produk"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="namaKotaHotel:required">Nama Produk is
                            required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="harga">Harga </label>
                        <input class="form-control" name="harga" id="harga" type="text" placeholder="Harga "
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="harga:required">Harga is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="stok">Stok</label>
                        <input class="form-control" name="stok" id="stok" type="text" placeholder="Stok"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="stok:required">Stok is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jenisProduk">Jenis Produk</label>
                        <?php

                        $sql = "SELECT * FROM jenis_produk";
                        $rs = $dbh->query($sql);

                        ?>
                        <select class="form-control" name="jenis_produk" id="jenisProduk"
                            data-sb-validations="required">
                            <option value="">Pilih Jenis Produk</option>
                            <?php
                            foreach ($rs as $row) {
                            ?>
                            <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <div class="d-grid">
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                    </div>
                </form>
            </div>
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </div>
    </div>
</div>
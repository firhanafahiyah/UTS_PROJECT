<?php

require_once 'dbkoneksi.php';



?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="container px-5 my-5">
                <form id="contactForm" action="proses_pesanan.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="tanggal">Tanggal</label>
                        <input class="form-control" name="tanggal" id="tanggal" type="date" placeholder="tanggal"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="tanggal:required">tanggal is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jenisProduk">Nama Tempat Wisata</label>
                        <?php

                        $sql = "SELECT * FROM produk";
                        $rs = $dbh->query($sql);


                        ?>
                        <select class="form-control" name="nama_produk" id="jenisProduk">
                            <?php
                            foreach ($rs as $row) :
                            ?>
                            <option value="<?= $row['id'] ?>">
                                <?= $row['nama'] ?>
                            </option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                        <div class="invalid-feedback" data-sb-feedback="jenisProduk:required">jenisProduk is
                            required.</div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="total_harga">Total Harga </label>
                        <input class="form-control" name="total_harga" id="total_harga" type="text"
                            placeholder="total_harga " data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="total_harga:required">total_harga is
                            required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="qty">QTY</label>
                        <input class="form-control" name="qty" id="qty" type="text" placeholder="qty"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="qty:required">qty is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="namaKotaHotel">Nama Pemesan</label>
                        <input class="form-control" name="nama_pemesan" id="namaKotaHotel" type="text"
                            placeholder="Nama Anda" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="namaKotaHotel:required">Nama Pemesan is
                            required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="namaKotaHotel">Alamat Pemesan</label>
                        <textarea name="alamat_pemesan" class="form-control" id="" cols="5" rows="10"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="namaKotaHotel:required">Alamat Pemesan is
                            required.</div>
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
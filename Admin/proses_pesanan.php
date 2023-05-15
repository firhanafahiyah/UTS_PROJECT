<?php
require_once 'dbkoneksi.php';
?>

<?php
$_tanggal = $_POST['tanggal'];
$_nama_produk = $_POST['nama_produk'];
$_total_harga = $_POST['total_harga'];
$_qty = $_POST['qty'];
$_nama_pemesan = $_POST['nama_pemesan'];
$_alamat_pemesan = $_POST['alamat_pemesan'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tanggal; // ? 1
$ar_data[] = $_nama_produk; // ? 2
$ar_data[] = $_total_harga; // 3
$ar_data[] = $_qty;
$ar_data[] = $_nama_pemesan;
$ar_data[] = $_alamat_pemesan;

if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,nama_produk,total_harga,qty,nama_pemesan,alamat_pemesan) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['id']; // ? 8
    $sql = "UPDATE pesanan SET tanggal=?,nama_produk=?,total_harga=?,qty=?,nama_pemesan=?,alamat_pemesan=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:pesanan.php');
?>
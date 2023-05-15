<?php
require_once 'dbkoneksi.php';

// Menangkap data iddel dari URL
$id = $_GET['iddel'];

$dbh->query("DELETE FROM jenis_produk WHERE id=$id");

header('location:jenis_produk.php');
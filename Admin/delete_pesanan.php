<?php
require_once 'dbkoneksi.php';

// Menangkap data iddel dari URL
$id = $_GET['iddel'];

$dbh->query("DELETE FROM pesanan WHERE id=$id");

header('location:pesanan.php');

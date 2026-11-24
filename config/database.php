<?php
// config/database.php

$host = '127.0.0.1' ;
$username = 'root' ;
$password = '' ;
$dbname = 'penjualan_meilan' ;

// inisialisasi koneksi dengan MySQLi secara object oriented
$koneksi = new mysqli($host, $username, $password, $dbname);
?>
<?php
// config/database.php

$host = ' localhost ' ;
$username = ' root ' ;
$password = '' ;
$dbname = 'penjualan' ;

// inisialisasi koneksi dengan MySQLi secara object oriented
$koneksi = new mysqli($host, $username, $password, $dbname);
?>
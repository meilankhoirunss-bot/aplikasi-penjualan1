<?php
// config/database.php

$host = ' localhost ' ;
$user = ' root ' ;
$pass = ' ' ;
$db = 'penjualan' ;

// inisialisasi koneksi dengan MySQLi secara object oriented
$koneksi = new mysqli($host, $user, $pass $db);
?>
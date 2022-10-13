<?php 
    // $host = 'sql100.epizy.com';
    // $username = 'epiz_32749616';
    // $password = 'cFCOJk9i4l';
    // $dbname = 'epiz_32749616_unipin';
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'unipin';

    $koneksi = mysqli_connect($host, $username, $password, $dbname);
    if (!$koneksi) {
        echo "Koneksi Gagal : ". mysqli_connect_error();
    }
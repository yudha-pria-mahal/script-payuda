<?php 

$koneksi = mysqli_connect ('localhost','root','','vonzyyyy_db');

function query ($sql) {
    global $koneksi;

    $hasil = mysqli_query($koneksi, "$sql");
    $rows = [];
    while ( $row = mysqli_fetch_assoc($hasil)) {
        $rows [] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM vonzyyyy_db WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}
?>
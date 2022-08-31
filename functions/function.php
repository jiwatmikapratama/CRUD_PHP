<?php
require_once './koneksi/koneksi.php';

$query = "SELECT * FROM buku";


function readBuku($query)
{
    global $koneksi;
    $buku = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($buku)) {
        $rows[] = $row;
    }

    return $rows;
}

function addBuku($dataBuku)
{
    global $koneksi;
    $isbn = htmlspecialchars($dataBuku['isbn']);
    $nama = htmlspecialchars($dataBuku['nama']);
    $pengarang = htmlspecialchars($dataBuku['pengarang']);
    $tahun_terbit = htmlspecialchars($dataBuku['tahun_terbit']);

    $query = "INSERT INTO buku VALUES (
        '','$isbn','$nama','$pengarang','$tahun_terbit'
    )";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function deleteData($id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM buku WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}

function editBuku($dataBuku){
    global $koneksi;

    $id = $dataBuku["id"];
    $isbn = htmlspecialchars($dataBuku['isbn']);
    $nama = htmlspecialchars($dataBuku['nama']);
    $pengarang = htmlspecialchars($dataBuku['pengarang']);
    $tahun_terbit = htmlspecialchars($dataBuku['tahun_terbit']);

    $query = "UPDATE buku SET 
                isbn = '$isbn',
                nama = '$nama',
                pengarang = '$pengarang',
                tahun_terbit = '$tahun_terbit' WHERE id= $id
    ";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
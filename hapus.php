<?php
require './functions/function.php';
$id = $_GET["id"];

if(deleteData($id)>0){
    echo '<div class="alert alert-success" role="alert">
    Data Berhasil Ditambahkan
  </div>';
} else {
    echo '<div class="alert alert-danger" role="alert">
    Data Gagal Ditambahkan
  </div>';
}
?>
<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM daftar where nama='$_GET[nama]'");

if($hapus){
    header('location:data_mhs_baru.php');
}else{
    echo"gagal menghapus data..";
}
?>

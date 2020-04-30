<h3>form edit data mahasiswa baru</h3>
<hr>
<?php
include "koneksi.php";

$sqledit = mysqli_query($konek, "SELECT * FROM daftar where nama");
$e=mysqli_fetch_array($sqledit);

?>
<form method="post" action="">
<table>
    <tr>
        <td>nama</td>
        <td><input type="text" name="txtnama" value="<?php echo $e['nama']; ?>"></td>
        </tr>
        <tr>
        <td>jenis kelamin</td>
        <td>
            <select name="txtkelamin"
                <option value="<?php echo $e['jk']; ?>"><?php echo $e['jk']; ?>"</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>  
        <tr>
        <td>Alamat</td>
        <td><input type="text" name="txtAlamat" size="50" value="<?php echo $e['alamat']; ?>"></td>
        </tr> 
        <tr>
        <td>NO hp</td>
        <td><input type="text" name="txtnoHP"value="<?php echo $e['noHP']; ?>"></td>
        </tr>   
        <tr>
        <td></td>
        <td><input type="submit" value="simpan"></td>
        </tr>
        </tr>
    </table>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $update = mysqli_query($konek, "UPDATE daftar SET whare nama='POST[txtnama]',
                                                            jk=$_POST[txtkelamin]',
                                                            alamat='$_POST[txtAlamat]',
                                                             noHP='$_POST[txtnoHP]'");
            if(update){
                header('location:data_mhs_baru.php');
            }else{
                echo 'gagal mengupdate data..';
            }
        }
        ?>       
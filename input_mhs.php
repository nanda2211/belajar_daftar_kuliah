<h3>form input data mahasiswa baru</h3>
<hr>
<form method="post" action="">
<table>
    <tr>
        <td>nama</td>
        <td><input type="text" name="txtnama"></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td>
        <select name="txtkelamin"
                <option value="">- pilih -</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                </td>
                </tr> 
                <tr>
        <td>Alamat</td>
        <td><input type="text" name="txtAlamat"></td>
        </tr>  
        <td>NO hp</td>
        <td><input type="text" name="txtnoHP"></td>
        </tr>  
        <tr> 
        <td></td>
        <td><input type="submit" value="simpan"></td>
        </tr>
        </tr>
    </table>
    </form>

    <?php
    include "koneksi.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $simpan = mysqli_query($konek, "INSERT INTO daftar (nama,jk,alamat,noHP)
            VALUES('$_POST[txtnama]','$_POST[txtkelamin]','$_POST[txtAlamat]','$_POST[txtnoHP]')");

            if(simpan){
                header('location:data_mhs_baru.php');
            }else{
                echo "gagal menyimpan data..";
            }
    }
    ?>
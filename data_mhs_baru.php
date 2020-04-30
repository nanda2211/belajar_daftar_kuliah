<h3>data mahasiswa baru</h3>
<hr>
<a href="input_mhs.php">Tambah Data</a>
<table border="1" cellspacing="0" width="100%">
    <tr>
        <th>no</th>
        <th>Nama</th>
        <th>jenis kelamin</th>
        <th>alamat</th>
        <th>noHP</th>
        <th>Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $no=1;
    $sqlmhs = mysqli_query($konek, "SELECT * FROM  daftar ORDER BY nama ASC");
    while($d = mysqli_fetch_array($sqlmhs)){
        echo "<tr>
            <td>$no</td>
            <td>$d[nama]</td>
            <td>$d[jK]</td>
            <td>$d[alamat]</td>
            <td>$d[noHP]</td>
            <td align='center'>
                <a href='edit_mhs_baru.php?nama=$d[nama]'>Edit</a> | <a href='hapus_mhs_baru.php?nama=$d[nama]'>hapus</a>            
            </td>
            </tr>";
            $no++;
    }
    ?>

    </table>

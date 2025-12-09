<?php ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title> Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="add.php">Tambah Data</a>
    <br><br>

    <table>
        <tr>

            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>NIS</th>
            
        </tr>
        

        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM siswa");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['kelas']; ?></td>
            <td><?php echo $d['jurusan']; ?></td>
            <td><?php echo $d['nis']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                <a class="delete" href="delete.php?id=<?php echo $d['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

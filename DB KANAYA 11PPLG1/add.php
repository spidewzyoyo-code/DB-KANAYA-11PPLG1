<?php  ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data</title>
</head>
<body>

<h2>Tambah Data Siswa</h2>
<form method="post">
    Nama: <br>
    <input type="text" name="nama" required><br><br>

    Kelas: <br>
    <input type="text" name="kelas" required><br><br>

    Jurusan: <br>
    <input type="text" name="jurusan" required><br><br>

    NIS: <br>
    <input type="text" name="nis" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($koneksi, "INSERT INTO siswa VALUES(
        '',
        '$_POST[nama]',
        '$_POST[kelas]',
        '$_POST[jurusan]',
        '$_POST[nis]'
    )");

    echo "<script>alert('Data berhasil ditambah'); window.location='index.php'</script>";
}
?>

</body>
</html>

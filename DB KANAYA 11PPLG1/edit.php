<?php 

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Siswa</h2>
<form method="post">
    Nama: <br>
    <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required><br><br>

    Kelas: <br>
    <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>" required><br><br>

    Jurusan: <br>
    <input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>" required><br><br>

    NIS: <br>
    <input type="text" name="nis" value="<?php echo $d['nis']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($koneksi, "UPDATE siswa SET 
        nama='$_POST[nama]',
        kelas='$_POST[kelas]',
        jurusan='$_POST[jurusan]',
        nis='$_POST[nis]'
        WHERE id='$id'
    ");

    echo "<script>alert('Data berhasil diupdate'); window.location='index.php'</script>";
}
?>

</body>
</html>

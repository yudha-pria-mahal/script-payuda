<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Nisn</td>
                <td>Nama</td>
                <td>Jenkel</td>
                <td>Kelas</td>
                <td>Hobi</td>
                <td>Foto</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php 
        // menghubungan ke database
        $koneksi = mysqli_connect('localhost', 'root', '', 'db_taqy');
        
        $no = 1;
        $query = "SELECT * FROM tbl_siswa";
        $hasil = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data ['nisn'] ?></td>
                <td><?= $data ['nama'] ?></td>
                <td><?= $data ['jenkel'] ?></td>
                <td><?= $data ['kelas'] ?></td>
                <td><?= $data ['hobi'] ?></td>
                <td><img src="img/<?= $cetak['foto'] ?>" width="100"></td>
                <td>
                    <a href="form_update.php?id=<?= $data['id']; ?>">Edit</a>
                    <a href="#">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php $no++; } ?>
    </table>
</body>
</html>
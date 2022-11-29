<?php 
// menghubungan ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'db_taqy'); 
$id = $_GET['id'];
$query = "SELECT * FROM tbl_siswa WHERE id='$id' ";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($hasil); 

$hobi = explode(",", $data['hobi']);
?>


    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="act_update.php" method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name="id" value="<?= $data['id']; ?> ">
        <label for="">Nisn :</label>
        <input type="text" name="nisn" value="<?= $data['nisn']; ?>">
        <br><br>
        <label for="">Nama :</label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>">
        <br><br>
        <label for="">Jenis Kelamin :</label>
        <?php 
        if ($data['jenkel'] == "Laki-laki") { ?>
            <input type="radio" name="jenkel" value="Laki-laki" checked>Laki-laki
            <input type="radio" name="jenkel" value="Perempuan">Perempuan
        <?php } else { ?>
            <input type="radio" name="jenkel" value="Laki-laki">Laki-laki
            <input type="radio" name="jenkel" value="Perempaun" checked>Perempuan
        <?php } ?>
        <br><br>
        <label for="">Kelas :</label>
        <select name="kelas">
        <?php if ($data['kelas'] == 0) { ?>
            <option value="0" selected>- Pilih Kelas -</option>
            <option value="X RPL">X RPL</option>
            <option value="XI RPL">XI RPL</option>
            <option value="XII RPL">XII RPL</option>
        <?php } elseif ($data['kelas'] == "X RPL") { ?>
            <option value="X RPL" selected>X RPL</option>
            <option value="XI RPL">XI RPL</option>
            <option value="XII RPL">XII RPL</option>
        <?php } elseif ($data['kelas'] == "XI RPL") { ?>
            <option value="X RPL">X RPL</option>
            <option value="XI RPL" selected>XI RPL</option>
            <option value="XII RPL">XII RPL</option>
        <?php } else { ?>
            <option value="X RPL">X RPL</option>
            <option value="XI RPL">XI RPL</option>
            <option value="XII RPL" selected>XII RPL</option>
        <?php } ?>
        </select>
        <br><br>
        <label for="">Hobi :</label>
        <br>
        <input type="checkbox" name="hobi[]" value="Ngopi" <?php if (in_array("Ngopi", $hobi)) echo "checked" ?>>Ngopi
        <br>
        <input type="checkbox" name="hobi[]" value="Basket" <?php if (in_array("Basket", $hobi)) echo "checked" ?>>Basket
        <br>
        <input type="checkbox" name="hobi[]" value="Ngoding" <?php if (in_array("Ngoding", $hobi)) echo "checked" ?>>Ngoding
        <br><br>

        <?php if ($data['foto'] == "") { ?>
            <label for="">Foto :</label>
            <input type="file" name="foto">
        <?php } else { ?>
            <img src="img/<?= $data['foto'] ?>" alt="<?= $data['foto'] ?>" width = "100">
            <br><br>
            <label for="">Foto :</label>
            <input type="file" name="foto">
        <?php } ?>
        <br><br>
        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>
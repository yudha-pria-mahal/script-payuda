<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="read.php" method="POST" enctype="multipart/form-data"> 
        <label for="">Nisn :</label>
        <input type="text" name="nisn">
        <br><br>
        <label for="">Nama :</label>
        <input type="text" name="nama">
        <br><br>
        <label for="">Jenis Kelamin :</label>
        <input type="radio" name="jenkel" value="Laki-laki">Laki-laki
        <input type="radio" name="jenkel" value="Perempaun">Perempuan
        <br><br>
        <label for="">Kelas :</label>
        <select name="kelas">
            <option value="">- Pilih Kelas -</option>
            <option value="X RPL">X RPL</option>
            <option value="XI RPL">XI RPL</option>
            <option value="XII RPL">XII RPL</option>
        </select>
        <br><br>
        <label for="">Hobi :</label>
        <br>
        <input type="checkbox" name="hobi[]" value="Ngopi">Ngopi
        <br>
        <input type="checkbox" name="hobi[]" value="Basket">Basket
        <br>
        <input type="checkbox" name="hobi[]" value="Ngoding">Ngoding
        <br><br>
        <label for="">Foto :</label>
        <input type="file" name="foto">
        <br><br>
        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>
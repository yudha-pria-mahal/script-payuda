<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'db_taqy');

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenkel = $_POST['jenkel'];
$hobi = implode(" , " , $_POST['hobi']);

$allowed = array('png', 'jpg', 'jpeg');
$lokasi_file = $_FILES['foto']['tmp_name'];
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// untuk menentukan folder gambar
$folder = "img/$filename";

// jika tidak memilih gambar
if ($filename == "") {
//     echo "Nisn : $nisn <br><br>
//     Nama : $nama <br><br>
//     Kelas : $kelas <br><br>
//     Jenis Kelamin : $jenkel <br><br>";

//     foreach ($hobi as $key) {
//     echo "Hobi : $key <br><br>";
// }
$query = "INSERT INTO tbl_siswa(nisn,nama,jenkel,kelas,hobi,foto) VALUES('$nisn','$nama','$jenkel','$kelas','$hobi','$filename')";
mysqli_query($koneksi, $query);
echo "<script>
        alert('Simpan Data Berhasil')
        window.location='read';
      </script>";

}else {
    if (!in_array($ext, $allowed)) {
        echo "<script>
                alert('Ektensi gambar tidak di perbolehkan')
                history.go(-1);
              </script>";
    
}else{
    // jika memilih gambar yang sesuai 
    move_uploaded_file($lokasi_file, "$folder");
    // echo "Nisn : $nisn <br><br>
    // //     Nama : $nama <br><br>
    // //     Kelas : $kelas <br><br>
    // //     Jenis Kelamin : $jenkel <br><br>";

    // foreach ($hobi as $key) {
    // echo "Hobi : $key <br><br>";
    // }  

    // echo "<img src='img/$filename' width='250'>";

    $query = "INSERT INTO tbl_siswa(nisn,nama,jenkel,kelas,hobi,foto) VALUES('$nisn','$nama','$jenkel','$kelas','$hobi','$filename')";
    mysqli_query($koneksi, $query);
    echo "<script>
            alert('Simpan Data Berhasil');
            window.location='read';
          </script>";

}
    

}






?>
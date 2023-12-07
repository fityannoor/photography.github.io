<?php include 'koneksi.php';

$email=$_POST['email'];
$nama=$_POST['nama'];
$no_telp=$_POST['no_telp'];
$password=$_POST['password'];

$sql=mysqli_query($conn,"insert into user values('$email', '$nama', '$no_telp','$password')");

if ($sql) {
    echo "<script>alert('akun sudah terbuat'); window.location = 'index.php'</script>";
  } else {
    die ('Gagal!' .mysqli_error($conn));
  }

?>
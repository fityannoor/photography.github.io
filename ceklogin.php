<?php

session_start();
include_once("koneksi.php");
    

    $email = $_POST['email'];
    $password = $_POST['password'];

    // if(isset($_POST['login'])) {
    //     $email = mysqli_real_escape_string($conn, $_POST['email']);
    //     $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        if(!empty($email && $password)){
            echo "
                            <SCRIPT type='text/javascript'>
                            alert('email & Kata Sandi Anda Salah!');
                            history.back(self);
                            </SCRIPT>";
            $query = "SELECT * FROM user where email='$email' && password='$password'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                if($row["email"] ==$email && $row["password"] == $password){
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['no_telp'] = $row['no_telp'];
                    $_SESSION['password'] = $row['password'];
                  header("Location: home.php");
                }
                    else{
                    echo "<script>alert('Password atau nama pengguna yang di masukkan salah, Silahkan Ulangi atau buat akun')</script>";
                    echo "<a href='index.php'>Masuk</a>";
                    break;
                }


            }
        }
?>
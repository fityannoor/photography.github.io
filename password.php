<?php 
session_start();
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photography</title>
    <link rel="stylesheet" href="Asset/css/password.css">
</head>
<body>

	<nav class="navbar">
        <img src="Asset/img/logo.svg" alt="">
		<ul class="navbar-list">
	
			
			<li class="navbar-item"><a href="home.php">Beranda</a></li>
			<li class="navbar-item"><a href="#">ETALASE</a></li>
			<li class="navbar-item dropdown">
				<a href="#">Tipe Kelas</a>
	

				<div class="dropdown-content">
					<a href="#">Tatap Muka</a>
					<a href="#">Live Webinar</a>
					<a href="#">Online</a>
				</div>
			</li>
            <li class="logout">
                <a href="" class="profile"><img src="Asset/img/profile.svg" alt=""></a>

                <div class="dropdown-content2">
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Logout</a>
                </div>
                
            </li>
		</ul>
        

            
            

                    
       
	</nav>


	<div class="isi">
        <h1>Edit Akun</h1>
        <div class="prof">
            
            <a href="profile.php">Profile</a>
        </div>
        <div class="pass">
            <div class="tag"></div>
            <a href="password.php">Password</a>
        </div>
        

        
    </div>

    <div class="profile2">
        <form method="post">
                
            <p class="nama">Password Lama*</p>
            <input type="password" name="password" class="form-control"  value="<?php echo $_SESSION['password'];?>" required>

            <p class="email">Password Baru*</p> 
            <input type="password" name="password" class="form-control"  value="<?php echo $_SESSION['password'];?>" required>
            <p class="nomr">Konfirmasi Password Baru*</p>
            <input type="password" name="password" class="form-control"  value="<?php echo $_SESSION['password'];?>" required>
            <button input Type="update" name="simpan" class="simpan"> Simpan </button>
        </form>
</div>
   
    <div class="footer">

        <div class="tentang">
            <h2>Tentang</h2>
            <a href="#">Tentang Kami</a><br>
            <a href="#">Bantuan</a><br>
            <a href="#">Jadi Mitra</a>
        </div>
        <div class="tentang2">
            <a href="#">Kontak Kami</a><br>
            <a href="#">Karir</a>
        </div>
        
        <div class="lainnya">
            <h2>Lainnya</h2>
            <a href="#">Syarat dan Ketentuan</a><br>
            <a href="#">Kebijakan Privasi</a><br>
            <a href="#">Press Kit</a><br>
        </div>

        <div class="lainnya2">
            <a href="#">Verifikasi Sertifikat</a><br>
            <a href="#">Event WebFotografi</a><br>
            <a href="#">For Enterprise</a>
        </div>


    </div>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography</title>
    <link rel="stylesheet" href="Asset/css/login.css">
</head>
<body>
    
    <div class="container">
        
            
            <div class="left">
                <div class="kata1">
                    <p>Perbanyak Wawasan, Perbanyak Kesempatan</p>
                </div>
                 

                
                <div class="box1">
                    <img src="Asset/img/phone.svg" alt="">
                    <p>Dapatkan Inspirasi</p>
                </div>

                <div class="box2">
                    <img src="Asset/img/motivasi.svg" alt="">
                    <p>Memotivasi dari fotografer terbaik</p>

                </div>

                <div class="box3">
                    <img src="Asset/img/serti.svg" alt="">
                    <p>Sertifikat untuk setiap kelasnya</p>

                </div>
                <img src="Asset/img/left login.svg">

            </div>
            

    </div>

    <div class="right">
           
        <div class="login">


            <form method="post" action="ceklogin.php" autocomplete="off">
                <p class="kata">Masuk ke akun Skill Academy
                    kamu!</p>      
                <p class="email">Email*</p>
                
                <input type="text" name="email" placeholder="Masukkan Email" class="form-control" required>
                
                <p class="pass">Kata Sandi*</p> 
                
                <input type="password" name="password" placeholder="Masukkan Kata Sandi" class="form-control" required>
                <a href="" class="lupa">Lupa Password</a>
                
                <button input Type="submit" name="masuk" class="sign"> Masuk </button>

                <div class="atau">
                    <p>Atau Login Menggunakan</p>
                    
                </div>
                
                    
                    <a href="#" class="face">
                        <img src="Asset/img/fb.svg" alt="">
                        Login dengan Facebook
                    </a>
                
                

                
                    
                    <a href="#" class="google">
                        <img src="Asset/img/Google.svg.svg" alt="">
                        Login dengan Google
                    </a>
                
                
            </form>
            
            
            
            
        </div>

        

        
        <div class="main">
                <a href="login.php" class="openlogin">Masuk</a>
                
        </div>  
            <div class="main1">
                <a href="daftar.php" class="openlogin" >Daftar</a>
                
        </div>
        <div class="fot">
            <p>Belum memiliki akun? Silahkan <a href="daftar.php">daftar</a></p>

        </div>
        
    </div>
</body>
 

</html>
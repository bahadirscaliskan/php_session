<?php
session_start();


if(isset($_SESSION["eposta"])&&isset($_SESSION["sifre"]))
            {
                $eposta = $_SESSION['eposta'];
                $sifre = $_SESSION['sifre']; 
   
 
        echo'   E-Posta Adresi: '.$eposta.' <br>
                Şifreniz: '.$sifre.'<br>
                Verileri Temizlendi
                
                ';
                
            }



 
unset($_SESSION['eposta']);
unset($_SESSION['sifre']);
session_destroy();
 
echo' 
<br>
<a href="index.php">Anasayfaya Git </a>
';

 ?>
<?php

session_start();

echo'
<!doctype html>
<html>
    <head>
    <title>Session Kullanımı</title>
    </head>
    <body>
 ';
        if(isset($_SESSION["eposta"])&&isset($_SESSION["sifre"]))
            {
                $eposta = $_SESSION['eposta'];
                $sifre = $_SESSION['sifre']; 
   
 
        echo'   E-Posta Adresi: '.$eposta.' <br>
                Şifreniz: '.$sifre.'<br>';
            
            }
 
            echo'  <a href="index.php">Anasayfaya Git </a>
 
    </body>
</html>
';

?>


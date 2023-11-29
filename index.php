<?php
session_start();


$degisken = htmlspecialchars($_SERVER["PHP_SELF"]);


echo' 
<!doctype html>
<html>
    <head>
    <title>Session Kullanımı</title>
    </head>
    <body>
        <form method="post" action="'.$degisken.'">
            E-Posta Adresi :<input type="text" name="eposta"><br>
            Şifreniz:<input type="text" name="sifre"><br>
            <input type="submit" name="submit" value="Gönder">
        </form>
 
        <br>
        <a href="yonlen.php">Kaydedilen Sessiona Git </a><br>
        <a href="temizle.php">Session Temizle </a>
 
       ';
 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        $_SESSION['eposta']=$_POST['eposta'];
 
        $_SESSION['sifre']=$_POST['sifre'];
 
        }
echo'
    </body>
</html>
';

?>
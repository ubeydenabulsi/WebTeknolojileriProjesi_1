<?php
    
    $dogru_mail = "b251210558@sakarya.edu.tr"; 
    $dogru_sifre = "b251210558";

    $gelen_mail = $_POST['kullanici_mail'];
    $gelen_sifre = $_POST['kullanici_sifre'];

    if ($gelen_mail == $dogru_mail && $gelen_sifre == $dogru_sifre) {
       
        echo "<h1 style='color: green;'>Giriş Başarılı!</h1>";
        echo "<h2>Hoşgeldiniz</h2>";
    } 
    else {
     
        echo "<script>
                alert('Hatalı giriş!');
                window.location.href = 'login.html';
              </script>";
    }
?>
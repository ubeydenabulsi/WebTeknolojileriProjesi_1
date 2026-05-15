<?php
    
    $dogru_mail = "b251210558@ogr.sakarya.edu.tr"; 
    $dogru_sifre = "b251210558";

    $gelen_mail = $_POST['kullanici_mail'];
    $gelen_sifre = $_POST['kullanici_sifre'];

    if ($gelen_mail == $dogru_mail && $gelen_sifre == $dogru_sifre) {
       
        echo '
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Başarılı - Ubeyde Elnabulsi</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f4f7f6;">
    
    <div class="card shadow-lg p-5 border-0 rounded-4 text-center animasyon-baslat" style="width: 100%; max-width: 450px;">
        <h1 style="color: #d4a373; font-weight: bold;">Giriş Başarılı!</h1>
        <hr class="mb-4">
        <h4 class="text-secondary">Hoşgeldiniz,</h4>
        <h3 class="mb-4"><strong>' . $gelen_sifre . '</strong></h3>
        
        <a href="index.html" class="btn btn-primary w-100">Ana Sayfaya Git</a>
    </div>

</body>
</html>
';
    } 
    else {
     
        echo "<script>
                alert('Hatalı giriş!');
                window.location.href = 'login.html';
              </script>";
    }
?>
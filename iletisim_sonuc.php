<!DOCTYPE html>
<html lang="tr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonucu</title>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-success text-center mb-4">Mesajınız Başarıyla İletildi!</h2>
            <p class="text-center">En kısa sürede dönüş yapılacaktır.</p>
            <hr>

     <table class="table table-bordered table-striped mt-3">
        <tbody>
        <tr>
            <th style="width: 30%;">İsim Soyad</th>
            <td><?php echo $_POST["KullaniciIsimSoyadi"]; ?></td>
        </tr>
            <tr>
            <th>E-posta Adresi</th>
            <td><?php echo $_POST["KullaniciEmail"]; ?></td>
            </tr>
        <tr>
            <th>Telefon Numarası</th>
            <td><?php echo $_POST["KullaniciTelefon"]; ?></td>
        </tr>
        <tr>
        <th>Cinsiyet</th>
            <td><?php echo $_POST["cinsiyet"]; ?></td>
        </tr>
          <tr>
        <th>Ülke</th>
             <td><?php echo $_POST["kullaniciUlke"]; ?></td>
        </tr>
             <tr>
            <th>Seçilen Konular</th>
            <td>
                <?php 
                                
            foreach($_POST['bildirim_konulari'] as $konu) {
                        echo "- " . $konu . "<br>";
                         }
                    ?>
            </td>
            </tr>
            <tr>
                <th>Mesaj</th>
                <td><?php echo nl2br($_POST["kullaniciMesaj"]); ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center mt-4">
                <a href="iletisim.html" class="btn btn-primary">Forma Geri Dön</a>
            </div>
        </div>
    </div>

</body>
</html>
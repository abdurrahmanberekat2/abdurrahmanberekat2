<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="icerik" class="container" align="center">
        <div align="center" class="row">
            <div class="col-1"></div>
            <div id="content-col" style="color: white; " class="bg-dark ">
                <?php
                if ($_POST['kullanici_adi'] == 'g211210588@sakarya.edu.tr' && $_POST['sifre'] == 'g211210588') {
                    echo "<p>Kullanıcı adınız ve şifreniz doğru.</p> <p>Hoşgeldiniz 'b201210391'</p><p>Anasayfaya yönlendiriliyorsunuz.</p>";
                    header("refresh:3;url=index.html");
                } else {
                    echo "<p>Giriş bilgileriniz yanlış.</p> ";
                    header("refresh:3;url=login.html");
                }
                ?>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>
</html>
?>
  

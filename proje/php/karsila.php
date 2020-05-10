<?php
ob_start();
$kullanici_adi = 'b181210081@ogr.sakarya.edu.tr';
$kullanici_sifre = 'eminekarakayali';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/giris.css">
    <link rel="stylesheet" href="../font/css/all.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col p-5">
                <h1 class="girisekran mb-2">Giriş Başarılı</h1>
                <div class="card p-3 mt-5">
                    <?php
                    ob_start();
if($kullanici_adi == $_POST['kadi'] && $kullanici_sifre == $_POST['sifre'])
{
        ?>
                    <p class="text-center p-3"><?php echo "Hoşgeldin <b>$kullanici_adi</b>!"; ?></p>
                    <a href="../Hakkimda.html" class="text-center"><button
                            class="btn btn-lg btn-success text-white">Hakkında Sayfasına Geri Dön</button></a>
                    <?php
                    ob_start();
}
else if ($kullanici_adi != $_POST['kadi'] || $kullanici_sifre != $_POST['sifre'])
{
    header("location:girisyap.php?bildirim=yanlis");
}
if(!filter_var($_POST['kadi'],FILTER_VALIDATE_EMAIL))
{
    header("location:girisyap.php?bildirim=formataUymuyor");
}
if(($_POST['kadi'] == null || $_POST['kadi'] == '') && ($_POST['sifre'] == null || $_POST['sifre']==''))
{
    header("location:girisyap.php?bildirim=herIkisideBos");
}
else if($_POST['kadi'] == null || $_POST['kadi'] == '')
{
    header("location:girisyap.php?bildirim=kullaniciBosUyari");
}
else if($_POST['sifre'] == null || $_POST['sifre'] == '')
{
    header("location:girisyap.php?bildirim=sifreBosUyari");
}
?>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
</body>

</html>
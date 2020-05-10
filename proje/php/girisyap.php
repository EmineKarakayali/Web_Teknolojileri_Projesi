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
                <h1 class="girisekran mb-2">Giriş Yapma Ekranı</h1>
                <div class="card p-3 mt-5">
                    <form action="karsila.php" method="POST">
                        <div class="form-group">
                            <label class="mt-2 h3 kullanici_adi">Kullanıcı Adı:</label>
                            <input type="text" name="kadi" class="form-control" placeholder="Kullanıcı Adınızı Giriniz">
                        </div>

                        <div class="form-group">
                            <label class="mt-2 h3 kullanici_sifre">Şifre:</label>
                            <input type="password" name="sifre" class="form-control" placeholder="Şifrenizi Giriniz">
                        </div>
                        <button type="submit" class="btn btn-lg oturum" name="oturumac">Oturum
                            Aç</button>
                    </form>
                </div>
                <?php
                        if(isset($_GET['bildirim']))
                        {
                            if($_GET['bildirim']=="yanlis")
                            {
                                ?>
                                    <div class="card mt-3 text-center  bg-warning">
                                        Kullanıcı adı veya şifrenizi hatalı girdiniz lütfen tekrar giriniz!
                                    </div>
                                <?php
                            }
                        }
                        if(isset($_GET['bildirim']))
                        {
                            if($_GET['bildirim']=="formataUymuyor")
                            {
                                ?>
                                    <div class="card mt-3 p-3 text-center bg-warning">
                                        Kullanıcı adınız, kullanıcı adı formatına uymamaktadır!
                                    </div>
                                <?php
                            }
                        }
                        if(isset($_GET['bildirim']))
                        {
                            if($_GET['bildirim']=="herIkisideBos")
                            {
                                ?>
                                    <div class="card mt-3 p-3 text-center  bg-warning">
                                        Her ikiside boş kullanıcı adı ve şifrenizi boş bırakamazsınız!
                                    </div>
                                <?php
                            }
                        }
                        if(isset($_GET['bildirim']))
                        {
                            if($_GET['bildirim']=="kullaniciBosUyari")
                            {
                                ?>
                                    <div class="card mt-3 p-3 text-center  bg-warning">
                                       Kullanıcı adınızı boş bırakmamalısınız!
                                    </div>
                                <?php
                            }
                        }
                        if(isset($_GET['bildirim']))
                        {
                            if($_GET['bildirim']=="sifreBosUyari")
                            {
                                ?>
                                    <div class="card mt-3 p-3 text-center bg-warning">
                                        Şifrenizi boş bırakmamalısınız!
                                    </div>
                                <?php
                            }
                        }
                        
                ?>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>

</body>

</html>
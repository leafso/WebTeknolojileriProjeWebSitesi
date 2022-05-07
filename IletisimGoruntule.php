<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emre Kara | Iletisim</title>
    <meta name="description" content="a website about Emre Kara and Karaman where a citiy of Turkey">
    <meta name="keywords" content="Emre Kara , iletişim , Yorum , hakkında">
    <meta name="author" content="Emre Kara">

    <!--My css files-->
    <link rel="stylesheet" href="./css/Main.css">
    <link rel="stylesheet" href="./css/NavbarStyle.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/table.css" />
   

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Ubuntu:ital,wght@0,300;1,400&display=swap"
        rel="stylesheet">
    <!-- font AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--tablet/telefon-->
    <link rel="stylesheet" media="(max-width:768px)" href="./css/tablet.css">
    <link rel="stylesheet" media="(max-width:500px)" href="./css/phone.css">
</head>

<body class="setFont bodyBackground">

    <!--navbar-->
    <nav class="navbar navbar-expand-sm border-bottom bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">Emre_Kara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item navbarClik navbarHover ">
                        <a href="./index.html" class="nav-link text-muted">Anasayfa</a>
                    </li>
                    <li class="nav-item  navbarClik navbarHover">
                        <a href="./CV.html" class="nav-link text-muted ">CV</a>
                    </li>
                    <li class="nav-item navbarClik navbarHover">
                        <a href="./IlgiAlanlarım.html" class="nav-link text-muted ">Hobilerim</a>
                    </li>
                    <li class="nav-item navbarClik navbarHover dropdown ">
                        <a href="#" class="nav-link text-muted dropdown-toggle" data-bs-toggle="dropdown">Şehrim</a>
                        <ul class="dropdown-menu bg-dark ">
                            <li><a class="dropdown-item text-muted" href="./Sehrim.html">Sehrim</a></li>
                            <li><a class="dropdown-item text-muted" href="./SehrimKaradag.html">Karadağ</a></li>
                            <li><a class="dropdown-item text-muted" href="./SehrimIncesu.html">İncesu Mağrası</a></li>
                            <li><a class="dropdown-item text-muted" href="./SehrimErmenekYerkopruSelalesi.html">Yerköprü Şelalesi</a></li>
                            <li><a class="dropdown-item text-muted" href="./SehrimGokceCamlıgıMesireAlanı.html">Gökçe Çamlığı</a></li>
                            <li><a class="dropdown-item text-muted" href="./SehrimZeyve.html">Zeyve</a></li>
                        </ul>
                    </li>
                    <li class="nav-item navbarClik navbarHover dropdown ">
                        <a href="#" class="nav-link text-muted dropdown-toggle" data-bs-toggle="dropdown">Mirasımız</a>
                        <ul class="dropdown-menu bg-dark ">
                            <li><a class="dropdown-item text-muted" href="./Mirasimiz.html">Mirasımız</a></li>
                            <li><a class="dropdown-item text-muted" href="./MirasimizKaramanKalesi.html">Karaman Kalesi</a></li>
                            <li><a class="dropdown-item text-muted" href="./MirasimizAktekkeCami.html">Aktekke Cami</a></li>
                            <li><a class="dropdown-item text-muted" href="./MirasimizTartanEvi.html">Tartan Evi</a></li>
                            <li><a class="dropdown-item text-muted" href="./Mirasimiz1001Kilise.html">1001 Kilise</a></li>
                            <li><a class="dropdown-item text-muted" href="./MirasimizManazanMagralari.html">Manazan Mağraları</a></li>
                            <li><a class="dropdown-item text-muted" href="./MirasimizKızlarTürbesi.html">Kızlar Türbesi</a></li>
                            <li><a class="dropdown-item text-muted" href="./MirasimizCesmeliKilise.html">Çeşmeli Kilise</a></li>
                        </ul>
                    </li>
                    <li class="nav-item navbarClik navbarHover">
                        <a href="./Iletisim.html" class="nav-link text-warning">İletişim</a>
                    </li>
                    <li class="nav-item navbarClik navbarHover">
                        <a href="./Login.php" class="nav-link text-muted"><i class="fa-solid fa-right-to-bracket"></i>
                            Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>


        <div class="t">
                <h1><span class="blue">&lt;</span>İletişim Bİlgileri<span class="blue">&gt;</span>
                <table class="container">
                    <thead>
                        <tr>
                            <th><h1>Kategori</h1></th>
                            <th><h1>Yanıtlar</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ad</td>
                            <td>
                            <?php
                            echo $_POST['ad'];
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Soyad</td>
                            <td>
                            <?php
                            echo $_POST['soyad'];
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Cinsiyet</td>
                            <td>
                            <?php
                            echo $_POST['cinsiyet'];
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>e-Mail</td>
                            <td>
                            <?php
                            echo $_POST['email'];
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Doğum Tarihi</td>
                            <td>
                            <?php
                            echo $_POST['dogumTarihi'];
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Yorum Tipi</td>
                            <td><?php
                            echo $_POST['YTipi'];
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Şehir Kodu</td>
                            <td>
                            <?php
                            echo $_POST['sehir'];
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Mesaj</td>
                            <td><?php
                            echo $_POST['mesaj'];
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Dosya</td>
                            <td>
                            <?php
                            echo $_POST['dosya'];
                            ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    




    <footer>
        <br><br>
        <hr class="footerHr">
        <br>
        <div class="container ">
            <ul class=" listStyle container-fluid">
                <li class="footerLiStyle"><a href="./index.html" class="footerLinkStyle footerLinkHover">Anasayfa</a>
                </li>
                <li class="footerLiStyle"><a href="./CV.html" class="footerLinkStyle footerLinkHover">CV</a></li>
                <li class="footerLiStyle"><a href="./IlgiAlanlarım.html"
                        class="footerLinkStyle footerLinkHover">Hobilerim</a></li>
                <li class="footerLiStyle"><a href="./Mirasimiz.html"
                        class="footerLinkStyle footerLinkHover">Mirasımız</a></li>
                <li class="footerLiStyle"><a href="./Sehrim.html" class="footerLinkStyle footerLinkHover">Şehrim</a>
                </li>
                <li class="footerLiStyle"><a href="./Iletisim.html" class="footerLinkStyle footerLinkHover">İletişim</a>
                </li>
                <li class="footerLiStyle"><a href="./Login.php" class="footerLinkStyle footerLinkHover">Login </a></li>
            </ul>
        </div>
        <br>
        <div class="container-fluid footerGitHub">
            <a href="https://github.com/leafso" target="blank"
                class="fa-brands fa-github footerLinkStyle footerGitHubLink footerLinkHover"> GitHub</a>
        </div>
        <br><br><br>
    </footer>


    <!--Bootstrap Js-->
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
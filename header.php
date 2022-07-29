<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 
    </head>
    <body>
        <nav class="navbar navbar-expand-lg py-3 navbar-light" style="background-color: #ffc200;">
        <a class="navbar-brand" href="#"> <img src="asset/img/logopondokkasih.png" alt="..." height="100" style="padding-left:30px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcontent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarcontent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="padding-right:20px;"><b>Beranda</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbaraboutus" data-toggle="dropdown" style="padding-right:20px;"><b>Tentang Kami</b></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="kata_pengantar.php">Kata Pengantar</a>
                            <a class="dropdown-item" href="sejarah.php">Sejarah</a>
                            <a class="dropdown-item" href="#">Visi, Misi, dan Nilai</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="padding-right:20px;"><b>Program Kami</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="padding-right:20px;"><b>Blog</b></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Berita</a>
                        <a class="dropdown-item" href="#">Buletin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="padding-right:20px;"><b>Hubungi Kami</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="padding-right:20px;"><b>Donasi</b></a>
                    </li>
                    <li class="nav-item d-flex">
                        <div class="collapse fade" id="searchForm">
                            <input id="search" type="search" class="form-control border-0 bg-light" placeholder="search" />
                        </div>
                        <a class="nav-link ml-auto" href="#searchForm" data-target="#searchForm" data-toggle="collapse">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <!-- <li class="nav-item d-flex">
                        <div class="collapse fade" id="searchForm">
                        <form class="form-inline" action="/action_page.php">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                        </div>
                        <a class="nav-link ml-auto" href="#searchForm" data-target="#searchForm" data-toggle="collapse">
                            <i class="fa fa-search"></i>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                    <div class="collapse fade" id="selectLang">
                        <select class="selectpicker" data-width="fit" name="bahasa" >
                            <option data-content='<span class="flag-icon flag-icon-id"></span> Indonesia' value="1">Indonesia</option>
                            <option data-content='<span class="flag-icon flag-icon-en"></span> English' value="2">English</option>
                        </select>
                    </div>
                        <a class="nav-link ml-auto" href="#selectLang" data-target="#selectLang" data-toggle="collapse">
                            <i class="fa fa-language">halo</i>
                        </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                                $default=1;
                                if (isset($_POST['bahasa'])) {
                                    $default=$_POST['bahasa'];
                                    if($default==1){
                                        echo'<img src="https://cdn0-production-images-kly.akamaized.net/Zb1C2QT9Oa5WEWP6n_9RfJmLXrk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/777854/original/007298500_1418123594-bendera_mp.png" width="40" height="40" class="rounded-circle">';
                                    }else{
                                        echo'<img src="https://ar.thpanorama.com/img/images_3/bandera-de-estados-unidos-historia-y-significado_16.png" width="40" height="40" class="rounded-circle">';
                                    }
                                }
                            
                            ?>
                            <img src="https://cdn0-production-images-kly.akamaized.net/Zb1C2QT9Oa5WEWP6n_9RfJmLXrk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/777854/original/007298500_1418123594-bendera_mp.png" width="40" height="40" class="rounded-circle">
                        </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" name="bahasa" id="bhs">
                            <a class="dropdown-item" href="#" value="1">Indonesia</a>
                            <a class="dropdown-item" href="#" value="2">English</a>
                        </div>
                     </li>                    

                </ul>
            </div>
        </nav>

       
<!DOCTYPE html>

      <style>
.main-timeline{ font-family: 'Heebo', sans-serif; }
.main-timeline:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline .timeline{
    width: 70%;
    padding: 50px 0 0 0;
    margin: 0 5px 5px 0;
    float: left;
}
.main-timeline .timeline-content{
    color: #fff;
    background: #BE050B;
    min-height: 125px;
    padding: 20px 20px 20px 275px;
    border-radius: 40px;
    display: block;
    position: relative;
}
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .timeline-content:before{
    content: '';
    background-color: #f91d21;
    height: calc(100% + 50px);
    width: 125px;
    border-radius: 40px 40px 0 0;
    box-shadow: 0 0 10px -2px rgba(0,0,0,0.3);
    position: absolute;
    left: 125px;
    bottom: 0;
}
.main-timeline .timeline-icon{
    color: #fff;
    font-size: 60px;
    transform: translateY(-50%);
    position: absolute;
    left: 155px;
    top: 50%;
}
.main-timeline .timeline-icon1{
    color: #fff;
    font-size: 60px;
    transform: translateY(-50%);
    position: absolute;
    left: 565px;
    top: 50%;
}
.main-timeline .timeline-icon2{
    color: #fff;
    font-size: 60px;
    transform: translateY(-50%);
    position: absolute;
    left: 155px;
    top: 50%;
}
.main-timeline .timeline-year{
    font-size: 40px;
    font-weight: 600;
    transform: translateY(-50%);
    position: absolute;
    left: 18px;
    top: 50%;
}
.main-timeline .title{
    font-size: 22px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: 0.5px;
    margin: 0 0 5px;
}
.main-timeline .description{
    color: rgba(255, 255, 255, 0.85);
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    letter-spacing: 1px;
    margin: 0;
}
.main-timeline .timeline:nth-child(even){
    margin: 0 0 5px 5px;
    float: right;
}
.main-timeline .timeline:nth-child(even) .timeline-content{
    padding: 20px 275px 20px 20px;
}
.main-timeline .timeline:nth-child(even) .timeline-content:before{
    left: auto;
    right: 125px;
}
.main-timeline .timeline:nth-child(even) .timeline-icon{
    left: auto;
    right: 156px;
}
.main-timeline .timeline:nth-child(even) .timeline-year{
    left: auto;
    right: 18px;
}
.main-timeline .timeline:nth-child(4n+2) .timeline-content{ background-color: #0f2d75; }
.main-timeline .timeline:nth-child(4n+2) .timeline-content:before{ background-color: #0e3fb2; }
.main-timeline .timeline:nth-child(4n+3) .timeline-content{ background-color: #117321; }
.main-timeline .timeline:nth-child(4n+3) .timeline-content:before{ background-color: #64c474; }
@media screen and (max-width:767px){
    .main-timeline .timeline,
    .main-timeline .timeline:nth-child(even){
        width: 100%;
        margin: 0 0 30px;
    }
  }
      </style>
      
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

    <section>
    <div class="container" style="margin-top: 10px;">
    <h1 data-aos="zoom-in" style="margin-bottom: 30px;">Visi, Misi, dan Nilai</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">Visi</div>
                        <div class="timeline-icon"><i class="fa fa-eye"></i></div>
                        <p class="description">
                        Pribadi-pribadi yang bertumbuh memiliki karakter yang baik,
mandiri, dan menjadi agen perubahan dalam menciptakan
perdamaian dan keharmonisan bangsa.                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">Misi</div>
                        <div class="timeline-icon1"><i class="fa fa-bullseye"></i></div>
                        <p class="description">
                        Melayani kaum prasejahtera untuk meningkatkan kualitas hidup
mereka; agar menjadi pribadi yang utuh, bermartabat, dan 
berguna bagi sesama, bangsa, dan Tuhan; dengan bekerja
bersama seluruh komponen masyarakat                        </p>
                    </a>
                </div>
                <div class="timeline" style="padding-bottom:20px;">
                    <a href="#" class="timeline-content">
                        <div class="timeline-year">Nilai</div>
                        <div class="timeline-icon2"><i class="fa fa-diamond"></i></div>
                        <p class="description">
                        Melayani berdasarkan kasih akan Tuhan dan kasih akan sama;
bekerja dengan intergritas, penuh akuntibilitas serta Kerjasama
tim yang solid dan selalu memiliki inovasi untuk tantangan
masa depan.                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<footer class="mainfooter" role="contentinfo" style="background-color: #ffc200;">  
            <div class="footer-middle">  
                <div class="container">  
                    <div class="row">
                        <a class="footer-brand" href="#"> <img src="asset/img/logopondokkasih.png" alt="..." height="100" style="padding-left:30px; margin-top: 40px;"></a>
                        </br>
                        </br>
                        </br>
                        <h3 style="vertical-align:text-bottom; color:#334d00;margin-top: 60px; margin-left: 30px;"><b>Yayasan Pondok Kasih</b></h4>
                    </div>  
                    <div class="row" style="margin-top: 20px;">  
                        <div class="col-md-4 col-sm-6">  
                            <div class="footer-pad">  
                                <h4>Kontak Kami</h4>  
                                <ul class="list-unstyled">  
                                    <li> <a href="https://api.whatsapp.com/send?phone=62818587677&text=Halo%20PondokKasih" style="color:black;"> <i class="fa fa-phone" aria-hidden="true"></i> 081 8577 677</a></li>  
                                    <li> <a href="mailto:infocenter@pondokkasih.org" style="color:black;"> <i class="fa fa-envelope" aria-hidden="true"></i> infocenter@pondokkasih.org</a></li>  
                                    <li> <a href="#" style="color:black;"> <i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Kendangsari II/82, Surabaya </a></li>  
                                </ul>  
                            </div>  
                        </div>  
                        <div class="col-md-4 col-sm-6">  
                            <div class="footer-pad">  
                                <h4>Ikuti Kami</h4>  
                                <ul class="list-unstyled">  
                                    <li> <a href="https://www.facebook.com/PondokKasih.Official" class="icoFacebook" title="Facebook" style="color:black;"> <i class="fa fa-facebook" style="font-size:25px"> </i> PondokKasih.Official </a> </li>  
                                    <li> <a href="https://www.youtube.com/user/mediaypk" style="color:black;"> <i class="fa fa-youtube" aria-hidden="true" style="font-size:25px"> </i> Yayasan Pondok Kasih </a> </li>  
                                    <li> <a href="https://www.instagram.com/pondokkasihofficial/" class="icoInstagram" title="Instagram" style="color:black;"> <i class="fa fa-instagram" style="font-size:25px"> </i> pondokkasihofficial </a> </li>  
                                </ul>   
                            </div>  
                        </div>  
                        <div class="col-md-4 col-sm-6">  
                            <div class="footer-pad">  
                                <h4> Berita </h4>  
                                <h6>Daftar Sekarang untuk mendapatkan informasi terbaru dari kami</h6>
                                </br>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email anda">
                                        
                                    </div>
                                    <button type="button" class="btn btn-outline-success" style="background-color: #ddff99;">  DAFTAR   </button>
                                 </form>                                
                            </div>  
                        </div>  
                    </div>  
                </div>  
                </br>
                </br>
                        <div class="row" style="background-color: #53B852; margin:auto;">  
                            <div class="col-md-12 copy">  
                                <p class="text-center" style="margin:auto;"> © Copyright 2022 - Yayasan Pondok Kasih.  All rights reserved. </p>  
                            </div>  
                        </div>  
            </div>  
        </footer>
    </body>
</html>

    </body>
</html>
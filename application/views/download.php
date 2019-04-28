<html>
    <head>
    <title>Be Cool With Gemscool. Game Portal No. 1 di Indonesia</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico')?>" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/downloadstyle.css') ?>">
        <script>
            $(document).ready(function(){
                $("#navbardrop").mouseenter(function(){
                    $(".dropdown-menu").fadeIn();
                });
                $(".dropdown-menu").mouseleave(function(){
                    $(".dropdown-menu").fadeOut();
                });
            });
        </script>
    </head>
    <?php
        if($this->session->userdata('logged_in')==1){
            echo '<script>
                $(document).ready(function(){
                    $("#login").hide();
                    $("#register").hide();
                    $("#logout").show();
                });
                </script>';
        }
        else{
             echo '<script>
                $(document).ready(function(){
                    $("#login").show();
                    $("#register").show();
                    $("#logout").hide();
                });
                </script>';
        }
        
    ?>
    <body>
        <section>
            <div class="container-fluid header">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-1">
                        <a href="<?php echo base_url()?>"><img class="headerlogo" src="<?php echo base_url('assets/img/logo_gemscool2.png') ?>"></a>
                    </div>
                    <div class="col-8">
                        <nav class="navbar navbar-expand-xl">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle a" href="#" id="navbardrop" data-toggle="dropdown">ALL GAMES</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#">
                                                <img src="<?php echo base_url('assets/img/nav_luna.png')?>"
                                                onmouseover="this.src='<?php echo base_url('assets/img/nav_luna_hov.png')?>'"
                                                onmouseout="this.src='<?php echo base_url('assets/img/nav_luna.png')?>'">
                                                </a></li>
                                            <li class="list-inline-item"><a href="<?php echo base_url('index.php/webController/homepagetos')?>">
                                                <img src="<?php echo base_url('assets/img/tos.png')?>"
                                                onmouseover="this.src='<?php echo base_url('assets/img/tos_hov.png')?>'"
                                                onmouseout="this.src='<?php echo base_url('assets/img/tos.png')?>'">
                                                </a></li>
                                            <li class="list-inline-item"><a href="<?php echo base_url('index.php/webController/page_icarus')?>">
                                                <img src="<?php echo base_url('assets/img/icarus_nav.png')?>"
                                                onmouseover="this.src='<?php echo base_url('assets/img/icarus_nav_hov.png')?>'"
                                                onmouseout="this.src='<?php echo base_url('assets/img/icarus_nav.png')?>'">
                                                </a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="dropdown-item">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <li class="list-inline-item"><a href="#">
                                                <img src="<?php echo base_url('assets/img/atlantica_nav.png')?>"
                                                onmouseover="this.src='<?php echo base_url('assets/img/atlantica_nav_hov.png')?>'"
                                                onmouseout="this.src='<?php echo base_url('assets/img/atlantica_nav.png')?>'">
                                                </a></li>
                                            <li class="list-inline-item"><a href="<?php echo base_url('index.php/webController/page_ls')?>">
                                                <img src="<?php echo base_url('assets/img/ls_nav.png')?>"
                                                onmouseover="this.src='<?php echo base_url('assets/img/ls_nav_hover.png')?>'"
                                                onmouseout="this.src='<?php echo base_url('assets/img/ls_nav.png')?>'">
                                                </a></li>
                                            <li class="list-inline-item"><a href="#">
                                                <img src="<?php echo base_url('assets/img/dn_nav.png')?>"
                                                onmouseover="this.src='<?php echo base_url('assets/img/dn_nav_hover.png')?>'"
                                                onmouseout="this.src='<?php echo base_url('assets/img/dn_nav.png')?>'">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                </li>
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/webController/news') ?>">NEWS</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">FORUM</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">G-CASH</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">DOWNLOAD</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">GEMSCOOL TV</a></li>
                                <li class="nav-item" id="login"><a href="<?php echo base_url('index.php/webController/login_button')?>"><button type="submit" class="btn btn-secondary buttonheader">Login</button></a></li>
                                <li class="nav-item" id="register"><a href="<?php echo base_url('index.php/webController/daftar_akun')?>"><button type="submit" class="btn btn-secondary buttonheader">REGISTER</button></a></li>
                                <li class="nav-item" id="logout"><a href="<?php echo base_url('index.php/webController/logout')?>"><button type="submit" class="btn btn-secondary buttonheader">Logout</button></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
            <br>
                <section>
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-3">
                            <a href="#"><img src="<?php echo base_url('assets/img/dn_event.jpg')?>"></a>
                        </div>
                    </div>
                    </div>
                </section>
            <br>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-3"><h4>DOWNLOAD</h4></div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="shadow-none p-4 mb-4 bg-white border">
                            <div class="row">
                                <div class="col-12 border-bottom" style="border-width : 2px !important;">
                                    <img src="<?php echo base_url('assets/img/stickicon.png')?>">
                                    <strong>GAME CLIENT</strong>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#"><img width="930" src="<?php echo base_url('assets/img/icarus3.jpg')?>"onmouseover="this.src='<?php echo base_url('assets/img/icarus3_hov.jpg')?>'"onmouseout="this.src='<?php echo base_url('assets/img/icarus3.jpg')?>'"></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo base_url('assets/img/game_download.png')?>"onmouseover="this.src='<?php echo base_url('assets/img/game_download_hov.png')?>'"onmouseout="this.src='<?php echo base_url('assets/img/game_download.png')?>'"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                <p>Menjadi Rider di Icarus, terbang sejauh dan seluas imajinasimu dalam dunia MMORPG yang seru serta diisi dengan aksi dan petualangan tanpa henti!</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#"><img width="107" height="119" src="<?php echo base_url('assets/img/luna3.jpg')?>"onmouseover="this.src='<?php echo base_url('assets/img/luna3_hov.jpg')?>'"onmouseout="this.src='<?php echo base_url('assets/img/luna3.jpg')?>'"></a>
                                    <br>
                                    <a href="#"><img src="<?php echo base_url('assets/img/game_download.png')?>"onmouseover="this.src='<?php echo base_url('assets/img/game_download_hov.png')?>'"onmouseout="this.src='<?php echo base_url('assets/img/game_download.png')?>'"></a>
                                    <br>
                                    <p>Jelajahi dunia baru yang imut dan penuh warna. Ajak teman-temanmu berpetualangan di Blueland dan buka kembali kenangan manismu bersama Luna Online!</p>
                                </div>
                                <div class="col-4">
                                    <a href="#"><img width="107" height="119" src="<?php echo base_url('assets/img/tos2.jpg')?>"onmouseover="this.src='<?php echo base_url('assets/img/tos2_hov.jpg')?>'"onmouseout="this.src='<?php echo base_url('assets/img/tos2.jpg')?>'"></a>
                                    <br>
                                    <a href="#"><img src="<?php echo base_url('assets/img/game_download.png')?>"onmouseover="this.src='<?php echo base_url('assets/img/game_download_hov.png')?>'"onmouseout="this.src='<?php echo base_url('assets/img/game_download.png')?>'"></a>
                                    <br>
                                    <p>Jelajahi kembali kenangan lamamu di dunia Klaipeda Tree of Savior Indonesia, permainan fantasi MMORPG dengan grafis 2.5 D dan gaya anime.</p>
                                </div>
                                <div class="col-4">
                                    <a href="#"><img width="107" height="119" src="<?php echo base_url('assets/img/ls3.jpg')?>"onmouseover="this.src='<?php echo base_url('assets/img/ls3_hov.jpg')?>'"onmouseout="this.src='<?php echo base_url('assets/img/ls3.jpg')?>'"></a>
                                    <br>
                                    <a href="#"><img src="<?php echo base_url('assets/img/game_download.png')?>"onmouseover="this.src='<?php echo base_url('assets/img/game_download_hov.png')?>'"onmouseout="this.src='<?php echo base_url('assets/img/game_download.png')?>'"></a>
                                    <br>
                                    <p>Pilih Hero favoritmu dan buktikan kemampuanmu dalam pertempuran tiada akhir</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#"><img width="107" height="119" src="<?php echo base_url('assets/img/dn3.jpg')?>"onmouseover="this.src='<?php echo base_url('assets/img/dn3_hov.jpg')?>'"onmouseout="this.src='<?php echo base_url('assets/img/dn3.jpg')?>'"></a>
                                    <br>
                                    <a href="#"><img src="<?php echo base_url('assets/img/game_download.png')?>"onmouseover="this.src='<?php echo base_url('assets/img/game_download_hov.png')?>'"onmouseout="this.src='<?php echo base_url('assets/img/game_download.png')?>'"></a>
                                    <br>
                                    <p>Pilih Hero favoritmu dan buktikan kemampuanmu dalam pertempuran tiada akhir</p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12 border-bottom" style="border-width : 2px !important;">
                                    <img src="<?php echo base_url('assets/img/othericon.png')?>">
                                    <strong>OTHER</strong>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#"><img src="<?php echo base_url('assets/img/periksaspek.jpg')?>"onmouseover="this.src='<?php echo base_url('assets/img/periksaspek_hov.jpg')?>'"onmouseout="this.src='<?php echo base_url('assets/img/periksaspek.jpg')?>'"></a>
                                </div>
                                <div class="col-6">
                                    <a href="#"><img src="<?php echo base_url('assets/img/solusi.jpg')?>"onmouseover="this.src='<?php echo base_url('assets/img/solusi_hover.jpg')?>'"onmouseout="this.src='<?php echo base_url('assets/img/solusi.jpg')?>'"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-6 pfooter">
                        <img src="<?php echo base_url('assets/img/kreon.png')?>">
                        <p> Gedung Gandaria 8 Lt.20 Unit B-C, Gandaria City<br>
                        JL.Sultan Iskandar Muda Kebayoran Lama Jakarta Selatan, Telp.021-29303499 <br>
                        Copyright 2019 PT.KREON. ALL Right Reserved</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3" style="padding-top:25px">
                    <h7>CONNECT WITH US</h7>
                    <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/fb.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/twitter.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/utub.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/insta.png')?>"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/newsstyle.css') ?>">
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
                                <li class="nav-item"><a class="nav-link a" href="">NEWS</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">FORUM</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">G-CASH</a></li>
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/webController/download')?>">DOWNLOAD</a></li>
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
                    <div class="col-3"><h4>NEWS</h4></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-6">
                        <ul class="nav nav-tabs">
                            <li class="nav-item ">
                                <a class="nav-link news"  href="<?php echo base_url('index.php/webController/news') ?>">ALL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link news" href="<?php echo base_url('index.php/webController/news_news') ?>">NEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link news" href="<?php echo base_url('index.php/webController/news_notice') ?>">NOTICE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link news" href="<?php echo base_url('index.php/webController/news_update') ?>">UPDATE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link news" href="<?php echo base_url('index.php/webController/news_event') ?>">EVENT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" style="background-color: #A90100;
                                color: white;" href="<?php echo base_url('index.php/webController/news_competition') ?>">COMPETITION</a>
                            </li>
                            </ul>
                        <div class="row">
                                <div class="col-12">
                                    <?php if (empty($competition)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            Data tidak ditemukan
                                        </div>
                                    <?php endif; ?>
                                    <table class="table mt-5">
                                        <tbody>
                                            <tr><?php foreach ($competition as $cpt) : ?>
                                                <td width="10%"><h10><?= $cpt['nama_game']; ?></h10></td>
                                                <td width="70%">
                                                    <strong><?= $cpt['judul']; ?></strong>
                                                    <p><?= $cpt['keterangan']; ?></p>
                                                    </td>
                                                <td width="20%"><p><?= $cpt['waktu']; ?></p></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="col-2">
                        <h5>Find us on Youtube</h5>
                        <iframe height="250" src="https://www.youtube.com/embed/98CVoEwC_3s"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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
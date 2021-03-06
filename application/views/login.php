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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/stylelogin.css') ?>">
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
        if ($this->session->flashdata('daftar_alert')=='registrasi_berhasil'){
            echo "<script>alert('Registrasi Succes');</script>";
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
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/webController/download') ?>">DOWNLOAD</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">GEMSCOOL TV</a></li>
                                <li class="nav-item"><a href="<?php echo base_url('index.php/webController/login_button')?>"><button type="submit" class="btn btn-secondary buttonheader">Login</button></a></li>
                                <li class="nav-item"><a href="<?php echo base_url('index.php/webController/daftar_akun')?>"><button type="submit" class="btn btn-secondary buttonheader">REGISTER</button></a></li>
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
                    <div class="col-3"><h4>LOGIN GEMSCOOL</h4></div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="shadow-lg p-4 mb-4 bg-white">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-4">
                            <form action="<?php echo base_url('index.php/webController/login_homepage')?>" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <label><h5>ID Gemscool</h5></label>
                                        <input type="text" class="form-control" placeholder="ID Gemscool" name="id">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label><h5>Password</h5></label>
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary">LOGIN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
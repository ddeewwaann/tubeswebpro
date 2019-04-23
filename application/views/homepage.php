<html>
    
    <head>
        <title>Be Cool With Gemscool. Game Portal No. 1 di Indonesia</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico')?>" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/stylehomepage.css') ?>">
    </head>
    <?php 
        if ($this->session->flashdata('login_alert')=='login_berhasil'){
            echo "<script>alert('Login Berhasil');</script>";
        }else if($this->session->flashdata('login_alert')=='login_gagal'){
            echo "<script>alert('Login Gagal, id atau password salah');</script>";
        }
    ?>
    <?php
        if($this->session->userdata('logged_in')==1){
            echo '<script>
                $(document).ready(function(){
                    $("#loginbox").hide();
                    $("#loginbox2").show();
                });
                </script>';
        }
        else{
             echo '<script>
                $(document).ready(function(){
                    $("#loginbox2").hide();
                    $("#loginbox").show();
                });
                </script>';
        }
        
    ?>
    
    <body>
        <section>
            <div class="container-fluid">
                <div class="row header-homepage">
                    <div class="col-2"></div>
                    <div class="col-2">
                        <a href="<?php echo base_url('')?>"> <img src="<?php echo base_url('assets/img/logo_gemscool.png')?>"></a>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-6">
                        <nav class="navbar navbar-expand-xl">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/webController/news') ?>">NEWS</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">FORUM</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">G-CASH</a></li>
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/webController/download') ?>">DOWNLOAD</a></li>
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/webController/gstv_page') ?>">GEMSCOOL TV</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row header-homepage2">
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </section>
        <section>
                <div class="row body-homepage">
                        <div class="col-12">
                            <a href="<?php echo base_url('')?>"><img class="backgroundutama" src="<?php echo base_url('assets/img/backgroundutama.jpg')?>"></a>
                        </div>
                </div>
        </section>
        <section class="carosel">
            <div class="container-fluid carosel">
                <div class="row">
                <div class="col-2"></div>
                <div class="col-6">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to ="0" class="active"></li>
                            <li data-target="#demo" data-slide-to ="1"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/img/dragonest.jpg')?>">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url('assets/img/lostsaga.jpg')?>">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide ="prev"><span class="carousel-control-prev-icon"></span></a>
                        <a class="carousel-control-next" href="#demo" data-slide ="next"><span class="carousel-control-next-icon"></span></a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="container-fluid loginbox" id="loginbox">
                        <p class="plogin">LOGIN</p>
                        <form action="<?php echo base_url('index.php/webController/login_homepage')?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="idgemscool" placeholder="ID Gemscool" name="id">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="passwordgemscool" placeholder="Password" name="password">
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="securelogin">Secure Login
                                </label>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="<?php echo base_url('index.php/webController/daftar_akun')?>">Daftar</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Forget Password ? </a>
                            </li>
                        </ul>
                        </form>
                        <a href="#"><img src="<?php echo base_url('assets/img/cs-btn.png')?>"></a>
                        <div style="height : 25px;width : 210px; background-color:darkgrey; border: solid 1px">Connect With Us</div>
                        <div style="border: solid 1px; width:210px;">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/fb.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/twitter.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/utub.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/insta.png')?>"></a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="container-fluid" id="loginbox2">
                        <div class="informasi">
                            <div class="row">
                                <div class="col-6">
                                    <p style="color:white;"><?php echo $this->session->userdata('id')?></p>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo base_url('index.php/webController/logout')?>"><button >logout</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <p><a style="color:white;padding-left:10px;" href="<?php echo base_url('index.php/webController/verif_ubahInformasi') ?>">Ubah informasi</a></p>
                            </div>
                        </div>
                        
                        <a href="#"><img src="<?php echo base_url('assets/img/cs-btn.png')?>"></a>
                        <div style="height : 25px;width : 210px; background-color:darkgrey; border: solid 1px;padding-left:5px;">Connect With Us</div>
                        <div style="border: solid 1px; width:210px;">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/fb.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/twitter.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/utub.png')?>"></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/gemscool.official"><img src="<?php echo base_url('assets/img/insta.png')?>"></a></li>
                        </ul>
                        </div>
                    </div>

                    </div>
                        
                </div>
            </div>
           
        </section>
        <br>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <a href=""><img src="<?php echo base_url('assets/img/icarus1.jpg')?>"
                        onmouseover="this.src='<?php echo base_url('assets/img/icarus2.jpg')?>'"
                        onmouseout="this.src='<?php echo base_url('assets/img/icarus1.jpg')?>'">
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <a href=""><img src="<?php echo base_url('assets/img/Atlantica.jpg')?>"
                        onmouseover="this.src='<?php echo base_url('assets/img/Atlantica2.jpg')?>'"
                        onmouseout="this.src='<?php echo base_url('assets/img/Atlantica.jpg')?>'"></a>
                        <a href=""><img src="<?php echo base_url('assets/img/luna.jpg')?>"
                        onmouseover="this.src='<?php echo base_url('assets/img/luna2.jpg')?>'"
                        onmouseout="this.src='<?php echo base_url('assets/img/luna.jpg')?>'"></a>
                        <a href="<?php echo base_url('index.php/webController/homepagetos')?>"><img src="<?php echo base_url('assets/img/treeos.jpg')?>"
                        onmouseover="this.src='<?php echo base_url('assets/img/treeos2.jpg')?>'"
                        onmouseout="this.src='<?php echo base_url('assets/img/treeos.jpg')?>'"></a>
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <a href="<?php echo base_url('index.php/webController/page_ls')?>"><img src="<?php echo base_url('assets/img/LS.jpg')?>"
                        onmouseover="this.src='<?php echo base_url('assets/img/LS2.jpg')?>'"
                        onmouseout="this.src='<?php echo base_url('assets/img/LS.jpg')?>'"></a>
                        <a href=""><img src="<?php echo base_url('assets/img/DN.jpg')?>"
                        onmouseover="this.src='<?php echo base_url('assets/img/DN2.jpg')?>'"
                        onmouseout="this.src='<?php echo base_url('assets/img/DN.jpg')?>'"></a>
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
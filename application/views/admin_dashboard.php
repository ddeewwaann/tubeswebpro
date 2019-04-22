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
        <style>
        .header{
    background-color: lightgrey;
}

.nav-item{
    font-size: 12px;
}
.nav-link{
    color: darkslategray;
}
.headerlogo{
    padding-top: 12px;
}
.buttonheader{
    font-size: 12px;
    width: 100px;
    background-color: grey;
}
        </style>
    </head>
    <?php 
        if ($this->session->flashdata('login_alert')=='login_berhasil'){
            echo "<script>alert('Login Berhasil');</script>";
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
                    <div class="col-4"></div>
                    <div class="col-5">
                        <nav class="navbar navbar-expand-xl">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link a" href="">VIEW</a></li>
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/adminController/dashboard_add') ?>">ADD</a></li>
                                <li class="nav-item"><a class="nav-link a" href="">EDIT</a></li>
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/adminController/dashboard_delete') ?>">DELETE</a></li>
                                <li class="nav-item" id="logout"><a href="<?php echo base_url('index.php/adminController/login')?>"><button type="submit" class="btn btn-secondary buttonheader">Logout</button></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
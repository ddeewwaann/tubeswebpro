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
    </head>
    <?php 
        if($this->session->flashdata('login_alert')=='login_gagal'){
            echo "<script>alert('Login Gagal, id atau password salah');</script>";
        }
    ?>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="shadow-lg p-4 mb-4 bg-white">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-12">
                            <form action="<?php echo base_url('index.php/adminController/login_data')?>" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <label><h5>ID</h5></label>
                                        <input type="text" class="form-control"  name="id">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label><h5>Password</h5></label>
                                        <input type="password" class="form-control"  name="password">
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
    </body>
</html>
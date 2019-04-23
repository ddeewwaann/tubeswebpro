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
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/adminController/dashboard') ?>">HOME</a></li>
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/adminController/dashboard_add') ?>">ADD</a></li>
                                <li class="nav-item"><a class="nav-link a" href="<?php echo base_url('index.php/adminController/dashboard_delete') ?>">EDIT DAN DELETE</a></li>
                                <li class="nav-item" id="logout"><a href="<?php echo base_url('index.php/adminController/login')?>"><button type="submit" class="btn btn-secondary buttonheader">Logout</button></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <ul class="nav nav-tabs">
                            <li class="nav-item ">
                                <a class="nav-link"  href="<?php echo base_url('index.php/adminController/dashboard_delete') ?>">NEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link news" href="<?php echo base_url('index.php/adminController/dashboard_delete2') ?>">NOTICE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link news" href="<?php echo base_url('index.php/adminController/dashboard_delete3') ?>">UPDATE</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link news" style="background-color: #A90100;
                                color: white;" href="<?php echo base_url('index.php/adminController/dashboard_delete4')?>">EVENT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link news" href="<?php echo base_url('index.php/adminController/dashboard_delete5') ?>">COMPETITION</a>
                            </li>
                            </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <h3 class="text-center">EVENT LIST</h3>
            <?php if (empty($event)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA GAME</th>
                        <th class="text-center" scope="col">JUDUL</th>
                        <th class="text-center" scope="col">KETERANGAN</th>
                        <th class="text-center" scope="col">WAKTU</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($event as $evn) : ?>
                        <td class="text-center"><?= $evn['nama_game']; ?></td>
                        <td class="text-center"><?= $evn['judul']; ?></td>
                        <td class="text-center"><?= $evn['keterangan']; ?></td>
                        <td class="text-center"><?= $evn['waktu']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>index.php/adminController/dashboard_delete_data/<?= $evn['id'] ?>/event " class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>index.php/adminController/dashboard_edit/event/<?= $evn['id'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
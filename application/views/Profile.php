<?php $this->load->view('templates/navbar') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaturan Profil</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/profile.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <!-- Favicon -->
    <link href="img/elang.ico" rel="shortcut icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    input[type=text] {
        width: 500px;
    }
</style>

<body>

    <!-- ini side bar -->
    <?php $this->load->view('templates/sidebar') ?>

    <!-- Modal Ganti Password -->
    <div id="modalPassword" class="modal fade">
        <div class="modal-dialog modal-login modal-sm" style="margin-top: 14%;">
            <div class="modal-content">
                <form  action="<?= base_url('index.php/Profile_controller/changePassword') ?>" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title" style="margin-left: 15%;">Ganti kata sandi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kata sandi lama</label>
                            <input type="password" class="form-control" required="required" name="password">
                        </div>
                        <div class="form-group">
                            <label>Kata sandi baru</label>
                            <input type="password" class="form-control" required="required" name="newpass">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary pull-right" value="Ganti Sandi">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ini body profile -->
    <div style="margin-top: 8.9%; margin-left: 24%">
        <h2>Pengaturan Profil</h2>
    </div>
    <div class="container" style="margin-left: 23.5%; margin-top: 2.5%;">
        <div class="row">
            <div class="col-3" style="width: 600px;">
                <div class="boxed boxed--lg boxed--border" style="box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15); border-radius: 30px;">
                    <div class="text-block text-center">
                        <img src="<?= base_url('assets/img/profile/profile-pic.jpg') ?>" alt="Avatar" class="avatar" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25); width: 75px; height: 75px; border-radius: 50%; margin-right: 38%; margin-top: 10%;">
                        <br><br><br><br>
                        <h5 style="color: cadetblue; margin-top: 20px;"><?php echo $this->session->userdata("nama"); ?></h5>
                    </div>
                    <hr>
                    <div class="text-block">
                        <ul class="menu-vertical" style=" list-style-type: none;">
                            <li>
                                <a class="nav-link trigger-btn" href="#modalPassword" data-toggle="modal">Kata Sandi</a>
                            </li>
                        </ul>
                        <br>
                    </div>
                </div>
            </div>
            <div style="width: 600px; margin-left: 28px;">
                <div class="boxed boxed--lg boxed--border" style="box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15); border-radius: 30px;">
                <form action="<?= base_url('index.php/Profile_controller/updateProfile') ?>" method="post">
                    <div class="form-group"><br>
                        <h2 style="margin-left: 5%;">Profil</h2><br>
                        <div class="form-area" style="margin-left: 5%">
                        <?php foreach($datauser->result() as $row): ?>
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row->nama;?>"><br>
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $row->username;?>"><br>
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $row->email;?>"><br>
                            <label>No. Ponsel</label>
                            <input type="text" class="form-control" id="noPonsel" name="no_handphone" value="<?php echo $row->no_handphone;?>"><br>
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row->alamat;?>"><br>
                            <?php ?>
                        </div>
                        <button id="btnSave" type="submit" class="btn btn-primary" style="margin-left: 69%; margin-top: 2%;">Update Profil</button>
                    </div>
                    <?php endforeach; ?>
                </form>
                    <br>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
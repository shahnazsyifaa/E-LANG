<!-- ini navbar di halaman homepage -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ELANG</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/lo.png" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/2f9cbdcc0a.js"></script>

    <!-- CSS SENDIRI -->
    <link href="img/lo.png" rel="shortcut icon" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">


</head>
<style>
    .modal-header {
        border-bottom: 0 none;
    }

    .modal-title {
        font-size: 20px;
        color: #E1AA12;
        margin: auto;
    }

    .modal-footer {
        margin-top: -20px;
        border-top: 0 none;
    }

    .form-control {
        width: 300px;
        margin: auto;
        text-align: center;
        border-width: 0px 0px 1px 0px;
    }

    .modal-content {
        border-radius: 15px;
    }

    #attributes1 {
        margin-top: 14px;
        margin-left: -3px;
        width: 10px;
        height: 50px;
        position: fixed;
        background-color: #E1AA12;
        border-radius: 3px;
    }

    #attributes2 {
        margin-top: 14px;
        margin-left: 391px;
        width: 10px;
        height: 50px;
        position: fixed;
        background-color: #E1AA12;
        border-radius: 3px;
    }

    .btnlogin {
        margin: auto;
        background-color: #E1AA12;
        border: none;
    }

    #buton {
        background-color: #E1AA12;
        border: none;
        padding: 10px 30px;
    }

    .btnlogin:hover {
        background-color: #013A67;
    }

    #buton:hover {
        background-color: #013A67;
        transition: 0.5s;
    }

    .regisModal {
        font-size: 15;
    }

    #regisModalLabel {
        margin-top: 20px;
    }

    .bodyRegis input {
        width: 300px !important;
    }

    #terms {
        font-size: 11px;
        font-style: italic;
        color: #00B0A6;
    }
</style>

<body>
    <!-- Modal LOGIN -->
    <div id="myModalLogin" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content" style="margin-top: 150px!important; margin:auto; width: 400px; ba">
                <form action="<?= base_url('index.php/Login_controller/aksi_login') ?>" method="POST">
                    <div id="attributes1"></div>
                    <div id="attributes2"></div>
                    <div class="modal-header">
                        <h4 class="modal-title" style="margin-left: 39%; margin-top: 10px"><b>MASUK</b></h4>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required="required" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary pull-right btnlogin" value="Masuk">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal REGIS -->
    <div class="modal fade" id="regisModal" tabindex="-1" role="dialog" aria-labelledby="regisModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM DAFTAR</h5>
                    <button type="button" class="close" id="closeicon" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url("index.php/Register_Controller/register_handle") ?>" method="POST">
                        <div id="formName" class="form-group">
                            <input type="text" class="form-control" name="fullName" id="inputName" placeholder="Nama Lengkap" required>
                        </div>
                        <div id="formUsername" class="form-group">
                            <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username" required>
                        </div>
                        <div id="formEmail" class="form-group">
                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                        </div>
                        <div id="formHandphone" class="form-group">
                            <input type="tel" class="form-control" name="handphone" id="inputHandphone" placeholder="No. Handphone" pattern="[0-9]{12}" required>
                        </div>
                        <div id="formLahir" class="form-group">
                            <input type="date" class="form-control" name="tglahir" id="inputTglahir" placeholder="Tanggal Lahir" required>
                        </div>
                        <div id="formAlamat" class="form-group">
                            <input type="text" class="form-control" name="alamat" id="inputAlamat" placeholder="Alamat" required>
                        </div>
                        <div id="formPassword" class="form-group">
                            <input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password" required>
                        </div>
                        <div id="formPassword2" class="form-group">
                            <input type="password" class="form-control" name="password_conf" id="inputPassword2" placeholder="Konfirmasi Password" required>
                        </div>
                        <center>
                            <div id="terms">
                                <p>Dengan mendaftar, anda menyetujui <br>
                                    <u>Syarat Penggunaan</u> dan <u>Kebijakan Privasi</u>.</p>
                            </div>
                            <button id="buton" type="submit" class="btn btn-primary">Daftar</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar fixed top -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#11212E">
        <!-- <nav class="navbar navbar-expand-sm navbar-dark " style="background-color:#11212E"> -->
        <!-- Brand/logo -->
        <a class="navbar-brand" href="<?= base_url('index.php/Home') ?>">
            <img src="<?= base_url('assets/img/lo.png') ?>" alt="logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index.php/Home') ?>" style="font-size:18px; color:white"><b>E-LANG</b></a>
            </li>
        </ul>

        <ul class="navbar-nav nav-right">
            <li class="nav-item items">
                <!-- <a class="nav-link" href="<?= base_url('index.php/verifikasiBarangDS') ?>" style="color:white"><b>DAFTAR</b></a> -->
                <a class="nav-link trigger-btn" href="#regisModal" data-toggle="modal" style="color:white"><b>DAFTAR</b></a>
            </li>
            <li class="nav-item items">
                <!-- <a class="nav-link" href="<?= base_url('index.php/Dashboard') ?>" style="color:white"><b>MASUK</b></a> -->
                <a class="nav-link trigger-btn" href="#myModalLogin" data-toggle="modal" style="color:white"><b>MASUK</b></a>
            </li>
            <li class="nav-item items">
                <a class="nav-link" href="<?= base_url('index.php/Faq') ?>" style="color:white"><b>FAQ</b></a>
            </li>
        </ul>



    </nav>
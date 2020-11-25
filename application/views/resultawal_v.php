<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-LANG</title>
    <?php $this->load->view('templates/header') ?>

    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body,
    html {
        height: 100%;
        background-color: #24315E;
    }

    .bg {
        /* The image used */
        background-image: url("../assets/img/image.jpeg");
        /* background-image: url("assets/img/image.jpeg"); */
        /* Full height */
        height: 100%;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: soft-light;
        opacity: 0.5;
    }

    #title {
        font-size: 48px;
        text-shadow: 0px 5px 5px rgba(0, 0, 0, 0.15);
    }

    .btnland {
        padding: 15px 30px;
        border-radius: 10px;
        border: none;
        box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.15);
    }

    input {
        text-align: center;
    }
    input:focus, textarea:focus, select:focus, button:focus{
        outline: none;
    }

    button{
        transition: 0.2s;
        background-color: white;
    }

    button:hover{
        background-color: #E1AA12;
        color: white;
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

    <div class="bg">
    </div>
    <div id="landing" style=" position: fixed; color: white; left: 25%; top: 40%;">
        <div id="title"><b>TEMUKAN BARANGMU DISINI.</b></div>
        <center>Lebih dari 0 barang telah dikembalikan.</center>
        <br>
        <!-- The form -->
        <center>
            <form class="example" action="<?=base_url('index.php/resultawal_c/search')?>" method="post">
                <input type="search" placeholder="Cari Barang" name="search" style="background: rgba(255, 255, 255, 0.49); border-radius: 5px; border: none; height: 30px;">
                <button type="submit" style="border: none; background: rgba(255, 255, 255, 0.49); border-radius: 3px;"><i class="fa fa-search"></i></button>
            </form>

        </center>

    </div>
    <div style="position: fixed; top: 70%; left: 30%;">
        <a href="#myModalLogin" data-toggle="modal">
            <button class="btnland" id="btnKehilangan" type="submit" class="btn btn-primary" style=""><b>SAYA KEHILANGAN <br> SESUATU</b></button>
        </a>
        <a href="#myModalLogin" data-toggle="modal">
            <button class="btnland" id="btnMenemukan" type="submit" class="btn btn-primary" style="margin-left: 100px;"><b>SAYA MENEMUKAN <br> SESUATU</b></button>
        </a>
    </div>
</body>

</html> 
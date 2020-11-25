<!-- ini navbar di halaman selain homepage -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ELANG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- CSS SENDIRI -->
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/lo.png" type="image/png">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

</head>
<body>

    <!-- navbar fixed top -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#11212E">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="<?=base_url('index.php/Home')?>">
            <img src="<?= base_url(); ?>assets/img/lo.png" alt="logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/Home') ?>" style="font-size:18px; color:white"><b>E-LANG</b></a>
                    </li>
                </ul>

                <ul class="navbar-nav nav-right">
                    <li class="nav-item items">
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white">
                            <b><?php echo $this->session->userdata("nama"); ?></b>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('index.php/Profile')?>">Edit Profil</a>
                            <a class="dropdown-item" href="<?= base_url('index.php/Login_controller/logout')?>">Keluar</a>
                        </div>
                        </li>
                    </li>
                    <li class="nav-item items">
                        <a class="nav-link" href="<?= base_url('index.php/Faq') ?>" style="color:white"><b>FAQ</b></a>
                    </li>
            </ul>
    </nav>

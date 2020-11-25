<!DOCTYPE html>
<html lang="en">

<head>
    <title>ELANG</title>
    <meta charset="UTF-8">
    <meta name="description" content="WebUni Education Template">
    <meta name="keywords" content="webuni, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->

    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome.min.css">
    <link rel="stylesheet" href="assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/button-file.css">

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
  .br-e{
    border-radius: 15px;
  }

</style>

<body>
    <!-- manggil navbar -->
    <?php $this->load->view('templates/header') ?>
    <!-- navbar selesai -->
    <!-- FILTER SORT  -->
    <div class="search-field shadow-sm bg-white br-e" style="margin: 100px 100px 0px 120px; padding: 20px 80px 20px 50px;">
        <form class="search-form" action="#">
            <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-6" >
            <input class="form-control input-group my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6" >
                    <select name="location" id="lokasi" class="app-select form-control" required="">
                        <option data-display="Lokasi">Lokasi</option>
                        <option value="1">Sukabirus</option>
                        <option value="2">Sukapura</option>
                        <option value="3">G. Tokong Nanas</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6">
                    <select name="property-type" id="kategori" class="app-select form-control" required="">
                        <option data-display="Kategori">Kategori</option>
                        <option value="1">Kartu identitas</option>
                        <option value="2">Tas</option>
                        <option value="3">Dompet</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6">
                    <select name="property-type" id="jenis" class="app-select form-control" required="">
                        <option data-display="Jenis">Jenis</option>
                        <option value="1">Kehilangan</option>
                        <option value="2">Ditemukan</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6">
                    <select name="bedroom" id="urutkan" class="app-select form-control" required="">
                        <option data-display="Urutkan">Urutkan</option>
                        <option value="1">Tebaru</option>
                        <option value="2">A-Z</option>
                    </select>
                </div>
                <div>
                    <button class="btn-lgt">Search</button>
                </div>
            </div>
        </form>
    </div>

    <!-- FILTER SORT END -->
<hr >
    <!-- RESULT -->
    <div class="result" style="margin: 0px 8px 20px 20px;"> 
        <div class="row col res">
        <?php foreach($barang as $row){?>
            <div class="col-sm ml-4 shadow-sm p-3 bg-white br-e" onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of img-card" src="<?= base_url() ?>/img/<?= $row->foto?>">
                </div>
                <div class="pt-3 pb-3">
                    <a href="<?= base_url('index.php/detailBarang_controller/detailBarang/'); echo $row->id_barang?>">
                    <span class="font-weight-bold font18-of" id="judul"><?= $row->nama_barang?></span> <br>
                    </a>
                    <span class="font14-of fontc-6-of" id="status"><?php if($row->jenis == 1){?><span>Ditemukan</span><?php }else{?><span>Hilang</span><?php } ?> </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;"><?= $row->lokasi?>
                    </span>
                </div>
            </div>
        <?php } ?>

    </div>
    <!-- RESULT END -->

</body>
</html>

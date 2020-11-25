
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>verifikasi Barang Ditemukan</title>

  	<!-- Favicon -->
  	<link href="img/favicon.ico" rel="shortcut icon"/>

  	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  	<!-- Stylesheets -->
  	<link rel="stylesheet" href="assets/bootstrap.min.css">
  	<link rel="stylesheet" href="assets/font-awesome.min.css">
  	<link rel="stylesheet" href="assets/owl.carousel.css">

  	<!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>

  <style>
    .i-size{
      width: 20px;
      height: 20px;
    }
    .ktm-size{
      height: 280px;
    }
    .bg-elang{
      background-color: #E5E5E5;
    }
    .hg-elang{
      height: 650px;
    }
    .btn1-elang{
      background-color: #EC393B;
    }

  </style>

  <body>
    <div class="bg-elang hg-elang">
      <div class="container pt-5 col-7 text-body" style="font-family: 'Roboto', sans-serif;">
        <div class="row p-4 shadow-lg  bg-white rounded">
          <div class="col-12">
            <div class="row">
              <div class="col-4">
                <div class="pl-3">
                  <img  src="<?= base_url('/img/'); echo $barang[0]['foto'];  ?>" class="ktm-size ml-1">
                </div>
              </div>
              <div class="col-8">
                <div>
                  <a class="font-weight-bold" style="font-size : 18px;"><?= $barang[0]['nama_barang']; ?></a><br>
                </div>
                <div class="mt-1">
                  <span> <img src="<?= base_url('assets/icon/i-loc.svg')?>" class="mr-1"><a style="font-size : 13px;"><?= $barang[0]['lokasi'];  ?></a></span><br>
                  <span> <img src="<?= base_url('assets/icon/i-calendar.svg')?>" class="mr-1"><a style="font-size : 13px;"><?= $barang[0]['tanggal'];  ?></a></span><br>
                  <a style="font-size : 13px;">Kategori: <span><?= $barang[0]['kategori']  ?></span></a><br>
                  <a style="font-size : 13px;">Status  : <span>
                  <?php if ($barang[0]['status_barang'] == 0) { echo "HILANG";  ?>
                    <?php }else{ echo "DITEMUKAN"; }?> 
                  </span></a><br>
               </div>
                <div class="mt-3">
                <a class="font-weight-bold" style="font-size : 14px;">DESKRIPSI</a><br>
                  <a style="font-size : 13px;"><?= $barang[0]['deskripsi'] ?></a><br>
               </div>
               <div class="mt-3">
                  <a class="font-weight-bold font-italic" style="font-size : 14px;">PERHATIKAN KOTAK KUNING YANG MENUTUPI KOMPONEN DALAM FOTO BARANG</a><br>
              </div>
              </div>
            </div>
            <div class="row">
              <div class="pl-3 mt-3 " style="font-size : 13px;">
                Masukkan nilai dari komponen tersebut dibawah ini untuk verifikasi penemuan barang
                <form method="post" action="<?= base_url('index.php/detailBarang_controller/verifbarang_handle/'); echo $this->session->userdata("nama"); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control col-4 bg-light border border-dark" style="font-size : 13px;" name="ciri_khusus">
                    <input type="text" value=<?= $barang[0]['id_barang'] ?> hidden name="id_barang">
                    <input type="text" value=<?= $barang[0]['username'] ?> hidden name="username">

                    <label style="font-size : 11px;">Petunjuk: NIM</label>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
              <a href="<?= base_url('index.php/SearchResult') ?>">
                <button type="button" class="btn btn1-elang btn-md btn-block text-white shadow" style="background-color: grey">Kembali</button>
              </a>
              </div>
              <div class="col-8">
                <button type="submit" class="btn btn1-elang btn-md btn-block text-white shadow">Saya menemukannya</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>


    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  	<script src="assets/js/mixitup.min.js"></script>
  	<script src="assets/js/circle-progress.min.js"></script>
  	<script src="assets/js/owl.carousel.min.js"></script>
  	<script src="assets/js/main.js"></script>
    <!--======================================-->

  </body>

</html>

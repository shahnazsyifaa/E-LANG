<!-- ini side bar -->

<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/sidebar.css">
<div class="sidenav">
            <div class="profile">
                <h5>E-LANG</h5>
            </div>

            <a href="<?= base_url('index.php/Dashboard')?>">Beranda</a>
            <a href="#inputBarang" class="btn" style="background-color:#142E3F; margin-left:-70px" data-toggle="collapse">Input Barang</a>
            <div id="inputBarang" class="collapse">
                <a href="<?= base_url('index.php/formDitemukan')?>" style="margin-left:30px">Menemukan Barang</a>
                <a href="<?= base_url('index.php/formHilang')?>" style="margin-left:30px">Kehilangann Barang</a>
            </div>
            <a href="<?= base_url('index.php/Notifikasi')?>">Notifikasi</a>
            <a href="#riwayat" class="btn" style="background-color:#142E3F;margin-left:-105px" data-toggle="collapse">Riwayat</a>
            <div id="riwayat" class="collapse">
                <a href="<?= base_url('index.php/BarangHilang')?>" style="margin-left:30px">Riwayat Barang Hilang</a>
                <a href="<?= base_url('index.php/BarangDitemukan')?>" style="margin-left:30px">Riwayat Barang Ditemukan</a>
            </div>
            <a href="<?= base_url('index.php/Profile_controller')?>">Pengaturan</a>
        </div>

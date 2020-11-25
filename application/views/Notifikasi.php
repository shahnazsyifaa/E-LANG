<!-- manggil navbar -->
<?php $this->load->view('templates/navbar') ?>

<script src="jquery-2.1.4.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
  
     $("#hapusNotif").click(function() {
       $("#notif1").remove();
     });
   });
</script>

<body>
    <div class="container">
        <!-- ini side bar -->
        <?php $this->load->view('templates/sidebar')?>

        <!-- ini main/body -->
        <div class="main">
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:20px">
                <div class="txt">
                    <h2>NOTIFIKASI</h2>
                </div>
            </div>

            <!-- table notifikasi -->
        <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 tabel">
                        <form action="">
                            <table class="table table-borderless">
                                <tbody>
                                    <?php foreach ($barang as $b) {?>
                                        <?php if($b['status_barang'] == 1 && $b['username'] == $this->session->userdata("nama")) {?> 
                                            <tr>
                                                <td>
                                                    <!-- <input type="checkbox" name="vehicle1" value="Bike"> Selamat datang -->
                                                    <div class="col-sm-12 pt-4 p-2 bg-white border-bottom-0 border-top-0 shadow-sm">
                                                        <!-- <input type="checkbox" name="vehicle1" value="semua"><div class="col-12"> -->
                                                            <div class="alert alert-secondary" role="alert" data-dismiss="alert" aria-label="close">
                                                                <a class="row">
                                                                <?php if($b['jenis'] == 0) {?>
                                                                    <div class="col-10">
                                                                        <span><b><?= $b['penemuBarang'] ?></b></span><span>, </span><span class="fontc-3-of">telah menemukan </span><b><?= $b['nama_barang'] ?></b><span class="fontc-3-of"> Anda</span>
                                                                    </div>
                                                                    <div class="btn-group col-2 rounded-lg pl-3 " role="group" aria-label="Basic example">
                                                                        <button type="button" class="btn btn-info rounded-lg shadow-sm text-white font14-of" data-toggle="modal" data-target="#modalTampil">Hapus</button>
                                                                    </div>
                                                                <?php }else{?>
                                                                    <div class="col-10">
                                                                        <span><b><?= $b['penemuBarang'] ?></b></span><span>, </span><span class="fontc-3-of">telah mengklaim </span><b><?= $b['nama_barang'] ?></b><span class="fontc-3-of"> Temuan anda</span>
                                                                    </div>
                                                                    <div class="btn-group col-2 rounded-lg pl-3 " role="group" aria-label="Basic example">
                                                                        <button type="button" class="btn btn-info rounded-lg shadow-sm text-white font14-of" data-toggle="modal" data-target="#modalTampil">Hapus</button>
                                                                    </div>
                                                                <?php }?>
                                                                    
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    <?php }?>
                                    <?php if ($barang[0]['status_barang'] != 0 && $barang[0]['username'] != $this->session->userdata("nama")) {?>
                                        <img src="<?= base_url('assets/img/notification.jpg') ?>" style="width:400px;height:250px;position:relative;display: block;margin-left: auto;margin-right: auto">
                                        <h5 style="width:12em;margin-left: auto;margin-right: auto;color:purple">Oops! Tidak ada notifikasi</h5>
                                        <p style="width:19em;margin-left: auto;margin-right: auto;">Saat ini kamu tidak mempunyai notifikasi</p>
                                    <?php }?>
                                </tbody>
                            </table>
                        </form>
                </div>
            </div>
            <!-- end table notifikasi -->
        </div>
        <!-- end main -->
    </div>
    <!-- end container -->
</body>
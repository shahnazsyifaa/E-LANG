<!-- manggil navbar -->
<?php $this->load->view('templates/navbar')?>

<body>
    <div class="container">
        <!-- ini side bar -->
        <?php $this->load->view('templates/sidebar')?>

        <!-- ini main/body -->
        <div class="main">
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:20px">
                <div class="txt">
                    <h2>Barang Hilang</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 tabel">
                        <form action="">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Lokasi</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($barang as $b) { ?>
                                        <!-- jenis == 1 : kalau barang ditemukan, jenis == 0 : kalau barang hilang -->
                                            <?php if ($b['jenis']== 0 && $b['username']== $this->session->userdata("nama")) {?> 
                                            <tr>
                                                <td><?= $b['nama_barang'] ?></td>
                                                <td> <?= $b['kategori'] ?></td>
                                                <td><?= $b['lokasi'] ?></td>
                                                <td><?= $b['tanggal'] ?></td>
                                                <td style="color:black"><?php if($b['status_barang']==1){echo "Diklaim";}else{echo "Belum Diklaim";}; ?></td>
                                            </tr>
                                            <?php }?>
                                        <?php }?>
                                </tbody>
                            </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
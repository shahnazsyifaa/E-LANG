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
  <link href="img/elang.ico" rel="shortcut icon" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/button-file.css">
  <style>
  .imageThumb {
  height: 75px;
  width: 75px;
  object-fit: cover;
  padding: 1px;
  cursor: pointer;
}
.remove {
  display: block;
  color: red;
  border: 0px;
  text-align: center;
  cursor: pointer;
  background: none;
}

  .remove:hover {
      background: none;
      color: black;
  }
  input[type="file"] {
            display: block;
        }
    #image1{
        object-fit: cover !important;
        height: 200px !important;
        width: 200px !important;
        
    }
  </style>

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
                        <a class="nav-link" href="#" style="font-size:18px; color:white"><b>E-LANG</b></a>
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


    <!-- navbar selesai -->
    
    <!-- main -->
    <div class="container1">
        <!-- ini sidebar -->
        <?php $this->load->view('templates/sidebar')?>
            
        <!-- ini main/body -->
        <div class="main">
        <?php echo $this->session->flashdata('message'); ?>
            <div class="d-flex" style="width:900px; height:130px; margin-left:390px; margin-top:60px">
                <div class="txt">
                    <h2>Input Penemuan Barang</h2>
                </div>
            </div>

            <!-- table notifikasi -->
            <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10" style="margin-left:300px">
                    <div class="container p-5 col-10" style="border-radius: 15px; margin-bottom: 50px;background-color: #ffffff !important; box-shadow: 0 .225rem .25rem rgba(0,0,0.1,0.175)!important;">
                
                <form method='post' action='<?php echo base_url('index.php/formDitemukan_controller/insertBarang'); ?>' enctype='multipart/form-data'>
                    <div class="row">
                        <div class="col-25 media">
                            <img id="image1"src="<?= base_url('assets/img/input.png')?>" class="img files" alt="Gambar">
                        </div>
                        <div class="col-75 media-body">
                            <label for="imgInp">Gambar</label>
                            <p>Format gambar .jpg .jpeg dan ukuran minimum 300 x 300px (Untuk gambar optimal ukuran 700 x 700px)</p>
                            <!-- <input type="file" id="imgInp" multiple="multiple" hidden="hidden"/> -->
                            <input type="file" class="files" id="imgInp"  name="files[]" multiple hidden required/>
                            <button type="button" id="custom-button">Unggah</button>
                            
                            <span id="custom-text">Pilih Gambar Produk</span>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="namaBarang">Nama Barang</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="namaBarang" name="namaBarang" placeholder="Masukkan nama barang" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lokasi">Lokasi</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan lokasi kehilangan barang" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="tanggal">Tanggal</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="desc">Deskripsi</label>
                        </div>
                        <div class="col-75">
                            <textarea id="desc" name="desc" placeholder="Berikan informasi dengan jelas dan sedetail mungkin mengenai barang anda yang hilang." style="height:200px" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="kategori">Kategori</label>
                        </div>
                        <div class="col-75">
                            <select id="kategori" name="kategori">
                                <option value="buku">Buku</option>
                                <option value="kartuAtm">Kartu ATM</option>
                                <option value="kartuID">Kartu Identitas</option>
                                <option value="tas">Tas</option>
                                <option value="dompet">Dompet</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-25">
                            <label for="ciriciri">Ciri-ciri</label>
                        </div>
                        <div class="col-75">
                            <input name="ciri" type="text" id="myInput" placeholder="Contoh: warna, merek, ukuran." required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="ciriKhusus">Ciri Khusus</label>
                        </div>
                        <div class="col-50">
                            <input type="text" id="ciriKhusus" name="ciriKhusus" placeholder="Contoh: Nomor kartu." required>
                        </div>
                        <div class="col-25">
                            <p style="font-size:14px;color:red;padding-left:10px !important;">*Mohon berikan ciri khusus yang unik untuk validasi barang</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="petunjuk">Petunjuk</label>
                        </div>
                        <div class="col-50">
                            <input type="text" id="petunjuk" name="petunjuk" placeholder="Masukkan petunjuk dari ciri khusus." required>
                        </div>
                    </div>
                    <div class="row">
                        <input class="btnSub"type="submit" value="Simpan" style="background-color: #11212E;margin-top: 20px;padding: 10px 30px 10px 30px;">
                    </div>
                    
                </form>
            </div>
                <!-- end -->
        </div>
        <!-- end main -->
    </div>
    <!-- end container -->
        

    <!-- </div> -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/button-file.js"></script>
    <script type="text/javascript">
        // button upload
//         const realFileBtn = document.getElementById("imgInp");
//         const customBtn = document.getElementById("custom-button");
//         const customTxt = document.getElementById("custom-text");

//         customBtn.addEventListener("click", function () {
//             realFileBtn.click();
//         });

//         realFileBtn.addEventListener("change", function () {
//             if (realFileBtn.value) {
//                 customTxt.innerHTML = realFileBtn.value.match(
//                     /[\/\\]([\w\d\s\.\-\(\)]+)$/
//                 )[1];
//             } else {
//                 customTxt.innerHTML = "No file chosen, yet.";
//             }
//         });

// // upload preview
// function readURL(input) {
//     if (input.files && input.files[0]) {
//       var reader = new FileReader();
      
//       reader.onload = function(e) {
//         $('#image1').attr('src', e.target.result);
//       }
      
//       reader.readAsDataURL(input.files[0]);
//     }
//   } 
  
//   $("#imgInp").change(function() {
//     readURL(this);
//   });
  
// nambah ciri-ciri   
var myNodelist = document.getElementsByClassName("liC");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
// var list = document.querySelector('ul');
// list.addEventListener('click', function(ev) {
//   if (ev.target.tagName === 'LI') {
//     ev.target.classList.toggle('checked');
//   }
// }, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var lu = document.createElement("li");
  lu.className = "liC";
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  lu.appendChild(t);
  if (inputValue === '') {
    alert("Ciri-ciri belum terisi");
  } else {
    document.getElementById("myUL").appendChild(lu);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  lu.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
// multiple photo
        $(document).ready(function () {
            if (window.File && window.FileList && window.FileReader) {
                $(".files").on("change", function (e) {
                    var clickedButton = this;
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function (e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">x</span>" +
                                "</span>").insertAfter(clickedButton);
                            $(".remove").click(function () {
                                $(this).parent(".pip").remove();
                            });
                        });
                        fileReader.readAsDataURL(f);
                        if(filesLength == 0){

                        }
                    }
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>

    <!--======================================-->

</body>

</html>

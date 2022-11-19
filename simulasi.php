<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Alzara-Wedding</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
    <!-- Stylesheets -->
    <link href="assets/css/bootstrapp.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link href="assets/css/fluidbox.min.css" rel="stylesheet">
    <link href="assets/css/font-icons.css" rel="stylesheet">
    <link href="assets/css/styless.css" rel="stylesheet">
    <link href="assets/css/responsivee.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="image/logoo.png">

    <script src="https://oss.maxcdb.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdb.com/respond/1.4.2/respond.min.js"></script>

    <style>
        .inputGroup {
            background-color: #fff0;
            display: block;
            margin: 10px 0;
            position: relative;
            border: 1px;
            border-style: solid;
            border-block-color: grey;
            border-color: lightgrey;
            border-radius: 30px;
        }

        .inputGroup label {
            padding: 12px 30px;
            width: 100%;
            display: block;
            text-align: left;
            color: #333333;
            cursor: pointer;
            position: relative;
            z-index: 2;
            transition: color 200ms ease-in;
            overflow: hidden;
        }

        .inputGroup label:before {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale3d(1, 1, 1);
            transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            z-index: -1;
        }

        .inputGroup label:after {
            width: 32px;
            height: 32px;
            content: '';
            border: 2px solid #d1d7dc;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
            background-repeat: no-repeat;
            background-position: 2px 3px;
            border-radius: 50%;
            z-index: 2;
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            transition: all 200ms ease-in;
        }

        .inputGroup input:checked~label {
            color: #986340;
        }

        .inputGroup input:checked~label:before {
            transform: translate(-50%, -50%) scale3d(56, 56, 1);
            opacity: 1;
        }

        .inputGroup input:checked~label:after {
            background-color: #986340;
            border-color: #986340;
        }

        .inputGroup input {
            width: 32px;
            height: 32px;
            order: 1;
            z-index: 2;
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            visibility: hidden;
        }

        .form {
            padding: 0 16px;
            max-width: 550px;
            margin: 50px auto;
            font-size: 18px;
            font-weight: 600;
            line-height: 36px;
        }

        code {
            background-color: #9aa3ac;
            padding: 0 8px;
        }
    </style>

</head>

<body>
    <?php require_once('Admin/Api/koneksi.php'); ?>

    <!-- start = Menu -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <header>


            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <div data-nav-menu="#main-menu"><i class="icon icon-bars"></i></div>
                </button>
                <a class="logo" href="#"><a class="navbar-brand page-scroll" href="#"><img src="assets/images/logg.png" alt="Logo"></a>
            </div>
            <div class="container">
                <!-- <a class="logo" href="#"><a class="navbar-brand page-scroll" href="#"><img src="image/title.png" alt="Logo"></a> -->
                <!-- <a class="logo" href="#"><img src="image/title.png" alt="Logo"></a> -->
                <ul class="main-menu visible-on-click" id="main-menu">
                    <li><a href="index.php">BERANDA</a></li>
                    <!-- <li><a href="http://localhost:8080/Alzara-Wedding/#WeddingTeam">WEDDING TEAM</a></li> -->
                    <li><a href="gallery.php">GALERI</a></li>
                    <li><a href="http://localhost:8080/Alzara-Wedding/#kontak">KONTAK KAMI</a></li>
                    <li><a href="http://localhost:8080/Alzara-Wedding/#alamat">ALAMAT</a></li>
                    <li><a href="paket.php">PAKET PERNIKAHAN</a></li>
                    <li><a href="simulasi.php">SIMULASI</a></li>
                    <!-- <li><a href="listTamu.php">TAMU UNDANGAN</a></li> -->
                    <!-- <li><a href="aboutApps.php">TENTANG APLIKASI</a></li> -->
                    <!-- <li><a href="Login.php">MASUK</a></li> -->
                </ul>
            </div>
    </nav>
    </header>
    <!-- end = menu -->


    <!-- start = konten save the date -->
    <?php
    $judul = mysqli_query($conn, "SELECT * FROM judul");
    while ($infoResepsi = mysqli_fetch_array($judul)) {
    ?>
        <div class="main-slider" style="background:url(Admin/fileUpload/<?php echo $infoResepsi['fileGambar']; ?>); background-size:cover;">
            <div class="display-table center-text">
                <div class="display-table-cell">
                    <div class="slider-content">
                        </br>
                        <h1 class="title"><?php echo $infoResepsi['judul']; ?></h1>
                        <h2 class="title">Planner • Package • Organizer</h2>
                    <?php
                }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end = konten save the date -->



        <!-- start = konten save the date -->
        <!-- start = gallery prewedding -->
        <section class="section galery-area center-text" id="gallery">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="heading">
                            <h2 class="title">Simulasi Harga </h2>
                            <span class="heading-bottom"><i class="icon icon-star"></i></span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end = galery prewedding -->
        <div class="container" style="background:url(assets/images/sum.jpg); background-size:cover;">
            <div class="display-table center-text">
                <div class="display-table-cell">
                    <div class="slider-content">
                        </br>
                        <a><img src="assets/images/logg.png" alt="Logo Image" style="width:435px;"></a>


                        <form class="form-horizontal style-form" method="POST">

                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>


                            <div class="form-row ">
                                <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap Anda">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" placeholder="Masukan Email Anda">
                                </div>
                            </div>

                            <div class="form-row">
                                <label class="col-sm-2 col-sm-2 control-label">Nomor Telepon</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="telp" placeholder="Masukan Nomor Telepon Anda">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Tanggal Pernikahan</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="tgl">
                                </div>
                            </div>

                            <div class="form-row">
                                <label class="col-sm-2 col-sm-2 control-label">Umur</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="umur" placeholder="Masukan Umur Anda">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Kota</label>
                                <div class="col-sm-4">
                                    <td>
                                        <select class="form-control selectpicker" name="kota" id="kota" onchange="tmpt()" name="kota">
                                            <option value="" selected disabled>Pilih Kota Anda</option>
                                            <option value="1">Bandung</option>
                                            <option value="2">Jakarta</option>
                                        </select>
                                    </td>
                                </div>
                            </div>


                    </div>
                    <form>
                        <div class="" style="background:url(assets/images/mid.jpg); background-size:cover;">
                            <br><br><br><br>
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <div class="slider-content">
                                        <div class="form-row col-lg-6 ">

                                            <label>Catering</label></br></br>
                                            <td class="col-sm-4 form-control"> <input type="text" class="form-control" name="fax" placeholder="Masukan Jumlah PAX" id="catering"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>

                                        <div class="form-row col-lg-6 ">

                                            <label>Venue (Tempat)</label></br></br>
                                            <!-- <td class="col-sm-4 form-control"> <input type="text" class="form-control" name="tempat" placeholder="Masukan Nama Lengkap Anda"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

                                            <td>
                                                <select class="form-control selectpicker" name="tempat" id="tempat" name="tempat">
                                                    <option value="" selected disabled>Pilih Kota Terlebih Dahulu</option>

                                                </select>
                                            </td>
                                        </div></br></br></br></br></br></br>

                                        <div class="form-row col-lg-6">
                                            <label>Photography</label></br>
                                            <p>Apakah anda ingin menggunakan jasa Photography ?</p>
                                            <!-- <td class="col-sm-4 form-control"> <input type="text" class="form-control" name="photo" placeholder="Masukan Nama Lengkap Anda"></td> -->
                                            <td class="col-sm-4 form-control">
                                                <div class="inputGroup">
                                                    <input id="photography" name="photography" type="checkbox" />
                                                    <label for="photography">Tambah Photography</label>
                                                </div>
                                            </td>
                                        </div>


                                        <div class="form-row col-lg-6">
                                            <label>Entertainment</label></br>
                                            <p>Apakah anda ingin menggunakan jasa Entertainment ?</p>
                                            <!-- <td class="col-sm-4 form-control"> <input type="text" class="form-control" name="entertainment" placeholder="Masukan Nama Lengkap Anda"></td> -->
                                            <td class="col-sm-4 form-control">
                                                <div class="inputGroup">
                                                    <input id="entertainment" name="entertainment" type="checkbox" />
                                                    <label for="entertainment">Tambah Entertainment</label>
                                                </div>
                                            </td>
                                        </div></br></br></br></br></br></br></br></br>


                                        <div class="form-row col-lg-6 ">
                                            <label>MUA </label></br>
                                            <p>Apakah anda ingin menggunakan jasa MUA ?</p>
                                            <!-- <td class="col-sm-4 form-control"> <input type="text" class="form-control" name="mua" placeholder="Masukan Nama Lengkap Anda"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                            <td class="col-sm-4 form-control">
                                                <div class="inputGroup">
                                                    <input id="mua" name="mua" type="checkbox" />
                                                    <label for="mua">Tambah Jasa MUA</label>
                                                </div>
                                            </td>
                                        </div>

                                        <div class="form-row col-lg-6">
                                            <label>MC</label></br>
                                            <p>Apakah anda ingin menggunakan jasa MC ?</p>
                                            <!-- <td class="col-sm-4 form-control"> <input type="text" class="form-control" name="mc " placeholder="Masukan Nama Lengkap Anda"></td> -->
                                            <td class="col-sm-4 form-control">
                                                <div class="inputGroup">
                                                    <input id="jasamc" name="jasamc" type="checkbox" />
                                                    <label for="jasamc">Tambah Jasa MC</label>
                                                </div>
                                            </td>
                                        </div></br></br></br></br></br></br></br></br>


                                        <div class="form-row col-lg-6 ">
                                            <label>Dekorasi </label></br>
                                            <p>Apakah anda ingin menggunakan jasa Dekorasi ?</p>
                                            <!-- <td class="col-sm-4 form-control"> <input type="text" class="form-control" name="dekor" placeholder="Masukan Nama Lengkap Anda"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                            <td class="col-sm-4 form-control">
                                                <div class="inputGroup">
                                                    <input id="dekorasi" name="dekorasi" type="checkbox" />
                                                    <label for="dekorasi">Tambah Dekorasi</label>
                                                </div>
                                            </td>
                                        </div>

                                        <div class="form-row col-lg-6">
                                            <label>Undangan Dan Penerima Tamu Digital</label></br>
                                            <p>Apakah anda ingin menggunakan jasa Undangan Dan Tamu Digital ?</p>
                                            <!-- <td class="col-sm-4 form-control"> <input type="text" class="form-control" name="wedding" placeholder="Masukan Nama Lengkap Anda"></td> -->
                                            <td class="col-sm-4 form-control">
                                                <div class="inputGroup">
                                                    <input id="undangan" name="undangan" type="checkbox">
                                                    <label for="undangan">Tambah Undangan Dan Penerima Tamu Digital</label>
                                                </div>
                                            </td>
                                        </div></br></br></br></br></br></br></br></br>
                    </form>

                    <td>
                        <!-- <input type="submit" name="hitung" value="Hitung">
                                            <input type="reset" name="reset" value="Reset" style="margin-left: 130px;"> -->
                        <button class="btn btn-primary" onclick="hitung()">Hitung</button>
                        <!-- <a href="simulasi.php" class="btn btn-primary">Hitung</a> -->
                        <!-- <a href="simulasi.php" class="btn btn-primary" style="margin-left: 90px;">Reset</a> -->
                    </td>

                </div></br>
            </div>
        </div>




        <!-- Coding PHP hitung total bayar ketik disini -->
        <div class="" style="background:url(assets/images/bot.jpg); background-size:cover;">
            <br><br><br><br>

            <hr />
            <div id="total"></div>
            <div id="table"></div>

            <?php
            if (isset($_POST['hitung'])) :
                $harga    = "32000";
            ?>
                <label>
                    <table border='1' cellpadding='4'>
                        <tr>
                            <td>Harga</td>
                            <td>Banyaknya</td>
                            <td>Total Harga</td>
                        </tr>
                        <tr>
                            <td align='right'>
                                <?= number_format((int)$harga, 0, ',', '.'); ?>
                            </td>
                            <td align='right'>
                                <?= number_format((int)$harga, 0, ',', '.'); ?>
                            </td>
                            <td align='right'>
                                <?= number_format((int)$harga, 0, ',', '.'); ?>
                            </td>

                        </tr>
                    </table>
                </label>
            <?php

            endif
            ?>

        </div>
        </div>
        </div>
        </div>





</body>


</html>
</div>
</div>
</div>
</div>
</div>



<!-- start = footer  -->
<footer>
    <div class="container center-text" id="sosmed">

        <div class="logo-wrapper">
            <a class="logo" href="#"><img src="assets/images/logg.png" alt="Logo Image"></a>
            <!-- <i class="icon icon-star"></i> <i class="icon icon-star"></i> <i class="icon icon-star"></i> <i class="icon icon-star"></i> <i class="icon icon-star"></i> <i class="icon icon-star"></i> -->
        </div>
        </br>
        <ul class="social-icons">
            <?php
            $sosmed = mysqli_query($conn, "SELECT * FROM sosmed");
            while ($infoSosmed = mysqli_fetch_array($sosmed)) {


            ?>
                <li><a href="<?php echo $infoSosmed['telpon']; ?>" target="_blank"><img src="image/what.png" style="width: 30px; height: 30px;"><i class=></i></a></br>WhatsApp</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="<?php echo $infoSosmed['email']; ?>" target="_blank"><img src="image/email.png" style="width: 30px; height: 30px;"><i class=></i></a></br>Email</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><a href="<?php echo $infoSosmed['ig']; ?>" target="_blank"><img src="image/ig.png" style="width: 30px; height: 30px;"><i class=></i></a></br>Instagram</li>
            <?php
            }
            ?>
        </ul>
        <!-- <ul class="footer-links">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="#sambuta">SAMBUTAN</a></li>
				<li><a href="#ceritaKita">CERITA KITA</a></li>
				<li><a href="#gallery">GALERI</a></li>
				<li><a href="listTamu.php">TAMU UNDANGAN</a></li>
			</ul> -->
        <p class="copyright"> Copyright &copy;<a href="https://www.instagram.com/alzaraweddingplanner/" target="_blank">ALZARA WEDDING PLANNER</a>
    </div>
</footer>
<!-- end = footer -->

<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.fluidbox.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script>
    function tmpt() {
        var kota = $('#kota').val();
        var html = ''
        if (kota === '1') {
            $('#tempat').empty()
            html = `
                    <option value="nurul jamil">Nurul Jamil</option>
                    <option value="villa haroki">Villa Haroki</option>
                    <option value="irish garden">Irish Garden</option>`

            $('#tempat').html(html)
        } else if (kota === '2') {
            $('#tempat').empty()
            html = `
                    <option value="gedung1">GEDUNG 1</option>
                    <option value="gedung2">GEDUNG 2</option>
                    <option value="gedung3">GEDUNG 3</option>`

            $('#tempat').html(html)
        }

    }
</script>
<script>
    function hitung() {
        let total = 0;
        var table = '';
        var array = [];
        var catering = $('#catering').val();

        if ($('#photography').is(':checked')) {
            total += 6500000;
            array.push({
                name: ' &nbsp; Photography,',
                qty: 1,
                harga: 6500000
            })
        }

        if ($('#mua').is(':checked')) {
            total += 8500000;
            array.push({
                name: ' &nbsp; MUA,',
                qty: 1,
                harga: 8500000
            })
        }

        if ($('#dekorasi').is(':checked')) {
            total += 12000000;
            array.push({
                name: ' &nbsp; Dekorasi,',
                qty: 1,
                harga: 12000000
            })
        }

        if ($('#entertainment').is(':checked')) {
            total += 3000000;
            array.push({
                name: ' &nbsp; Entertaiment,',
                qty: 1,
                harga: 3000000
            })
        }

        if ($('#jasamc').is(':checked')) {
            total += 1500000;
            array.push({
                name: ' &nbsp; MC,',
                qty: 1,
                harga: 1500000
            })
        }

        if ($('#undangan').is(':checked')) {
            total += 2500000;
            array.push({
                name: ' &nbsp; Undangan Dan Penerima Tamu Digital,',
                qty: 1,
                harga: 2500000
            })
        }

        if ($('#tempat').val() === 'nurul jamil') {
            total += 7300000;
            array.push({
                name: ' &nbsp; Gedung Nurul Jamil,',
                qty: 1,
                harga: 7300000
            })
        } else if ($('#tempat').val() === 'villa haroki') {
            total += 8750000;
            array.push({
                name: ' &nbsp; Gedung Villa Haroki,',
                qty: 1,
                harga: 8750000
            })
        } else if ($('#tempat').val() === 'irish garden') {
            total += 15000000;
            array.push({
                name: ' &nbsp; Gedung Irish Garden,',
                qty: 1,
                harga: 15000000
            })
        } else if ($('#tempat').val() === 'gedung1') {
            total += 1000;
            array.push({
                name: ' &nbsp; GEDUNG 1,',
                qty: 1,
                harga: 1000
            })
        } else if ($('#tempat').val() === 'gedung2') {
            total += 1000;
            array.push({
                name: ' &nbsp; GEDUNG 2,',
                qty: 1,
                harga: 1000
            })
        } else if ($('#tempat').val() === 'gedung3') {
            total += 1000;
            array.push({
                name: ' &nbsp; GEDUNG 3,',
                qty: 1,
                harga: 1000
            })
        }

        total += catering * 32000;
        array.push({
                name: ' &nbsp; Catering, ',
                qty: catering +' PAX' ,
                harga: catering * 32000
            })

            array.push({
                name: ' &nbsp; WO D Day.',
                qty: 1,
                harga: 5000000
            })
            total += 5000000;
        table = `
                <tr align="center">
                    <td align="center"><h4 align="center"></b>Rincian :</h4></td></tr>`;
                for (let index = 0; index < array.length; index++) {
                    table+=`       
                    <td align='center'>` + array[index].name + `</td>`;
                    
                }
        

        $('#total').empty();
        $('#total').html('<h3>Estimasi :</h3><h3>Rp. ' + number_format(total) + '</h3><br><br><br>')
        $('#table').empty();
        $('#table').html(table)
    }

    function number_format(number, decimals, dec_point, thousands_sep) {
        number = number * 1; //makes sure `number` is numeric value
        var str = number.toFixed(decimals ? decimals : 0).toString().split('.');
        var parts = [];
        for (var i = str[0].length; i > 0; i -= 3) {
            parts.unshift(str[0].substring(Math.max(0, i - 3), i));
        }
        str[0] = parts.join(thousands_sep ? thousands_sep : ',');
        return str.join(dec_point ? dec_point : '.');
    }
</script>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+628111666664", // WhatsApp number
            call_to_action: "Hubungi Kami", // Call to action
            position: "right", // Position may be 'right' or 'left'
            pre_filled_message: "Halo Alzara, ingin tanya soal wedding..", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

<!-- BUTTON LAIN
	
	<a href="https://api.whatsapp.com/send?phone=6281289122055&text=Hallo,%20Kak%20Saya%20Mau%20Konsultasi" target="_blank">
			<img src="image/buton.png" class="wabutton" alt="Whatsapp-Button" />
		</a>
		<style>
			.wabutton {
				width: 190px;
				height: 35px;
				position: fixed;
				bottom: 20px;
				right: 0px;
				z-index: 100;
			}
		</style> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
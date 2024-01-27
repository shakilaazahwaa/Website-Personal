<?php
session_start();
include "setting/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KILASERV</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>

    <?php 
    include 'menu.php';
    ?>
    <div class="wrapper">
        <!-- untuk home-->
        <section id="home">
            <img class="pic" src="img/servicce.png"/>
            <div class="kolom-atas erepair">
                <p class="deskripsi">SERVIS? TINGGAL ORDER AJA!</p>
                <h2>Langsung di KILASERV</h2>
                <br>
                
                <p>Punya barang alat elektronik yang sedang rusak atau sudah tidak terpakai dan ingin memakainya lagi? Bingung ingin memperbaikinya namun tidak mempunyai informasi terkait penyedia? Kita ada solusinya.</p>
                
            </div>
        </section>

        <!-- untuk jenis jasa -->
        <section id="jenisjasa">
            <div class="tengah">
                <div class="kolom">
                    <h2>Jenis Jasa</h2>
                    <p class="deskripsi">Pilih jasa sesuai kebutuhanmu</p>
                    <p>KILASERV menyediakan jasa servis untuk segala macam barang elektronik dan transportasi.</p>
                </div>

                <div class="jasa-list">
                    <div class="jasa">
                        <img src="img/cari.png"/>
                        <p>Servis Mobil</p>
                    </div>
                    <div class="jasa">
                        <img src="img/phoone.png"/>
                        <p>Servis Handphone</p>
                    </div>
                    <div class="jasa">
                        <img src="img/pcrepairi.png"/>
                        <p>Servis PC</p>
                    </div>
                    <div class="jasa">
                        <img src="img/hosi.png"/>
                        <p>Servis Peralatan Rumah Tangga</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="order">
            <div class="kolom-bawah reveal">
                <h2>Cari Teknisi Terbaik dengan <span>Cepat</span> dan <span>Mudah</span></h2>
                <p>KILASERV memberi kemudahan dan kecepatan bagi kamu untuk menemukan teknisi yang handal. Tanpa repot, tanpa bingung. Tidak perlu menunggu lebih lama lagi</p>
                <br>
                <a class="tombol" href="jasa.php">Pesan Sekarang<a>
            </div>
            <img src="img/order.jpg"/>
        </section>

      
            <form>
              <br>
              <br>
              <br>
            </form>
</div>
        </section>
    </div>

    <div id="contact">
        <div class="footer-wraper">
            <div class="footer">
                <div class="footer-section">
                    <h3>KILASERV</h3>
                    <p>KILASERV merupakan sebuah applikasi yang menyediakan jasa untuk perbaikan barang elektronik, seperti: laptop, hp, mesin cuci, tv, bahkan mobil dan lain-lainya.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>No. telepon: 123-98576</p>
                    <p>Facebook   : Awa </p>
                    <p>Twitter    : @shakila</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>Shakila Zahwa Hafizah</b> All Rights Reserved.
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
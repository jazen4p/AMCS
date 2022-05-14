<?php include "partials/head.php"?>
    <!-- Header -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-danger navbar-badge"><?php echo $total?></span>
                </a>
            </div>
        </div>
    </nav> -->

    <header class="align--center pt3">

        <div class="container--lg border--bottom pb3 ">
            <img class="logo mb3 reveal-on-scroll is-revealing" src="gambar/water.png" style="width: 100px" alt="Carta">
            <img class="logo mb3 reveal-on-scroll is-revealing" src="gambar/MSGLOGO.png" style="width: 100px" alt="Carta">
            <h3 class="mb2" style="">Water & Maintenance Checking System - MS Group</h3>
            <!-- <span>
                <a href="https://www.apple.com/ios/app-store/" class="link"><img class="download" src="carta/dist/img/ios.png" alt="Download on the App Store"></a>
            </span> -->
            <!-- <span>
                <a href="https://play.google.com/store" class="link"><img class="download" src="carta/dist/img/googleplay.png" alt="Download on Google Play"></a>
            </span> -->
        </div>
    </header>

    <main>
        <div style="background-color: pink" class="align--center pt3 pb3">
            <table class="table" id="ex4" style="font-size: 12px; padding-left: 20%; padding-right: 20%">
                <thead>
                    <th>No</th>
                    <th>Pemberitahuan</th>
                    <th>File</th>
                </thead>
                <tbody style="white-space: nowrap">
                    <?php $no=1;
                        foreach($this->db->get_where('konsumen_slip_tagihan')->result() as $files){
                    ?>
                        <tr>
                            <td><?php echo $no?></td>
                            <td><?php echo $files->keterangan?></td>
                            <td>
                                <a href="././DPMS/asset/slip_tagihan/<?php echo $files->file_name?>" download>
                                    <i class="fa fa-file-pdf"></i>
                                    <?php echo $files->file_name?>
                                </a>
                            </td>
                        </tr>
                    <?php $no++;}?>
                </tbody>
            </table>
        </div>
        <div style="background-color: yellow" class="align--center pt3 pb3">
            <div class="container pt2 pb2">
                <form action="<?php echo base_url()?>Find_data" method="POST">
                <!-- <img class="cta-image mb2 reveal-on-scroll is-revealing" src="carta/dist/img/text.svg" alt="Text the app"> -->
                <!-- <p class="h3 text--white mb1 bold">We'll text you the&nbsp;app</p> -->
                    <p class="text--white mb3" style="color: black">Masukkan Kode Pelanggan Anda. (Ex: Kode Perumahan-No Unit) <span style='color: red'>*Sertakan (-)</span></p>
                    <div class="inline-block mr1 no-mr-on-mobile" style="width: 500px; max-width:100%;">
                        <input class="form-control" type="text" id="kodePelanggan" placeholder="Kode Pelanggan" value="<?php if(isset($input_data)){echo $input_data;}?>" name="kode_pelanggan">
                    </div>
                    <input type="submit" class="btn btn--secondary" value="Send">
                    <!-- <a href="<?php echo base_url()?>">Test</a> -->
                </form>
            </div>
            <?php 
                if(isset($succ_msg)){
                    echo "<span style='color: green'>$succ_msg</span>";
                }
                if(isset($err_msg)){
                    echo "<span style='color: red'>$err_msg</span>";
                }
            ?>
        </div>

        <!-- Feature list -->
        <div class="container pt3 mt2 text--gray align--center">

            <!-- <p class="mb3">Great for companies with up to 100&nbsp;employees.</p>
            <div class="grid-row">
                <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                    <img class="illustration--small mb1" src="carta/dist/img/assign.svg" alt="Assign to others">
                    <p>Assign to others</p>
                </div>
                <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                    <img class="illustration--small mb1" src="carta/dist/img/connected.svg" alt="Stay connected">
                    <p>Stay connected</p>
                </div>
                <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                    <img class="illustration--small mb1" src="carta/dist/img/search.svg" alt="Powerful search">
                    <p>Powerful search</p>
                </div>
                <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                    <img class="illustration--small mb1" src="carta/dist/img/vault.svg" alt="Put in a vault">
                    <p>Put in a vault</p>
                </div>
                <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                    <img class="illustration--small mb1" src="carta/dist/img/messaging.svg" alt="Fast messaging">
                    <p>Fast messaging</p>
                </div>
                <div class="grid-column span-one-third mb3 reveal-on-scroll is-revealing">
                    <img class="illustration--small mb1" src="carta/dist/img/mail.svg" alt="Share with others">
                    <p>Share with others</p>
                </div>
            </div> -->
        </div>

        <!-- Focus -->
        <div class="container--lg pt1 pb1" style="margin-top: -40px">
            
            <?php if(isset($confirm)){?>

            <h3 style="text-align: center">Perumahan <?php if(isset($nama_perumahan)){echo $nama_perumahan;}?> Residence Unit <?php if(isset($no_unit)){echo $no_unit;}?></h3>

            <nav class="container--lg pt1 pb1">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" style="width: 50%; text-align: center; font-weight: bold; color: #414a4c" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tagihan</a>
                    <a class="nav-link" style="width: 50%; text-align: center; font-weight: bold; color: #414a4c" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">History Pembayaran</a>
                    <!-- <a class="nav-link" style="width: 50%" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a> -->
                </div>
            </nav>
            <div class="tab-content container--lg pt1 pb1" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="grid-row grid-row--center">
                        <div class="grid-column mt3 mb2 order-1 reveal-on-scroll is-revealing" id="riwayatAir">
                            <h3 style="text-align: center">Tagihan Air</h3>
                            <?php if(count($query_air->result()) != 0 || count($query_air2->result()) != 0){?>
                                <!-- <img src="carta/dist/img/data.svg" alt="Usage data"> -->
                                <table class="table table-bordered table-striped" style="font-size: 14px; text-align: center" id="ex1">
                                    <thead>
                                        <tr style="background-color: lightgreen">
                                            <th>Bulan Tagihan</th>
                                            <th>Meteran</th>
                                            <th>Pemakaian</th>
                                            <th>Jumlah Tagihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($query_air->result() as $row){?>
                                            <tr>
                                                <td><?php echo date('F Y', strtotime($row->bulan_tagihan))?></td>
                                                <td><?php echo $row->meteran?> m<sup>3</sup></td>
                                                <td><?php echo $row->penggunaan_air?> m<sup>3</sup></td>
                                                <td><?php echo "Rp. ".number_format($row->total_harga, 0, ",", ".")?></td>
                                            </tr>
                                        <?php }?>
                                        <?php foreach($query_air2->result() as $row1){?>
                                            <tr>
                                                <td><?php echo date('F Y', strtotime($row1->bulan_tagihan))?></td>
                                                <td><?php echo $row1->meteran?> m<sup>3</sup></td>
                                                <td><?php echo $row1->penggunaan_air?> m<sup>3</sup></td>
                                                <td><?php echo "Rp. ".number_format($row1->total_harga, 0, ",", ".")?></td>
                                            </tr>
                                        <?php }?>
                                    </tbody>    
                                </table>
                            <?php } else {
                                echo "<div style='text-align: center; margin-top: 30px'>Data tidak ditemukan</div>";   
                            }?>
                        </div>
                        <!-- <div class="grid-column span-1"></div> -->
                        <div class="grid-column mt3 mb2 order-1 reveal-on-scroll is-revealing" id="riwayatMaintenance">
                            <h3 style="text-align: center">Tagihan Maintenance</h3>
                            <?php if(count($query_mt->result()) != 0 || count($query_mt2->result()) != 0){?>
                                <!-- <img src="carta/dist/img/data.svg" alt="Usage data"> -->
                                <table class="table table-bordered table-striped" style="font-size: 14px; text-align: center" id="ex2">
                                    <thead>
                                        <tr style="background-color: lightgreen">
                                            <th style="text-align: center">Bulan Tagihan</th>
                                            <!-- <th>Meteran</th>
                                            <th>Pemakaian</th> -->
                                            <th style="text-align: center">Jumlah Tagihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($query_mt->result() as $row2){?>
                                            <tr>
                                                <td><?php echo date('F Y', strtotime($row2->bulan_tagihan))?></td>
                                                <!-- <td><?php echo $row2->meteran?> m<sup>3</sup></td>
                                                <td><?php echo $row->penggunaan_air?> m<sup>3</sup></td> -->
                                                <td><?php echo "Rp. ".number_format($row2->nominal, 0, ",", ".")?></td>
                                            </tr>
                                        <?php }?>
                                        <?php foreach($query_mt2->result() as $row3){?>
                                            <tr>
                                                <td><?php echo date('F Y', strtotime($row3->bulan_tagihan))?></td>
                                                <!-- <td><?php echo $row1->meteran?> m<sup>3</sup></td>
                                                <td><?php echo $row1->penggunaan_air?> m<sup>3</sup></td> -->
                                                <td><?php echo "Rp. ".number_format($row3->nominal, 0, ",", ".")?></td>
                                            </tr>
                                        <?php }?>
                                    </tbody>    
                                </table>
                            <?php } else {
                                echo "<div style='text-align: center; margin-top: 30px'>Data tidak ditemukan</div>";   
                            }?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <!-- <div class="col-sm-12"> -->
                    <?php if(count($history_byr->result()) != 0){?>
                        <table class="table table-bordered table-striped" id="ex3" style="font-size: 13px; overflow:auto;">
                            <thead>
                                <tr style="background-color: pink;">
                                    <th>No Struk</th>
                                    <th>Tgl Bayar</th>
                                    <th>Item List</th>
                                    <th>Nominal</th>
                                    <th>Total</th>
                                    <th>Status Pembayaran</th>
                                    <th>QR Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($history_byr->result() as $his){?>
                                    <tr>
                                        <td><?php echo sprintf('%09d', $his->id_struk)?></td>
                                        <td><?php echo date('d M Y H:i', strtotime($his->tgl_struk))?></td>
                                        <td style="white-space: nowrap">
                                            <?php foreach($this->db->get_where('konsumen_struk_item', array('id_struk'=>$his->id_struk))->result() as $items){
                                                echo $items->item."<br>";
                                            }?>
                                        </td>
                                        <td style="white-space: nowrap">
                                            <?php foreach($this->db->get_where('konsumen_struk_item', array('id_struk'=>$his->id_struk))->result() as $items1){
                                                echo "Rp. ".number_format($items1->nominal)."<br>";
                                            }?>
                                        </td>
                                        <td><?php echo "Rp. ".number_format($his->grand_total);?></td>
                                        <td></td>
                                        <td><img src="http://localhost/DPMS/gambar/qr_code/<?php echo $his->qr_code?>" alt="QR" style="width: 100px; height: 100px"></td>
                                        <!-- <td></td> -->
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    <!-- </div> -->
                    <?php } else {?>
                        <div style="text-align: center">Data tidak ditemukan</div>
                    <?php }?>
                </div>
                <!-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">.S.</div> -->
            </div>

            <!-- <div class="grid-row grid-row--center">
                <?php if(isset($tabelAir)){?>
                    <div class="grid-column mt3 mb2 order-1 reveal-on-scroll is-revealing" id="riwayatAir">
                        <img src="carta/dist/img/data.svg" alt="Usage data">
                    </div>
                <?php }?>
                <div class="grid-column span-1"></div>
                <?php if(isset($tabelMaintenance)){?>
                    <div class="grid-column mt3 mb2 order-1 reveal-on-scroll is-revealing" id="riwayatMaintenance">
                        <img src="carta/dist/img/data.svg" alt="Usage data">
                    </div>
                <?php }?>
            </div> -->

            <!-- <div class="grid-row grid-row--center">
                <div class="grid-column mt3 mb2 reveal-on-scroll is-revealing">
                    <img src="carta/dist/img/security.svg" alt="Absolute security">
                </div>
                <div class="grid-column span-1"></div>
                <div class="grid-column mt3 mb2">
                    <div class="border--bottom pb2 mb2">
                        <h2>Absolute security</h2>
                        <p>Itaque his sapiens semper vacabit. Qualis ista philosophia est, quae non interitum afferat pravitatis, sed sit contenta mediocritate vitiorum? Quid de Platone aut de Democrito loquar? Quis istud possit, inquit&nbsp;negare?</p>
                    </div>
                    <p class="italic text--gray mb1">Estne, quaeso, inquam, sitienti in bibendo voluptas? Duo Reges: constructio&nbsp;interrete.</p>
                    <p class="bold">Josh Blenton, Product Manager at&nbsp;Blinkist</p>
                </div>
            </div> -->
            <?php }?>

        </div>

        <!-- Mentioned -->
        <!-- <div class="container--lg pt3 pb3 mb2 align--center">
            <p class="mb2">Mentioned in</p>
            <span class=""><img class="mentioned" src="carta/dist/img/mentioned.svg" alt="New York Times, TC, Product Hunt, Recode"></span>
        </div> -->

        <!-- CTA -->
        <!-- <div class="bg--dark-gray align--center pt3 pb3">
            <div class="container pt2 pb2">
                <img class="cta-image mb2 reveal-on-scroll is-revealing" src="carta/dist/img/text.svg" alt="Text the app">
                <p class="h3 text--white mb1 bold">We'll text you the&nbsp;app</p>
                <p class="text--white mb3">Just insert your number below. Messaging rates&nbsp;apply.</p>
                <div class="inline-block mr1 no-mr-on-mobile" style="width: 280px; max-width:100%;">
                    <input class="form-control" type="tel" placeholder="Phone number">
                </div>
                <button class="btn btn--secondary">Send</button>
            </div>
        </div> -->

    </main>

    <!-- Footer -->
    <footer class="pt1 pb3 align--center-on-mobile" style="">
        <div class="container">
            <div class="grid-row">
                <div class="grid-column mt2 span-half">
                    <div class="mb1">
                        <!-- <span>
                            <a href="https://www.apple.com/ios/app-store/" class="link"><img class="download" src="carta/dist/img/ios.png" alt="Download on the App Store"></a>
                        </span>
                        <span>
                            <a href="https://play.google.com/store" class="link"><img class="download" src="carta/dist/img/googleplay.png" alt="Download on Google Play"></a>
                        </span> -->
                        <span>
                            <img src="gambar/qrcode-wmcs.png" style="width: 60px; height: 60px">
                        </span>
                    </div>
                </div>
                <div class="grid-column mt2 span-half align--right align--center-on-mobile">
                    <ul class="no-bullets list--inline">
                        <li class="mr1"><a target="_blank" href="https://www.youtube.com/channel/UCEg2FcFvJKO7WrLP-LybK7A?view_as=subscriber" class="link"><img class="icon" src="carta/dist/img/youtube.svg" alt="YouTube"></a></li>
                        <li class="mr1"><a target="_blank" href="https://www.instagram.com/mitrasejahteraland/" class="link"><img class="icon" src="carta/dist/img/instagram.png" alt="Instagram"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/mitrasejahteragroup/?ref=ts&fref=ts" class="link"><img class="icon" src="carta/dist/img/facebook.svg" alt="Facebook"></a></li>
                    </ul>
                </div>
                <p class="small">Design by <a target="_blank" href="https://www.papayatemplates.com" class="link link--text">Papaya</a>. Illustrations from&nbsp;<a target="_blank" href="https://undraw.co/" class="link link--text">Undraw</a>. © 2021 <a href="http://msgroup.co.id/" target="_blank">MS Group</a> | Coded By <a href="https://instagram.com/jazen4p" target="_blank">Jasen Aprian Putra</a></p>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="">
        jQuery('#ex3').wrap('<div class="dataTables_scroll" />'); 
    </script>
    <script>
        // $('input[type=text]').val(function () {
        //     return this.value.toUpperCase();
        // })
        $('#kodePelanggan').on("input", function(){
            // return this.value.toUpperCase();
            // alert(this.value.toUpperCase());
            $(this).val(this.value.toUpperCase());
        })
    </script>
    <?php include "partials/foot.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistem Data Transaksi dan Persediaan Ganesa Optical</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/zabuto_calendar.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/gritter/css/jquery.gritter.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lineicons/style.css'); ?>">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/chart-master/Chart.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
<!--header start-->
<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo"><b>Sistem Data Transaksi dan Persediaan Ganesa Optical</b></a>
    <!--logo end-->
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="<?php echo base_url('main/logout'); ?>">Logout</a></li>
        </ul>
    </div>
</header>
<!--header end-->

<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="#"><img src="<?php echo base_url('assets/img/ui-sam.jpg'); ?>" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?php echo $pengguna->nama; ?><br /><small><?php echo $pengguna->role; ?></small></h5>
            <?php if ($pengguna->role == "owner"){ ?>
            <li class="mt">
                <a class="<?php if ($content == "dash") echo 'active'; ?>" href="<?php echo base_url('main/dashboard'); ?>">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <?php } ?>
            <?php if ($pengguna->role == "clerk"){ ?>
            <li class="sub-menu">
                <a class="<?php if ($content == "pesan" || $content == "beli") echo 'active'; ?>" href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Transaksi Baru</span>
                </a>
                <ul class="sub">
                    <li class="<?php if ($content == "pesan") echo 'active'; ?>"><a  href="<?php echo base_url('main/pesan'); ?>">Pemesanan Kacamata</a></li>
                    <li class="<?php if ($content == "beli") echo 'active'; ?>"><a  href="<?php echo base_url('main/beli'); ?>">Pembelian</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if ($pengguna->role != "persediaan"){ ?>
            <li class="sub-menu">
                <a class="<?php if ($content == "pemesanan" || $content == "pembelian") echo 'active'; ?>" href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Data Transaksi</span>
                </a>
                <ul class="sub">
                    <li class="<?php if ($content == "pemesanan") echo 'active'; ?>" ><a  href="<?php echo base_url('main/pemesanan'); ?>">Pemesanan Kacamata</a></li>
                    <li class="<?php if ($content == "pembelian") echo 'active'; ?>" ><a  href="<?php echo base_url('main/pembelian'); ?>">Pembelian Lensa Kontak</a></li>
                </ul>
            </li>
            <?php } ?>
            <li class="sub-menu">
                <a class="<?php if ($content == "persediaan") echo 'active'; ?>" href="<?php echo base_url('main/persediaan'); ?>" >
                    <i class="fa fa-th"></i>
                    <span>Data Persediaan</span>
                </a>
            </li>
            <?php if ($pengguna->role == "owner"){ ?>
            <li class="sub-menu">
                <a class="<?php if ($content == "pengaturan") echo 'active'; ?>" href="<?php echo base_url('main/pengaturan'); ?>" >
                    <i class="fa fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
            <?php } ?>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<?php $this->load->view($content); ?>
<!--main content end-->

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script class="include" type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery.sparkline.js'); ?>"></script>


<!--common script for all pages-->
<script src="<?php echo base_url('assets/js/common-scripts.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/gritter/js/jquery.gritter.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/gritter-conf.js'); ?>"></script>

<!--script for this page-->
<script src="<?php echo base_url('assets/js/sparkline-chart.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/zabuto_calendar.js'); ?>"></script>

<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
<?php if ($content == "pengaturan"){ ?>
    <script>
        $(document).ready(function () {
            $("#form-tambah").submit(function () {
                $.ajax({
                    url : "<?php echo base_url('ajax/tambah_pengguna'); ?>",
                    type : "POST",
                    data : {
                        nama : $("#nama").val(),
                        username : $("#username").val(),
                        password : $("#password").val(),
                        role : $("#role").val()
                    },
                    success : function (html) {
                        if (html == "true")
                        {
                            window.location = "<?php echo base_url('main/pengaturan') ?>";
                        }
                        else
                        {
                            alert("Gagal!");
                            $(".tambah-loading").hide();
                            $(".tambah-button").show();
                        }
                    },
                    beforeSend : function () {
                        $(".tambah-button").hide();
                        $(".tambah-loading").show();
                    }
                });
                return false;
            });
            $("#form-edit").submit(function () {
                $.ajax({
                    url : "<?php echo base_url('ajax/edit_pengguna'); ?>",
                    type : "POST",
                    data : {
                        user : $("#old-user").val(),
                        nama : $("#edit-nama").val(),
                        username : $("#edit-username").val(),
                        password : $("#edit-password").val(),
                        role : $("#edit-role").val()
                    },
                    success : function (html) {
                        if (html == "true")
                        {
                            window.location = "<?php echo base_url('main/pengaturan') ?>";
                        }
                        else
                        {
                            alert("Gagal!");
                            $(".edit-loading").hide();
                            $(".edit-button").show();
                        }
                    },
                    beforeSend : function () {
                        $(".edit-button").hide();
                        $(".edit-loading").show();
                    }
                });
                return false;
            });
        });
        function edit(idt)
        {
            $.getJSON("<?php echo base_url('ajax/get_pengguna') ?>/"+idt, function (data) {
                $("#edit-nama").val(data.nama);
                $("#old-user").val(data.username);
                $("#edit-username").val(data.username);
                $("#edit-role").val(data.role);
                $("#modal-edit").modal("show");
            });
        }
        function hapus(idt)
        {
            $.ajax({
                url : "<?php echo base_url('ajax/hapus_pengguna'); ?>",
                type : "post",
                data : {
                    user : idt
                },
                success : function(html){
                    if (html == "true")
                    {
                        window.location = "<?php echo base_url('main/pengaturan'); ?>";
                    }
                    else
                    {
                        alert("gagal!");
                    }
                }
            });
        }
    </script>
<?php } ?>
<?php if ($content == "pemesanan"){ ?>
    <script>
        function show_edit(id)
        {
            $("#stat"+id).hide();
            $(".button"+id).hide();
            $("#change"+id).show();
            $(".save"+id).show();
        }
        function edit(idt)
        {
            $.ajax({
                url : "<?php echo base_url('ajax/edit_pemesanan'); ?>",
                type : "post",
                data : {
                    id : idt,
                    status : $("#change"+idt).val()
                },
                success : function(html){
                    if (html == "true")
                    {
                        window.location = "<?php echo base_url('main/pemesanan'); ?>";
                    }
                    else
                    {
                        alert("gagal!");
                    }
                }
            });
        }
        function hapus(idt)
        {
            $.ajax({
                url : "<?php echo base_url('ajax/hapus_pemesanan'); ?>",
                type : "post",
                data : {
                    id : idt
                },
                success : function(html){
                    if (html == "true")
                    {
                        window.location = "<?php echo base_url('main/pemesanan'); ?>";
                    }
                    else
                    {
                        alert("gagal!");
                    }
                }
            });
        }
    </script>
<?php } ?>
<?php if ($content == "persediaan"){ ?>
    <script>
        $(document).ready(function () {
            $("#form-tambah").submit(function () {
                $.ajax({
                    url : "<?php echo base_url('ajax/tambah_persediaan'); ?>",
                    type : "POST",
                    data : {
                        nama : $("#nama-produk").val(),
                        tipe : $("#jenis-produk").val(),
                        harga : $("#harga-produk").val(),
                        stok : $("#jumlah-produk").val()
                    },
                    success : function (html) {
                        if (html == "true")
                        {
                            window.location = "<?php echo base_url('main/persediaan') ?>";
                        }
                        else
                        {
                            $(".tambah-loading").hide();
                            $(".tambah-button").show();
                        }
                    },
                    beforeSend : function () {
                        $(".tambah-button").hide();
                        $(".tambah-loading").show();
                    }
                });
                return false;
            });
            $("#form-edit").submit(function () {
                $.ajax({
                    url : "<?php echo base_url('ajax/edit_persediaan'); ?>",
                    type : "POST",
                    data : {
                        id : $("#edit-id").val(),
                        nama : $("#edit-nama-produk").val(),
                        tipe : $("#edit-jenis-produk").val(),
                        harga : $("#edit-harga-produk").val(),
                        stok : $("#edit-jumlah-produk").val()
                    },
                    success : function (html) {
                        if (html == "true")
                        {
                            window.location = "<?php echo base_url('main/persediaan') ?>";
                        }
                        else
                        {
                            $(".edit-loading").hide();
                            $(".edit-button").show();
                        }
                    },
                    beforeSend : function () {
                        $(".edit-button").hide();
                        $(".edit-loading").show();
                    }
                });
                return false;
            });
        });
        function edit(idt)
        {
            $.getJSON("<?php echo base_url('ajax/get_barang') ?>/"+idt, function (data) {
                $("#edit-id").val(data.id);
                $("#edit-jenis-produk").val(data.tipe);
                $("#edit-nama-produk").val(data.nama);
                $("#edit-harga-produk").val(data.harga);
                $("#edit-jumlah-produk").val(data.stok);
                $("#modal-edit").modal("show");
            });
        }

        function hapus(idt)
        {
            $.ajax({
                url : "<?php echo base_url('ajax/hapus_persediaan'); ?>",
                type : "post",
                data : {
                    id : idt
                },
                success : function(html){
                    if (html == "true")
                    {
                        window.location = "<?php echo base_url('main/pemesanan'); ?>";
                    }
                    else
                    {
                        alert("gagal!");
                    }
                }
            });
        }
    </script>
<?php } ?>
<?php if ($content == "beli"){ ?>
    <script>
        var lensa_kontaks = <?php echo json_encode($lensa_kontaks); ?>;
        $(document).ready(function () {
            cek_harga();
            $("#form-beli").submit(function () {
                $.ajax({
                    url : "<?php echo base_url('ajax/beli'); ?>",
                    type : "post",
                    data : {
                        nama_pelanggan : $("#nama").val(),
                        no_telp : $("#telp").val(),
                        id_produk : lensa_kontaks[$("#lensa_kontak").val()].id,
                        jumlah_barang: $("#jumlah").val(),
                        total_harga : $("#harga").val()
                    },
                    success : function (html) {
                        if (html == "true")
                        {
                            window.location = "<?php echo base_url('main/pembelian'); ?>";
                        }
                        else
                        {
                            $(".beli-loading").hide();
                            $(".beli-button").show();
                        }
                    },
                    beforeSend : function () {
                        $(".beli-button").hide();
                        $(".beli-loading").show();
                    }
                });
                return false;
            });
        });

        function cek_harga()
        {
            var i = $("#lensa_kontak").val();
            var lensa_kontak = lensa_kontaks[i];
            var total_harga = $("#jumlah").val()*lensa_kontak.harga;
            $("#harga").val(total_harga);
            $("#tampil-harga").html(total_harga);
            document.getElementById("jumlah").max = lensa_kontak.stok;
        }
    </script>
<?php } ?>

<?php if ($content == "pesan"){ ?>
    <script>
        var frames = <?php echo json_encode($frames); ?>;
        $(document).ready(function () {
            cek_harga();
            $("#form-pesan").submit(function () {
                $.ajax({
                    url : "<?php echo base_url('ajax/pesan'); ?>",
                    type : "post",
                    data : {
                        nama_pelanggan : $("#nama").val(),
                        no_telp : $("#telp").val(),
                        id_produk : frames[$("#frame").val()].id,
                        lensa_kiri : $("#lensa-kiri").val(),
                        lensa_kanan : $("#lensa-kanan").val(),
                        jumlah_barang: $("#jumlah").val(),
                        total_harga : $("#harga").val()
                    },
                    success : function (html) {
                        if (html == "true")
                        {
                            window.location = "<?php echo base_url('main/pemesanan'); ?>";
                        }
                        else
                        {
                            $(".pesan-loading").hide();
                            $(".pesan-button").show();
                        }
                    },
                    beforeSend : function () {
                        $(".pesan-button").hide();
                        $(".pesan-loading").show();
                    }
                });
                return false;
            });
        });

        function cek_harga()
        {
            var i = $("#frame").val();
            var lensa_kiri = Math.abs($("#lensa-kiri").val());
            var lensa_kanan = Math.abs($("#lensa-kanan").val());
            var harga_lensa = 0;
            if (lensa_kiri > 0 && lensa_kiri <5)
            {
                harga_lensa += 125000;
            }
            else if (lensa_kiri >= 5)
            {
                harga_lensa += 175000;
            }

            if (lensa_kanan > 0 && lensa_kanan <5)
            {
                harga_lensa += 125000;
            }
            else if (lensa_kanan >= 5)
            {
                harga_lensa += 175000;
            }

            var frame = frames[i];
            var total_harga = $("#jumlah").val()*(Number(frame.harga) + harga_lensa);
            $("#harga").val(total_harga);
            $("#tampil-harga").html(total_harga);
            document.getElementById("jumlah").max = frame.stok;
        }
    </script>
<?php } ?>
</body>
</html>

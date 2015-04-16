<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Pemesanan Kacamata</h3>

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <form class="form-horizontal style-form" id="form-pesan">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">No. Telepon / HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tipe kacamata</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="frame" onchange="cek_harga()">
                                    <?php $i=0; foreach ($frames as $frame){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $frame->nama; ?></option>
                                    <?php $i++;} ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Lensa kiri - kanan</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="number" value="0" step="0.25" id="lensa-kiri" onchange="cek_harga()" required/>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" type="number" value="0" step="0.25" id="lensa-kanan" onchange="cek_harga()" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="1" min="1" id="jumlah" onchange="cek_harga()" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Total Harga</label>
                            <div class="col-lg-10">
                                <p class="form-control-static" id="tampil-harga"></p>
                                <input type="hidden" id="harga"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2 col-lg-offset-5">
                                <center>
                                    <button type="submit" class="btn btn-theme pesan-button">Catat Pemesanan</button>
                                    <img src="<?php echo base_url("assets/img/loading.gif"); ?>" class="pesan-loading" alt="" style="display: none"/>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- col-lg-12-->
        </div><!-- /row -->




    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
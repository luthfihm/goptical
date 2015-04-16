<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Pemesanan</h3>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th><i class="fa fa-calendar"></i> Tanggal Pesan</th>
                            <th><i class="fa fa-info"></i> Frame Kacamata</th>
                            <th><i class="fa fa-circle"></i> Lensa</th>
                            <th><i class=" fa fa-user"></i> Pemesan</th>
                            <th><i class=" fa fa-edit"></i> Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data_pemesanan as $pemesanan){ ?>
                        <tr>
                            <td><a href="#"><?php echo $pemesanan->tanggal; ?></a></td>
                            <td><?php echo $this->persediaan->getBarang($pemesanan->id_produk)->nama; ?></td>
                            <td><?php echo $pemesanan->lensa_kiri; ?>, <?php echo $pemesanan->lensa_kanan; ?> </td>
                            <td><?php echo $pemesanan->nama_pelanggan; ?></td>
                            <td>
                                <?php if ($pemesanan->status == 0) { ?>
                                <span class="label label-default label-mini" id="stat<?php echo $pemesanan->id; ?>">order</span>
                                <?php }else if ($pemesanan->status == 1) { ?>
                                <span class="label label-info label-mini" id="stat<?php echo $pemesanan->id; ?>">pengerjaan</span>
                                <?php }else if ($pemesanan->status == 2) { ?>
                                <span class="label label-success label-mini" id="stat<?php echo $pemesanan->id; ?>">selesai</span>
                                <?php }else if ($pemesanan->status == 3) { ?>
                                    <span class="label label-primary label-mini" id="stat<?php echo $pemesanan->id; ?>">diambil</span>
                                <?php }?>
                                <select id="change<?php echo $pemesanan->id; ?>" style="display: none">
                                    <option value="0" <?php if ($pemesanan->status == 0) echo "selected"; ?>>order</option>
                                    <option value="1" <?php if ($pemesanan->status == 1) echo "selected"; ?>>pengerjaan</option>
                                    <option value="2" <?php if ($pemesanan->status == 2) echo "selected"; ?>>selesai</option>
                                    <option value="3" <?php if ($pemesanan->status == 3) echo "selected"; ?>>diambil</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs button<?php echo $pemesanan->id; ?>" onclick="show_edit(<?php echo $pemesanan->id; ?>);"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-xs button<?php echo $pemesanan->id; ?>" onclick="if (confirm('Yakin untuk menghapus?')) hapus(<?php echo $pemesanan->id; ?>);"><i class="fa fa-trash-o"></i></button>
                                <button class="btn btn-info btn-xs save<?php echo $pemesanan->id; ?>" style="display: none" onclick="edit(<?php echo $pemesanan->id; ?>);"><i class="fa fa-save"></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->



    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
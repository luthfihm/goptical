<section id="main-content">
<section class="wrapper">
<h3>
    <i class="fa fa-angle-right"></i> Data Persediaan
    <?php if ($pengguna->role == "persediaan"){ ?>
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i> Tambah</button>
    <?php } ?>
</h3>

<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Lensa Kontak</h4>
                <hr>
                <thead>
                <tr>
                    <th><i class="fa fa-info"></i> ID Produk</th>
                    <th class="fa-fa-star"><i class="fa fa-question-circle"></i> Nama Produk</th>
                    <th><i class="fa fa-bookmark"></i> Harga</th>
                    <th><i class=" fa fa-database"></i> Stok</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($lensa_kontaks as $lensa_kontak){ ?>
                <tr>
                    <td><a href="#"><?php echo $lensa_kontak->id; ?></a></td>
                    <td class="hidden-phone"><?php echo $lensa_kontak->nama; ?></td>
                    <td><?php echo $lensa_kontak->harga; ?></td>
                    <td><?php echo $lensa_kontak->stok; ?></td>
                    <td>
                        <?php if ($pengguna->role == "persediaan"){ ?>
                        <button class="btn btn-primary btn-xs" onclick="edit(<?php echo $lensa_kontak->id; ?>);"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs" onclick="if (confirm('Yakin untuk menghapus?')) hapus(<?php echo $lensa_kontak->id; ?>);"><i class="fa fa-trash-o "></i></button>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->

    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Frame</h4>
                    <hr>
                    <thead>
                    <tr>
                        <th><i class="fa fa-info"></i> ID Produk</th>
                        <th class="fa-fa-star"><i class="fa fa-question-circle"></i> Nama Produk</th>
                        <th><i class="fa fa-bookmark"></i> Harga</th>
                        <th><i class=" fa fa-database"></i> Stok</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($frames as $frame){ ?>
                        <tr>
                            <td><a href="#"><?php echo $frame->id; ?></a></td>
                            <td class="hidden-phone"><?php echo $frame->nama; ?></td>
                            <td><?php echo $frame->harga; ?></td>
                            <td><?php echo $frame->stok; ?></td>
                            <td>
                                <?php if ($pengguna->role == "persediaan"){ ?>
                                    <button class="btn btn-primary btn-xs" onclick="edit(<?php echo $frame->id; ?>);"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs" onclick="if (confirm('Yakin untuk menghapus?')) hapus(<?php echo $frame->id; ?>);"><i class="fa fa-trash-o "></i></button>
                                <?php } ?>
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

<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form-horizontal" id="form-tambah">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Persediaan</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jenis-produk">
                                <option>Lensa Kontak</option>
                                <option>Frame</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama-produk" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga Satuan</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="harga-produk" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="jumlah-produk" value="0" min="0" step="1" data-bind="value:jumlah-produk" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default tambah-button" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary tambah-button">Simpan</button>
                    <img src="<?php echo base_url('assets/img/loading.gif'); ?>" class="tambah-loading" alt="" style="display: none"/>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form-horizontal" id="form-edit">
            <input type="hidden" id="edit-id"/>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Persediaan</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit-jenis-produk">
                                <option>Lensa Kontak</option>
                                <option>Frame</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit-nama-produk" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga Satuan</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit-harga-produk" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="edit-jumlah-produk" value="0" min="0" step="1" data-bind="value:jumlah-produk" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default edit-button" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary edit-button">Simpan</button>
                    <img src="<?php echo base_url('assets/img/loading.gif'); ?>" class="edit-loading" alt="" style="display: none"/>
                </div>
            </div>
        </form>
    </div>
</div>
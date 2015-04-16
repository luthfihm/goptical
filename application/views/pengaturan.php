<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Pengaturan
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i> Tambah Pengguna</button>
        </h3>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> Manajemen Pengguna</h4>
                        <hr>
                        <thead>
                        <tr>
                            <th><i class="fa fa-star"></i> Nama</th>
                            <th><i class="fa fa-user"></i> Username</th>
                            <th><i class="fa fa-info"></i> Password</th>
                            <th><i class="fa fa-bookmark"></i> Role</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($list_pengguna as $pengguna){ ?>
                        <tr>
                            <td><a href="#"><?php echo $pengguna->nama; ?></a></td>
                            <td><?php echo $pengguna->username; ?></td>
                            <td>***************</td>
                            <td><?php echo $pengguna->role; ?></td>
                            <td>
                                <button class="btn btn-primary btn-xs" onclick="edit('<?php echo $pengguna->username; ?>');"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-xs" onclick="if(confirm('Yakin untuk menghapus?')) hapus('<?php echo $pengguna->username; ?>');"><i class="fa fa-trash-o "></i></button>
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Posisi</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="role">
                                <option value="owner">owner</option>
                                <option value="persediaan">persediaan</option>
                                <option value="clerk">clerk</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default tambah-button" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary tambah-button">Tambah</button>
                    <img src="<?php echo base_url('assets/img/loading.gif'); ?>" class="tambah-loading" alt="" style="display: none"/>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form-horizontal" id="form-edit">
            <input type="hidden" id="old-user"/>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Pengguna</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="edit-nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="edit-username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="edit-password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Posisi</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="edit-role">
                                <option value="owner">owner</option>
                                <option value="persediaan">persediaan</option>
                                <option value="clerk">clerk</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default edit-button" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary edit-button">Tambah</button>
                    <img src="<?php echo base_url('assets/img/loading.gif'); ?>" class="edit-loading" alt="" style="display: none"/>
                </div>
            </div>
        </form>
    </div>
</div>
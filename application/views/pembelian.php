<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Pembelian Lensa Kontak</h3>
        <div class="col-md-12 mt">
            <div class="content-panel">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data_pembelian as $pembelian){ ?>
                    <tr>
                        <td><?php echo $pembelian->tanggal_pembelian; ?></td>
                        <td><?php echo $pembelian->id_produk; ?></td>
                        <td><?php echo $this->persediaan->getBarang($pembelian->id_produk)->nama; ?></td>
                        <td><?php echo $pembelian->jumlah_barang; ?></td>
                        <td><?php echo $pembelian->total_harga; ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div><! --/content-panel -->
        </div><!-- /col-md-12 -->
        </div><!-- row -->



    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
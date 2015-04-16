<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-9 main-chart">

                <div class="row mt">
                    <!--CUSTOM CHART START -->
                    <div class="border-head">
                        <h3>GRAFIK JUMLAH TRANSAKSI</h3>
                    </div>
                    <div class="custom-bar-chart">
                        <ul class="y-axis">
                            <li><span>10</span></li>
                            <li><span>8</span></li>
                            <li><span>6</span></li>
                            <li><span>4</span></li>
                            <li><span>2</span></li>
                            <li><span>0</span></li>
                        </ul>
                        <div class="bar">
                            <div class="title">JAN</div>
                            <div class="value tooltips" data-original-title="<?php echo $kacamata[1]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $kacamata[1]*100/10; ?>%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">FEB</div>
                            <div class="value tooltips" data-original-title="<?php echo $kacamata[2]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $kacamata[2]*100/10; ?>%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">MAR</div>
                            <div class="value tooltips" data-original-title="<?php echo $kacamata[3]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $kacamata[3]*100/10; ?>%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">APR</div>
                            <div class="value tooltips" data-original-title="<?php echo $kacamata[4]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $kacamata[4]*100/10; ?>%</div>
                        </div>
                        <div class="bar">
                            <div class="title">MAY</div>
                            <div class="value tooltips" data-original-title="<?php echo $kacamata[5]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $kacamata[5]*100/10; ?>%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">JUN</div>
                            <div class="value tooltips" data-original-title="<?php echo $kacamata[6]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $kacamata[6]*100/10; ?>%</div>
                        </div>
                        <div class="bar">
                            <div class="title">JUL</div>
                            <div class="value tooltips" data-original-title="<?php echo $kacamata[7]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $kacamata[7]*100/10; ?>%</div>
                        </div>
                    </div>
                    <!--custom chart end-->

                </div><!-- /row -->

            </div><!-- /col-lg-9 END SECTION MIDDLE -->


            <!-- **********************************************************************************************************************************************************
            RIGHT SIDEBAR CONTENT
            *********************************************************************************************************************************************************** -->

            <div class="col-lg-3 ds">
                <!--COMPLETED ACTIONS DONUTS CHART-->
                <h3>AKTIVITAS TERBARU</h3>

                <?php foreach ($logs as $log){ ?>
                <div class="desc">
                    <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                    </div>
                    <div class="details">
                        <p><muted><?php echo $log->time; ?></muted><br/>
                            <a href="#"><?php echo $this->pengguna->getPengguna($log->pengguna)->nama; ?></a> <?php echo $log->log; ?>.<br/>
                        </p>
                    </div>
                </div>
                <?php } ?>




            </div><!-- /col-lg-3 -->
        </div><! --/row -->
    </section>
</section>

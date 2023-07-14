<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?=base_url() ?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div><?= tgl_indo(date('Y-m-d')) ?>
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                </div>
            </div>
        </div>
        <h1 class="page-title"> Dashboard</h1>
        <?php if($data_aktivitas->status_permohonan == '2'){ ?>
        <div class="alert alert-danger" role="alert"><?=$data_aktivitas->deskripsi_permohonan?>! <a href="<?=base_url().'bukti_pendukung/upload'?>">Upload</a></div>
    <?php } ?>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="<?=base_url()?>profil/biodata" style="border-radius:3px!important;">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <!-- <span data-counter="counterup" data-value="<?= $jumlah_sertifikat ?>">0</span> -->
                        </div>
                        <div class="desc"> Profil </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="<?= base_url() . 'resume/data' ?>" style="border-radius:3px!important;">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <!-- <span data-counter="counterup" data-value="<?= $jumlah_repositori ?>">0</span> -->
                          </div>
                            <div class="desc">Resume </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="<?= base_url() . 'portfolio/index' ?>" style="border-radius:3px!important;">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <!-- <span data-counter="counterup" data-value="<?= $jumlah_uji_kompetensi ?>">Services</span> -->
                            </div>
                            <div class="desc"> Portfolio </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 purple" href="<?=base_url()?>contact" style="border-radius:3px!important;">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <!-- <span data-counter="counterup" data-value="0">0</span> -->
                            </div>
                                <div class="desc">Contact  </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- END DASHBOARD STATS 1-->


            </div>

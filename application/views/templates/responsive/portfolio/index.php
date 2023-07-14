
<style>
    .btn-tb1{
        float: right;
        margin-left:5px;
        margin-bottom:5px;
        width:130px;
        border-radius:4px!important;
    }
    .btn-tb2{
        float: right;
        width:130px;
        border-radius:4px!important;
    }
</style>

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->

        <!-- END THEME PANEL -->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?= base_url('home'); ?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Portfolio</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Data Portfolio</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div><?= tgl_indo(date('Y-m-d')) ?>
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                </div>
            </div>
        </div>

        <?php
            // $jenis_portofolio = array('1' => 'Persyaratan Dasar', '2' => 'Ijazah', '3' => 'Surat Keterangan Bekerja', '4' => 'Sertifikasi Pelatihan Kompetensi', '5' => 'Portofolio (Cover Buku)', '6' => 'Lain-lain');
        ?>

<div class="row" style="margin-top: 10px;">
            <div class="col-md-12">

                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light">
                    <div class="row portlet-title">
                        <div class="caption font-dark col-md-6">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase"> Data Portfolio</span>
                        </div>
                        <div class="col-md-6">
                            <a href="<?= base_url() . 'portfolio/add_category' ?>" style="" id="sample_editable_1_new" class="btn sbold blue btn-tb1"> Add Category
                                <i class="icon-plus"></i>
                            </a>
                            <a href="<?= base_url() . 'portfolio/upload' ?>" style="" id="sample_editable_1_new" class="btn sbold green btn-tb2"> Add Portfolio
                                <i class="icon-plus"></i>
                            </a>
                        </div>
                    </div>

                    <?php
                    if ($this->session->flashdata('result') != '') {
                        ?>
                        <div class="alert alert-<?= $this->session->flashdata('mode_alert') ?>" role="alert"><?php echo $this->session->flashdata('result'); ?></div>
                        <?php
                    }
                    ?>

                    <?php
                        foreach ($kategori as $key => $kat) {
                    ?>

                    <div class="tera_byte">
                        <div class="row">
                            <div class="mt-element-ribbon bg-grey-steel">
                                <div class="ribbon ribbon-round ribbon-color-primary uppercase"><?=$kat->name?></div>
                                <div class="ribbon-content">
                                    <div class="clearfix" style="margin-bottom: 5px;">

                                    <?php
                                        
                                        // if (!empty($jns_portofolio['1'])) {
                                    ?>

                                        <table class="table table-bordered table-hover" style="background-color: #fff;">
                                            <thead>
                                                <tr class="warning">
                                                    <th width="3%">No</th>
                                                    <th width="50%">Nama Portfolio</th>
                                                    <th width="10%">File Size</th>
                                                    <th width="10%" style="text-align: center;">-</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    // foreach ($jns_portofolio['1'] as $jportofolio) {
                                                    foreach ($portfolio as $keyp => $port) {
                                                        if ($port->id_categories == $kat->id){
                                                ?>
                                                    <tr>
                                                        <td><?=$keyp+1?></td>
                                                        <td><?=$port->nama_dokumen?></td>
                                                        <td><?=$port->file_size?></td>
                                                        <td align="center">

                                                        <?php
                                                            $ext_jenis = $port->extension_jenis;

                                                            if ($ext_jenis == 'image') {
                                                        ?>

                                                        <a href="<?= base_url() . 'repo/portfolio/' . $port->nama_file ?>" target="_blank"> <i class="icon-cloud-download font-dark"></i></a>

                                                        <?php
                                                            } elseif ($ext_jenis == 'video') {
                                                        ?>

                                                        <a href="<?=base_url()?>embed-video/<?=$port->nama_file?>/1" target="_blank"> <i class="icon-cloud-download font-dark"></i></a>

                                                        <?php }elseif ($ext_jenis == 'link') { ?>

                                                        <a href="<?=$port->nama_file?>?autoplay=1" target="_blank"> <i class="icon-cloud-download font-dark"></i></a>

                                                        <?php } ?>

                                                            &nbsp
                                                            <a alt="Hapus Portfolio" href="<?= base_url() . 'portfolio/hapus/' . $port->id ?>"> <i class="icon-trash font-dark"></i></a>
                                                            <!-- &nbsp
                                                            <a alt="Edit Portfolio" href="<?= base_url() . 'portfolio/edit/' . $port->id ?>"> <i class="icon-pencil font-dark"></i></a> -->
                                                        </td>
                                                    </tr>
                                                <?php
                                                    }}
                                                ?>
                                            </tbody>
                                        </table></div>
                                    <?php
                                        // }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>

                </div>
                <!-- END EXAMPLE TABLE PORTLET-->

            </div>
        </div>

    </div>
</div>

</div></div></div>

        <!-- tubagus aom -->
        <script>  </script>

        <script src="<?= base_url() ?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?= base_url() ?>assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>

<link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

<style media="screen">
  .text-left {
    text-align: left!important;
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
                    <a href="<?= base_url() ?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Profil</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Biodata</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div><?= tgl_indo(date('Y-m-d')) ?>
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                </div>
            </div>
        </div>


        <div class="row" style="margin-top: 10px;">
            <?php
            if ($this->session->flashdata('result') != '') {
                ?>
                <div class="alert alert-<?= $this->session->flashdata('mode_alert') ?>" role="alert"><?php echo $this->session->flashdata('result'); ?></div>
                <?php
            }
            ?>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <style type="text/css">
                    .required_span{
                        color: red;
                        font-weight: bold;
                    }
                </style>
                <form action="<?= base_url() . 'profil/edit_biodata' ?>" method="POST" class="form-horizontal form-bordered form-row-stripped">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Nama Lengkap <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input required type="text" placeholder="Nama Lengkap" class="form-control" name="nama" value="<?= $biodata->nama_lengkap ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Pekerjaan 1 <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input required type="text" placeholder="Pekerjaan 1" class="form-control" name="pekerjaan_1" value="<?= $biodata->pekerjaan_1 ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Pekerjaan 2 </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Pekerjaan 2" class="form-control" name="pekerjaan_2" value="<?= $biodata->pekerjaan_2 ?>"/>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class="control-label col-md-3 text-left">Pekerjaan 3 </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Pekerjaan 3" class="form-control" name="pekerjaan_3" value="<?= $biodata->pekerjaan_3 ?>"/>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Tempat Lahir <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input required name="tempat_lahir" value="<?= $biodata->tempat_lahir ?>" type="text" placeholder="Tempat Lahir" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Tanggal Lahir <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input required name="tgl_lahir" value="<?=$biodata->tgl_lahir ?>" class="form-control form-control-inline input-medium date-picker" size="16" type="date" />

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Email <span class="required_span">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input name="email" value="<?= $biodata->email ?>" required type="text" class="form-control" placeholder="Email Address"> </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Pendidikan Terakhir <span class="required_span">*</span></label>
                            <div class="col-md-9">
                           <?=form_dropdown('pendidikan_terakhir',$pilihan_pendidikan,$biodata->pendidikan_terakhir,'class="form-control"')?>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Gelar <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input name="gelar" value="<?= $biodata->gelar ?>" required type="text" class="form-control" placeholder="Gelar">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Kampus / Universitas <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input name="kampus" value="<?= $biodata->kampus ?>" required type="text" class="form-control" placeholder="Kampus / Universitas">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Orang Tua <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input name="ortu" value="<?= $biodata->ortu ?>" required type="text" class="form-control" placeholder="Orang Tua">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Pasangan <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input name="pasangan" value="<?= $biodata->pasangan ?>" required type="text" class="form-control" placeholder="Pasangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Jumlah Anak <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input name="jumlah_anak" value="<?= $biodata->jumlah_anak ?>" required type="text" class="form-control" placeholder="Jumlah Anak">
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">
                                        <i class="fa fa-check"></i> Update Profil</button>

                                </div>
                            </div>
                        </div>
                </form>
                <!-- END FORM-->
            </div>
            </div></div></div>

            <script src="<?= base_url() ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
            <script src="<?= base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="<?= base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="<?= base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="<?= base_url() ?>assets/global/plugins/jquery-repeater/jquery.repeater.js" type="text/javascript"></script>
            <script src="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>

            <script src="<?= base_url() ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

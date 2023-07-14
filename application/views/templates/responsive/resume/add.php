
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
                    <span>Resume</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Add</span>
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
                <form enctype="multipart/form-data" action="<?= base_url() . 'resume/upload' ?>" method="POST" class="form-horizontal form-bordered form-row-stripped">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Pekerjaan</label>
                            <div class="col-md-9">
                                <?php echo form_dropdown('pekerjaan', array('1' => 'Profesional Businessman' , '2' => 'Public Speaker'), '', 'class="form-control"'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3"> Nama Resume</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <input name="nama"  required type="text" class="form-control" placeholder="Nama Resume">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Tahun Awal</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input name="thn_awal" required type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Tahun Akhir</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input name="thn_akhir" required type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3"> Tempat</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <input name="tempat" required type="text" class="form-control" placeholder="Nama Tempat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Deskripsi Resume</label>
                            <div class="col-md-9">
                                <textarea name="description" rows="4" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">
                                        <i class="fa fa-check"></i> Tambah Resume</button>

                                </div>
                            </div>
                        </div>
                </form>
                <!-- END FORM-->
            </div>
            </div></div></div>

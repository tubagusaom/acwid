
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
                    <span>Edit</span>
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
                <form enctype="multipart/form-data" action="<?= base_url() . 'resume/update' ?>" method="POST" class="form-horizontal form-bordered form-row-stripped">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Pekerjaan</label>
                            <div class="col-md-9">
                                <!-- <?php echo form_dropdown('pekerjaan', array('1' => 'Profesional Businessman' , '2' => 'Public Speaker'), '', 'class="form-control"'); ?> -->
                                <select class="form-control" name="pekerjaan">
                                  <option value="1" <?=$resume->id_pekerjaan == 1 ? 'selected' : ''?>> Profesional Businessman </option>
                                  <option value="2"<?=$resume->id_pekerjaan == 2 ? 'selected' : ''?>>Public Speaker</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3"> Nama Resume</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <input type="hidden" name="acid" value="<?=$resume->id?>">
                                <input name="nama" value="<?=$resume->nama?>" required type="text" class="form-control" placeholder="Nama Resume">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Tahun Awal</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input name="thn_awal" value="<?=$resume->thn_awal?>" required type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Tahun Akhir</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input name="thn_akhir" value="<?=$resume->thn_akhir?>" required type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3"> Tempat</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <input name="tempat" value="<?=$resume->tempat?>" required type="text" class="form-control" placeholder="Nama Tempat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Deskripsi Resume</label>
                            <div class="col-md-9">
                                <textarea name="description" rows="4" class="form-control"><?=$resume->description?></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-3">
                                  <a href="<?=base_url()?>resume/data"  class="btn blue">
                                    <i class="fa fa-check"></i> Kembali
                                  </a>
                                </div>
                                <div class="col-md-offset-3 col-md-3">
                                    <button type="submit" class="btn yellow">
                                    <i class="fa fa-check"></i> Update Resume</button>
                                </div>
                            </div>
                        </div>
                </form>
                <!-- END FORM-->
            </div>
            </div></div></div>

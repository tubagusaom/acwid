
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
                    <span>Portfolio</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Upload</span>
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
        
            <?php if ($this->session->flashdata('result') != '') { ?>

                <div class="alert alert-<?= $this->session->flashdata('mode_alert') ?>" role="alert"><?php echo $this->session->flashdata('result'); ?></div>

            <?php } ?>

            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form enctype="multipart/form-data" action="<?= base_url() . 'portfolio/add' ?>" method="POST" class="form-horizontal form-bordered form-row-stripped">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Kategori</label>
                            <div class="col-md-9">

                                <select name="id_categories" class="form-control">
                                    <?php
                                        foreach ($kategori as $key => $kat) {
                                    ?>
                                    <option value="<?=$kat->id?>"><?=$kat->name?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3"> Nama Portfolio</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-folder"></i>
                                </span>
                                <input name="nama_dokumen"  required type="text" class="form-control" placeholder="Nama Dokumen"> </div>
                        </div>

                        <div class="form-group">
                            

                            <label class="control-label col-md-3">
                                File <br>
                                <b style="font-size:11px; color:red;">file size : 296px X 222px</b>
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <input accept="image/*,video/*" name="nama_file" required type="file" class="form-control" placeholder="Browse File">
                            </div>
                            <!-- <div class="input-group left"><font>xxx</font></div> -->
                            
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Deskripsi</label>
                            <div class="col-md-9">
                                <textarea name="description" rows="4" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">
                                        <i class="fa fa-check"></i> Upload Dokumen</button>

                                </div>
                            </div>
                        </div>
                </form>
                <!-- END FORM-->
            </div>
            </div></div></div>

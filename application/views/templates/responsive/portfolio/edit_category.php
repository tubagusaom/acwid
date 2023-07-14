
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
                    <span>Edit Category</span>
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
                <form enctype="multipart/form-data" action="<?= base_url() . 'portfolio/save_edit_category' ?>" method="POST" class="form-horizontal form-bordered form-row-stripped">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3"> Category</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <input type="hidden" name="acid" value="<?=$kategori->id?>">
                                <input name="name" value="<?=$kategori->name?>"  required type="text" class="form-control" placeholder="Nama Category">
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">
                                        <i class="fa fa-check"></i> Edit Category</button>
                                </div>
                            </div>
                        </div>
                </form>
                <!-- END FORM-->
            </div>

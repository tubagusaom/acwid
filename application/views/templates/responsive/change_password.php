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
                    <span>Change Password</span>
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
          if ($this->session->flashdata('result') != '') {
              ?>
              <div class="alert alert-<?= $this->session->flashdata('mode_alert') ?>" role="alert"><?php echo $this->session->flashdata('result'); ?></div>
              <?php
          }
          ?>

        <div class="row" style="margin-top: 10px;">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <style type="text/css">
                    .required_span{
                        color: red;
                        font-weight: bold;
                    }
                </style>
                <form action="<?= base_url() . 'users/ubah_password' ?>" method="POST" class="form-horizontal form-bordered form-row-stripped">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">Old Password <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input required name="old_pwd" type="text" placeholder="Old Password" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 text-left">New Password <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input required name="new_pwd" type="text" placeholder="New Password" class="form-control" />
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class="control-label col-md-3 text-left">Confirm New Password <span class="required_span">*</span></label>
                            <div class="col-md-9">
                                <input required name="confpass" value="<?= $contact->email ?>" type="text" placeholder="Confirm New Password" class="form-control"/>
                            </div>
                        </div> -->

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">
                                        <i class="fa fa-check"></i> change Password</button>
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

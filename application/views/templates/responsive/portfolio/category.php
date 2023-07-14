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
                    <span>Portfolio Category</span>
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
        $jenis_portofolio = array('1' => 'Persyaratan Dasar', '2' => 'Ijazah', '3' => 'Surat Keterangan Bekerja', '4' => 'Sertifikasi Pelatihan Kompetensi', '5' => 'Portofolio (Cover Buku)', '6' => 'Lain-lain');
        ?>

        <div class="row" style="margin-top: 10px;">

          <?php
          if ($this->session->flashdata('result') != '') {
              ?>
              <div class="alert alert-<?= $this->session->flashdata('mode_alert') ?>" role="alert"><?php echo $this->session->flashdata('result'); ?></div>
              <?php
          }
          ?>

            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light">
                    <div class="row portlet-title">
                        <div class="caption font-dark col-md-6">
                            <i class="icon-docs font-dark"></i>
                            <span class="caption-subject bold uppercase"> Data Portfolio Category</span>
                        </div>
                        <div class="col-md-6">
                            <a href="<?= base_url() . 'portfolio/add_category' ?>" style="float: right;" id="sample_editable_1_new" class="btn sbold green"> Add Category
                                <i class="icon-plus"></i>
                            </a>
                        </div>
                    </div>

                    <!-- <div class="row"> -->

                        <div class="row">
                            <div class="mt-element-ribbon bg-grey-steel">
                                <!-- <div class="ribbon ribbon-round ribbon-color-primary uppercase">Profesional Businessman</div> -->
                                <div class="ribbon-content">
                                    <div class="clearfix" style="margin-bottom: 5px;">

                                        <table class="table table-bordered table-hover" style="background-color: #fff;">
                                            <thead>
                                                <tr class="warning">
                                                    <th width="3%" style="text-align: center;">No</th>
                                                    <th width="50%">Category</th>
                                                    <th width="3%" style="text-align: center;">-</th>
                                                    <th width="3%" style="text-align: center;">-</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                  foreach ($kategori as $key => $kat) {
                                                ?>
                                                    <tr>
                                                        <td style="text-align: center;"><?= $key+1; ?></td>
                                                        <td><?= $kat->name; ?></td>
                                                        <td align="center">
                                                            <a alt="Hapus Resume" href="<?= base_url() . 'portfolio/delete_category/' . $kat->id ?>" title="Hapus Category"> <i class="icon-trash font-dark"></i></a>
                                                        </td>
                                                        <td align="center">
                                                            <a alt="Edit Resume" href="<?= base_url() . 'portfolio/edit_category/' . $kat->id ?>" title="Edit Category"> <i class="icon-pencil font-dark"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                      </div>
                                </div>
                            </div>
                        </div>

                    <!-- </div> -->
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
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

<link href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

<div class="page-content-wrapper">
    <div class="page-content">

        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?= base_url() ?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Kontak</span>
                    <i class="fa fa-circle"></i>
                </li>
            </ul>
            <div class="page-toolbar">
                <div><?= tgl_indo(date('Y-m-d')) ?>
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                </div>
            </div>
        </div>

        

    <section id="contact">

    <?php
        $link_maps = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31728.53964361558!2d106.83184330852414!3d-6.254843699999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3b583b1bf09%3A0xad42af40937eeec!2sJl.%20Potlot%20III%20No.14%2C%20RT.1%2FRW.3%2C%20Duren%20Tiga%2C%20Kec.%20Pancoran%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012760!5e0!3m2!1sid!2sid!4v1680594085646!5m2!1sid!2sid";
    ?>

        <div class="contact-map">
            <div class="col-md-12">
                <iframe src="<?=$link_maps?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <div>

            <div class="col-md-12">
                <!-- <h3 class="text-center text-uppercase">contact us</h3> -->
                <h2 class="text-center text-uppercasemb-sm mt-sm"><strong>Contact</strong> Us</h2>
                <p class="text-center w-75 m-auto">Contact us IT support</p>
            </div>

            <div class="col-md-12">
                <div class="col-sm-12 col-md-6 col-lg-3 my-5" style="margin-top: 50px;">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                            <h4 class="text-uppercase mb-5">call us</h4>
                            <p>
                                <a href="https://wa.me/+6283897776778?text=Hai ICI , i'm <?=base_url()?> Help me!!! " target="_blank">
                                    085737744383
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 my-5" style="margin-top: 50px;">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                            <h4 class="text-uppercase mb-5">address</h4>
                            <address>
                                <a href="https://goo.gl/maps/PpDeWw4CYgjtXT5p6" target="_blank"><?= $aplikasi->alamat ?></a>
                            </address>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 my-5" style="margin-top: 50px;">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa fa-envelope fa-5x mb-3" aria-hidden="true"></i>
                            <h4 class="text-uppercase mb-5">email</h4>
                            <address>
                                <a href="mailto:mail@example.com">&nbsp;<?= $aplikasi->alamat_email ?></a>
                            </address>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 my-5" style="margin-top: 50px;">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                            <h4 class="text-uppercase mb-5">url web</h4>
                            <p>
                                <a href="https://it-konsultan.com" target="_blank">
                                    it-konsultan.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
        
    </section>
        
    </div>
</div>


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

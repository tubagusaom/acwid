
<html lang="en">
    <head>

        <title>Achmad Widjaja</title>

        <meta name="description" content="<?= $aplikasi->nama_unit ?>" />
        <meta name="keywords" content="Biografi, Profil, achmad widjaja, acwid, achmad, widjaja" />

        <!-- Favicon -->
    		<link rel="shortcut icon" href="<?=base_url()?>assets/_tera_byte/img/favicon.png" type="image/x-icon" />
    		<link rel="apple-touch-icon" href="<?=base_url()?>assets/_tera_byte/img/apple-touch-icon.png">

        <!-- Mobile Metas -->
    		<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
        <!-- <meta name="viewport" content="width=device-width" /> -->
    		<meta content="width=device-width, initial-scale=1" name="viewport" />


        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index, follow" />
        <meta http-equiv="Copyright" content="tera_byte" />
        <meta name="author" content="tera_byte" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="language" content="Indonesia" />
        <meta name="revisit-after" content="7" />
        <meta name="webcrawlers" content="all" />
        <meta name="rating" content="general" />
        <meta name="spiders" content="all" />

        <!-- Social Media Meta -->
        <meta property="place:location:latitude" content="13.062616" /> <!-- Silahkan disesuaikan -->
        <meta property="place:location:longitude" content="80.229508" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:street_address" content="Jl. Intelektual" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:locality" content="DKI JAKARTA" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:postal_code" content="13720" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:country_name" content="Indonesia" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:email" content="info@it-konsultan.com" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:phone_number" content="085737744383" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:website" content="https://it.konsultan.com" />

        <meta property="og:type" content="article" /> <!-- Card type bisa di ganti article, website, blog dan profile -->
        <meta property="profile:first_name" content="Tera" /> <!-- Silahkan disesuaikan -->
        <meta property="profile:last_name" content="Byte" /> <!-- Silahkan disesuaikan -->
        <meta property="profile:username" content="Facebook_Username" /> <!-- Silahkan disesuaikan -->
        <meta property="og:title" content="<?= $aplikasi->nama_unit .' | '. $aplikasi->singkatan_unit ?>" />
        <meta property="og:description" content="<?= $aplikasi->nama_unit ?>" />
        <meta property="og:image" content="<?= base_url('favicon.ico') ?>" />
        <meta property="og:url" content="https://it.konsultan.com/" />
        <meta property="og:site_name" content="<?= $aplikasi->singkatan_unit ?>" />
        <meta property="fb:admins" content="Facebook_ID" /> <!-- Silahkan disesuaikan -->

        <meta name="twitter:card" content="summary" />  <!-- Card type jangan di ganti -->
        <meta name="twitter:site" content="<?= $aplikasi->singkatan_unit ?>" />
        <meta name="twitter:title" content="<?= $aplikasi->nama_unit .' | '. $aplikasi->singkatan_unit ?>" />
        <meta name="twitter:description" content="<?= $aplikasi->nama_unit ?>" />
        <meta name="twitter:creator" content="Twitter_Username" /> <!-- Silahkan disesuaikan -->
        <meta name="twitter:image:src" content="<?= base_url('favicon.ico') ?>" />
        <meta name="twitter:domain" content="https://it.konsultan.com/" />

        <meta itemprop="name" content="<?= $aplikasi->nama_unit .' | '. $aplikasi->singkatan_unit ?>" />
        <meta itemprop="description" content="<?= $aplikasi->nama_unit ?>" />
        <meta itemprop="image" content="<?= base_url('favicon.ico') ?>" />

        <script src="<?php echo base_url() ?>assets/js/jquery.v2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstraps/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstraps/bootbox.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/public/bootstrap-datepicker.js" type="text/javascript"></script>

        <script type="text/javascript">
            var base_url = "<?php echo base_url() ?>";
        </script>

        <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstraps/font-awesome.min.css" type="text/css"/>
        <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datepicker.css" type="text/css"/> -->


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/aos/aos.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

        <style media="screen">
        #hero {
          width: 100%;
          height: 100vh;
          background: url("<?php echo base_url() ?>assets/_tera_byte/img/aw-bg.png") top center;
          background-size: cover;
        }
        </style>

    </head>

    

    <body>

    <!-- <script>
  Swal.fire({
    type: 'error',
    title: 'Opps!',
    text: 'server error!'
  });
</script> -->

<?php
  // 
?>

  <?php
    // if ($this->session->flashdata('result') != '') {
      // echo '<script language="javascript">alert("success");</script>';
    // }
  ?>

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content rounded-0 border-0 p-4">
                    <div class="modal-header border-0">
                        <h3>Masuk</h3>
                        <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" placeholder="Username" class="form-control mb-3 login-control" aria-describedby="basic-addon1" name="inputUsername" id="inputUsername">
                            </div>
                            <div class="col-12">
                                <input type="password" placeholder="Password" class="form-control mb-3 login-control" aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if (event.keyCode == 13) login_click();">
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary " id="btn-login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->

        <!-- ======= Mobile nav toggle button ======= -->
        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

        <!-- ======= Header ======= -->
        <header id="header">
          <div class="d-flex flex-column">
            <?= $this->load->view('templates/bootstraps/menu'); ?>
          </div>
        </header><!-- End Header -->

        <script>
          function login_click() {
            $('#btn-login').click();
          }
        </script>

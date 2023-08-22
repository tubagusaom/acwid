<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achmad Widjaja - CSA</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/_tera_byte/img/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/_tera_byte/img/apple-touch-icon.png">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,300" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/_tera_byte/card_name/style.css" rel="stylesheet">
</head>


<body>
        <div class="card">
            <div class="photo"></div>
            <div class="banner"></div>
            <ul>
                <li><b>Achmad Widjaja</b></li>
                <li>President Commisioner</li>

            </ul>
            <button class="contact" id="main-button">click to get in touch</button>
            <div class="social-media-banner">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          <form class="email-form">
                <input id="name" type="text" placeholder="name">
                <input id="email" type="text" placeholder="email">
                <textarea id="comment" type="text" placeholder="comment"></textarea>
                <button class="contact">send</button>
          </form>
          </div>
    </body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/_tera_byte/card_name/script.js"></script>
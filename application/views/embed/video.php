<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstraps/font-awesome.min.css" type="text/css"/>

<style>
    #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

/*Tambahkan beberapa konten di bagian bawah video / halaman */
.content {
  position: fixed;
  /* background: rgba(0, 0, 0, 0.5); */
  color: #f1f1f1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Style pada button  yang digunakan untuk jeda / memutar video */
#myBtn {
  cursor: pointer;

    background-color: #0077a2;
    border: medium none;
    border-radius: 10px;
    color: #fff;
    display: block;
    font-size: 18px;
    left: 0;
    margin: 0 auto;
    padding: 16px;
    right: 0;
    top: 50%;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>

<!-- Videonya -->
<video
    controlsList="nodownload" oncontextmenu="return false;"
    controls
    id="myVideo">

  <source src="<?php echo base_url() ?>repo/portfolio/<?=$data?>" type="video/mp4">
  <source src="<?php echo base_url() ?>repo/portfolio/<?=$data?>" type="video/mov">
</video>

<!-- Opsional: beberapa teks overlay untuk mendeskripsikan video -->
<!-- <div class="content">
  <button id="myBtn" onclick="myFunction()"><i class="fa fa-play"></i></button>
</div> -->

<script>
// Dapatkan videonya
var video = document.getElementById("myVideo");

// Dapatkan buttonnya
var btn = document.getElementById("myBtn");

// Jeda dan putar video, dan ubah teks tombol
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "<i class='fa fa-pause'></i>";
  } else {
    video.pause();
    btn.innerHTML = "<i class='fa fa-play'></i>";
  }
}
</script>
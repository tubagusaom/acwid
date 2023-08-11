
<style>
	#myOverlay{
        position:fixed;
        top:0px;
        bottom:0px;
        width:100%;
        overflow-y:auto;
    }
    #myOverlay{background:black;opacity:.7;z-index:9995;}
    #loadingGIF{position:fixed;top:40%;left:45%;z-index:9996;}
	#loadingGIF img{width: 100px;}

	/* @media screen and (min-width: 80rem) {

	} */
</style>

<div id="myOverlay"></div>
<!-- <div id="loadingGIF"><img src="<?=base_url()?>assets/_tera_byte/images/book-gif.gif" /></div> -->
<div id="loadingGIF">
	<img src="<?=base_url()?>assets/gif/spin-200.gif" />
</div>

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
                                <input name="nama_portfolio"  required type="text" class="form-control" placeholder="Nama Dokumen"> </div>
                        </div>

                        <div class="form-group">
                            

                            <label class="control-label col-md-3">
                                File Portfolio<br>
                                <!-- <b style="font-size:11px; color:red;">file size : 296px X 222px</b> -->
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <input type="file" id="portfolio" name="nama_file" accept="image/*,video/*" required class="form-control" placeholder="Browse File">
                                <div id="dportfolio"></div>
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


            <script>
                var baseUrl = "<?= base_url(); ?>";
                $('#popOverlay').hide();

                $('#myOverlay').hide();
                $('#loadingGIF').hide();

                $("#portfolio").on('change', function (e) {
                e.preventDefault();
                var urlTarget = baseUrl + "portfolio/upload_ajax/portfolio_acwid_";
                var f = $(this);
                var listFiles = f[0].files;
                var formData = new FormData();
                formData.append('file', listFiles[0]);
                $('#myOverlay').show();
                $('#loadingGIF').show();
                $.ajax({
                    url: urlTarget,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                    data = JSON.parse(data);
                    if(data.error){
                        $('#myOverlay').hide();
                        $('#loadingGIF').hide();
                        $("#portfolio").val("");
                        alert(data.error);
                    }else{

                        var idUpload = data.upload_data.file_name;
                        var acuanId = idUpload.replace(".", "-");

                        var txt0 = "<div id='box-"+acuanId+"' class='col col-md-3 col-sm-4 col-xs-6 form-upload-tb'>";
                        var txt1 = "<input id='nd-' type='hidden' name='nama_dokumen[]' class='nama_dokumen' value='portfolio' />";
                        var txt_x = "<input type='hidden' name='file_ext[]' class='form-control input-sm uploadData' value='" + data.upload_data.file_ext + "' />";
                        var txt_xx = "<input type='hidden' name='file_size[]' class='form-control input-sm uploadData' value='" + data.upload_data.file_size + "' />";
                        var txt2 = "<input type='hidden' name='file_data[]' id='foto' class='form-control input-sm uploadData' value='" + data.upload_data.file_name + "' />";
                        var txt3 = "<a id='al-' target='_blank' class='form-link-tb uploadData' href='" + baseUrl + 'repo/portfolio/' + data.upload_data.file_name + "'>Portfolio </a>";
                        // var txt4 = "<img id='img-"+acuanId+"' dataimg='"+data.upload_data.file_name+"' inisialjenis='Pasfoto' onclick='popImage(this)' class='form-images-tb' src='" + baseUrl + 'repo/asesi/' + data.upload_data.file_name + "' alt='tera_byte'>";
                        var txt5 = "<span id='span-' style='cursor:pointer; color:red;' class='form-link-delete' title='Delete Portfolio' datatb='"+data.upload_data.file_name+"' datajenis='pasfoto' onclick='deleteImage(this)'><i class='fa fa-times'></i></span></div>";

                        $("#dportfolio").append(txt0 + txt1 + txt_x + txt_xx + txt2 + txt3 + txt5);
                        $('#myOverlay').hide();
                        $('#loadingGIF').hide();
                    }
                    },
                    error: function (request, status, error) {
                        alert(request.responseText);
                    }
                });
                return false;
            });

            function deleteImage(d) {
            var getJenis  = d.getAttribute("datajenis");
            var getImg  = d.getAttribute("datatb");
            var getIdinput  = "#" + getJenis;
            var getId  = "#box-" + getImg;
            var resId = getId.replace(".", "-");

            var urlTarget = baseUrl + "portfolio/delete_ajax/" + getImg;
            $('#myOverlay').show();
            $('#loadingGIF').show();

            $.ajax({
                type: 'POST',
                url: urlTarget,
                // data: data,
                success: function() {
                $(getIdinput).val('');
                $(resId).remove();
                $('#myOverlay').hide();
                $('#loadingGIF').hide();
                }
            });
            return false;

            // alert(resId);

            };
            </script>
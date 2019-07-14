                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Upload New Table</h3>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-bottom: 21px;">
                            <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>admin/upload_file">
                                <div class="card shadow" style="max-width: 435px;">
                                    <div class="card-header text-center">
                                        <h1><i class="fas fa-file-excel text-success"></i></h1>
                                        <h2>Silahkan upload file</h2>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="input-group-append" style="">
                                            <div class="custom-file">
                                                <input accept=".xls" required="required" name="uploadfile" type="file" id="inputGroupFile02" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label text-left" id="labeldata" for="inputGroupFile02"></label>
                                            </div>
                                        </div>
                                        <h6 class="mt-2 ml-2 text-success text-left">* File yang bisa diupload hanya .xls</h6>
                                    </div>
                                    <div class="card-footer text-center p-0">
                                        <input class="p-2 btn-success btn-block rounded-bottom" id="upload" type="submit" value="Upload" style=""/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <a class="btn btn-success btn-icon-split" role="button"></a>
                <script type="text/javascript">
                    var file = document.getElementById("inputGroupFile02");
                    file.onchange = ubahNama;

                    function ubahNama() {
                        fileName = file.files[0].name;
                        $(this).next('.custom-file-label').html(fileName);
                    }
                </script>
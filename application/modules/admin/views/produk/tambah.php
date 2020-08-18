 <section id="main-content">
 <section class="wrapper">
              <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Input produk</h4>
                          <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/produk/simpan_tambah' ?>">
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess" required>Nama produk</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputSuccess" name="nama" required>
                                  </div>
                              </div>
                              <div class="form-group has-warning">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">project</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputWarning" name="project" required>
                                  </div>
                              </div>
                              <div class="form-group has-warning">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">keterangan</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputWarning" name="keterangan" required>
                                  </div>
                              </div>

                              <div class="box-footer clearfix">
                              <a class="btn btn-app blue" id="upload_foto">
                                <i class="fa fa-edit"></i> Image Profil
                              </a>
                            </div>

                            <div class="box_upload">
                              
                            </div>
                            <div class="foto_upload"></div>
                             
                              <div>
                                <input type="submit" value="submit" >
                                 <input type="button" value="kembali" onclick="history.go(-1);">
                              </div>
                          </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
             
          </section>
      </section>
      <script type="text/javascript">
    $(function () {

    
        $("#upload_foto").click(function () {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'component/upload/foto' ?>",
                cache: false,
                data: $(this).serialize(),
                success: function (data) {
                    $(".box_upload").html(data);
                },
                error: function () {
                    alert("Data gagal dimasukkan.");
                }
            });
            return false;
          });
        });
        </script>
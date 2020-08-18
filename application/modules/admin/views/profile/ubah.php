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

        $("#upload_foto1").click(function () {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'component/upload/foto' ?>",
                cache: false,
                data: $(this).serialize(),
                success: function (data) {
                    $(".box_upload1").html(data);
                },
                error: function () {
                    alert("Data gagal dimasukkan.");
                }
            });
            return false;
        });

        $("#upload_foto2").click(function () {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'component/upload/foto' ?>",
                cache: false,
                data: $(this).serialize(),
                success: function (data) {
                    $(".box_upload2").html(data);
                },
                error: function () {
                    alert("Data gagal dimasukkan.");
                }
            });
            return false;
        });

        $("#upload_foto3").click(function () {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'component/upload/foto' ?>",
                cache: false,
                data: $(this).serialize(),
                success: function (data) {
                    $(".box_upload3").html(data);
                },
                error: function () {
                    alert("Data gagal dimasukkan.");
                }
            });
            return false;
        });

        $("#upload_foto4").click(function () {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'component/upload/foto' ?>",
                cache: false,
                data: $(this).serialize(),
                success: function (data) {
                    $(".box_upload4").html(data);
                },
                error: function () {
                    alert("Data gagal dimasukkan.");
                }
            });
            return false;
        });

    });
</script>
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> ubah data produk</h4>
          <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/team/simpan_ubah' ?>">
            <?php

                 $ambil_data = $this->db->get_where('team',array('id'  =>  '4'));
                 $hasil_ambil_data = $ambil_data->row();
                 {
                  ?> 
                  <div class="form-group has-success">
              <div class="col-lg-10">
                <input type="hidden" class="form-control" id="inputSuccess" name="id_team" value="<?php echo $hasil_ambil_data->id;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nama</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputSuccess" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Jabatan</label>
              <div class="col-lg-10">
                <input type="textarea" class="form-control" id="inputSuccess" name="jabatan" value="<?php echo $hasil_ambil_data->jabatan;?>">
              </div>
            </div>
             <div class="box-footer clearfix">
            <a class="btn btn-app blue" id="upload_foto">
              <i class="fa fa-edit"></i> Image Profil
            </a>
          </div>

          <div class="box_upload">
            
          </div>

          <?php }?>

          <?php

                 $ambil_data = $this->db->get_where('team',array('id'  =>  '2'));
                 $hasil_ambil_data = $ambil_data->row();

                  {
                  ?> 
                  <div class="form-group has-success">
              <div class="col-lg-10">
                <input type="hidden" class="form-control" id="inputSuccess" name="id_team" value="<?php echo $hasil_ambil_data->id;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nama</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputSuccess" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Jabatan</label>
              <div class="col-lg-10">
                <input type="textarea" class="form-control" id="inputSuccess" name="jabatan" value="<?php echo $hasil_ambil_data->jabatan;?>">
              </div>
            </div>
             <div class="box-footer clearfix">
            <a class="btn btn-app blue" id="upload_foto1">
              <i class="fa fa-edit"></i> Image Profil
            </a>
          </div>

          <div class="box_upload1"></div>

          <?php }?>

          <?php

                 $ambil_data = $this->db->get_where('team',array('id'  =>  '1'));
                 $hasil_ambil_data = $ambil_data->row();

                  {
                  ?> 
                  <div class="form-group has-success">
              <div class="col-lg-10">
                <input type="hidden" class="form-control" id="inputSuccess" name="id_team" value="<?php echo $hasil_ambil_data->id;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nama</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputSuccess" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Jabatan</label>
              <div class="col-lg-10">
                <input type="textarea" class="form-control" id="inputSuccess" name="jabatan" value="<?php echo $hasil_ambil_data->jabatan;?>">
              </div>
            </div>
             <div class="box-footer clearfix">
            <a class="btn btn-app blue" id="upload_foto2">
              <i class="fa fa-edit"></i> Image Profil
            </a>
          </div>

          <div class="box_upload2"></div>

          <?php }?>

          <?php

                 $ambil_data = $this->db->get_where('team',array('id'  =>  '3'));
                 $hasil_ambil_data = $ambil_data->row();

                  {
                  ?> 
                  <div class="form-group has-success">
              <div class="col-lg-10">
                <input type="hidden" class="form-control" id="inputSuccess" name="id_team" value="<?php echo $hasil_ambil_data->id;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nama</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputSuccess" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Jabatan</label>
              <div class="col-lg-10">
                <input type="textarea" class="form-control" id="inputSuccess" name="jabatan" value="<?php echo $hasil_ambil_data->jabatan;?>">
              </div>
            </div>
             <div class="box-footer clearfix">
            <a class="btn btn-app blue" id="upload_foto3">
              <i class="fa fa-edit"></i> Image Profil
            </a>
          </div>

          <div class="box_upload3"></div>

          <?php }?>

          <?php

                 $ambil_data = $this->db->get_where('team',array('id'  =>  '5'));
                 $hasil_ambil_data = $ambil_data->row();

                  {
                  ?> 
                  <div class="form-group has-success">
              <div class="col-lg-10">
                <input type="hidden" class="form-control" id="inputSuccess" name="id_team" value="<?php echo $hasil_ambil_data->id;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nama</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputSuccess" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Jabatan</label>
              <div class="col-lg-10">
                <input type="textarea" class="form-control" id="inputSuccess" name="jabatan" value="<?php echo $hasil_ambil_data->jabatan;?>">
              </div>
            </div>
             <div class="box-footer clearfix">
            <a class="btn btn-app blue" id="upload_foto4">
              <i class="fa fa-edit"></i> Image Profil
            </a>
          </div>

          <div class="box_upload4"></div>

          <?php }?>
            <div>
              <input type="submit" value="submit" >
              <input align="right" type="button" value="kembali" onclick="history.go(-1);">
            </div>
          </form>
        </div><!-- /form-panel -->
      </div><!-- /col-lg-12 -->
    </div><!-- /row -->
    
  </section>
</section>
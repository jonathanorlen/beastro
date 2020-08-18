<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Ubah Data</h4>
                          <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/produk/simpan_ubah' ?>">
                            <?php

                                $parameter = $_GET['id_produk'];
                                $ambil_data = $this->db->query(" SELECT * FROM produk where id= '$parameter' ");
                                $hasil_ambil_data = $ambil_data->row();
                                

                            ?>
                            <div class="form-group has-success">
                                  <div class="col-lg-10">
                                      <input type="hidden" class="form-control" id="inputSuccess" name="id_po" value="<?php echo $hasil_ambil_data->id_po;?>">
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nama</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputSuccess" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">project </label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputWarning" name="project" value="<?php echo $hasil_ambil_data->project;?>">
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">Keterangan</label>
                                  <div class="col-lg-10">
                                      <input type="textarea" class="form-control" id="inputError" name="keterangan" value="<?php echo $hasil_ambil_data->keterangan;?>">
                                  </div>
                              </div>
                              <div class="box-footer clearfix">
                              <a class="btn btn-app blue" id="upload_foto">
                                <i class="fa fa-edit"></i> Image Profil
                              </a>
                            </div>

                            <div class="box_upload"></div>
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


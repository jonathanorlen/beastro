<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Ubah Data</h4>
                          <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/about/simpan_ubah' ?>">
                            <?php

                                 $ambil_data = $this->db->get('about');
                               $hasil_ambil_data = $ambil_data->row();
                                

                            ?>
                            <div class="form-group has-success">
                                  <div class="col-lg-10">
                                      <input type="hidden" class="form-control" id="inputSuccess" name="id_about" value="<?php echo $hasil_ambil_data->id_about;?>">
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">About</label>
                                  <div class="col-lg-10">
                                     
                                      <textarea name="about" rows="8" cols="120"><?php echo $hasil_ambil_data->about;?></textarea>
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Visi </label>
                                  <div class="col-lg-10">
                                      <textarea name="visi"  rows="8" cols="120"><?php echo $hasil_ambil_data->visi;?></textarea>
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">Misi</label>
                                  <div class="col-lg-10">
                                      <textarea name="misi"  rows="8" cols="120"><?php echo $hasil_ambil_data->misi;?></textarea>
                                  </div>
                              </div>
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


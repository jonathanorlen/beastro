<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Detail</h4>
                      
                        <?php

                              
                               $ambil_data = $this->db->get('about');
                               $hasil_ambil_data = $ambil_data->row();

                      ?>

                          <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/about/ubah' ?>">
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">About </label>
                                  <div class="col-lg-10">
                                      
                                      <textarea name="about"  rows="8" cols="120" readonly disabled><?php echo $hasil_ambil_data->about;?></textarea>
                                  </div>
                              </div>
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Visi </label>
                                  <div class="col-lg-10">
                                      <textarea name="visi"  rows="8" cols="120" readonly disabled=""><?php echo $hasil_ambil_data->visi;?></textarea>
                                  </div>
                              </div>
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">Misi</label>
                                  <div class="col-lg-10">
                                      <textarea name="misi"  rows="8" cols="120" readonly disabled><?php echo $hasil_ambil_data->misi;?></textarea>
                                  </div>
                              </div>
                             
                              <div>
                               
                               <a href="<?php echo base_url() . 'admin/about/ubah' ?>" ><button class="btn btn-primary btn-xs"  >Edit <i class="fa fa-pencil"></i></button></a>
                              </div>
                          </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
             
          </section>
      </section>
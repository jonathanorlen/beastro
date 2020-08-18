<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Detail produk</h4>
                      
                        <?php

                          $parameter = $_GET['id_produk'];
                          $ambil_data = $this->db->query(" SELECT * FROM produk where id= '$parameter' ");
                          $hasil_ambil_data = $ambil_data->row();

                      ?>

                          <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/produk/detail' ?>">
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nama</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" readonly id="inputSuccess" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
                                  </div>
                              </div>
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">project </label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" readonly id="inputWarning" name="project" value="<?php echo $hasil_ambil_data->project;?>">
                                  </div>
                              </div>
                              <div class="form-group has-succes">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputError">keterangan</label>
                                  <div class="col-lg-10">
                                      <input type="textarea" readonly class="form-control" id="inputError" name="keterangan"
                                      value="<?php echo $hasil_ambil_data->keterangan;?>">
                                  </div>
                              </div>
                              <div>
                                
                              </div>


                              
                              <div>
                               <input type="button" value="kembali" onclick="history.go(-1);">
                              </div>
                          </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
             
          </section>
      </section>
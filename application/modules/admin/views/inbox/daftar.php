<section id="main-content">

          <section class="wrapper">

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                         
                      <div class="box_ajax">
                          <table class="table table-striped table-advance table-hover">
                            <h4>TABEL supplier</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                  <th> Nama </th>
                                  <th>Email</th>
                                  <th>Tanggal</th>
                                  <td>action</td>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                             <?php

                                            $ambil_data = $this->db->get('inbox');
                                            $hasil_ambil_data = $ambil_data->result_array();

                                           foreach ($hasil_ambil_data as $item) {
                            ?> 

                                          <tr>
                                            <td><?php echo $item['id'];?></td>
                                            <td><?php echo $item['nama'];?></td>
                                            <td><?php echo $item['email'];?></td>
                                            <td><?php echo TanggalIndo($item['tgl']);?></td>
                                        <td>

                                          <a href="<?php echo base_url() . 'admin/inbox/detail?id_inbox='.$item['id']?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"><br><br>DETAIL</i></button></a>
            
               
                                  </td>
    </tr>
    </tr>

                             <?php 
                          }
                          ?>


                              </tbody>
                          </table>
                          </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
              <br>
             
          </section>
      </section>
          </section>
      </section>
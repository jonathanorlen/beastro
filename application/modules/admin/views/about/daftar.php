<section id="main-content">

          <section class="wrapper">

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                      <div class="box_ajax">
                          <table class="table table-striped table-advance table-hover">
                            <h4>TABEL About</h4>
                            <hr>
                              <thead>
                              <tr>
                                  
                                  <th> About</th>
                                  <th> Visi</th>
                                  <th> Misi</th>
                                  <th> Action</th>
                              </tr>
                              </thead>
                              <tbody>
                             <?php

                                            $ambil_data = $this->db->get('about');
                                            $hasil_ambil_data = $ambil_data->result_array();

                                           foreach ($hasil_ambil_data as $item) {
                            ?> 

                                          <tr>
                                            
                                            <td><?php echo $item['about'];?></td>
                                            <td><?php echo $item['visi'];?></td>
                                            <td><?php echo $item['misi'];?></td>
                                            
                                            
                                        <td>

            <a href="<?php echo base_url() . 'admin/about/detail?id_about='.$item['id_about'] ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
              
            <a href="<?php echo base_url() . 'admin/about/ubah?id_about='.$item['id_about'] ?>" ><button class="btn btn-primary btn-xs"  ><i class="fa fa-pencil"></i></button></a>
              
            <a href="<?php echo base_url() . 'admin/about/hapus?id_about='.$item['id_about'] ?>"><button class="btn btn-danger btn-xs"  onclick="return confirm('Are you sure?')" ><i class="fa fa-trash-o "N></i></button></a>
               
                                  </td>
    
     
    
      
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
              <div> 
              <button class="btn btn.flat " ><i class="fa plus-square"></i><a href="<?php echo base_url() . 'admin/about/tambah' ?>">tambah</a></button></div>
          </section>
      </section>
          </section>
      </section>

      <script>
        $(function () {

        $("#input_produk").keyup(function()

          {var parameter = $(this).val();
          $.ajax( {  
          type :"post",  
          url : "<?php echo base_url() . 'admin/about/cari' ?>",  
          cache :false,  
          data :({key:parameter}), //mengambil dari variable
          //data :$(this).serialize(), // mengambil dari inputan form -> submit
          success : function(data) {  
          $(".box_ajax").html(data);                    
          },  
        error : function() {  
        alert("Data gagal dimasukkan.");  
      }  
     });

      return false;   


    });
      });
      </script>
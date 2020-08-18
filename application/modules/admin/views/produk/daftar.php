<section id="main-content">

          <section class="wrapper">

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                      <div>
                      <input type="text" id="input_produk" name="search" size="20" placeholder="search.."  style="height:30px;width:180px;margin-right:50px; border-radius:10px;float:right;">
                      </div>
                      <div class="box_ajax">
                          <table class="table table-striped table-advance table-hover">
                            <h4>TABEL produk</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th> ID</th>
                                  <th> Nama produk</th>
                                  <th> SS </th>
                                  <th> Project</th>
                                  <th> Action</th>
                              </tr>
                              </thead>
                              <tbody>
                             <?php

                                            $ambil_data = $this->db->get('produk');
                                            $hasil_ambil_data = $ambil_data->result_array();

                                           foreach ($hasil_ambil_data as $item)
                                            {
                            ?> 

                                          <tr>
                                            <td><?php echo $item['id'];?></td>
                                            <td><?php echo $item['nama'];?></td>
                                            <td><img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$item['foto'] ?>" width="100" ></td>
                                            <td><?php echo $item['project'];?></td>
                                            
                                        <td>

            <a href="<?php echo base_url() . 'admin/produk/detail?id_produk='.$item['id'] ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
              
            <a href="<?php echo base_url() . 'admin/produk/ubah?id_produk='.$item['id'] ?>" ><button class="btn btn-primary btn-xs"  ><i class="fa fa-pencil"></i></button></a>
              
            <a href="<?php echo base_url() . 'admin/produk/hapus?id_produk='.$item['id'] ?>"><button class="btn btn-danger btn-xs"  onclick="return confirm('Are you sure?')" ><i class="fa fa-trash-o "N></i></button></a>
               
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
              <button class="btn btn.flat " ><i class="fa plus-square"></i><a href="<?php echo base_url() . 'admin/produk/tambah' ?>">tambah</a></button></div>
          </section>
      </section>
          </section>
      </section>

      <script>
        $(function () {

        $("#input_produk").keyup(function()

          {var parameter = $(this).val();
          $.ajax( {  
          type :"produkst",  
          url : "<?php echo base_url() . 'admin/produk/cari' ?>",  
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
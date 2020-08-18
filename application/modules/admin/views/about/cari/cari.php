<?php 
  $data=$this->input->post();
  $key=$data['key'];
  $ambil_data = $this->db->query("SELECT * FROM po where nama_po like '%$key%'");
  $hasil_ambil_data = $ambil_data->result_array();
  ?> 
                          <table class="table table-striped table-advance table-hover">
                            <div class="box_ajax">
                            <h4>TABEL PO</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th> ID</th>
                                  <th> Nama PO</th>
                                  <th> Alamat</th>
                                  <th> No Telp</th>
                                  <th> PIC</th>
                                  <th> Driver</th>
                                  <th> Status</th>
                                  <th> Record PO</th>
                                  <th> Action</th>
                              </tr>
                              </thead>
                              <tbody>
                             <?php
                                           foreach ($hasil_ambil_data as $item) {
                            ?> 

                                          <tr>
                                            <td><?php echo $item['id_po'];?></td>
                                            <td><?php echo $item['nama_po'];?></td>
                                            <td><?php echo $item['alamat'];?></td>
                                            <td><?php echo $item['telp'];?></td>
                                            <td><?php echo $item['pic'];?></td>
                                            <td><?php echo $item['driver'];?></td>
                                            <td><?php echo $item['status'];?></td>
                                            <td><?php echo $item['record_po'];?></td>
                                            
                                        <td>

            <a href="<?php echo base_url() . 'admin/po/detail?id_po='.$item['id_po'] ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
              
            <a href="<?php echo base_url() . 'admin/po/ubah?id_po='.$item['id_po'] ?>" ><button class="btn btn-primary btn-xs"  ><i class="fa fa-pencil"></i></button></a>
              
            <a href="<?php echo base_url() . 'admin/po/hapus?id_po='.$item['id_po'] ?>"><button class="btn btn-danger btn-xs"  onclick="return confirm('Are you sure?')" ><i class="fa fa-trash-o "N></i></button></a>
               
                                  </td>
    
     
    
      
    </tr>

                             <?php 
                          }
                          ?>


                              </tbody>
                          </table>
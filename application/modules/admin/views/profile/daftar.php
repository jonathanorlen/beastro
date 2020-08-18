<section id="main-content">

  <section class="wrapper">

    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <table class="table table-striped table-advance table-hover">
            <h4>TABEL Nama & Jabatan Cloud Astro</h4>
            <hr>
            <thead>
              <tr>
                <th> ID</th>
                <th> Nama </th>
                <th> Jabatan</th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
             <?php

             $ambil_data = $this->db->get('team');
             $hasil_ambil_data = $ambil_data->result_array();

             foreach ($hasil_ambil_data as $item) {
              ?> 

              <tr>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['nama'];?></td>
                <td><?php echo $item['jabatan'];?></td>
                <td>

                  <a href="<?php echo base_url() . 'admin/team/detail?id_team='.$item['id'] ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>

                  <a href="<?php echo base_url() . 'admin/team/ubah?id_team='.$item['id'] ?>" ><button class="btn btn-primary btn-xs"  ><i class="fa fa-pencil"></i></button></a>

                </td>




              </tr>

              <?php 
            }
            ?>


          </tbody>
        </table>
      </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
  </div><!-- /row -->
  <br>
  <div> 
    <button class="btn btn.flat " ><i class="fa plus-square"></i><a href="<?php echo base_url() . 'admin/team/tambah' ?>">tambah</a></button></div>
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
          url : "<?php echo base_url() . 'admin/po/cari' ?>",  
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
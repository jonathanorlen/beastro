<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i>Team</h4>

          

          
            <?php

                                          
                 $ambil_data = $this->db->get_where('team',array('id'  =>  '4'));
                 $hasil_ambil_data = $ambil_data->result_array();

                 foreach ($hasil_ambil_data as $item) {
                  ?> 

          

          <form class="form-horizontal tasi-form">
            <div class="form-group has-succes">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">COO &nbsp &nbsp &nbsp  :</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" readonly id="inputSuccess" name="nama" value="<?php echo $item['nama'];?>">
              </div>
            </div>
            
            
         </form>

         <?php } ?>




         <?php

                                          
                 $ambil_data = $this->db->get_where('team',array('id'  =>  '2'));
                 $hasil_ambil_data = $ambil_data->result_array();

                 foreach ($hasil_ambil_data as $item) {
                  ?> 

          

          <form class="form-horizontal tasi-form">
            <div class="form-group has-succes">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">CIO  &nbsp &nbsp &nbsp : </label>
              <div class="col-lg-10">
                <input type="text" class="form-control" readonly id="inputSuccess" name="nama" value="<?php echo $item['nama'];?>">
              </div>
            </div>
            
            
         </form>

         <?php } ?> 


         <?php

                                          
                 $ambil_data = $this->db->get_where('team',array('id'  =>  '1'));
                 $hasil_ambil_data = $ambil_data->result_array();

                 foreach ($hasil_ambil_data as $item) {
                  ?> 

          

          <form class="form-horizontal tasi-form">
            <div class="form-group has-succes">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">CEO &nbsp &nbsp &nbsp : </label>
              <div class="col-lg-10">
                <input type="text" class="form-control" readonly id="inputSuccess" name="nama" value="<?php echo $item['nama'];?>">
              </div>
            </div>
            
            
         </form>

         <?php } ?>
         
         <?php

                                          
                 $ambil_data = $this->db->get_where('team',array('id'  =>  '3'));
                 $hasil_ambil_data = $ambil_data->result_array();

                 foreach ($hasil_ambil_data as $item) {
                  ?> 

          

          <form class="form-horizontal tasi-form">
            <div class="form-group has-succes">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">BA  &nbsp &nbsp &nbsp &nbsp : </label>
              <div class="col-lg-10">
                <input type="text" class="form-control" readonly id="inputSuccess" name="nama" value="<?php echo $item['nama'];?>">
              </div>
            </div>
            
            
         </form>

         <?php } ?>

         <?php

                                          
                 $ambil_data = $this->db->get_where('team',array('id'  =>  '5'));
                 $hasil_ambil_data = $ambil_data->result_array();

                 foreach ($hasil_ambil_data as $item) {
                  ?> 

          

          <form class="form-horizontal tasi-form">
            <div class="form-group has-succes">
              <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">CTO   &nbsp &nbsp &nbsp:</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" readonly id="inputSuccess" name="nama" value="<?php echo $item['nama'];?>">
              </div>
            </div>
            
            
         </form>

         <?php } ?>
         <div>
                               
         <a href="<?php echo base_url() . 'admin/team/ubah' ?>" ><button class="btn btn-primary btn-xs"  >Edit <i class="fa fa-pencil"></i></button></a>
        </div>
       </div><!-- /form-panel -->
     </div><!-- /col-lg-12 -->
   </div><!-- /row -->

 </section>
</section>
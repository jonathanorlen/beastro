 <section id="main-content">
 <section class="wrapper">
              <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Input About</h4>
                          <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/about/simpan_tambah' ?>">
                              <div class="form-group has-success">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess" required>About</label>
                                  <div class="col-lg-10">
                                      <textarea row="17" class="form-control" id="inputSuccess" name="about" required></textarea>
                                  </div>
                              </div>
                              <div class="form-group has-warning">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Visi</label>
                                  <div class="col-lg-10">
                                     <textarea row="17" class="form-control" id="inputWarning" name="visi" required></textarea>
                                  </div>
                              </div>
                              <div class="form-group has-warning">
                                  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Misi</label>
                                  <div class="col-lg-10">
                                      <textarea row="17" class="form-control" id="inputWarning" name="misi" required></textarea>
                                  </div>
                              </div>
                             
                              <div>
                                <input type="submit" value="submit" >
                                 <input type="button" value="kembali" onclick="history.go(-1);">
                              </div>
                          </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
             
          </section>
      </section>
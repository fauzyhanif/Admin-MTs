     <section id="main-content">
          <section class="wrapper">

          <!-- Form Input Data -->
              <section class="row">
                   <div class="panel-body">
                        <a href="#myModal-1" data-toggle="modal" class="btn btn-primary">
                                  Input Data Siswa
                        </a>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Input</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DSkelas7/post')?>">
                                                  <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Nama <span class="required">*</span></label>
                                                    <div class="col-lg-10">
                                                      <input class="form-control" id="name" name="nama" minlength="5" type="text"  required />
                                                    </div>
                                                  </div>

                                                  <div class="form-group ">
                                                      <label for="cname" class="control-label col-lg-2">NISN <span class="required">*</span></label>
                                                      <div class="col-lg-10">
                                                          <input class="form-control" id="NISN" name="NISN" minlength="5" type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <label for="curl" class="control-label col-lg-2">TTL<span class="required">*</span></label>
                                                      <div class="col-lg-10">
                                                          <input class="form-control " id="TTL" type="text"  name="TTL" />
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <label for="cname" class="control-label col-lg-2">Alamat <span class="required">*</span></label>
                                                      <div class="col-lg-10">
                                                          <input class="form-control" id="alamat" name="alamat" minlength="5" type="text"  required />
                                                      </div>
                                                  </div>         
                                                   <div class="form-group ">
                                                      <label for="cname" class="control-label col-lg-2">No HP <span class="required">*</span></label>
                                                      <div class="col-lg-10">
                                                          <input class="form-control" id="no_hp" name="no_hp" minlength="5" type="text" required />
                                                      </div>
                                                  </div>                              
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button class="btn btn-primary" type="submit" onclick="Save_data()" name="submit">Save</button>

                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
              </section>
              <!-- End Input Data -->

              <!-- Data Siswa -->
              <div class="row" onload="viewData()"">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Daftar Siswa Kelas 7
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th>No</th>
                                 <th><i class="icon_profile"></i> Nama </th>
                                 <th><i class="icon_mail_alt"></i> NISN </th>
                                 <th><i class="icon_calendar"></i> TTL </th>
                                 <th><i class="icon_pin_alt"></i> Alamat</th>
                                <th><i class="icon_mobile"></i> No Hp</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php 
                              $no=1;
                              foreach($record->result() as $r):?>
                              <tr>
                                 <td><?= $no++;?></td>
                                 <td><?=$r->nama?></td>
                                 <td><?=$r->NISN?></td>
                                 <td><?=$r->TTL?></td>
                                 <td><?=$r->alamat?></td>
                                 <td><?=$r->no_hp?></td>
                                 <td>
                                  <div class="btn-group">
                                            <a class="btn btn-danger" href="<?php echo site_url('DSkelas7/delete/'. $r->id_DS_kelas7)?>"><i class="icon_close_alt2"></i></a>
                                            <a data-target="#myModal-1<?= $r->id_DS_kelas7 ?>" data-toggle="modal" class="btn btn-primary" data-target="#myModal-1">
                                            <i class="icon_plus_alt2" ></i>
                                            </a>
                                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1<?= $r->id_DS_kelas7 ?>" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                            <h4 class="modal-title">Form Edit</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DSkelas7/edit')?>">
                                                            <input type="hidden" value="<?php echo $r->id_DS_kelas7 ?>" name="id">
                                                                <div class="form-group ">
                                                                  <label for="cname" class="control-label col-lg-2">Nama <span class="required">*</span></label>
                                                                  <div class="col-lg-10">
                                                                    <input class="form-control" id="cname" name="nama" minlength="5" type="text" value="<?php echo $r->nama ?>" required />
                                                                  </div>
                                                                </div>

                                                                <div class="form-group ">
                                                                    <label for="cname" class="control-label col-lg-2">NISN <span class="required">*</span></label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" id="cname" name="NISN" minlength="5" type="text" value="<?php echo $r->NISN ?>" required />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="curl" class="control-label col-lg-2">TTL<span class="required">*</span></label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control " id="curl" type="text"  name="TTL" value="<?php echo $r->TTL ?>"/>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="cname" class="control-label col-lg-2">Alamat <span class="required">*</span></label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" id="subject" name="alamat" minlength="5" type="text" value="<?php echo $r->alamat ?>" required />
                                                                    </div>
                                                                </div>         
                                                                 <div class="form-group ">
                                                                    <label for="cname" class="control-label col-lg-2">No HP <span class="required">*</span></label>
                                                                    <div class="col-lg-10">
                                                                        <input class="form-control" id="subject" name="no_hp" minlength="5" type="text" value="<?php echo $r->no_hp ?>" required />
                                                                    </div>
                                                                </div>                              
                                                                <div class="form-group">
                                                                    <div class="col-lg-offset-2 col-lg-10">
                                                                        <button class="btn btn-primary" type="submit" name="submit">Save</button>
                                                                        <button class="btn btn-default" type="button">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                </div>
                                            </div>
                                      </div>
                                  </td>
                                  <?php endforeach;?>
                              </tr>
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
             <!-- End Data Siswa -->
          </section>
       </section>

       
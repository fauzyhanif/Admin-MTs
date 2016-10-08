

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="jumbotron" style="text-align:center;">
                <h1><b>Rekap Nilai Kelas 7</b></h1>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                  <div class="col-sm-12">
                      <section class="panel">
                          <header class="panel-heading"><i class="fa fa-table"></i>
                              Kode Pelajaran
                          </header>
                          <table class="table">
                            <tbody>
                              <tr class="success">
                                <th class="col-md-2"></th>
                                <th class="col-md-2"></th>
                                <th class="col-md-2"></th>
                                <th class="col-md-2"></th>
                                <th class="col-md-2"></th>
                                <th class="col-md-2"></th>
                              </tr>                               
                              <tr class="success">
                                <td>a - B. Indonesia</td>
                                <td>d - IPS</td>
                                <td>g - B. Arab</td>
                                <td>j - Fiqih</td>
                                <td>m - Khot</td>
                                <td>p - Akhlak</td>
                              </tr>                              
                              <tr class="warning">
                                <td>b - B. Inggris</td>
                                <td>e - Matematika</td>
                                <td>h - Nahwu</td>
                                <td>k - Tauhid</td>
                                <td>n - Ta'bir</td>
                                <td>q - Siroh</td>
                              </tr>                              
                              <tr class="danger">
                                <td>c - IPA</td>
                                <td>f - PKn</td>
                                <td>i - Shorof</td>
                                <td>l - F. Maqru'</td>
                                <td>o - Tafsir</td>
                                <td>r - Olah Raga</td>
                              </tr>
                            </tbody>
                          </table>
                      </section>
                  </div>
              </div>

              <section class="row">
                   <div class="panel-body">
                        <a href="#myModal-1" data-toggle="modal" class="btn btn-primary">
                                  Input Nilai Siswa UTS Semester 1
                        </a>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content col-md-12" style="width:133%;">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Input</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DNkelas7/post_UTS1')?>">
                                                  <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Nama <span class="required">*</span></label>
                                                    <div class="col-lg-6">
                                                      <select class="form-control input-lg m-bot15" name="nama">
                                                      <?php foreach($nama as $n):?>
                                                          <option value="<?= $n->id_DS_kelas7 ?>"><?=$n->nama?></option>
                                                      <?php endforeach;?>
                                                      </select>
                                                    </div>
                                                  </div>
                                              <div class="col-md-4">   
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Indonesia <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_indonesia"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Inggris <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_inggris"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6"> IPA <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="ipa"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6"> IPS <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="ips"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Matematika <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="matematika"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">PKn <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="pkn"  type="text"  required />
                                                      </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Arab<span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_arab"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Nahwu <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="nahwu"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Shorof <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="shorof"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Fiqih <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="fiqih"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Tauhid <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tauhid"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">F. Maqru' <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="f_maqru"  type="text"  required />
                                                      </div>
                                                  </div>
                                            </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Khot <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="khot"  type="text"  required />
                                                      </div>
                                                  </div>
                                                 <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Ta'bir <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tabir"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Tafsir <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tafsir"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Akhlak <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="akhlak"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Siroh <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="siroh"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Olah Raga <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="olah_raga"  type="text"  required />
                                                      </div>
                                                  </div>
                                            </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-6">
                                                          <button class="btn btn-primary" style="margin-top: 22px;" type="submit" name="submit">Save</button>
                                                      </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
              </section>

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading" style="text-align: center; font-size:25px; padding:10px 0; background:#3498db; color:#ecf0f1;">
                              Rekap Nilai UTS Semester 1 TP 2016-2017
                          </header>
                          <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped table-advance">
                              <thead>
                                <tr class="success">
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>-a-</th>
                                  <th>-b-</th>
                                  <th>-c-</th>
                                  <th>-d-</th>
                                  <th>-e-</th>
                                  <th>-f-</th>
                                  <th>-g-</th>
                                  <th>-h-</th>
                                  <th>-i-</th>
                                  <th>-j-</th>
                                  <th>-k-</th>
                                  <th>-l-</th>
                                  <th>-m-</th>
                                  <th>-n-</th>
                                  <th>-n-</th>
                                  <th>-o-</th>
                                  <th>-p-</th>
                                  <th>-q-</th>
                                  <th>Total</th>
                                  <th>Rank</th>
                                  <th colspan="2">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                              $no=1;
                              $total=0;
                              foreach($record as $r):?>
                                <tr>
                                  <td><?=$no++?></td>
                                  <td><?=$r->nama?></td>
                                  <td><abbr title="B.Indonesia"><?=$r->b_indonesia?></abbr></td>
                                  <td><abbr title="B.Inggris"><?=$r->b_inggris?></abbr></td>
                                  <td><abbr title="IPA"><?=$r->ipa?></abbr></td>
                                  <td><abbr title="IPS"><?=$r->ips?></abbr></td>
                                  <td><abbr title="Matematika"><?=$r->matematika?></abbr></td>
                                  <td><abbr title="PKn"><?=$r->pkn?></abbr></td>
                                  <td><abbr title="B. Arab"><?=$r->b_arab?></abbr></td>
                                  <td><abbr title="Nahwu"><?=$r->nahwu?></abbr></td>
                                  <td><abbr title="Shorof"><?=$r->shorof?></abbr></td>
                                  <td><abbr title="Fiqih"><?=$r->fiqih?></abbr></td>
                                  <td><abbr title="Tauhid"><?=$r->tauhid?></abbr></td>
                                  <td><abbr title="Fahmul Maqru'B.Indonesia"><?=$r->f_maqru?></abbr></td>
                                  <td><abbr title="Khot"><?=$r->khot?></abbr></td>
                                  <td><abbr title="Ta'bir"><?=$r->tabir?></abbr></td>
                                  <td><abbr title="Tafsir"><?=$r->tafsir?></abbr></td>
                                  <td><abbr title="Akhlak"><?=$r->akhlak?></abbr></td>
                                  <td><abbr title="Siroh"><?=$r->siroh?></abbr></td>
                                  <td><abbr title="Olah Raga"><?=$r->olah_raga?></abbr></td>
                                  <td><?=$total=$r->b_indonesia+$r->b_inggris+$r->ipa+$r->ips+$r->matematika+$r->pkn+$r->b_arab+$r->nahwu+$r->shorof+$r->fiqih+$r->tauhid+$r->f_maqru+$r->khot+$r->tabir+$r->tafsir+$r->akhlak+$r->siroh+$r->olah_raga;?></td>
                                  <td></td>
                                  <td><div class="btn-group">
                                            <a class="btn btn-danger" href="<?php echo site_url('DNkelas7/delete_UTS1/'. $r->id_DNUTS1_kelas7)?>"><i class="icon_close_alt2"></i></a>
                                            <a data-target="#myModal-2<?= $r->id_DNUTS1_kelas7 ?>" data-toggle="modal" class="btn btn-primary" >
                                            <i class="icon_plus_alt2" ></i>
                                            </a>

                                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-2" id="myModal-2<?= $r->id_DNUTS1_kelas7 ?>" class="modal fade">
                                                          <div class="modal-dialog">
                                                              <div class="modal-content col-md-12" style="width:133%;">
                                                                  <div class="modal-header">
                                                                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                      <h4 class="modal-title">Form Edit</h4>
                                                                  </div>
                                                                  <div class="modal-body">

                                                                      <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DNkelas7/edit_UTS1')?>"/>
                                                                      <input type="hidden" value="<?php echo $r->id_DNUTS1_kelas7 ?>" name="id">
                                                                    <div class="col-md-4">   
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Indonesia <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_indonesia"  type="text" " id="cname" name="nama"  type="text" value="<?php echo $r->b_indonesia ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Inggris <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_inggris"  type="text"  value="<?php echo $r->b_inggris ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6"> IPA <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="ipa"  type="text"  value="<?php echo $r->ipa ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6"> IPS <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="ips"  type="text"  value="<?php echo $r->ips ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Matematika <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="matematika"  type="text"  value="<?php echo $r->matematika ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">PKn <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="pkn"  type="text"  value="<?php echo $r->pkn ?>" required />
                                                                              </div>
                                                                          </div>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Arab<span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_arab"  type="text"  value="<?php echo $r->b_arab ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Nahwu <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="nahwu"  type="text"  value="<?php echo $r->nahwu ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Shorof <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="shorof"  type="text"  value="<?php echo $r->shorof ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Fiqih <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="fiqih"  type="text"  value="<?php echo $r->fiqih ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Tauhid <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tauhid"  type="text"  value="<?php echo $r->tauhid ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">F. Maqru' <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="f_maqru"  type="text"  value="<?php echo $r->f_maqru ?>" required />
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                     <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Khot <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="khot"  type="text"  value="<?php echo $r->khot ?>" required />
                                                                              </div>
                                                                          </div>
                                                                         <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Ta'bir <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tabir"  type="text"  value="<?php echo $r->tabir ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Tafsir <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tafsir"  type="text"  value="<?php echo $r->tafsir ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Akhlak <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="akhlak"  type="text"  value="<?php echo $r->akhlak ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Siroh <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="siroh"  type="text"  value="<?php echo $r->siroh ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Olah Raga <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="olah_raga"  type="text"  value="<?php echo $r->olah_raga ?>" required />
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                          <div class="form-group">
                                                                              <div class="col-lg-offset-2 col-lg-6">
                                                                                  <button class="btn btn-primary" style="margin-top: 22px;" type="submit" name="submit">Save</button>
                                                                              </div>
                                                                      </form>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                      </section>
                                  </td>
                                <?php endforeach;?>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>
              
              <section class="row">
                   <div class="panel-body">
                        <a href="#myModal-3" data-toggle="modal" class="btn btn-primary">
                                  Input Nilai Siswa Semester 1
                        </a>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-3" id="myModal-3" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content col-md-12" style="width:133%;">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Input</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DNkelas7/post_SMT1')?>">
                                                  <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Nama <span class="required">*</span></label>
                                                    <div class="col-lg-6">
                                                      <select class="form-control input-lg m-bot15" name="nama">
                                                      <?php foreach($nama as $n):?>
                                                          <option value="<?= $n->id_DS_kelas7 ?>"><?=$n->nama?></option>
                                                      <?php endforeach;?>
                                                      </select>
                                                    </div>
                                                  </div>
                                              <div class="col-md-4">   
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Indonesia <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_indonesia"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Inggris <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_inggris"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6"> IPA <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="ipa"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6"> IPS <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="ips"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Matematika <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="matematika"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">PKn <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="pkn"  type="text"  required />
                                                      </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Arab<span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_arab"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Nahwu <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="nahwu"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Shorof <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="shorof"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Fiqih <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="fiqih"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Tauhid <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tauhid"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">F. Maqru' <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="f_maqru"  type="text"  required />
                                                      </div>
                                                  </div>
                                            </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Khot <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="khot"  type="text"  required />
                                                      </div>
                                                  </div>
                                                 <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Ta'bir <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tabir"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Tafsir <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tafsir"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Akhlak <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="akhlak"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Siroh <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="siroh"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Olah Raga <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="olah_raga"  type="text"  required />
                                                      </div>
                                                  </div>
                                            </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-6">
                                                          <button class="btn btn-primary" style="margin-top: 22px;" type="submit" name="submit">Save</button>
                                                      </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
              </section>

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading" style="text-align: center; font-size:25px; padding:10px 0; background:#3498db; color:#ecf0f1;">
                              Rekap Nilai Semester 1 TP 2016-2017
                          </header>
                          <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped table-advance">
                              <thead>
                                <tr class="success">
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>-a-</th>
                                  <th>-b-</th>
                                  <th>-c-</th>
                                  <th>-d-</th>
                                  <th>-e-</th>
                                  <th>-f-</th>
                                  <th>-g-</th>
                                  <th>-h-</th>
                                  <th>-i-</th>
                                  <th>-j-</th>
                                  <th>-k-</th>
                                  <th>-l-</th>
                                  <th>-m-</th>
                                  <th>-n-</th>
                                  <th>-n-</th>
                                  <th>-o-</th>
                                  <th>-p-</th>
                                  <th>-q-</th>
                                  <th>Total</th>
                                  <th>Rank</th>
                                  <th colspan="2">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                              $no=1;
                              $total=0;
                              foreach($SMT1 as $r):?>
                                <tr>
                                  <td><?=$no++?></td>
                                  <td><?=$r->nama?></td>
                                  <td><abbr title="B.Indonesia"><?=$r->b_indonesia?></abbr></td>
                                  <td><abbr title="B.Inggris"><?=$r->b_inggris?></abbr></td>
                                  <td><abbr title="IPA"><?=$r->ipa?></abbr></td>
                                  <td><abbr title="IPS"><?=$r->ips?></abbr></td>
                                  <td><abbr title="Matematika"><?=$r->matematika?></abbr></td>
                                  <td><abbr title="PKn"><?=$r->pkn?></abbr></td>
                                  <td><abbr title="B. Arab"><?=$r->b_arab?></abbr></td>
                                  <td><abbr title="Nahwu"><?=$r->nahwu?></abbr></td>
                                  <td><abbr title="Shorof"><?=$r->shorof?></abbr></td>
                                  <td><abbr title="Fiqih"><?=$r->fiqih?></abbr></td>
                                  <td><abbr title="Tauhid"><?=$r->tauhid?></abbr></td>
                                  <td><abbr title="Fahmul Maqru'B.Indonesia"><?=$r->f_maqru?></abbr></td>
                                  <td><abbr title="Khot"><?=$r->khot?></abbr></td>
                                  <td><abbr title="Ta'bir"><?=$r->tabir?></abbr></td>
                                  <td><abbr title="Tafsir"><?=$r->tafsir?></abbr></td>
                                  <td><abbr title="Akhlak"><?=$r->akhlak?></abbr></td>
                                  <td><abbr title="Siroh"><?=$r->siroh?></abbr></td>
                                  <td><abbr title="Olah Raga"><?=$r->olah_raga?></abbr></td>
                                  <td><?=$total=$r->b_indonesia+$r->b_inggris+$r->ipa+$r->ips+$r->matematika+$r->pkn+$r->b_arab+$r->nahwu+$r->shorof+$r->fiqih+$r->tauhid+$r->f_maqru+$r->khot+$r->tabir+$r->tafsir+$r->akhlak+$r->siroh+$r->olah_raga;?></td>
                                  <td></td>
                                  <td><div class="btn-group">
                                            <a class="btn btn-danger" href="<?php echo site_url('DNkelas7/delete_SMT1/'. $r->id_DNSMT1_kelas7)?>"><i class="icon_close_alt2"></i></a>
                                            <a data-target="#myModal-4<?= $r->id_DNSMT1_kelas7 ?>" data-toggle="modal" class="btn btn-primary" >
                                            <i class="icon_plus_alt2" ></i>
                                            </a>

                                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-4" id="myModal-4<?= $r->id_DNSMT1_kelas7 ?>" class="modal fade">
                                                          <div class="modal-dialog">
                                                              <div class="modal-content col-md-12" style="width:133%;">
                                                                  <div class="modal-header">
                                                                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                      <h4 class="modal-title">Form Edit</h4>
                                                                  </div>
                                                                  <div class="modal-body">

                                                                      <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DNkelas7/edit_SMT1')?>"/>
                                                                      <input type="hidden" value="<?php echo $r->id_DNSMT1_kelas7 ?>" name="id">
                                                                    <div class="col-md-4">   
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Indonesia <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_indonesia"  type="text" " id="cname" name="nama"  type="text" value="<?php echo $r->b_indonesia ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Inggris <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_inggris"  type="text"  value="<?php echo $r->b_inggris ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6"> IPA <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="ipa"  type="text"  value="<?php echo $r->ipa ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6"> IPS <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="ips"  type="text"  value="<?php echo $r->ips ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Matematika <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="matematika"  type="text"  value="<?php echo $r->matematika ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">PKn <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="pkn"  type="text"  value="<?php echo $r->pkn ?>" required />
                                                                              </div>
                                                                          </div>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Arab<span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_arab"  type="text"  value="<?php echo $r->b_arab ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Nahwu <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="nahwu"  type="text"  value="<?php echo $r->nahwu ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Shorof <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="shorof"  type="text"  value="<?php echo $r->shorof ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Fiqih <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="fiqih"  type="text"  value="<?php echo $r->fiqih ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Tauhid <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tauhid"  type="text"  value="<?php echo $r->tauhid ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">F. Maqru' <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="f_maqru"  type="text"  value="<?php echo $r->f_maqru ?>" required />
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                     <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Khot <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="khot"  type="text"  value="<?php echo $r->khot ?>" required />
                                                                              </div>
                                                                          </div>
                                                                         <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Ta'bir <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tabir"  type="text"  value="<?php echo $r->tabir ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Tafsir <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tafsir"  type="text"  value="<?php echo $r->tafsir ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Akhlak <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="akhlak"  type="text"  value="<?php echo $r->akhlak ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Siroh <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="siroh"  type="text"  value="<?php echo $r->siroh ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Olah Raga <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="olah_raga"  type="text"  value="<?php echo $r->olah_raga ?>" required />
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                          <div class="form-group">
                                                                              <div class="col-lg-offset-2 col-lg-6">
                                                                                  <button class="btn btn-primary" style="margin-top: 22px;" type="submit" name="submit">Save</button>
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
                          </div>

                      </section>
                  </div>
              </div>


              <section class="row">
                   <div class="panel-body">
                        <a href="#myModal-5" data-toggle="modal" class="btn btn-primary">
                                  Input Nilai Siswa UTS Semester 2
                        </a>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-5" id="myModal-5" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content col-md-12" style="width:133%;">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Input</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DNkelas7/post_UTS2')?>">
                                                  <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Nama <span class="required">*</span></label>
                                                    <div class="col-lg-6">
                                                      <select class="form-control input-lg m-bot15" name="nama">
                                                      <?php foreach($nama as $n):?>
                                                          <option value="<?= $n->id_DS_kelas7 ?>"><?=$n->nama?></option>
                                                      <?php endforeach;?>
                                                      </select>
                                                    </div>
                                                  </div>
                                              <div class="col-md-4">   
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Indonesia <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_indonesia"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Inggris <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_inggris"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6"> IPA <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="ipa"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6"> IPS <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="ips"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Matematika <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="matematika"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">PKn <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="pkn"  type="text"  required />
                                                      </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Arab<span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_arab"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Nahwu <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="nahwu"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Shorof <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="shorof"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Fiqih <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="fiqih"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Tauhid <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tauhid"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">F. Maqru' <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="f_maqru"  type="text"  required />
                                                      </div>
                                                  </div>
                                            </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Khot <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="khot"  type="text"  required />
                                                      </div>
                                                  </div>
                                                 <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Ta'bir <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tabir"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Tafsir <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tafsir"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Akhlak <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="akhlak"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Siroh <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="siroh"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Olah Raga <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="olah_raga"  type="text"  required />
                                                      </div>
                                                  </div>
                                            </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-6">
                                                          <button class="btn btn-primary" style="margin-top: 22px;" type="submit" name="submit">Save</button>
                                                      </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
              </section>

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading" style="text-align: center; font-size:25px; padding:10px 0; background:#2c3e50; color:#ecf0f1;">
                              Rekap Nilai UTS Semester 2 TP 2016-2017
                          </header>
                          <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped table-advance">
                              <thead>
                                <tr class="success">
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>-a-</th>
                                  <th>-b-</th>
                                  <th>-c-</th>
                                  <th>-d-</th>
                                  <th>-e-</th>
                                  <th>-f-</th>
                                  <th>-g-</th>
                                  <th>-h-</th>
                                  <th>-i-</th>
                                  <th>-j-</th>
                                  <th>-k-</th>
                                  <th>-l-</th>
                                  <th>-m-</th>
                                  <th>-n-</th>
                                  <th>-n-</th>
                                  <th>-o-</th>
                                  <th>-p-</th>
                                  <th>-q-</th>
                                  <th>Total</th>
                                  <th>Rank</th>
                                  <th colspan="2">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                              $no=1;
                              $total=0;
                              foreach($UTS2 as $r):?>
                                <tr>
                                  <td><?=$no++?></td>
                                  <td><?=$r->nama?></td>
                                  <td><abbr title="B.Indonesia"><?=$r->b_indonesia?></abbr></td>
                                  <td><abbr title="B.Inggris"><?=$r->b_inggris?></abbr></td>
                                  <td><abbr title="IPA"><?=$r->ipa?></abbr></td>
                                  <td><abbr title="IPS"><?=$r->ips?></abbr></td>
                                  <td><abbr title="Matematika"><?=$r->matematika?></abbr></td>
                                  <td><abbr title="PKn"><?=$r->pkn?></abbr></td>
                                  <td><abbr title="B. Arab"><?=$r->b_arab?></abbr></td>
                                  <td><abbr title="Nahwu"><?=$r->nahwu?></abbr></td>
                                  <td><abbr title="Shorof"><?=$r->shorof?></abbr></td>
                                  <td><abbr title="Fiqih"><?=$r->fiqih?></abbr></td>
                                  <td><abbr title="Tauhid"><?=$r->tauhid?></abbr></td>
                                  <td><abbr title="Fahmul Maqru'B.Indonesia"><?=$r->f_maqru?></abbr></td>
                                  <td><abbr title="Khot"><?=$r->khot?></abbr></td>
                                  <td><abbr title="Ta'bir"><?=$r->tabir?></abbr></td>
                                  <td><abbr title="Tafsir"><?=$r->tafsir?></abbr></td>
                                  <td><abbr title="Akhlak"><?=$r->akhlak?></abbr></td>
                                  <td><abbr title="Siroh"><?=$r->siroh?></abbr></td>
                                  <td><abbr title="Olah Raga"><?=$r->olah_raga?></abbr></td>
                                  <td><?=$total=$r->b_indonesia+$r->b_inggris+$r->ipa+$r->ips+$r->matematika+$r->pkn+$r->b_arab+$r->nahwu+$r->shorof+$r->fiqih+$r->tauhid+$r->f_maqru+$r->khot+$r->tabir+$r->tafsir+$r->akhlak+$r->siroh+$r->olah_raga;?></td>
                                  <td></td>
                                  <td><div class="btn-group">
                                            <a class="btn btn-danger" href="<?php echo site_url('DNkelas7/delete_UTS2/'. $r->id_DNUTS2_kelas7)?>"><i class="icon_close_alt2"></i></a>
                                            <a data-target="#myModal-6<?= $r->id_DNUTS2_kelas7 ?>" data-toggle="modal" class="btn btn-primary" >
                                            <i class="icon_plus_alt2" ></i>
                                            </a>

                                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-6" id="myModal-6<?= $r->id_DNUTS2_kelas7 ?>" class="modal fade">
                                                          <div class="modal-dialog">
                                                              <div class="modal-content col-md-12" style="width:133%;">
                                                                  <div class="modal-header">
                                                                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                      <h4 class="modal-title">Form Edit</h4>
                                                                  </div>
                                                                  <div class="modal-body">

                                                                      <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DNkelas7/edit_UTS2')?>"/>
                                                                      <input type="hidden" value="<?php echo $r->id_DNUTS2_kelas7 ?>" name="id">
                                                                    <div class="col-md-4">   
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Indonesia <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_indonesia"  type="text" " id="cname" name="nama"  type="text" value="<?php echo $r->b_indonesia ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Inggris <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_inggris"  type="text"  value="<?php echo $r->b_inggris ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6"> IPA <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="ipa"  type="text"  value="<?php echo $r->ipa ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6"> IPS <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="ips"  type="text"  value="<?php echo $r->ips ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Matematika <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="matematika"  type="text"  value="<?php echo $r->matematika ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">PKn <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="pkn"  type="text"  value="<?php echo $r->pkn ?>" required />
                                                                              </div>
                                                                          </div>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Arab<span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_arab"  type="text"  value="<?php echo $r->b_arab ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Nahwu <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="nahwu"  type="text"  value="<?php echo $r->nahwu ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Shorof <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="shorof"  type="text"  value="<?php echo $r->shorof ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Fiqih <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="fiqih"  type="text"  value="<?php echo $r->fiqih ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Tauhid <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tauhid"  type="text"  value="<?php echo $r->tauhid ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">F. Maqru' <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="f_maqru"  type="text"  value="<?php echo $r->f_maqru ?>" required />
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                     <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Khot <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="khot"  type="text"  value="<?php echo $r->khot ?>" required />
                                                                              </div>
                                                                          </div>
                                                                         <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Ta'bir <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tabir"  type="text"  value="<?php echo $r->tabir ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Tafsir <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tafsir"  type="text"  value="<?php echo $r->tafsir ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Akhlak <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="akhlak"  type="text"  value="<?php echo $r->akhlak ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Siroh <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="siroh"  type="text"  value="<?php echo $r->siroh ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Olah Raga <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="olah_raga"  type="text"  value="<?php echo $r->olah_raga ?>" required />
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                          <div class="form-group">
                                                                              <div class="col-lg-offset-2 col-lg-6">
                                                                                  <button class="btn btn-primary" style="margin-top: 22px;" type="submit" name="submit">Save</button>
                                                                              </div>
                                                                      </form>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                      </section>
                                  </td>
                                <?php endforeach;?>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>


              <section class="row">
                   <div class="panel-body">
                        <a href="#myModal-7" data-toggle="modal" class="btn btn-primary">
                                  Input Nilai Siswa Semester 2
                        </a>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-7" id="myModal-7" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content col-md-12" style="width:133%;">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Input</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DNkelas7/post_SMT2')?>">
                                                  <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Nama <span class="required">*</span></label>
                                                    <div class="col-lg-6">
                                                      <select class="form-control input-lg m-bot15" name="nama">
                                                      <?php foreach($nama as $n):?>
                                                          <option value="<?= $n->id_DS_kelas7 ?>"><?=$n->nama?></option>
                                                      <?php endforeach;?>
                                                      </select>
                                                    </div>
                                                  </div>
                                              <div class="col-md-4">   
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Indonesia <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_indonesia"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Inggris <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_inggris"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6"> IPA <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="ipa"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6"> IPS <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="ips"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Matematika <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="matematika"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">PKn <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="pkn"  type="text"  required />
                                                      </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">B. Arab<span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="b_arab"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Nahwu <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="nahwu"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Shorof <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="shorof"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Fiqih <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="fiqih"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Tauhid <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tauhid"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">F. Maqru' <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="f_maqru"  type="text"  required />
                                                      </div>
                                                  </div>
                                            </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Khot <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="khot"  type="text"  required />
                                                      </div>
                                                  </div>
                                                 <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Ta'bir <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tabir"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Tafsir <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="tafsir"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Akhlak <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="akhlak"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Siroh <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="siroh"  type="text"  required />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cname" class="control-label col-lg-6">Olah Raga <span class="required">*</span></label>
                                                      <div class="col-lg-4">
                                                          <input class="form-control" id="cname" name="olah_raga"  type="text"  required />
                                                      </div>
                                                  </div>
                                            </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-6">
                                                          <button class="btn btn-primary" style="margin-top: 22px;" type="submit" name="submit">Save</button>
                                                      </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
              </section>

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading" style="text-align: center; font-size:25px; padding:10px 0; background:#2c3e50; color:#ecf0f1;">
                              Rekap Nilai Semester 2 TP 2016-2017
                          </header>
                          <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped table-advance">
                              <thead>
                                <tr class="success">
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>-a-</th>
                                  <th>-b-</th>
                                  <th>-c-</th>
                                  <th>-d-</th>
                                  <th>-e-</th>
                                  <th>-f-</th>
                                  <th>-g-</th>
                                  <th>-h-</th>
                                  <th>-i-</th>
                                  <th>-j-</th>
                                  <th>-k-</th>
                                  <th>-l-</th>
                                  <th>-m-</th>
                                  <th>-n-</th>
                                  <th>-n-</th>
                                  <th>-o-</th>
                                  <th>-p-</th>
                                  <th>-q-</th>
                                  <th>Total</th>
                                  <th>Rank</th>
                                  <th colspan="2">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                              $no=1;
                              $total=0;
                              foreach($SMT2 as $r):?>
                                <tr>
                                  <td><?=$no++?></td>
                                  <td><?=$r->nama?></td>
                                  <td><abbr title="B.Indonesia"><?=$r->b_indonesia?></abbr></td>
                                  <td><abbr title="B.Inggris"><?=$r->b_inggris?></abbr></td>
                                  <td><abbr title="IPA"><?=$r->ipa?></abbr></td>
                                  <td><abbr title="IPS"><?=$r->ips?></abbr></td>
                                  <td><abbr title="Matematika"><?=$r->matematika?></abbr></td>
                                  <td><abbr title="PKn"><?=$r->pkn?></abbr></td>
                                  <td><abbr title="B. Arab"><?=$r->b_arab?></abbr></td>
                                  <td><abbr title="Nahwu"><?=$r->nahwu?></abbr></td>
                                  <td><abbr title="Shorof"><?=$r->shorof?></abbr></td>
                                  <td><abbr title="Fiqih"><?=$r->fiqih?></abbr></td>
                                  <td><abbr title="Tauhid"><?=$r->tauhid?></abbr></td>
                                  <td><abbr title="Fahmul Maqru'B.Indonesia"><?=$r->f_maqru?></abbr></td>
                                  <td><abbr title="Khot"><?=$r->khot?></abbr></td>
                                  <td><abbr title="Ta'bir"><?=$r->tabir?></abbr></td>
                                  <td><abbr title="Tafsir"><?=$r->tafsir?></abbr></td>
                                  <td><abbr title="Akhlak"><?=$r->akhlak?></abbr></td>
                                  <td><abbr title="Siroh"><?=$r->siroh?></abbr></td>
                                  <td><abbr title="Olah Raga"><?=$r->olah_raga?></abbr></td>
                                  <td><?=$total=$r->b_indonesia+$r->b_inggris+$r->ipa+$r->ips+$r->matematika+$r->pkn+$r->b_arab+$r->nahwu+$r->shorof+$r->fiqih+$r->tauhid+$r->f_maqru+$r->khot+$r->tabir+$r->tafsir+$r->akhlak+$r->siroh+$r->olah_raga;?></td>
                                  <td></td>
                                  <td><div class="btn-group">
                                            <a class="btn btn-danger" href="<?php echo site_url('DNkelas7/delete_SMT2/'. $r->id_DNSMT2_kelas7)?>"><i class="icon_close_alt2"></i></a>
                                            <a data-target="#myModal-8<?= $r->id_DNSMT2_kelas7 ?>" data-toggle="modal" class="btn btn-primary" >
                                            <i class="icon_plus_alt2" ></i>
                                            </a>

                                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-8" id="myModal-8<?= $r->id_DNSMT2_kelas7 ?>" class="modal fade">
                                                          <div class="modal-dialog">
                                                              <div class="modal-content col-md-12" style="width:133%;">
                                                                  <div class="modal-header">
                                                                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                      <h4 class="modal-title">Form Edit</h4>
                                                                  </div>
                                                                  <div class="modal-body">

                                                                      <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('DNkelas7/edit_SMT2')?>"/>
                                                                      <input type="hidden" value="<?php echo $r->id_DNUTS12_kelas7 ?>" name="id">
                                                                    <div class="col-md-4">   
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Indonesia <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_indonesia"  type="text" " id="cname" name="nama"  type="text" value="<?php echo $r->b_indonesia ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Inggris <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_inggris"  type="text"  value="<?php echo $r->b_inggris ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6"> IPA <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="ipa"  type="text"  value="<?php echo $r->ipa ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6"> IPS <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="ips"  type="text"  value="<?php echo $r->ips ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Matematika <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="matematika"  type="text"  value="<?php echo $r->matematika ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">PKn <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="pkn"  type="text"  value="<?php echo $r->pkn ?>" required />
                                                                              </div>
                                                                          </div>
                                                                     </div>
                                                                     <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">B. Arab<span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="b_arab"  type="text"  value="<?php echo $r->b_arab ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Nahwu <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="nahwu"  type="text"  value="<?php echo $r->nahwu ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Shorof <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="shorof"  type="text"  value="<?php echo $r->shorof ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Fiqih <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="fiqih"  type="text"  value="<?php echo $r->fiqih ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Tauhid <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tauhid"  type="text"  value="<?php echo $r->tauhid ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">F. Maqru' <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="f_maqru"  type="text"  value="<?php echo $r->f_maqru ?>" required />
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                     <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Khot <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="khot"  type="text"  value="<?php echo $r->khot ?>" required />
                                                                              </div>
                                                                          </div>
                                                                         <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Ta'bir <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tabir"  type="text"  value="<?php echo $r->tabir ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Tafsir <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="tafsir"  type="text"  value="<?php echo $r->tafsir ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Akhlak <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="akhlak"  type="text"  value="<?php echo $r->akhlak ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Siroh <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="siroh"  type="text"  value="<?php echo $r->siroh ?>" required />
                                                                              </div>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="cname" class="control-label col-lg-6">Olah Raga <span class="required">*</span></label>
                                                                              <div class="col-lg-4">
                                                                                  <input class="form-control" id="cname" name="olah_raga"  type="text"  value="<?php echo $r->olah_raga ?>" required />
                                                                              </div>
                                                                          </div>
                                                                    </div>
                                                                          <div class="form-group">
                                                                              <div class="col-lg-offset-2 col-lg-6">
                                                                                  <button class="btn btn-primary" style="margin-top: 22px;" type="submit" name="submit">Save</button>
                                                                              </div>
                                                                      </form>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                      </section>
                                  </td>
                                <?php endforeach;?>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  
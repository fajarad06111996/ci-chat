                                    <div class="widget-box">
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <div class="dialogs">
                                                    <?php foreach($tampil_pesan as $tp){ ?>
                                                        <?php if($tp->pengirim == $this->session->userdata('user')){ ?>
                                                        <div class="itemdiv dialogdiv">
                                                            <div class="user">
                                                                <span class="label label-sm label-pink arrowed-right">Saya</span>
                                                            </div>

                                                            <div class="body">
                                                                <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                                    <?php echo date('H:i', strtotime($tp->waktu)); ?>
                                                                </div>

                                                                <div class="text"><?php echo $tp->teks; ?></div>
                                                            </div>                                                           
                                                        </div>
                                                        
                                                        <?php }else{ ?>
                                                        <div class="itemdiv dialogdiv">
                                                            <div class="user">
                                                                <img class="user" src="<?php echo base_url() ?>assets/images/avatars/avatar2.png" />
                                                            </div>

                                                            <div class="body">
                                                                <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                                        <?php echo date('H:i', strtotime($tp->waktu)); ?>
                                                                </div>

                                                                <div class="name"><?php echo ucfirst($tp->pengirim); ?></div>
                                                                <div class="text"><?php echo $tp->teks; ?></div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div><!-- /.dialogs -->
                                            </div>
                                            <!-- /.widget-main -->
                                        </div>
                                        <!-- /.widget-body -->

                                            <div class="modal-footer">
                                                <form method="post" action="<?php echo base_url('chat/input_pesan') ?>">
                                                    <div class="input-group">
                                                        <?php if($status == 'aktif'){ ?>
                                                            <input type="text" name='teks' required class="form-control search-query" placeholder=" Ketik Pesan Anda">
                                                                <span class="input-group-btn">
                                                                    <button type="submit" class="btn btn-success btn-sm">Kirim</button>
                                                                </span>
                                                            <?php  } else { ?> 
                                                            <input type="text" disabled class="form-control search-query" placeholder=" Status Akun Anda Tidak Aktif"> 
                                                                <span class="input-group-btn">
                                                                    <button disabled type="button" class="btn btn-success btn-sm">Kirim</button>
                                                                </span>;
                                                          <?php  } ?>
                                                    </div>
                                                </form>
                                            </div><!-- /.modal-footer -->
                                    </div>
                                    <!-- /.widget-box -->
                                                            
                                </div>
                                <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.page-content -->
                </div>
            </div>
            <!-- /.main-content -->
        </div>

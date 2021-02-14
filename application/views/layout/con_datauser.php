                         <div class="widget-box">
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <div class="dialogs">
                                                        <table class="table table-bordered table-striped">
                                                            <thead class="thin-border-bottom">
                                                                <tr>
                                                                    <th>
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>No.
                                                                    </th>
                                                                    <th>
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>User
                                                                    </th>
                                                                    <th>
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>Nama
                                                                    </th>
                                                                    <th class="hidden-480">
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>Password
                                                                    </th>
                                                                    <th class="hidden-480">
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>Akses
                                                                    </th>
                                                                    <th class="hidden-480">
                                                                        <center>Status</center>
                                                                    </th>
                                                                    <th class="hidden-480">
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>Aksi
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php $no=1; foreach($tampil_user as $tu){ ?>
                                                                <tr>
                                                                    <td><?php echo $no++; ?></td>
                                                                    <td><?php echo $tu->user; ?></td>
                                                                    <td><?php echo $tu->nama; ?></td>
                                                                    <td><?php echo $tu->pass; ?></td>
                                                                    <td><?php echo $tu->akses; ?></td>
                                                                    <td><center><?php if($tu->status == 'aktif'): ?>
                                                                        <span class="label label-success">
                                                                            <i class="ace-icon glyphicon glyphicon-ok"></i>
                                                                            Aktif
											                            </span>
                                                                        <?php else: ?>
                                                                            <span class="label label-warning">
                                                                            <i class="ace-icon fa fa-exclamation-triangle bigger-120"></i>
                                                                            Tidak Aktif !!!
											                            </span>
                                                                    <?php endif ?></center></td>
                                                                    <td>
                                                                        <!-- <a href="#" title="Ubah Data" class="blue"><i class="ace-icon fa fa-pencil bigger-130"></i></a> -->
                                                                        <a href="<?php echo base_url("chat/hapus_user/$tu->id_user") ?>" onclick="return confirm('Yakin Mau Dihapus Datanya ???')" title="Hapus Data" class="red"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
                                                                        
                                                                        <?php if($tu->status == 'aktif'): ?>
                                                                        <a href="<?php echo base_url("chat/nonaktif_user/$tu->id_user") ?>" title="Nonaktifkan User" class="red"><i class="ace-icon fa fa-ban bigger-130"></i></a>
                                                                         <?php else: ?>
                                                                        <a href="<?php echo base_url("chat/aktif_user/$tu->id_user") ?>" title="Atifkan User" class="green"><i class="ace-icon fa fa-check-square-o bigger-130"></i></a>
                                                                        <?php endif ?>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                            
                                            </div>
                                            <!-- /.widget-main -->
                                        </div>
                                        <!-- /.widget-body -->

                                            <div class="modal-footer">
                                                <div class="center">
                                                    <a href="<?php echo base_url() ?>chat/index" class="btn btn-sm btn-primary btn-danger btn-round">
                                                        <i class="icon-on-left ace-icon fa fa-arrow-left"></i>
                                                        <span class="bigger-110">Kembali</span>
                                                    </a>
                                                </div>
                                            </div><!-- /.modal-footer -->
                                    </div>
                                    <!-- /.widget-box -->
                                </div>
                                <!-- /.col -->
                                                                        </div>

                                <!-- PAGE CONTENT ENDS -->
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

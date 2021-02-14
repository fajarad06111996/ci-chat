<body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">
                    <!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="hr32"></div>
                            
                            <div class="hr32"></div>
                            
                            <div class="row">   

                                <div class="col-sm-3"></div>      
                                                     
                                <div class="col-sm-6">
                                    <div class="widget-box">
                                        <div class="widget-header">
                                        
                                            <?php if($status == 't_aktif'){echo 'Status Akun Anda Tidak Aktif, Silahkan Hubungi Pihak Berwajib!!!';} ?>
                                            <div class="pull-right">
                                                <div class="hr6"></div>
                                                <div class="right">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-sm btn-primary btn-white btn-round" aria-expanded="false">
                                                        <?php echo ucfirst($user); ?>
                                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-info dropdown-menu-right">
                                                        <table>
                                                            <tr>
                                                                <li>
                                                                    <a href="#"><i class="ace-icon fa fa-user"></i> <?php echo ucfirst($akses); ?></a>
                                                                </li>
                                                            </tr>
                                                            <tr>
                                                                <li>
                                                                    <a href="#"><?php if($status == 'aktif'){echo '<i class="ace-icon fa fa-circle green"></i> Aktif';}else{echo '<i class="ace-icon fa fa-circle red"></i> Tidak Aktif !!!';} ?></a>
                                                                </li>
                                                            </tr>
                                                            <?php if($akses == 'admin'){ ?>
                                                                <tr>
                                                                    <li>
                                                                        
                                                                        <a href="<?php echo base_url('chat/tampil_user'); ?>"><i class="ace-icon fa fa-users"></i> Data User</a>
                                                                    </li>
                                                                </tr>
                                                            <?php } ?>
                                                            <tr>
                                                                <li>
                                                                    
                                                                    <a href="<?php echo base_url() ?>login/logout"><i class="ace-icon fa fa-power-off"></i> Logout</a>
                                                                </li>
                                                            </tr>
                                                        </table>
                                                    </ul>
                                                </div><!--./btn-group -->
                                            </div><!--./pull-right-->
                                        </div><!--./widget-header -->

                                            <!-- ISI CHAT -->
                                             <!-- ISI CHAT -->
                                              <!-- ISI CHAT -->
                                               <!-- ISI CHAT -->

                                   

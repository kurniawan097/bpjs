
<section class='content-header'>
    <h1>
        Pegawai
        <small>Daftar Pegawai</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-user'></i>Pegawai</a></li>
        <li class='active'>Daftar Pegawai</li>
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-primary'>  
                
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Nama Pegawai</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($pegawai_data as $pegawai) {
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $pegawai->nama_pegawai ?></td>
                                    <td><?php echo $pegawai->jabatan ?></td>
                                    <td style="text-align:center" width="140px">
                                        <?php
                                        echo anchor(site_url('pegawai/read/'.$pegawai->id_pegawai),'<i class="fa fa-eye"></i>',array('data-toggle'=>'tooltip','title'=>'detail','class'=>'btn btn-info btn-sm')); 
                                        echo '  '; 
                                        echo anchor(site_url('pegawai/update/' . $pegawai->id_pegawai), '<i class="fa fa-pencil-square-o"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit', 'class' => 'btn btn-info btn-sm')); 
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>                    
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#mytable").dataTable();
    });
</script>

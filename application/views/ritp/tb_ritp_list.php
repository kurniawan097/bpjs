
<section class='content-header'>
    <h1>
        Program Pelayanan Kesehatan
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-th-list'></i>RITP</a></li>
        <li class='active'>Program Pelayanan Kesehatan</li>
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-primary'>  
                <div class='box-header with-border'>
                    <h3 class='box-title'><?php echo anchor('ritp/create/', '<i class="glyphicon glyphicon-plus"></i>Tambah Program', array('class' => 'btn btn-primary btn-sm')); ?>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Kode program</th>
                                <th>Nama program</th>
                                <th>Uraian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($ritp_data as $ritp) {
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $ritp->kode_program ?></td>
                                    <td><?php echo $ritp->nama_program ?></td>
                                    <td><?php echo $ritp->uraian ?></td>
                                    <td style="text-align:center" width="140px">
                                        <?php
                                        echo anchor(site_url('ritp/update/' . $ritp->id), '<i class="fa fa-pencil-square-o"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit', 'class' => 'btn btn-info btn-sm'));
                                         echo '  '; 
                                        echo anchor('ritp/delete/' . $ritp->id, '<i class="btn-sm btn-info glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete"></i>', array('onclick' => "return confirm('Data Akan di Hapus?')"));
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

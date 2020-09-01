
<section class='content-header'>
    <h1>
        Jejaring
        <small>Daftar Jejaring</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Jejaring</a></li>
        <li class='active'>Daftar Jejaring</li>
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-primary'>  
                <div class='box-header with-border'>
                    <h3 class='box-title'><?php echo anchor('jejaring/create/', '<i class="glyphicon glyphicon-plus"></i>Tambah Jejaring', array('class' => 'btn btn-primary btn-sm')); ?>
                        <?php echo anchor(site_url('jejaring/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Nama Jejaring</th>
                                <th>No Rekening</th>
                                <th>No NPWP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($jejaring_data as $jejaring) {
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $jejaring->nama_jejaring ?></td>
                                    <td><?php echo $jejaring->norek ?></td>
                                    <td><?php echo $jejaring->nonpwp ?></td>
                                    <td style="text-align:center" width="140px">
                                        <?php
                                        echo anchor(site_url('jejaring/update/' . $jejaring->id_jejaring), '<i class="fa fa-pencil-square-o"></i>', array('data-toggle' => 'tooltip', 'title' => 'edit', 'class' => 'btn btn-info btn-sm')); 
                                        echo '  ';
                                        echo anchor('jejaring/delete/' . $jejaring->id_jejaring, '<i class="btn-sm btn-info glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete"></i>', array('onclick' => "return confirm('Data Akan di Hapus?')"));
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

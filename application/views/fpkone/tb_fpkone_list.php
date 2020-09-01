
<section class='content-header'>
    <h1>
        Formulir Pengajuan Klaim (FPK) Non Jejaring
    </h1>
    </section>        
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-primary'>  
                <div class='box-header with-border'>
                    <h3 class='box-title'><?php echo anchor('fpkone/create/', '<i class="glyphicon glyphicon-pencil"></i>  Membuat FPK', array('class' => 'btn btn-primary btn-sm')); ?>
                        
                </div><!-- /.box-header -->
                <div class='box-body table-responsive'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                           <tr>
                                <th width="60px">No</th>
                                <th>No Reg. Masuk</th>
                                <th>Nama Faskes</th>
                                <th>Pelayanan</th>
                                <th>Jumlah</th>
                                <th>Bulan Pelayanan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($fpkone_data as $fpkone) {
                                ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $fpkone->noreg_masuk ?></td>
                                    <td><?php echo $fpkone->nama_faskes ?></td>
                                    <td><?php echo $fpkone->uraian_prog ?></td>
                                    <td><?php echo $fpkone->kasus_ajukan ?></td>
                                    <td><?php echo $fpkone->bulan_pelayanan ?></td>
                                    <td style="text-align:center" width="140px">
                                        <?php
                                         
                                        echo anchor('fpkone/delete/' . $fpkone->id_fpkone, '<i class="btn-sm btn-info glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete"></i>', array('onclick' => "return confirm('Data Akan di Hapus?')"));
                                        echo '  '; 
                                        echo anchor('fpkone/excel/'. $fpkone->id_fpkone, ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); 
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

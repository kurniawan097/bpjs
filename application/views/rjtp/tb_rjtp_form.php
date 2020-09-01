<section class='content-header'>
    <h1>
    Tambah Program Pelayanan
       
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-th-list'></i>rjtp</a></li>
        <li class='active'>Tambah Program Pelayanan</li> 
    </ol>
</section>        
<section class='content'>
    <div class='row'>
        <!-- left column -->
        <div class='col-md-12'>
            <!-- general form elements -->
            <div class='box box-primary'>
                <div class='box-header'>
                    <div class='col-md-5'>
                        <form action="<?php echo $action; ?>" method="post">
                            <div class='box-body'>
                                <div class='form-group'>Kode Program <?php echo form_error('kode_program') ?> 
                                    <input type="text" class="form-control" name="kode_program" id="kode_program" placeholder="Kode Program" value="<?php echo $kode_program; ?>" /> 
                                </div>
                                <div class='form-group'>Nama Program <?php echo form_error('nama_program') ?>
                                    <input type="text" class="form-control" name="nama_program" id="nama_program" placeholder="Nama Program" value="<?php echo $nama_program; ?>" />
                                </div> 
                                <div class='form-group'>Uraian <?php echo form_error('uraian') ?>
                                    <input type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian" value="<?php echo $uraian; ?>" />
                                </div> 
                                <div class='form-group'>Kode akun <?php echo form_error('kode_akun') ?>
                                    <input type="text" class="form-control" name="kode_akun" id="kode_akun" placeholder="Kode Akun" value="<?php echo $kode_akun; ?>" />
                                </div> 
                                                              
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="pel" value="<?php echo $pel='RJTP'; ?>" />
                                <input type="hidden" name="id_pelayanan" value="<?php echo $id_pelayanan='2'; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('rjtp') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
<section class='content-header'>
    <h1>
    Pegawai
        <small>Ubah Data Pegawai</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-user'></i>Pegawai</a></li>
        <li class='active'>Ubah Data Pegawai</li> 
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
                                <div class='form-group'>Nama Pegawai<?php echo form_error('nama_pegawai') ?>
                                    <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" value="<?php echo $nama_pegawai; ?>" />
                                </div> 
                                <div class='form-group'>Jabatan <?php echo form_error('jabatan') ?>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
                                </div>                               
                                
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('pegawai') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
<section class='content-header'>
    <h1>
    Kab. Kampar
        <small>Tambah Faskes</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Faskes</a></li>
        <li class='active'>Tambah Faskes</li> 
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
                                <div class='form-group'>Kode Faskes <?php echo form_error('kode_faskes') ?> 
                                    <input type="text" class="form-control" name="kode_faskes" id="kode_faskes" placeholder="Kode Faskes" value="<?php echo $kode_faskes; ?>" /> 
                                </div>
                                <div class='form-group'>Nama Faskes <?php echo form_error('nama_faskes') ?>
                                    <input type="text" class="form-control" name="nama_faskes" id="nama_faskes" placeholder="Nama Faskes" value="<?php echo $nama_faskes; ?>" />
                                </div> 
                                <div class='form-group'>Alamat <?php echo form_error('alamat') ?>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
                                </div>                               
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id_daerah" value="<?php echo $id_daerah='2'; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('kampar') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
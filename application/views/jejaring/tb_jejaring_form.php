<section class='content-header'>
    <h1>
    Jejaring
        <small>Tambah Jejaring</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-suitcase'></i>Jejaring</a></li>
        <li class='active'>Tambah Jejaring</li> 
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
                                <div class='form-group'>Nama Jejaring <?php echo form_error('nama_jejaring') ?> 
                                    <input type="text" class="form-control" name="nama_jejaring" id="nama_jejaring" placeholder="Nama Jejaring" value="<?php echo $nama_jejaring; ?>" /> 
                                </div>
                                <div class='form-group'>No Rekening <?php echo form_error('norek') ?>
                                    <input type="text" class="form-control" name="norek" id="norek" placeholder="No Rekening" value="<?php echo $norek; ?>" />
                                </div> 
                                <div class='form-group'>No NPWP <?php echo form_error('nonpwp') ?>
                                    <input type="text" class="form-control" name="nonpwp" id="nonpwp" placeholder="No NPWP" value="<?php echo $nonpwp; ?>" />
                                </div>                               
                                
                            </div>
                            <div class='box-footer'>
                                <input type="hidden" name="id_jejaring" value="<?php echo $id_jejaring; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('jejaring') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</section><!-- /.content -->
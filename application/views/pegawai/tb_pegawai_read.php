
<section class='content-header'>
	<h1>
		Pegawai
        <small>Detail Data Pegawai</small>
    </h1>
    <ol class='breadcrumb'>
        <li><a href='#'><i class='fa fa-user'></i>Pegawai</a></li>
        <li class='active'>Detail Data Pegawai</li>
	</ol>
</section>   
<section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box box-primary'>
                <div class='box-header'>
                <h3 class='box-title'> Data Pegawai</h3>
        <table class="table table-bordered">
      <tr><td>Nama Pegawai</td><td><?php echo $nama_pegawai; ?></td></tr>
      <tr><td>Jabatan</td><td><?php echo $jabatan; ?></td></tr>
	    
	</table>
        <div class='box-footer'>
        <a href="<?php echo site_url('pegawai') ?>" class="btn btn-primary">Back</a>
        </div>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
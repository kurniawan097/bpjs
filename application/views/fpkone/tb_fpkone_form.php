<section class='content-header'>
    <h1>
        Formulir Pengajuan Klaim (FPK)
        
    </h1>
   
</section>        
<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
<section class='content'>
    <div class='row'>
        <!-- left column -->
        <div class='col-md-12'>
            <!-- general form elements -->
            <div class='box box-primary'>
                <div class='box-header'>
                    <div class='col-md-12'>
                        <form action="<?php echo $action; ?>" method="post">
                            <div class='box-body'>
                                <div class='form-group'>
                                    <div class="row">
                                    <div class="col-sm-2"><label>Kode Faskes </label><?php echo form_error('kode_faskes') ?>
                                    <input type="text" class="form-control" name="kode_faskes" id="kode_faskes" placeholder="Kode Faskes" value="<?php echo $kode_faskes; ?>" />
                                </div>
                               <div class="col-sm-4"><label>Nama Faskes </label><?php echo form_error('nama_faskes') ?>
                                    <input type="text" class="form-control" name="nama_faskes" id="nama_faskes" placeholder="Nama Faskes" value="<?php echo $nama_faskes; ?>" >
                                </div>
                                <div class='col-sm-2'><label>Bulan Pelayanan</label> <?php echo form_error('bulan_pelayanan') ?>
                                    <input type="text" class="form-control" name="bulan_pelayanan" id="bulan_pelayanan" placeholder="Bulan Pelayanan" value="<?php echo $bulan_pelayanan; ?>" />
                                </div>
                                </div>
                                </div>
                                <div class='form-group'>
                                    <div class="row">
                                    <div class="col-sm-2"><label>Tanggal Masuk </label><?php echo form_error('tgl_masuk') ?>
                                    <input type="datetime" class="form-control datepicker" name="tgl_masuk" data-date-format="dd/mm/yyyy" id="datetimepicker" placeholder="Tanggal/Bulan/Tahun" value="<?php echo date('d/m/Y') ?>" />
                                </div>
                                <div class="col-sm-2"><label>Tanggal Terima Yankes </label><?php echo form_error('tgl_yankes') ?>
                                    <input type="datetime" class="form-control datepicker" name="tgl_yankes" data-date-format="dd/mm/yyyy" id="datetimepicker" placeholder="Tanggal/Bulan/Tahun" value="<?php echo date('d/m/Y') ?>" />
                                </div>
                                <div class="col-sm-2"><label>No. Reg. Masuk</label> <?php echo form_error('noreg_masuk') ?>
                                    <input type="text" class="form-control" name="noreg_masuk" id="noreg_masuk" placeholder="No Reg Masuk" value="<?php echo $noreg_masuk ?>" />
                                </div>
                                
                                <div class="col-sm-2"><label>No. Reg. Klaim Yankes</label> <?php echo form_error('noreg_yankes') ?>
                                    <input type="text" class="form-control" name="noreg_yankes" id="noreg_yankes" placeholder="No Reg Klaim Yankes" value="<?php echo $noreg_yankes; ?>" />
                                </div>
                                </div>
                                </div>
                               
                                <div class='form-group'>
                                    <div class="row">
                                    <div class="col-sm-2"><label>Uraian </label><?php echo form_error('uraian_prog') ?>
                                    <input type="text" class="form-control" name="uraian_prog" id="uraian" placeholder="Uraian" value="<?php echo $uraian_prog; ?>" />
                                </div> 
                                    <div class="col-sm-4"><label>Nama Program </label><?php echo form_error('nama_program') ?>
                                    <input type="text" class="form-control" name="nama_program" id="nama_program" placeholder="Nama Program" value="<?php echo $nama_program; ?>" />
                                </div> 
                                <div class="col-sm-2"><label>Kode Program </label><?php echo form_error('kode_program') ?>
                                    <input type="text" class="form-control" name="kode_program" id="kode_program" placeholder="Kode Program" value="<?php echo $kode_program; ?>" />
                                </div> 
                                </div>
                                </div>

                                <div class='form-group'>
                                    <div class="row">
                                <div class='col-sm-2'><label>Jenis Pelayanan </label><?php echo form_error('jenis_pelayanan') ?>
                                    <input type="text" class="form-control sc-input-required sc-select" name="jenis_pelayanan" id="jenis_pelayanan" placeholder="Jenis Pelayanan" value="<?php echo $jenis_pelayanan; ?>" /> 
                                    
                                </div>
                                <div class='col-sm-3'><label>Kode Akun</label> <?php echo form_error('kode_akun') ?>
                                    <input type="text" class="form-control" name="kode_akun" id="kode_akun" placeholder="Kode Akun" value="<?php echo $kode_akun; ?>" />
                                </div>
                                </div>
                                </div> 
                                
                                <div class='form-group'>
                                    <div class="row">
                                    <div class="col-sm-1"><label>Diajukan</label> <?php echo form_error('kasus_ajukan') ?>
                                    <input type="text" class="form-control" name="kasus_ajukan" id="kasus_ajukan" placeholder="0" value="<?php echo $kasus_ajukan; ?>" />
                                </div> 
                                <div class="col-sm-3"><label>Jumlah Biaya</label> <?php echo form_error('jumlah_ajukan') ?>
                                    <input type="text" class="form-control" name="jumlah_ajukan" id="jumlah_ajukan" placeholder="Jumlah Biaya yang Diajukan" value="<?php echo $jumlah_ajukan; ?>" />
                                </div> 
                                <div class="col-sm-1"><label>Disetujui</label><?php echo form_error('kasus_setuju') ?>
                                    <input type="text" class="form-control" name="kasus_setuju" id="kasus_setuju" placeholder="0" value="<?php echo $kasus_setuju; ?>" />
                                </div>
                                <div class="col-sm-3"><label>Jumlah Biaya</label> <?php echo form_error('jumlah_setuju') ?>
                                    <input type="text" class="form-control" name="jumlah_setuju" id="jumlah_setuju" placeholder="Jumlah Biaya yang Disetujui" value="<?php echo $jumlah_setuju; ?>" />
                                </div>
                                </div>
                                </div>
                                   
                        <div class="row-fluid">
            <div class="span6">
                
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th width="300px">Nama Peserta</th>
                                <th width="230px">Noka</th>
                                <th width="150px">Tanggal Masuk</th>
                                <th width="150px">Tanggal Keluar</th>
                                <th width="200px">Diajukan</th>
                                <th width="200px">Disetujui</th>
                                <th width="200px">Selisih</th>
                                <th width="200px">Uraian</th>
                                <th width="50px"></th>
                            </tr>
                        </thead>
                        <!--elemet sebagai target append-->
                        <tbody id="itemlist">
                            <tr>
                                <td><input name="nama_peserta[0]" type="text" class="form-control"  id="nama_peserta" placeholder="Nama Peserta" value="<?php echo $nama_peserta; ?>" /></td>
                                <td><input name="noka[0]" type="text" class="form-control" id="noka" placeholder="Noka" value="<?php echo $noka; ?>" /></td>
                                <td><input name="tanggal_masuk[0]" type="datetime" class="form-control datepicker" data-date-format="dd/mm/yyyy" id="datetimepicker" placeholder="12/11/2018" value="<?php echo $tanggal_masuk; ?>" /></td>
                                <td><input name="tanggal_keluar[0]" type="datetime" class="form-control datepicker" data-date-format="dd/mm/yyyy" id="datetimepicker" placeholder="12/11/2018" value="<?php echo $tanggal_keluar; ?>" /></td>
                                <td><input name="diajukan[0]" type="text" class="form-control" id="diajukan" placeholder="Diajukan" value="<?php echo $diajukan; ?>" /></td>
                                <td><input name="disetujui[0]" type="text" class="form-control" id="disetujui" placeholder="Disetujui" value="<?php echo $disetujui; ?>" /></td>
                                <td><input name="selisih[0]" type="text" class="form-control" id="selisih" placeholder="Selisih" value="<?php echo $selisih; ?>" /></td>
                                <td><input name="uraian[0]" type="text" class="form-control" id="uraian" placeholder="Uraian" value="<?php echo $uraian; ?>" /></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                <td>
                                    <button class="btn btn-small btn-default" onclick="additem(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                    
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                
                     </div>
                       <div class='box-footer'>

                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('fpkone') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#kode_faskes').on('input',function(){
                 
                var kode_faskes=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('fpktwo/get_faskes')?>",
                    dataType : "JSON",
                    data : {kode_faskes: kode_faskes},
                    cache:false,
                    success: function(data){
                        $.each(data,function(kode_faskes, nama_faskes){
                            $('[name="nama_faskes"]').val(data.nama_faskes);
                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#nama_jejaring').on('input',function(){
                 
                var nama_jejaring=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('fpktwo/get_jejaring')?>",
                    dataType : "JSON",
                    data : {nama_jejaring: nama_jejaring},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nama_jejaring, norek, nonpwp){
                            $('[name="norek"]').val(data.norek);
                            $('[name="nonpwp"]').val(data.nonpwp);
                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#uraian').on('input',function(){
                 
                var uraian=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('fpktwo/get_program')?>",
                    dataType : "JSON",
                    data : {uraian: uraian},
                    cache:false,
                    success: function(data){
                        $.each(data,function(uraian, nama_program, kode_program, kode_akun, pel){
                            $('[name="kode_program"]').val(data.kode_program);
                            $('[name="nama_program"]').val(data.nama_program);
                            $('[name="kode_akun"]').val(data.kode_akun);
                            $('[name="jenis_pelayanan"]').val(data.pel);
                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
    </script>
    <script>
            var i = 1;
            function additem() {
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var nama = document.createElement('td');
                var no = document.createElement('td');
                var tglm = document.createElement('td');
                var tglk = document.createElement('td');
                var dia = document.createElement('td');
                var dis = document.createElement('td');
                var sel = document.createElement('td');
                var ura = document.createElement('td');
                var aksi = document.createElement('td');

//                meng append element
                itemlist.appendChild(row);
                row.appendChild(nama);
                row.appendChild(no);
                row.appendChild(tglm);
                row.appendChild(tglk);
                row.appendChild(dia);
                row.appendChild(dis);
                row.appendChild(sel);
                row.appendChild(ura);
                row.appendChild(aksi);

//                membuat element input
                var nama_peserta = document.createElement('input');
                nama_peserta.setAttribute('name', 'nama_peserta[' + i + ']');
                nama_peserta.setAttribute('class', 'form-control');

                var noka = document.createElement('input');
                noka.setAttribute('name', 'noka[' + i + ']');
                noka.setAttribute('class', 'form-control');

                var tanggal_masuk = document.createElement('input');
                tanggal_masuk.setAttribute('name', 'tanggal_masuk[' + i + ']');
                tanggal_masuk.setAttribute('class', 'form-control');

                var tanggal_keluar = document.createElement('input');
                tanggal_keluar.setAttribute('name', 'tanggal_keluar[' + i + ']');
                tanggal_keluar.setAttribute('class', 'form-control');

                var diajukan = document.createElement('input');
                diajukan.setAttribute('name', 'diajukan[' + i + ']');
                diajukan.setAttribute('class', 'form-control');

                var disetujui = document.createElement('input');
                disetujui.setAttribute('name', 'disetujui[' + i + ']');
                disetujui.setAttribute('class', 'form-control');

                var selisih = document.createElement('input');
                selisih.setAttribute('name', 'selisih[' + i + ']');
                selisih.setAttribute('class', 'form-control');

                var uraian = document.createElement('input');
                uraian.setAttribute('name', 'uraian[' + i + ']');
                uraian.setAttribute('class', 'form-control');

                var hapus = document.createElement('span');

                nama.appendChild(nama_peserta);
                no.appendChild(noka);
                tglm.appendChild(tanggal_masuk);
                tglk.appendChild(tanggal_keluar);
                dia.appendChild(diajukan);
                dis.appendChild(disetujui);
                sel.appendChild(selisih);
                ura.appendChild(uraian);
                aksi.appendChild(hapus);

                hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i></button>';
//                Aksi Delete
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };

                i++;
            }
        </script>
</section><!-- /.content -->

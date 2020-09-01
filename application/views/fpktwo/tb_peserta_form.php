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
                        <form action="<?php echo $action1; ?>" method="post">
                            <div class='box-body'>
                                <div class='form-group'>
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
                                <td><input name="tanggal_masuk[0]" type="datetime" class="form-control datepicker" data-date-format="yyyy-mm-dd" id="datetimepicker" placeholder="2018-11-12" value="<?php echo $tanggal_masuk; ?>" /></td>
                                <td><input name="tanggal_keluar[0]" type="datetime" class="form-control datepicker" data-date-format="yyyy-mm-dd" id="datetimepicker" placeholder="2018-11-12" value="<?php echo $tanggal_keluar; ?>" /></td>
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

                                <button type="submit" class="btn btn-primary"><?php echo $button1 ?></button> 
                                <a href="<?php echo site_url('fpkone') ?>" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
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

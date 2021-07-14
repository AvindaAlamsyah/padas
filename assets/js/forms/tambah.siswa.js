(function( $ ) {
    // 'use strict';

    /*
    Deklarasi Fungsi
    */ 
   var countPrestasi = 0;     
   var countBeasiswa = 0;  
    
    function change_select(sumber, tujuan) {
        sumber.on('change', function() {
            if (sumber.val() =="") {
                tujuan.val('');
                tujuan.prop('disabled', true);
            } else {
                tujuan.prop('disabled', false);
            }
        });

    }

    function change_radio(sumber, tujuan) {
        $(sumber).change(function(){
            var value = $( sumber+':checked' ).val();
            if (value == 1) {
                tujuan.prop('disabled', false);
                tujuan.prop('required', true);
            } else {
                tujuan.prop('required', false);
                tujuan.val('');
                tujuan.focus();
                tujuan.closest('.form-group').removeClass('has-error');
                tujuan.prop('disabled', true);
            }
        });
    }
    
    function new_input(wrapper, button, input, count) {
        $(button).click(function(e){
            let a = input;
            e.preventDefault();
            a = a.replaceAll('[]','['+count+']');
            count++;
            $(wrapper).append(a);
        });
        
        $(wrapper).on("click",".del-data", function(e){
            e.preventDefault(); $(this).parent('div').remove();
            count--;
        })
    }
    
    $("select").change(function() {
        if (this.value != null || this.value != "") {
            this.focus();
            $(this).closest('.form-group').removeClass('has-error');
        } else {
            console.log(this.value);
        }
    });

    /*
    Implementasi Fungsi
    */

    //data pribadi
    change_select($('select[name="kecamatan"]'), $('select[name="kel-desa"]'));
    change_select($('select[name="kel-desa"]'), $('input[name="dusun"]'));    
    change_radio('input[name=kps]',$('#no-kps'));
    change_radio('input[name=pkh]',$('#no-pkh'));
    change_radio('input[name=kip]',$('#no-kip'));
    change_radio('input[name=kip]',$('#nama-kip'));
    change_radio('input[name="kewarganegaraan"]',$('#wna'));
    change_radio('input[name=pip]',$('select[name="alasan-pip"'));
    

    //rincian data
    change_radio('input[name=jarak-sekolah]',$('input[name=sebutkan-jarak]'));

    var html_prestasi = '<div>'+
        '<hr class="mt-md mb-md">'+
        '<div class="row" style="margin-bottom: 20px;">'+
            '<div class="col-sm-4">'+
                '<div class="form-group">'+
                    '<label class="col-sm-3 control-label" for="jenis-prestasi">Jenis</label>'+
                    '<div class="col-sm-9">'+
                        '<select name="jenis-prestasi[]" data-plugin-selectTwo class="form-control populate" required>'+
                            '<option value>Pilih Jenis Prestasi</option>'+
                            '<option value="1">Sains</option>'+
                            '<option value="2">Seni</option>'+
                            '<option value="3">Olahraga</option>'+
                            '<option value="4">Lain-lain</option>'+
                        '</select>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-4">'+
                '<div class="form-group">'+
                    '<label class="col-sm-3 control-label" for="tingkat-prestasi">Tingkat</label>'+
                    '<div class="col-sm-9">'+
                        '<select name="tingkat-prestasi[]" data-plugin-selectTwo class="form-control populate" required>'+
                            '<option value>Pilih Tinggat Prestasi</option>'+
                            '<option value="1">Sekolah</option>'+
                            '<option value="2">Kecamatan</option>'+
                            '<option value="3">Kabupaten</option>'+
                            '<option value="4">Provinsi</option>'+
                            '<option value="5">Nasional</option>'+
                            '<option value="6">Internasional</option>'+
                        '</select>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-4">'+
                '<div class="form-group">'+
                    '<label class="col-sm-3 control-label" for="tahun-prestasi">Tahun</label>'+
                    '<div class="col-sm-9">'+
                        '<input type="text" class="form-control" name="tahun-prestasi[]" required minlength="4" maxlength="4" digits="true">'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
        '<div class="form-group">'+
            '<label class="col-sm-3 control-label" for="nama-prestasi">Nama Prestasi</label>'+
            '<div class="col-sm-9">'+
                '<input type="text" class="form-control" name="nama-prestasi[]" required>'+
                '<small id="nama-prestasi" class="form-text text-muted">Nama kegiatan/acara dari prestasi yang pernah diraih oleh peserta didik. <mark>Contoh: Lomba Cerdas Cermat Bahasa Indonesia Tingkat SMP</mark>. Sesuaikan menurut piagam yang diperoleh.</small>'+
            '</div>'+
        '</div>'+
        '<div class="form-group">'+
            '<label class="col-sm-3 control-label" for="peringkat">Peringkat</label>'+
            '<div class="col-sm-9">'+
                '<input type="text" class="form-control" name="peringkat[]" digits="true" required>'+
                '<small id="peringkat" class="form-text text-muted">Diisi angka peringkat prestasi yang pernah diraih oleh peserta didik.</small>'+
            '</div>'+
        '</div>'+
        '<div class="form-group">'+
            '<label class="col-sm-3 control-label" for="penyelenggara">Penyelenggara</label>'+
            '<div class="col-sm-9">'+
                '<input type="text" class="form-control" name="penyelenggara[]" required>'+
                '<small id="nama-prestasi" class="form-text text-muted">Nama penyelenggara/panitia kegiatan dari prestasi yang pernah diraih oleh peserta didik. <mark>Contoh: Panitia O2SN dan FL2SN Kab. Bengkayang</mark>. Sesuaikan menurut piagam yang diperoleh.</small>'+
            '</div>'+
        '</div>'+
        '<button type="button" class="mb-xs mt-xs mr-xs btn btn-warning del-data"><i class="fa fa-minus-square"></i> Hapus Data Ini</button>'+
        '<hr class="mt-md mb-md">'+
    '</div>';
    new_input($(".panel-new-prestasi"),$("#new-prestasi"), html_prestasi, countPrestasi);

    var html_beasiswa = '<div>'+
        '<hr class="mt-md mb-md">'+
        '<div class="row" style="margin-bottom: 20px;">'+
            '<div class="col-sm-4">'+
                '<div class="form-group">'+
                    '<label class="col-sm-3 control-label" for="jenis-beasiswa">Jenis</label>'+
                    '<div class="col-sm-9">'+
                        '<select name="jenis-beasiswa[]" data-plugin-selectTwo class="form-control populate" required>'+
                            '<option value>Pilih Jenis Beasiswa</option>'+
                            '<option value="1">Anak berprestasi</option>'+
                            '<option value="2">Anak Miskin</option>'+
                            '<option value="3">Pendidikan</option>'+
                            '<option value="4">Unggulan</option>'+
                            '<option value="5">Lain-lain</option>'+
                        '</select>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-4">'+
                '<div class="form-group">'+
                    '<label class="col-sm-5 control-label" for="tahun-mulai">Tahun Mulai</label>'+
                    '<div class="col-sm-7">'+
                        '<input type="text" class="form-control" name="tahun-mulai[]" required minlength="4" maxlength="4" digits="true">'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-4">'+
                '<div class="form-group">'+
                    '<label class="col-sm-5 control-label" for="tahun-selesai">Tahun Selesai</label>'+
                    '<div class="col-sm-7">'+
                        '<input type="text" class="form-control" name="tahun-selesai[]" required minlength="4" maxlength="4" digits="true">'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
        '<div class="form-group">'+
            '<label class="col-sm-3 control-label" for="keterangan">Keterangan</label>'+
            '<div class="col-sm-9">'+
                '<input type="text" class="form-control" name="keterangan-beasiswa[]" required>'+
                '<small id="keterangan-beasiswa" class="form-text text-muted">Keterangan terkait beasiswa yang pernah diterima oleh peserta didik. Misalnya dapat diisi dengan nama beasiswa, seperti <mark>Beasiswa Murid Berprestasi Tahun 2017</mark>, atau keterangan lain yang relevan.</small>'+
            '</div>'+
        '</div>'+
        '<button type="button" class="mb-xs mt-xs mr-xs btn btn-warning del-data"><i class="fa fa-minus-square"></i> Hapus Data Ini</button>'+
        '<hr class="mt-md mb-md">'+
    '</div>';
    new_input($(".panel-new-beasiswa"),$("#new-beasiswa"), html_beasiswa, countBeasiswa);
}).apply( this, [ jQuery ]);
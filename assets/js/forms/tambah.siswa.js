(function( $ ) {
    'use strict';

    /*
    Deklarasi Fungsi
    */
    function change_select(sumber, tujuan) {
        sumber.on('change', function() {
            if (sumber.val() != null || sumber.val() != "") {
                tujuan.prop('disabled', false);
            } else {
                tujuan.prop('disabled', true);
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
    change_radio('input[name=kps-pkh]',$('#no-kps-pkh'));
    change_radio('input[name=kip]',$('#no-kip'));
    change_radio('input[name=kip]',$('#nama-kip'));
    change_radio('input[name=pip]',$('select[name="alasan-pip"'));

    

    //rincian data
    
}).apply( this, [ jQuery ]);
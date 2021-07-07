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
            } else {
                tujuan.val('');
                tujuan.focus();
                tujuan.closest('.form-group').removeClass('has-error');
                tujuan.prop('disabled', true);
            }
        });
    }

    /*
    Implementasi Fungsi
    */
    change_select($('#kecamatan'), $('#kel-desa'));
    change_select($('#kel-desa'), $('#dusun'));    

    change_radio('input[name=kps-pkh]',$('#no-kps-pkh'));
    change_radio('input[name=kip]',$('#no-kip'));
    change_radio('input[name=kip]',$('#nama-kip'));
    change_radio('input[name=pip]',$('#alasan-pip'));
    
}).apply( this, [ jQuery ]);
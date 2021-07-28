<?php
function compact_data_pribadi($data_pribadi)
{
    if (empty($data_pribadi)) {
        return;
    }
    $compact_data_pribadi = array();
    $i = 0;
    foreach ($data_pribadi as $value) {
        for ($j = 0; $j < count($compact_data_pribadi); $j++) {
            if ($value["id_siswa"] == $compact_data_pribadi[$j]['id_siswa']) {
                $berkebutuhan_khusus = array(
                    "id_berkebutuhan_khusus" => $value["id_berkebutuhan_khusus"],
                    "berkebutuhan_khusus" => $value["berkebutuhan_khusus"]
                );
                array_push($compact_data_pribadi[$j]["berkebutuhan_khusus"], $berkebutuhan_khusus);
                continue 2;
            }
        }
        $compact_data_pribadi[$i] = array(
            "id_siswa" => $value["id_siswa"],
            "nama" => $value["nama"],
            "nisn" => $value["nisn"],
            "nik" => $value["nik"],
            "tempat_lahir" => $value["tempat_lahir"],
            "tanggal_lahir" => $value["tanggal_lahir"],
            "nomor_kk" => $value["nomor_kk"],
            "nomor_registrasi_akta_lahir" => $value["nomor_registrasi_akta_lahir"],
            "kewarganegaraan" => $value["kewarganegaraan"],
            "nipd" => $value["nipd"],
            "golongan" => $value["golongan"],
            "foto" => $value["foto"],
            "id_gender" => $value["id_gender"],
            "gender" => $value["gender"],
            "id_agama" => $value["id_agama"],
            "agama" => $value["agama"],
            "id_kelas" => $value["id_kelas"],
            "kelas" => $value["kelas"],
        );
        if (!empty($value["id_berkebutuhan_khusus"])) {
            $compact_data_pribadi[$i]["berkebutuhan_khusus"][] = array(
                "id_berkebutuhan_khusus" => $value["id_berkebutuhan_khusus"],
                "berkebutuhan_khusus" => $value["berkebutuhan_khusus"]
            );
        } else {
            $compact_data_pribadi[$i]["berkebutuhan_khusus"] = null;
        }
        $i++;
    }
    return $compact_data_pribadi;
}

function compact_bantuan_tidak_mampu($bantuan_tidak_mampu)
{
    if (empty($bantuan_tidak_mampu)) {
        return;
    }
    $compact_bantuan_tidak_mampu = array();
    $i = 0;
    foreach ($bantuan_tidak_mampu as $value) {
        for ($j = 0; $j < count($compact_bantuan_tidak_mampu); $j++) {
            if ($value["id_siswa"] == $compact_bantuan_tidak_mampu[$j]['id_siswa']) {
                $bantuan_tidak_mampu_lainnya = array(
                    "id_bantuan_tidak_mampu" => $value["id_bantuan_tidak_mampu"],
                    "nama_program" => $value["nama_program"],
                    "bukti" => $value["bukti"],
                );
                array_push($compact_bantuan_tidak_mampu[$j]["bantuan_tidak_mampu_lainnya"], $bantuan_tidak_mampu_lainnya);
                continue 2;
            }
        }
        $compact_bantuan_tidak_mampu[$i] = array(
            "id_siswa" => $value["id_siswa"],
            "id_moda_transportasi" => $value["id_moda_transportasi"],
            "moda_transportasi" => $value["moda_transportasi"],
            "id_kks" => $value["id_kks"],
            "nomor_kks" => $value["nomor_kks"],
            "anak_ke" => $value["anak_ke"],
            "id_kps_pkh" => $value["id_kps_pkh"],
            "nomor_kps_pkh" => $value["nomor_kps_pkh"],
            "id_kip" => $value["id_kip"],
            "nomor_kip" => $value["nomor_kip"],
            "nama_tertera_kip" => $value["nama_tertera_kip"],
            "id_alasan_layak_pip" => $value["id_alasan_layak_pip"],
            "alasan_layak_pip" => $value["alasan_layak_pip"],
            "id_pip" => $value["id_pip"],
            "bank" => $value["bank"],
            "nomor_rekening" => $value["nomor_rekening"],
            "kantor_cabang_pembantu" => $value["kantor_cabang_pembantu"],
            "rekening_atas_nama" => $value["rekening_atas_nama"],
        );
        if (!empty($value["id_bantuan_tidak_mampu"])) {
            $compact_bantuan_tidak_mampu[$i]["bantuan_tidak_mampu_lainnya"][] = array(
                "id_bantuan_tidak_mampu" => $value["id_bantuan_tidak_mampu"],
                "nama_program" => $value["nama_program"],
                "bukti" => $value["bukti"],
            );
        } else {
            $compact_bantuan_tidak_mampu[$i]["bantuan_tidak_mampu_lainnya"] = null;
        }
        $i++;
    }
    return $compact_bantuan_tidak_mampu;
}

function compact_ayah($ayah)
{
    if (empty($ayah)) {
        return;
    }
    $compact_ayah = array();
    $i = 0;
    foreach ($ayah as $value) {
        for ($j = 0; $j < count($compact_ayah); $j++) {
            if (empty($value["id_ayah"])) {
                break;
            }
            if ($value["id_ayah"] == $compact_ayah[$j]['id_ayah']) {
                $berkebutuhan_khusus = array(
                    "id_berkebutuhan_khusus_ayah" => $value["id_berkebutuhan_khusus_ayah"],
                    "berkebutuhan_khusus_ayah" => $value["berkebutuhan_khusus_ayah"],
                );
                array_push($compact_ayah[$j]["berkebutuhan_khusus_ayah"], $berkebutuhan_khusus);
                continue 2;
            }
        }
        $compact_ayah[$i] = array(
            "id_siswa" => $value["id_siswa"],
            "id_ayah" => $value["id_ayah"],
            "nama_ayah" => $value["nama_ayah"],
            "kondisi_ayah" => $value["kondisi_ayah"],
            "nik_ayah" => $value["nik_ayah"],
            "tempat_lahir_ayah" => $value["tempat_lahir_ayah"],
            "tanggal_lahir_ayah" => $value["tanggal_lahir_ayah"],
            "nomor_telepon_seluler_ayah" => $value["nomor_telepon_seluler_ayah"],
            "detail_alamat_ayah" => $value["detail_alamat_ayah"],
            "nomor_rumah_ayah" => $value["nomor_rumah_ayah"],
            "rt_ayah" => $value["rt_ayah"],
            "rw_ayah" => $value["rw_ayah"],
            "dusun_ayah" => $value["dusun_ayah"],
            "kode_pos_ayah" => $value["kode_pos_ayah"],
            "lintang_ayah" => $value["lintang_ayah"],
            "bujur_ayah" => $value["bujur_ayah"],
            "id_desa_ayah" => $value["id_desa_ayah"],
            "desa_ayah" => $value["desa_ayah"],
            "kode_desa_ayah" => $value["kode_desa_ayah"],
            "id_kecamatan_ayah" => $value["id_kecamatan_ayah"],
            "kecamatan_ayah" => $value["kecamatan_ayah"],
            "kode_kecamatan_ayah" => $value["kode_kecamatan_ayah"],
            "id_kabupaten_ayah" => $value["id_kabupaten_ayah"],
            "kabupaten_ayah" => $value["kabupaten_ayah"],
            "kode_kabupaten_ayah" => $value["kode_kabupaten_ayah"],
            "id_provinsi_ayah" => $value["id_provinsi_ayah"],
            "provinsi_ayah" => $value["provinsi_ayah"],
            "kode_provinsi_ayah" => $value["kode_provinsi_ayah"],
            "id_tempat_tinggal_ayah" => $value["id_tempat_tinggal_ayah"],
            "tempat_tinggal_ayah" => $value["tempat_tinggal_ayah"],
            "id_pendidikan_ayah" => $value["id_pendidikan_ayah"],
            "pendidikan_ayah" => $value["pendidikan_ayah"],
            "id_pekerjaan_ayah" => $value["id_pekerjaan_ayah"],
            "pekerjaan_ayah" => $value["pekerjaan_ayah"],
            "id_penghasilan_ayah" => $value["id_penghasilan_ayah"],
            "penghasilan_ayah" => $value["penghasilan_ayah"],
        );
        if (!empty($value["id_berkebutuhan_khusus_ayah"])) {
            $compact_ayah[$i]["berkebutuhan_khusus_ayah"][] = array(
                "id_berkebutuhan_khusus_ayah" => $value["id_berkebutuhan_khusus_ayah"],
                "berkebutuhan_khusus_ayah" => $value["berkebutuhan_khusus_ayah"],
            );
        } else {
            $compact_ayah[$i]["berkebutuhan_khusus_ayah"] = null;
        }
        $i++;
    }
    return $compact_ayah;
}

function compact_ibu($ibu)
{
    if (empty($ibu)) {
        return;
    }
    $compact_ibu = array();
    $i = 0;
    foreach ($ibu as $value) {
        for ($j = 0; $j < count($compact_ibu); $j++) {
            if (empty($value["id_ibu"])) {
                break;
            }
            if ($value["id_ibu"] == $compact_ibu[$j]['id_ibu']) {
                $berkebutuhan_khusus = array(
                    "id_berkebutuhan_khusus_ibu" => $value["id_berkebutuhan_khusus_ibu"],
                    "berkebutuhan_khusus_ibu" => $value["berkebutuhan_khusus_ibu"],
                );
                array_push($compact_ibu[$j]["berkebutuhan_khusus_ibu"], $berkebutuhan_khusus);
                continue 2;
            }
        }
        $compact_ibu[$i] = array(
            "id_siswa" => $value["id_siswa"],
            "id_ibu" => $value["id_ibu"],
            "nama_ibu" => $value["nama_ibu"],
            "kondisi_ibu" => $value["kondisi_ibu"],
            "nik_ibu" => $value["nik_ibu"],
            "tempat_lahir_ibu" => $value["tempat_lahir_ibu"],
            "tanggal_lahir_ibu" => $value["tanggal_lahir_ibu"],
            "nomor_telepon_seluler_ibu" => $value["nomor_telepon_seluler_ibu"],
            "detail_alamat_ibu" => $value["detail_alamat_ibu"],
            "nomor_rumah_ibu" => $value["nomor_rumah_ibu"],
            "rt_ibu" => $value["rt_ibu"],
            "rw_ibu" => $value["rw_ibu"],
            "dusun_ibu" => $value["dusun_ibu"],
            "kode_pos_ibu" => $value["kode_pos_ibu"],
            "lintang_ibu" => $value["lintang_ibu"],
            "bujur_ibu" => $value["bujur_ibu"],
            "id_desa_ibu" => $value["id_desa_ibu"],
            "desa_ibu" => $value["desa_ibu"],
            "kode_desa_ibu" => $value["kode_desa_ibu"],
            "id_kecamatan_ibu" => $value["id_kecamatan_ibu"],
            "kecamatan_ibu" => $value["kecamatan_ibu"],
            "kode_kecamatan_ibu" => $value["kode_kecamatan_ibu"],
            "id_kabupaten_ibu" => $value["id_kabupaten_ibu"],
            "kabupaten_ibu" => $value["kabupaten_ibu"],
            "kode_kabupaten_ibu" => $value["kode_kabupaten_ibu"],
            "id_provinsi_ibu" => $value["id_provinsi_ibu"],
            "provinsi_ibu" => $value["provinsi_ibu"],
            "kode_provinsi_ibu" => $value["kode_provinsi_ibu"],
            "id_tempat_tinggal_ibu" => $value["id_tempat_tinggal_ibu"],
            "tempat_tinggal_ibu" => $value["tempat_tinggal_ibu"],
            "id_pendidikan_ibu" => $value["id_pendidikan_ibu"],
            "pendidikan_ibu" => $value["pendidikan_ibu"],
            "id_pekerjaan_ibu" => $value["id_pekerjaan_ibu"],
            "pekerjaan_ibu" => $value["pekerjaan_ibu"],
            "id_penghasilan_ibu" => $value["id_penghasilan_ibu"],
            "penghasilan_ibu" => $value["penghasilan_ibu"],
        );
        if (!empty($value["id_berkebutuhan_khusus_ibu"])) {
            $compact_ibu[$i]["berkebutuhan_khusus_ibu"][] = array(
                "id_berkebutuhan_khusus_ibu" => $value["id_berkebutuhan_khusus_ibu"],
                "berkebutuhan_khusus_ibu" => $value["berkebutuhan_khusus_ibu"],
            );
        } else {
            $compact_ibu[$i]["berkebutuhan_khusus_ibu"] = null;
        }
        $i++;
    }
    return $compact_ibu;
}

function compact_wali($wali)
{
    if (empty($wali)) {
        return;
    }
    $compact_wali = array();
    $i = 0;
    foreach ($wali as $value) {
        for ($j = 0; $j < count($compact_wali); $j++) {
            if (empty($value["id_wali"])) {
                break;
            }
            if ($value["id_wali"] == $compact_wali[$j]['id_wali']) {
                $berkebutuhan_khusus = array(
                    "id_berkebutuhan_khusus_wali" => $value["id_berkebutuhan_khusus_wali"],
                    "berkebutuhan_khusus_wali" => $value["berkebutuhan_khusus_wali"],
                );
                array_push($compact_wali[$j]["berkebutuhan_khusus_wali"], $berkebutuhan_khusus);
                continue 2;
            }
        }
        $compact_wali[$i] = array(
            "id_siswa" => $value["id_siswa"],
            "id_wali" => $value["id_wali"],
            "nama_wali" => $value["nama_wali"],
            "kondisi_wali" => $value["kondisi_wali"],
            "nik_wali" => $value["nik_wali"],
            "tempat_lahir_wali" => $value["tempat_lahir_wali"],
            "tanggal_lahir_wali" => $value["tanggal_lahir_wali"],
            "nomor_telepon_seluler_wali" => $value["nomor_telepon_seluler_wali"],
            "detail_alamat_wali" => $value["detail_alamat_wali"],
            "nomor_rumah_wali" => $value["nomor_rumah_wali"],
            "rt_wali" => $value["rt_wali"],
            "rw_wali" => $value["rw_wali"],
            "dusun_wali" => $value["dusun_wali"],
            "kode_pos_wali" => $value["kode_pos_wali"],
            "lintang_wali" => $value["lintang_wali"],
            "bujur_wali" => $value["bujur_wali"],
            "id_desa_wali" => $value["id_desa_wali"],
            "desa_wali" => $value["desa_wali"],
            "kode_desa_wali" => $value["kode_desa_wali"],
            "id_kecamatan_wali" => $value["id_kecamatan_wali"],
            "kecamatan_wali" => $value["kecamatan_wali"],
            "kode_kecamatan_wali" => $value["kode_kecamatan_wali"],
            "id_kabupaten_wali" => $value["id_kabupaten_wali"],
            "kabupaten_wali" => $value["kabupaten_wali"],
            "kode_kabupaten_wali" => $value["kode_kabupaten_wali"],
            "id_provinsi_wali" => $value["id_provinsi_wali"],
            "provinsi_wali" => $value["provinsi_wali"],
            "kode_provinsi_wali" => $value["kode_provinsi_wali"],
            "id_tempat_tinggal_wali" => $value["id_tempat_tinggal_wali"],
            "tempat_tinggal_wali" => $value["tempat_tinggal_wali"],
            "id_pendidikan_wali" => $value["id_pendidikan_wali"],
            "pendidikan_wali" => $value["pendidikan_wali"],
            "id_pekerjaan_wali" => $value["id_pekerjaan_wali"],
            "pekerjaan_wali" => $value["pekerjaan_wali"],
            "id_penghasilan_wali" => $value["id_penghasilan_wali"],
            "penghasilan_wali" => $value["penghasilan_wali"],
        );
        if (!empty($value["id_berkebutuhan_khusus_wali"])) {
            $compact_wali[$i]["berkebutuhan_khusus_wali"][] = array(
                "id_berkebutuhan_khusus_wali" => $value["id_berkebutuhan_khusus_wali"],
                "berkebutuhan_khusus_wali" => $value["berkebutuhan_khusus_wali"],
            );
        } else {
            $compact_wali[$i]["berkebutuhan_khusus_wali"] = null;
        }
        $i++;
    }
    return $compact_wali;
}

function compact_kontak_siswa($kontak_siswa)
{
    if (empty($kontak_siswa)) {
        return;
    }
    $compact_kontak_siswa = array();
    $i = 0;
    foreach ($kontak_siswa as $value) {
        for ($j = 0; $j < count($compact_kontak_siswa); $j++) {
            if ($value["id_siswa"] == $compact_kontak_siswa[$j]['id_siswa']) {
                $temp = array(
                    "id_nomor_telepon_seluler" => $value["id_nomor_telepon_seluler"],
                    "nomor_telepon_seluler" => $value["nomor_telepon_seluler"],
                    "id_provider" => $value["id_provider"],
                    "provider" => $value["provider"],
                );
                array_push($compact_kontak_siswa[$j]["nomor_hp"], $temp);
                continue 2;
            }
        }
        $compact_kontak_siswa[$i] = array(
            "id_siswa" => $value["id_siswa"],
            "nomor_telepon_rumah" => $value["nomor_telepon_rumah"],
            "email" => $value["email"],
            "id_whatsapp" => $value["id_whatsapp"],
            "nomor_whatsapp" => $value["nomor_whatsapp"],
            "id_provider_whatsapp" => $value["id_provider_whatsapp"],
            "provider_whatsapp" => $value["provider_whatsapp"],
        );
        if (!empty($value["id_nomor_telepon_seluler"])) {
            $compact_kontak_siswa[$i]["nomor_hp"][] = array(
                "id_nomor_telepon_seluler" => $value["id_nomor_telepon_seluler"],
                "nomor_telepon_seluler" => $value["nomor_telepon_seluler"],
                "id_provider" => $value["id_provider"],
                "provider" => $value["provider"],
            );
        } else {
            $compact_kontak_siswa[$i]["nomor_hp"] = null;
        }
        $i++;
    }
    return $compact_kontak_siswa;
}

function compact_media_sosial($media_sosial)
{
    if (empty($media_sosial)) {
        return;
    }
    $compact_media_sosial = array();
    $i = 0;
    foreach ($media_sosial as $value) {
        for ($j = 0; $j < count($compact_media_sosial); $j++) {
            if ($value["id_siswa"] == $compact_media_sosial[$j]['id_siswa']) {
                $temp = array(
                    "akun" => $value["akun"],
                    "id_media_sosial" => $value["id_media_sosial"],
                    "media_sosial" => $value["media_sosial"],
                );
                array_push($compact_media_sosial[$j]["media_sosial"], $temp);
                continue 2;
            }
        }
        $compact_media_sosial[$i] = array(
            "id_siswa" => $value["id_siswa"],
        );
        if (!empty($value["id_media_sosial"])) {
            $compact_media_sosial[$i]["media_sosial"][] = array(
                "akun" => $value["akun"],
                "id_media_sosial" => $value["id_media_sosial"],
                "media_sosial" => $value["media_sosial"],
            );
        } else {
            $compact_media_sosial[$i]["media_sosial"] = null;
        }
        $i++;
    }
    return $compact_media_sosial;
}

function compact_kontak_darurat($kontak_darurat)
{
    if (empty($kontak_darurat)) {
        return;
    }
    $compact_kontak_darurat = array();
    $i = 0;
    foreach ($kontak_darurat as $value) {
        for ($j = 0; $j < count($compact_kontak_darurat); $j++) {
            if ($value["id_siswa"] == $compact_kontak_darurat[$j]['id_siswa']) {
                $temp = array(
                    "id_kontak_darurat" => $value["id_kontak_darurat"],
                    "nama" => $value["nama"],
                    "hubungan_peserta_didik" => $value["hubungan_peserta_didik"],
                    "nomor_telepon_seluler" => $value["nomor_telepon_seluler"],
                );
                array_push($compact_kontak_darurat[$j]["kontak_darurat"], $temp);
                continue 2;
            }
        }
        $compact_kontak_darurat[$i] = array(
            "id_siswa" => $value["id_siswa"],
        );
        if (!empty($value["id_kontak_darurat"])) {
            $compact_kontak_darurat[$i]["kontak_darurat"][] = array(
                "id_kontak_darurat" => $value["id_kontak_darurat"],
                "nama" => $value["nama"],
                "hubungan_peserta_didik" => $value["hubungan_peserta_didik"],
                "nomor_telepon_seluler" => $value["nomor_telepon_seluler"],
            );
        } else {
            $compact_kontak_darurat[$i]["kontak_darurat"] = null;
        }
        $i++;
    }
    return $compact_kontak_darurat;
}

function compact_data_periodik($data_periodik)
{
    if (empty($data_periodik)) {
        return;
    }
    $compact_data_periodik = array();
    $i = 0;
    foreach ($data_periodik as $value) {
        for ($j = 0; $j < count($compact_data_periodik); $j++) {
            if ($value["id_siswa"] == $compact_data_periodik[$j]['id_siswa']) {
                $saudara_kandung = array(
                    "id_saudara_kandung" => $value["id_saudara_kandung"],
                    "nama" => $value["nama"],
                    "anak_ke" => $value["anak_ke"],
                    "nomor_telepon_seluler" => $value["nomor_telepon_seluler"],
                    "id_gender_saudara_kandung" => $value["id_gender_saudara_kandung"],
                    "gender_saudara_kandung" => $value["gender_saudara_kandung"],
                );
                array_push($compact_data_periodik[$j]["saudara_kandung"], $saudara_kandung);
                continue 2;
            }
        }
        $compact_data_periodik[$i] = array(
            "id_siswa" => $value["id_siswa"],
            "tinggi_badan_cm" => $value["tinggi_badan_cm"],
            "berat_badan_kg" => $value["berat_badan_kg"],
            "jarak_tempat_tinggal_ke_sekolah_m" => $value["jarak_tempat_tinggal_ke_sekolah_m"],
            "waktu_tempuh_ke_sekolah_menit" => $value["waktu_tempuh_ke_sekolah_menit"],
            "jumlah_saudara_kandung" => $value["jumlah_saudara_kandung"],
            "lingkar_kepala_cm" => $value["lingkar_kepala_cm"],
            "ukuran_baju" => $value["ukuran_baju"],
            "ukuran_celana" => $value["ukuran_celana"],
            "ukuran_sepatu" => $value["ukuran_sepatu"],
            "ukuran_topi" => $value["ukuran_topi"],
        );
        if (!empty($value["id_saudara_kandung"])) {
            $compact_data_periodik[$i]["saudara_kandung"][] = array(
                "id_saudara_kandung" => $value["id_saudara_kandung"],
                "nama" => $value["nama"],
                "anak_ke" => $value["anak_ke"],
                "nomor_telepon_seluler" => $value["nomor_telepon_seluler"],
                "id_gender_saudara_kandung" => $value["id_gender_saudara_kandung"],
                "gender_saudara_kandung" => $value["gender_saudara_kandung"],
            );
        } else {
            $compact_data_periodik[$i]["saudara_kandung"] = null;
        }
        $i++;
    }
    return $compact_data_periodik;
}

function compact_prestasi($prestasis)
{
    if (empty($prestasis)) {
        return;
    }
    $compact_prestasi = array();
    $i = 0;
    foreach ($prestasis as $value) {
        for ($j = 0; $j < count($compact_prestasi); $j++) {
            if ($value["id_siswa"] == $compact_prestasi[$j]['id_siswa']) {
                $prestasi = array(
                    "id_prestasi" => $value["id_prestasi"],
                    "nama" => $value["nama"],
                    "tahun" => $value["tahun"],
                    "penyelenggara" => $value["penyelenggara"],
                    "peringkat" => $value["peringkat"],
                    "id_bidang_prestasi" => $value["id_bidang_prestasi"],
                    "bidang_prestasi" => $value["bidang_prestasi"],
                    "id_tingkat_prestasi" => $value["id_tingkat_prestasi"],
                    "tingkat_prestasi" => $value["tingkat_prestasi"],
                );
                array_push($compact_prestasi[$j]["prestasi"], $prestasi);
                continue 2;
            }
        }
        $compact_prestasi[$i] = array(
            "id_siswa" => $value["id_siswa"],
        );
        if (!empty($value["id_prestasi"])) {
            $compact_prestasi[$i]["prestasi"][] = array(
                "id_prestasi" => $value["id_prestasi"],
                "nama" => $value["nama"],
                "tahun" => $value["tahun"],
                "penyelenggara" => $value["penyelenggara"],
                "peringkat" => $value["peringkat"],
                "id_bidang_prestasi" => $value["id_bidang_prestasi"],
                "bidang_prestasi" => $value["bidang_prestasi"],
                "id_tingkat_prestasi" => $value["id_tingkat_prestasi"],
                "tingkat_prestasi" => $value["tingkat_prestasi"],
            );
        } else {
            $compact_prestasi[$i]["prestasi"] = null;
        }
        $i++;
    }
    return $compact_prestasi;
}

function compact_beasiswa($beasiswas)
{
    if (empty($beasiswas)) {
        return;
    }
    $compact_beasiswa = array();
    $i = 0;
    foreach ($beasiswas as $value) {
        for ($j = 0; $j < count($compact_beasiswa); $j++) {
            if ($value["id_siswa"] == $compact_beasiswa[$j]['id_siswa']) {
                $beasiswa = array(
                    "id_beasiswa" => $value["id_beasiswa"],
                    "keterangan" => $value["keterangan"],
                    "tanggal_mulai" => $value["tanggal_mulai"],
                    "tanggal_selesai" => $value["tanggal_selesai"],
                    "id_jenis_beasiswa" => $value["id_jenis_beasiswa"],
                    "jenis_beasiswa" => $value["jenis_beasiswa"],
                );
                array_push($compact_beasiswa[$j]["beasiswa"], $beasiswa);
                continue 2;
            }
        }
        $compact_beasiswa[$i] = array(
            "id_siswa" => $value["id_siswa"],
        );
        if (!empty($value["id_beasiswa"])) {
            $compact_beasiswa[$i]["beasiswa"][] = array(
                "id_beasiswa" => $value["id_beasiswa"],
                "keterangan" => $value["keterangan"],
                "tanggal_mulai" => $value["tanggal_mulai"],
                "tanggal_selesai" => $value["tanggal_selesai"],
                "id_jenis_beasiswa" => $value["id_jenis_beasiswa"],
                "jenis_beasiswa" => $value["jenis_beasiswa"],
            );
        } else {
            $compact_beasiswa[$i]["beasiswa"] = null;
        }
        $i++;
    }
    return $compact_beasiswa;
}

function compact_pilihan_jurusan_saat_ppdb($pilihan_jurusan_saat_ppdb)
{
    if (empty($pilihan_jurusan_saat_ppdb)) {
        return;
    }
    $compact_pilihan_jurusan_saat_ppdb = array();
    $i = 0;
    foreach ($pilihan_jurusan_saat_ppdb as $value) {
        for ($j = 0; $j < count($compact_pilihan_jurusan_saat_ppdb); $j++) {
            if ($value["id_siswa"] == $compact_pilihan_jurusan_saat_ppdb[$j]['id_siswa']) {
                $temp = array(
                    "pilihan_ke" => $value["pilihan_ke"],
                    "id_kompetensi_keahlian" => $value["id_kompetensi_keahlian"],
                    "kompetensi_keahlian" => $value["kompetensi_keahlian"],
                    "akronim" => $value["akronim"],
                );
                array_push($compact_pilihan_jurusan_saat_ppdb[$j]["pilihan_jurusan_saat_ppdb"], $temp);
                continue 2;
            }
        }
        $compact_pilihan_jurusan_saat_ppdb[$i] = array(
            "id_siswa" => $value["id_siswa"],
        );
        if (!empty($value["id_kompetensi_keahlian"])) {
            $compact_pilihan_jurusan_saat_ppdb[$i]["pilihan_jurusan_saat_ppdb"][] = array(
                "pilihan_ke" => $value["pilihan_ke"],
                "id_kompetensi_keahlian" => $value["id_kompetensi_keahlian"],
                "kompetensi_keahlian" => $value["kompetensi_keahlian"],
                "akronim" => $value["akronim"],
            );
        } else {
            $compact_pilihan_jurusan_saat_ppdb[$i]["pilihan_jurusan_saat_ppdb"] = null;
        }
        $i++;
    }
    return $compact_pilihan_jurusan_saat_ppdb;
}

function compact_pilihan_jalur_ppdb($pilihan_jalur_ppdb)
{
    if (empty($pilihan_jalur_ppdb)) {
        return;
    }
    $compact_pilihan_jalur_ppdb = array();
    $i = 0;
    foreach ($pilihan_jalur_ppdb as $value) {
        for ($j = 0; $j < count($compact_pilihan_jalur_ppdb); $j++) {
            if ($value["id_siswa"] == $compact_pilihan_jalur_ppdb[$j]['id_siswa']) {
                $temp = array(
                    "id_jenis_pendaftaran_masuk" => $value["id_jenis_pendaftaran_masuk"],
                    "jenis_pendaftaran_masuk" => $value["jenis_pendaftaran_masuk"],
                );
                array_push($compact_pilihan_jalur_ppdb[$j]["pilihan_jalur_ppdb"], $temp);
                continue 2;
            }
        }
        $compact_pilihan_jalur_ppdb[$i] = array(
            "id_siswa" => $value["id_siswa"],
        );
        if (!empty($value["id_jenis_pendaftaran_masuk"])) {
            $compact_pilihan_jalur_ppdb[$i]["pilihan_jalur_ppdb"][] = array(
                "id_jenis_pendaftaran_masuk" => $value["id_jenis_pendaftaran_masuk"],
                "jenis_pendaftaran_masuk" => $value["jenis_pendaftaran_masuk"],
            );
        } else {
            $compact_pilihan_jalur_ppdb[$i]["pilihan_jalur_ppdb"] = null;
        }
        $i++;
    }
    return $compact_pilihan_jalur_ppdb;
}

function compact_mean_mapel($mean_mapel)
{
    if (empty($mean_mapel)) {
        return;
    }
    $compact_mean_mapel = array();
    $i = 0;
    foreach ($mean_mapel as $value) {
        for ($j = 0; $j < count($compact_mean_mapel); $j++) {
            if ($value["id_siswa"] == $compact_mean_mapel[$j]['id_siswa']) {
                $temp = array(
                    "id_mata_pelajaran" => $value["id_mata_pelajaran"],
                    "mata_pelajaran" => $value["mata_pelajaran"],
                    "nilai" => $value["nilai"],
                );
                array_push($compact_mean_mapel[$j]["nilai_rata2_mapel"], $temp);
                continue 2;
            }
        }
        $compact_mean_mapel[$i] = array(
            "id_siswa" => $value["id_siswa"],
        );
        if (!empty($value["id_mata_pelajaran"])) {
            $compact_mean_mapel[$i]["nilai_rata2_mapel"][] = array(
                "id_mata_pelajaran" => $value["id_mata_pelajaran"],
                "mata_pelajaran" => $value["mata_pelajaran"],
                "nilai" => $value["nilai"],
            );
        } else {
            $compact_mean_mapel[$i]["nilai_rata2_mapel"] = null;
        }
        $i++;
    }
    return $compact_mean_mapel;
}

function compact_data_proses_pembelajaran($data_proses_pembelajaran)
{
    if (empty($data_proses_pembelajaran)) {
        return;
    }
    $compact_data_proses_pembelajaran = array();
    $i = 0;
    foreach ($data_proses_pembelajaran as $value) {
        for ($j = 0; $j < count($compact_data_proses_pembelajaran); $j++) {
            if ($value["id_siswa"] == $compact_data_proses_pembelajaran[$j]['id_siswa']) {
                $proses_pembelajaran = array(
                    "id_proses_pembelajaran" => $value["id_proses_pembelajaran"],
                    "id_tahun_ajaran" => $value["id_tahun_ajaran"],
                    "tahun1" => $value["tahun1"],
                    "tahun2" => $value["tahun2"],
                    "id_kelas" => $value["id_kelas"],
                    "kelas" => $value["kelas"],
                    "nomor_absen" => $value["nomor_absen"],
                    "wali_kelas" => $value["wali_kelas"],
                    "guru_bk" => $value["guru_bk"],
                );
                array_push($compact_data_proses_pembelajaran[$j]["data_proses_pembelajaran"], $proses_pembelajaran);
                continue 2;
            }
        }
        $compact_data_proses_pembelajaran[$i] = array(
            "id_siswa" => $value["id_siswa"],
        );
        if (!empty($value["id_proses_pembelajaran"])) {
            $compact_data_proses_pembelajaran[$i]["data_proses_pembelajaran"][] = array(
                "id_proses_pembelajaran" => $value["id_proses_pembelajaran"],
                "id_tahun_ajaran" => $value["id_tahun_ajaran"],
                "tahun1" => $value["tahun1"],
                "tahun2" => $value["tahun2"],
                "id_kelas" => $value["id_kelas"],
                "kelas" => $value["kelas"],
                "nomor_absen" => $value["nomor_absen"],
                "wali_kelas" => $value["wali_kelas"],
                "guru_bk" => $value["guru_bk"],
            );
        } else {
            $compact_data_proses_pembelajaran[$i]["data_proses_pembelajaran"] = null;
        }
        $i++;
    }
    return $compact_data_proses_pembelajaran;
}

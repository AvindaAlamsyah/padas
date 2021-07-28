<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Filter_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function filter($where)
    {
        $query1 = "SELECT 
        `siswa`.`nama` nama_siswa, `siswa`.`nipd`, `siswa`.`nisn`, `siswa`.`tempat_lahir`, `siswa`.`tanggal_lahir`, `siswa`.`nik` nik_siswa, `siswa`.`agama`, `siswa`.`nomor_telepon_rumah`, `siswa`.`nomor_telepon_seluler`, `siswa`.`email`, `siswa`.`rombel`, `siswa`.`nomor_registrasi_akta_lahir`, `siswa`.`anak_ke`, `siswa`.`nomor_kk`, `siswa`.`berat_badan_kg`, `siswa`.`tinggi_badan_cm`, `siswa`.`lingkar_kepala_cm`, `siswa`.`jumlah_saudara_kandung`, `siswa`.`jarak_tempat_tinggal_ke_sekolah_km`,
        `gender`.`gender`,
        `moda_transportasi`.`moda_transportasi`,
        `tempat_tinggal`.`tempat_tinggal`,
        `pendaftaran_masuk`.`nomor_skhun`, `pendaftaran_masuk`.`nomor_peserta_ujian`, `pendaftaran_masuk`.`no_seri_ijazah`, `pendaftaran_masuk`.`asal_sekolah`,  `kompetensi_keahlian`.`kompetensi_keahlian`,
        `alamat`.`detail_alamat`, `alamat`.`rt`, `alamat`.`rw`, `alamat`.`dusun`, `alamat`.`kode_pos`, `alamat`.`lintang`, `alamat`.`bujur`, `desa`.`desa`, `kecamatan`.`kecamatan`, `kabupaten`.`kabupaten`, `provinsi`.`provinsi`,
        `ayah`.`nama` nama_ayah, `ayah`.`tahun_lahir` tahun_lahir_ayah, `ayah`.`nik` nik_ayah, pendidikan_ayah.pendidikan pendidikan_ayah, pekerjaan_ayah.pekerjaan pekerjaan_ayah, penghasilan_ayah.penghasilan penghasilan_ayah,
        `ibu`.`nama` nama_ibu, `ibu`.`tahun_lahir` tahun_lahir_ibu, `ibu`.`nik` nik_ibu, pendidikan_ibu.pendidikan pendidikan_ibu, pekerjaan_ibu.pekerjaan pekerjaan_ibu, penghasilan_ibu.penghasilan penghasilan_ibu,
        `wali`.`nama` nama_wali, `wali`.`tahun_lahir` tahun_lahir_ibu, `wali`.`nik` nik_wali, pendidikan_wali.pendidikan pendidikan_wali, pekerjaan_wali.pekerjaan pekerjaan_wali, penghasilan_wali.penghasilan penghasilan_wali,
        `kks`.`nomor_kks`,
        `kip`.`id_kip`, `kip`.`nomor_kip`, `kip`.`nama_tertera_kip`,
        `pkh`.`id_pkh`, `pkh`.`nomor_pkh`,
        `kps`.`id_kps`, `kps`.`nomor_kps`,
        `pip`.`id_pip`, `pip`.`nomor_rekening`, `pip`.`rekening_atas_nama`,  `alasan_layak_pip`.`alasan_layak_pip`, 
        GROUP_CONCAT(berkebutuhan_khusus_siswa.berkebutuhan_khusus SEPARATOR ',') berkebutuhan_khusus_siswa
        FROM `siswa`
        JOIN `tahun_ajaran` ON `tahun_ajaran`.`id_tahun_ajaran` = `siswa`.`tahun_ajaran_id_tahun_ajaran`
        JOIN `gender` ON `gender`.`id_gender` = `siswa`.`gender_id_gender`
        JOIN `moda_transportasi` ON `moda_transportasi`.`id_moda_transportasi` = `siswa`.`moda_transportasi_id_moda_transportasi`
        JOIN `tempat_tinggal` ON `tempat_tinggal`.`id_tempat_tinggal` = `siswa`.`tempat_tinggal_id_tempat_tinggal`
        JOIN `pendaftaran_masuk` ON `siswa`.`id_siswa` = `pendaftaran_masuk`.`siswa_id_siswa` JOIN `jenis_pendaftaran_masuk` ON `jenis_pendaftaran_masuk`.`id_jenis_pendaftaran_masuk` = `pendaftaran_masuk`.`jenis_pendaftaran_masuk_id_jenis_pendaftaran_masuk` JOIN `tahun_ajaran` tahun_ajaran_pendaftaran_masuk ON tahun_ajaran_pendaftaran_masuk.`id_tahun_ajaran` = `pendaftaran_masuk`.`tahun_ajaran_id_tahun_ajaran` JOIN `kompetensi_keahlian` ON `kompetensi_keahlian`.`id_kompetensi_keahlian` = `pendaftaran_masuk`.`kompetensi_keahlian_id_kompetensi_keahlian`
        JOIN `alamat` ON `siswa`.`id_siswa` = `alamat`.`siswa_id_siswa` JOIN `desa` ON `desa`.`id_desa` = `alamat`.`desa_id_desa` JOIN `kecamatan` ON `kecamatan`.`id_kecamatan` = `desa`.`kecamatan_id_kecamatan` JOIN `kabupaten` ON `kabupaten`.`id_kabupaten` = `kecamatan`.`kabupaten_id_kabupaten` JOIN `provinsi` ON `provinsi`.`id_provinsi` = `kabupaten`.`provinsi_id_provinsi`
        LEFT JOIN `ayah` ON `siswa`.`id_siswa` = `ayah`.`siswa_id_siswa` LEFT JOIN `pendidikan` pendidikan_ayah ON pendidikan_ayah.`id_pendidikan` = `ayah`.`pendidikan_id_pendidikan` LEFT JOIN `pekerjaan` pekerjaan_ayah ON pekerjaan_ayah.`id_pekerjaan` = `ayah`.`pekerjaan_id_pekerjaan` LEFT JOIN `penghasilan` penghasilan_ayah ON penghasilan_ayah.`id_penghasilan` = `ayah`.`penghasilan_id_penghasilan`
        LEFT JOIN `ibu` ON `siswa`.`id_siswa` = `ibu`.`siswa_id_siswa` LEFT JOIN `pendidikan` pendidikan_ibu ON pendidikan_ibu.`id_pendidikan` = `ibu`.`pendidikan_id_pendidikan` LEFT JOIN `pekerjaan` pekerjaan_ibu ON pekerjaan_ibu.`id_pekerjaan` = `ibu`.`pekerjaan_id_pekerjaan` LEFT JOIN `penghasilan` penghasilan_ibu ON penghasilan_ibu.`id_penghasilan` = `ibu`.`penghasilan_id_penghasilan`
        LEFT JOIN `wali` ON `siswa`.`id_siswa` = `wali`.`siswa_id_siswa` LEFT JOIN `pendidikan` pendidikan_wali ON pendidikan_wali.`id_pendidikan` = `wali`.`pendidikan_id_pendidikan` LEFT JOIN `pekerjaan` pekerjaan_wali ON pekerjaan_wali.`id_pekerjaan` = `wali`.`pekerjaan_id_pekerjaan` LEFT JOIN `penghasilan` penghasilan_wali ON penghasilan_wali.`id_penghasilan` = `wali`.`penghasilan_id_penghasilan`
        LEFT JOIN `prestasi` ON `siswa`.`id_siswa` = `prestasi`.`siswa_id_siswa` LEFT JOIN `bidang_prestasi` ON `bidang_prestasi`.`id_bidang_prestasi` = `prestasi`.`bidang_prestasi_id_bidang_prestasi` LEFT JOIN `tingkat_prestasi` ON `tingkat_prestasi`.`id_tingkat_prestasi` = `prestasi`.`tingkat_prestasi_id_tingkat_prestasi`
        LEFT JOIN `beasiswa` ON `siswa`.`id_siswa` = `beasiswa`.`siswa_id_siswa` LEFT JOIN `jenis_beasiswa` ON `jenis_beasiswa`.`id_jenis_beasiswa` = `beasiswa`.`id_beasiswa`
        LEFT JOIN `kks` ON `siswa`.`id_siswa` = `kks`.`siswa_id_siswa`
        LEFT JOIN `kip` ON `siswa`.`id_siswa` = `kip`.`siswa_id_siswa`
        LEFT JOIN `pkh` ON `siswa`.`id_siswa` = `pkh`.`siswa_id_siswa`
        LEFT JOIN `kps` ON `siswa`.`id_siswa` = `kps`.`siswa_id_siswa`
        LEFT JOIN `pip` ON `siswa`.`id_siswa` = `pip`.`siswa_id_siswa` LEFT JOIN `alasan_layak_pip` ON `alasan_layak_pip`.`id_alasan_layak_pip` = `pip`.`alasan_layak_pip_id_alasan_layak_pip` LEFT JOIN `bank` ON `bank`.`id_bank` = `pip`.`bank_id_bank`
        LEFT JOIN `pendaftaran_keluar` ON `siswa`.`id_siswa` = `pendaftaran_keluar`.`siswa_id_siswa` LEFT JOIN `jenis_pendaftaran_keluar` ON `jenis_pendaftaran_keluar`.`id_jenis_pendaftaran_keluar` = `pendaftaran_keluar`.`jenis_pendaftaran_keluar_id_jenis_pendaftaran_keluar`
        LEFT JOIN `siswa_has_berkebutuhan_khusus` ON `siswa`.`id_siswa` = `siswa_has_berkebutuhan_khusus`.`siswa_id_siswa` LEFT JOIN `berkebutuhan_khusus` berkebutuhan_khusus_siswa ON berkebutuhan_khusus_siswa.`id_berkebutuhan_khusus` = `siswa_has_berkebutuhan_khusus`.`berkebutuhan_khusus_id_berkebutuhan_khusus`
        LEFT JOIN `ayah_has_berkebutuhan_khusus` ON `ayah`.`id_ayah` = `ayah_has_berkebutuhan_khusus`.`ayah_id_ayah` LEFT JOIN `berkebutuhan_khusus` berkebutuhan_khusus_ayah ON berkebutuhan_khusus_ayah.`id_berkebutuhan_khusus` = `ayah_has_berkebutuhan_khusus`.`berkebutuhan_khusus_id_berkebutuhan_khusus`
        LEFT JOIN `ibu_has_berkebutuhan_khusus` ON `ibu`.`id_ibu` = `ibu_has_berkebutuhan_khusus`.`ibu_id_ibu` LEFT JOIN `berkebutuhan_khusus` berkebutuhan_khusus_ibu ON berkebutuhan_khusus_ibu.`id_berkebutuhan_khusus` = `ibu_has_berkebutuhan_khusus`.`berkebutuhan_khusus_id_berkebutuhan_khusus`
        LEFT JOIN `wali_has_berkebutuhan_khusus` ON `wali`.`id_wali` = `wali_has_berkebutuhan_khusus`.`wali_id_wali` LEFT JOIN `berkebutuhan_khusus` berkebutuhan_khusus_wali ON berkebutuhan_khusus_wali.`id_berkebutuhan_khusus` = `wali_has_berkebutuhan_khusus`.`berkebutuhan_khusus_id_berkebutuhan_khusus`";
        $query2 = "GROUP BY `siswa`.`id_siswa`
        ORDER BY `siswa`.`nama` ASC;";
        $query = $query1 . ' ' . $where . ' ' . $query2;
        return $this->db->query($query);
    }

    public function filter_test($where)
    {
        $query1 = "SELECT 
        `siswa`.`nama` nama_siswa, `siswa`.`nipd`, `siswa`.`nisn`, `siswa`.`tempat_lahir`, `siswa`.`tanggal_lahir`, `siswa`.`nik` nik_siswa, `siswa`.`agama`, `siswa`.`nomor_telepon_rumah`, `siswa`.`nomor_telepon_seluler`, `siswa`.`email`, `siswa`.`rombel`, `siswa`.`nomor_registrasi_akta_lahir`, `siswa`.`anak_ke`, `siswa`.`nomor_kk`, `siswa`.`berat_badan_kg`, `siswa`.`tinggi_badan_cm`, `siswa`.`lingkar_kepala_cm`, `siswa`.`jumlah_saudara_kandung`, `siswa`.`jarak_tempat_tinggal_ke_sekolah_km`,
        `gender`.`gender`,
        `moda_transportasi`.`moda_transportasi`,
        `tempat_tinggal`.`tempat_tinggal`,
        `pendaftaran_masuk`.`nomor_skhun`, `pendaftaran_masuk`.`nomor_peserta_ujian`, `pendaftaran_masuk`.`no_seri_ijazah`, `pendaftaran_masuk`.`asal_sekolah`,  `kompetensi_keahlian`.`kompetensi_keahlian`,
        `alamat`.`detail_alamat`, `alamat`.`rt`, `alamat`.`rw`, `alamat`.`dusun`, `alamat`.`kode_pos`, `alamat`.`lintang`, `alamat`.`bujur`, `desa`.`desa`, `kecamatan`.`kecamatan`, `kabupaten`.`kabupaten`, `provinsi`.`provinsi`,
        `ayah`.`nama` nama_ayah, `ayah`.`tahun_lahir` tahun_lahir_ayah, `ayah`.`nik` nik_ayah, pendidikan_ayah.pendidikan pendidikan_ayah, pekerjaan_ayah.pekerjaan pekerjaan_ayah, penghasilan_ayah.penghasilan penghasilan_ayah,
        `ibu`.`nama` nama_ibu, `ibu`.`tahun_lahir` tahun_lahir_ibu, `ibu`.`nik` nik_ibu, pendidikan_ibu.pendidikan pendidikan_ibu, pekerjaan_ibu.pekerjaan pekerjaan_ibu, penghasilan_ibu.penghasilan penghasilan_ibu,
        `wali`.`nama` nama_wali, `wali`.`tahun_lahir` tahun_lahir_ibu, `wali`.`nik` nik_wali, pendidikan_wali.pendidikan pendidikan_wali, pekerjaan_wali.pekerjaan pekerjaan_wali, penghasilan_wali.penghasilan penghasilan_wali,
        `kks`.`nomor_kks`,
        `kip`.`id_kip`, `kip`.`nomor_kip`, `kip`.`nama_tertera_kip`,
        `pkh`.`id_pkh`, `pkh`.`nomor_pkh`,
        `kps`.`id_kps`, `kps`.`nomor_kps`,
        `pip`.`id_pip`, `pip`.`nomor_rekening`, `pip`.`rekening_atas_nama`,  `alasan_layak_pip`.`alasan_layak_pip`, `bank`.`bank`,
        GROUP_CONCAT(berkebutuhan_khusus_siswa.berkebutuhan_khusus SEPARATOR ',') berkebutuhan_khusus_siswa
        FROM `siswa`
        JOIN `tahun_ajaran` ON `tahun_ajaran`.`id_tahun_ajaran` = `siswa`.`tahun_ajaran_id_tahun_ajaran`
        JOIN `gender` ON `gender`.`id_gender` = `siswa`.`gender_id_gender`
        JOIN `moda_transportasi` ON `moda_transportasi`.`id_moda_transportasi` = `siswa`.`moda_transportasi_id_moda_transportasi`
        JOIN `tempat_tinggal` ON `tempat_tinggal`.`id_tempat_tinggal` = `siswa`.`tempat_tinggal_id_tempat_tinggal`
        JOIN `pendaftaran_masuk` ON `siswa`.`id_siswa` = `pendaftaran_masuk`.`siswa_id_siswa` JOIN `jenis_pendaftaran_masuk` ON `jenis_pendaftaran_masuk`.`id_jenis_pendaftaran_masuk` = `pendaftaran_masuk`.`jenis_pendaftaran_masuk_id_jenis_pendaftaran_masuk` JOIN `tahun_ajaran` tahun_ajaran_pendaftaran_masuk ON tahun_ajaran_pendaftaran_masuk.`id_tahun_ajaran` = `pendaftaran_masuk`.`tahun_ajaran_id_tahun_ajaran` JOIN `kompetensi_keahlian` ON `kompetensi_keahlian`.`id_kompetensi_keahlian` = `pendaftaran_masuk`.`kompetensi_keahlian_id_kompetensi_keahlian`
        JOIN `alamat` ON `siswa`.`id_siswa` = `alamat`.`siswa_id_siswa` JOIN `desa` ON `desa`.`id_desa` = `alamat`.`desa_id_desa` JOIN `kecamatan` ON `kecamatan`.`id_kecamatan` = `desa`.`kecamatan_id_kecamatan` JOIN `kabupaten` ON `kabupaten`.`id_kabupaten` = `kecamatan`.`kabupaten_id_kabupaten` JOIN `provinsi` ON `provinsi`.`id_provinsi` = `kabupaten`.`provinsi_id_provinsi`
        LEFT JOIN `ayah` ON `siswa`.`id_siswa` = `ayah`.`siswa_id_siswa` LEFT JOIN `pendidikan` pendidikan_ayah ON pendidikan_ayah.`id_pendidikan` = `ayah`.`pendidikan_id_pendidikan` LEFT JOIN `pekerjaan` pekerjaan_ayah ON pekerjaan_ayah.`id_pekerjaan` = `ayah`.`pekerjaan_id_pekerjaan` LEFT JOIN `penghasilan` penghasilan_ayah ON penghasilan_ayah.`id_penghasilan` = `ayah`.`penghasilan_id_penghasilan`
        LEFT JOIN `ibu` ON `siswa`.`id_siswa` = `ibu`.`siswa_id_siswa` LEFT JOIN `pendidikan` pendidikan_ibu ON pendidikan_ibu.`id_pendidikan` = `ibu`.`pendidikan_id_pendidikan` LEFT JOIN `pekerjaan` pekerjaan_ibu ON pekerjaan_ibu.`id_pekerjaan` = `ibu`.`pekerjaan_id_pekerjaan` LEFT JOIN `penghasilan` penghasilan_ibu ON penghasilan_ibu.`id_penghasilan` = `ibu`.`penghasilan_id_penghasilan`
        LEFT JOIN `wali` ON `siswa`.`id_siswa` = `wali`.`siswa_id_siswa` LEFT JOIN `pendidikan` pendidikan_wali ON pendidikan_wali.`id_pendidikan` = `wali`.`pendidikan_id_pendidikan` LEFT JOIN `pekerjaan` pekerjaan_wali ON pekerjaan_wali.`id_pekerjaan` = `wali`.`pekerjaan_id_pekerjaan` LEFT JOIN `penghasilan` penghasilan_wali ON penghasilan_wali.`id_penghasilan` = `wali`.`penghasilan_id_penghasilan`
        LEFT JOIN `prestasi` ON `siswa`.`id_siswa` = `prestasi`.`siswa_id_siswa` LEFT JOIN `bidang_prestasi` ON `bidang_prestasi`.`id_bidang_prestasi` = `prestasi`.`bidang_prestasi_id_bidang_prestasi` LEFT JOIN `tingkat_prestasi` ON `tingkat_prestasi`.`id_tingkat_prestasi` = `prestasi`.`tingkat_prestasi_id_tingkat_prestasi`
        LEFT JOIN `beasiswa` ON `siswa`.`id_siswa` = `beasiswa`.`siswa_id_siswa` LEFT JOIN `jenis_beasiswa` ON `jenis_beasiswa`.`id_jenis_beasiswa` = `beasiswa`.`id_beasiswa`
        LEFT JOIN `kks` ON `siswa`.`id_siswa` = `kks`.`siswa_id_siswa`
        LEFT JOIN `kip` ON `siswa`.`id_siswa` = `kip`.`siswa_id_siswa`
        LEFT JOIN `pkh` ON `siswa`.`id_siswa` = `pkh`.`siswa_id_siswa`
        LEFT JOIN `kps` ON `siswa`.`id_siswa` = `kps`.`siswa_id_siswa`
        LEFT JOIN `pip` ON `siswa`.`id_siswa` = `pip`.`siswa_id_siswa` LEFT JOIN `alasan_layak_pip` ON `alasan_layak_pip`.`id_alasan_layak_pip` = `pip`.`alasan_layak_pip_id_alasan_layak_pip` LEFT JOIN `bank` ON `bank`.`id_bank` = `pip`.`bank_id_bank`
        LEFT JOIN `pendaftaran_keluar` ON `siswa`.`id_siswa` = `pendaftaran_keluar`.`siswa_id_siswa` LEFT JOIN `jenis_pendaftaran_keluar` ON `jenis_pendaftaran_keluar`.`id_jenis_pendaftaran_keluar` = `pendaftaran_keluar`.`jenis_pendaftaran_keluar_id_jenis_pendaftaran_keluar`
        LEFT JOIN `siswa_has_berkebutuhan_khusus` ON `siswa`.`id_siswa` = `siswa_has_berkebutuhan_khusus`.`siswa_id_siswa` LEFT JOIN `berkebutuhan_khusus` berkebutuhan_khusus_siswa ON berkebutuhan_khusus_siswa.`id_berkebutuhan_khusus` = `siswa_has_berkebutuhan_khusus`.`berkebutuhan_khusus_id_berkebutuhan_khusus`
        LEFT JOIN `ayah_has_berkebutuhan_khusus` ON `ayah`.`id_ayah` = `ayah_has_berkebutuhan_khusus`.`ayah_id_ayah` LEFT JOIN `berkebutuhan_khusus` berkebutuhan_khusus_ayah ON berkebutuhan_khusus_ayah.`id_berkebutuhan_khusus` = `ayah_has_berkebutuhan_khusus`.`berkebutuhan_khusus_id_berkebutuhan_khusus`
        LEFT JOIN `ibu_has_berkebutuhan_khusus` ON `ibu`.`id_ibu` = `ibu_has_berkebutuhan_khusus`.`ibu_id_ibu` LEFT JOIN `berkebutuhan_khusus` berkebutuhan_khusus_ibu ON berkebutuhan_khusus_ibu.`id_berkebutuhan_khusus` = `ibu_has_berkebutuhan_khusus`.`berkebutuhan_khusus_id_berkebutuhan_khusus`
        LEFT JOIN `wali_has_berkebutuhan_khusus` ON `wali`.`id_wali` = `wali_has_berkebutuhan_khusus`.`wali_id_wali` LEFT JOIN `berkebutuhan_khusus` berkebutuhan_khusus_wali ON berkebutuhan_khusus_wali.`id_berkebutuhan_khusus` = `wali_has_berkebutuhan_khusus`.`berkebutuhan_khusus_id_berkebutuhan_khusus`";
        $query2 = "GROUP BY `siswa`.`id_siswa`
        ORDER BY `siswa`.`nama` ASC;";
        $query = $query1 . ' ' . $where . ' ' . $query2;
        return $query;
    }

    function safe_filter($where)
    {
        $this->db->select("siswa.id_siswa");
        $this->db->from('siswa');
        $this->db->join('gender', 'gender.id_gender = siswa.gender_id_gender', 'left');
        $this->db->join('agama', 'agama.id_agama = siswa.agama_id_agama', 'left');
        $this->db->join('moda_transportasi', 'moda_transportasi.id_moda_transportasi = siswa.moda_transportasi_id_moda_transportasi', 'left');
        $this->db->join('pendaftaran_masuk', 'siswa.id_siswa = pendaftaran_masuk.siswa_id_siswa', 'left');
        $this->db->join('jenis_pendaftaran_masuk', 'jenis_pendaftaran_masuk.id_jenis_pendaftaran_masuk = pendaftaran_masuk.jenis_pendaftaran_diterima', 'left');
        $this->db->join('tahun_ajaran tahun_ajaran_pendaftaran_masuk', 'tahun_ajaran_pendaftaran_masuk.id_tahun_ajaran = pendaftaran_masuk.tahun_ajaran_id_tahun_ajaran', 'left');
        $this->db->join('kompetensi_keahlian', 'kompetensi_keahlian.id_kompetensi_keahlian = pendaftaran_masuk.kompetensi_keahlian_diterima', 'left');
        $this->db->join('alamat', 'siswa.id_siswa = alamat.siswa_id_siswa', 'left');
        $this->db->join('desa', 'desa.id_desa = alamat.desa_id_desa', 'left');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = desa.kecamatan_id_kecamatan', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.kabupaten_id_kabupaten', 'left');
        $this->db->join('provinsi', 'provinsi.id_provinsi = kabupaten.provinsi_id_provinsi', 'left');
        $this->db->join('ayah', 'siswa.id_siswa = ayah.siswa_id_siswa', 'left');
        $this->db->join('pendidikan pendidikan_ayah', 'pendidikan_ayah.id_pendidikan = ayah.pendidikan_id_pendidikan', 'left');
        $this->db->join('pekerjaan pekerjaan_ayah', 'pekerjaan_ayah.id_pekerjaan = ayah.pekerjaan_id_pekerjaan', 'left');
        $this->db->join('penghasilan penghasilan_ayah', 'penghasilan_ayah.id_penghasilan = ayah.penghasilan_id_penghasilan', 'left');
        $this->db->join('ibu', 'siswa.id_siswa = ibu.siswa_id_siswa', 'left');
        $this->db->join('pendidikan pendidikan_ibu', 'pendidikan_ibu.id_pendidikan = ibu.pendidikan_id_pendidikan', 'left');
        $this->db->join('pekerjaan pekerjaan_ibu', 'pekerjaan_ibu.id_pekerjaan = ibu.pekerjaan_id_pekerjaan', 'left');
        $this->db->join('penghasilan penghasilan_ibu', 'penghasilan_ibu.id_penghasilan = ibu.penghasilan_id_penghasilan', 'left');
        $this->db->join('wali', 'siswa.id_siswa = wali.siswa_id_siswa', 'left');
        $this->db->join('pendidikan pendidikan_wali', 'pendidikan_wali.id_pendidikan = wali.pendidikan_id_pendidikan', 'left');
        $this->db->join('pekerjaan pekerjaan_wali', 'pekerjaan_wali.id_pekerjaan = wali.pekerjaan_id_pekerjaan', 'left');
        $this->db->join('penghasilan penghasilan_wali', 'penghasilan_wali.id_penghasilan = wali.penghasilan_id_penghasilan', 'left');
        $this->db->join('prestasi', 'siswa.id_siswa = prestasi.siswa_id_siswa', 'left');
        $this->db->join('bidang_prestasi', 'bidang_prestasi.id_bidang_prestasi = prestasi.bidang_prestasi_id_bidang_prestasi', 'left');
        $this->db->join('tingkat_prestasi', 'tingkat_prestasi.id_tingkat_prestasi = prestasi.tingkat_prestasi_id_tingkat_prestasi', 'left');
        $this->db->join('beasiswa', 'siswa.id_siswa = beasiswa.siswa_id_siswa', 'left');
        $this->db->join('jenis_beasiswa', 'jenis_beasiswa.id_jenis_beasiswa = beasiswa.id_beasiswa', 'left');
        $this->db->join('kks', 'siswa.id_siswa = kks.siswa_id_siswa', 'left');
        $this->db->join('kip', 'siswa.id_siswa = kip.siswa_id_siswa', 'left');
        $this->db->join('kps_pkh', 'siswa.id_siswa = kps_pkh.siswa_id_siswa', 'left');
        $this->db->join('pip', 'siswa.id_siswa = pip.siswa_id_siswa', 'left');
        $this->db->join('alasan_layak_pip', 'alasan_layak_pip.id_alasan_layak_pip = pip.alasan_layak_pip_id_alasan_layak_pip', 'left');
        $this->db->join('pendaftaran_keluar', 'siswa.id_siswa = pendaftaran_keluar.siswa_id_siswa', 'left');
        $this->db->join('jenis_pendaftaran_keluar', 'jenis_pendaftaran_keluar.id_jenis_pendaftaran_keluar = pendaftaran_keluar.jenis_pendaftaran_keluar_id_jenis_pendaftaran_keluar', 'left');
        $this->db->join('siswa_has_berkebutuhan_khusus', 'siswa.id_siswa = siswa_has_berkebutuhan_khusus.siswa_id_siswa', 'left');
        $this->db->join('berkebutuhan_khusus berkebutuhan_khusus_siswa', 'berkebutuhan_khusus_siswa.id_berkebutuhan_khusus = siswa_has_berkebutuhan_khusus.berkebutuhan_khusus_id_berkebutuhan_khusus', 'left');
        $this->db->join('ayah_has_berkebutuhan_khusus', 'ayah.id_ayah = ayah_has_berkebutuhan_khusus.ayah_id_ayah', 'left');
        $this->db->join('berkebutuhan_khusus berkebutuhan_khusus_ayah', 'berkebutuhan_khusus_ayah.id_berkebutuhan_khusus = ayah_has_berkebutuhan_khusus.berkebutuhan_khusus_id_berkebutuhan_khusus', 'left');
        $this->db->join('ibu_has_berkebutuhan_khusus', 'ibu.id_ibu = ibu_has_berkebutuhan_khusus.ibu_id_ibu', 'left');
        $this->db->join('berkebutuhan_khusus berkebutuhan_khusus_ibu', 'berkebutuhan_khusus_ibu.id_berkebutuhan_khusus = ibu_has_berkebutuhan_khusus.berkebutuhan_khusus_id_berkebutuhan_khusus', 'left');
        $this->db->join('wali_has_berkebutuhan_khusus', 'wali.id_wali = wali_has_berkebutuhan_khusus.wali_id_wali', 'left');
        $this->db->join('berkebutuhan_khusus berkebutuhan_khusus_wali', 'berkebutuhan_khusus_wali.id_berkebutuhan_khusus = wali_has_berkebutuhan_khusus.berkebutuhan_khusus_id_berkebutuhan_khusus', 'left');
        
        $this->db->where($where);
        $this->db->group_by('siswa.id_siswa');
        $this->db->order_by('siswa.nama', 'asc');
        return $this->db->get();

    }
}

/* End of file Filter_model.php */

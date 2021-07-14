<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->model('siswa_has_berkebutuhan_khusus_model');
        $this->load->model('kps_model');
        $this->load->model('pkh_model');
        $this->load->model('kip_model');
        $this->load->model('pip_model');
        $this->load->model('kks_model');
        $this->load->model('prestasi_model');
        $this->load->model('beasiswa_model');
        $this->load->model('pendaftaran_masuk_model');
        $this->load->model('alamat_model');
        $this->load->model('ayah_model');
        $this->load->model('ayah_has_berkebutuhan_khusus_model');
        $this->load->model('ibu_model');
        $this->load->model('ibu_has_berkebutuhan_khusus_model');
        $this->load->model('wali_model');
        $this->load->model('wali_has_berkebutuhan_khusus_model');
    }

    public function index()
    {
    }

    public function tambah_data_siswa()
    {
        $this->load->view('admin/tambah_data_siswa');
    }

    public function simpan_data_siswa()
    {

        /*
        yang belum dari table siswa
        */
        //foto
        $siswa = array(
            'tahun_ajaran_id_tahun_ajaran' => $this->input->post('tahun-ajaran'),
            'gender_id_gender' => $this->input->post('jenis-kelamin'),
            'moda_transportasi_id_moda_transportasi' => $this->input->post('transportasi'),
            'tempat_tinggal_id_tempat_tinggal' => $this->input->post('tempat-tinggal'),
            'nama' => $this->input->post('nama-siswa'),
            'nisn' => $this->input->post('nisn'),
            'rombel' => $this->input->post('rombel'),
            'nipd' => $this->input->post('nipd'),
            'nomor_kk' => $this->input->post('no-kk'),
            'nik' => $this->input->post('nik'),
            'tempat_lahir' => $this->input->post('tempat-lahir'),
            'tanggal_lahir' => $this->input->post('tanggal-lahir'),
            'nomor_registrasi_akta_lahir' => $this->input->post('no-akta'),
            'agama' => $this->input->post('agama'),
            'anak_ke' => $this->input->post('anak-ke'),
            'nomor_telepon_rumah' => $this->input->post('telp-rumah'),
            'nomor_telepon_seluler' => $this->input->post('no-hp'),
            'email' => $this->input->post('email'),
            'tinggi_badan_cm' => $this->input->post('tinggi-badan'),
            'berat_badan_kg' => $this->input->post('berat-badan'),
            'lingkar_kepala_cm' => $this->input->post('lingkar-kepala'),
            'waktu_tempuh_ke_sekolah_jam' => $this->input->post('waktu-tempuh'),
            'jumlah_saudara_kandung' => $this->input->post('jumlah-saudara')
        );

        $pendaftaran_masuk = array(
            'jenis_pendaftaran_masuk_id_jenis_pendaftaran_masuk' => $this->input->post('jenis-daftar'),
            'kompetensi_keahlian_id_kompetensi_keahlian' => $this->input->post('komp-keahlian'),
            'tahun_ajaran_id_tahun_ajaran' => $this->input->post('tahun-ajaran'),
            'nis' => $this->input->post('nis'),
            'tanggal_masuk_sekolah' => $this->input->post('tanggal-masuk'),
            'asal_sekolah' => $this->input->post('asal-sekolah'),
            'nomor_peserta_ujian' => $this->input->post('no-ujian'),
            'no_seri_khusus' => $this->input->post('no-khusus'),
            'no_seri_ijazah' => $this->input->post('no-ijazah'),
            'nomor_skhun' => $this->input->post('no-skhun')
        );

        $alamat = array(
            'desa_id_desa' => $this->input->post('kel-desa'),
            'detail_alamat' => $this->input->post('alamat'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'dusun' => $this->input->post('dusun'),
            'kode_pos' => $this->input->post('kode-pos'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur')
        );

        $ayah = array(
            'pendidikan_id_pendidikan' => $this->input->post('pend-ayah'),
            'pekerjaan_id_pekerjaan' => $this->input->post('kerja-ayah'),
            'penghasilan_id_penghasilan' => $this->input->post('gaji-ayah'),
            'nama' => $this->input->post('nama-ayah'),
            'nik' => $this->input->post('nik-ayah'),
            'tahun_lahir' => $this->input->post('tahun-ayah')
        );

        $ibu = array(
            'pendidikan_id_pendidikan' => $this->input->post('pend-ibu'),
            'pekerjaan_id_pekerjaan' => $this->input->post('kerja-ibu'),
            'penghasilan_id_penghasilan' => $this->input->post('gaji-ibu'),
            'nama' => $this->input->post('nama-ibu'),
            'nik' => $this->input->post('nik-ibu'),
            'tahun_lahir' => $this->input->post('tahun-ibu')
        );

        $wali = array(
            'pendidikan_id_pendidikan' => $this->input->post('pend-wali'),
            'pekerjaan_id_pekerjaan' => $this->input->post('kerja-wali'),
            'penghasilan_id_penghasilan' => $this->input->post('gaji-wali'),
            'nama' => $this->input->post('nama-wali'),
            'nik' => $this->input->post('nik-wali'),
            'tahun_lahir' => $this->input->post('tahun-wali')
        );

        if ($this->input->post('kewarganegaraan') == 0) {
            $siswa['kewarganegaraan'] = 'Indonesia';
        } else {
            $siswa['kewarganegaraan'] = $this->input->post('wna');
        }

        if ($this->input->post('jarak-sekolah') == 0) {
            $siswa['jarak_tempat_tinggal_ke_sekolah_km'] = 0;
        } else {
            $siswa['jarak_tempat_tinggal_ke_sekolah_km'] = $this->input->post('sebutkan-jarak');
        }

        $id_siswa = $this->siswa_model->insert_last_id($siswa);

        if ($id_siswa != null) {
            $siswa_has_berkebutuhan_khusus = array();
            foreach ($this->input->post('kebutuhan-khusus') as $value) {
                $siswa_has_berkebutuhan_khusus[] = array(
                    'siswa_id_siswa' => $id_siswa,
                    'berkebutuhan_khusus_id_berkebutuhan_khusus' => $value
                );
            }
            if ($this->siswa_has_berkebutuhan_khusus_model->insert_batch($siswa_has_berkebutuhan_khusus) == false) {
                echo "Gagal Insert Kebutuhan Khusus Siswa.";
            }

            if ($this->input->post('kps') == 1) {
                $kps = array(
                    'siswa_id_siswa' => $id_siswa,
                    'nomor_kps' => $this->input->post('no-kps')
                );
                if ($this->kps_model->insert($kps) == false) {
                    echo "Gagal Insert KPS.";
                }
            }

            if ($this->input->post('pkh') == 1) {
                $pkh = array(
                    'siswa_id_siswa' => $id_siswa,
                    'nomor_pkh' => $this->input->post('no-pkh')
                );
                if ($this->pkh_model->insert($pkh) == false) {
                    echo "Gagal Insert PKH.";
                }
            }

            if ($this->input->post('kip') == 1) {
                $kip = array(
                    'siswa_id_siswa' => $id_siswa,
                    'nomor_kip' => $this->input->post('no-kip'),
                    'nama_tertera_kip' => $this->input->post('nama-kip')

                );
                if ($this->kip_model->insert($kip) == false) {
                    echo "Gagal Insert KIP.";
                }
            }

            if ($this->input->post('pip') == 1) {
                $pip = array(
                    'siswa_id_siswa' => $id_siswa,
                    'alasan_layak_pip_id_alasan_layak_pip' => $this->input->post('alasan-pip'),
                    'bank_id_bank' => $this->input->post('nama-bank'),
                    'nomor_rekening' => $this->input->post('no-rekening'),
                    'kantor_cabang_pembantu' => $this->input->post('kantor-cabang'),
                    'rekening_atas_nama' => $this->input->post('rekening-nama'),
                );
                if ($this->pip_model->insert($pip) == false) {
                    echo "Gagal Insert PIP.";
                }
            }

            if ($this->input->post('no-kks') !== "") {
                $kks = array(
                    'siswa_id_siswa' => $id_siswa,
                    'nomor_kks' => $this->input->post('no-kks')
                );
                if ($this->kks_model->insert($kks) == false) {
                    echo "Gagal insert KKS.";
                }
            }

            if ($this->input->post('jenis-prestasi')) {
                $prestasi = array();

                $jenis_prestasi = $this->input->post('jenis-prestasi');
                $tingkat_prestasi = $this->input->post('tingkat-prestasi');
                $tahun_prestasi = $this->input->post('tahun-prestasi');
                $nama_prestasi = $this->input->post('nama-prestasi');
                $penyelenggara = $this->input->post('penyelenggara');
                $peringkat = $this->input->post('peringkat');

                foreach ($jenis_prestasi as $key => $value) {
                    $prestasi[] = array(
                        'siswa_id_siswa' => $id_siswa,
                        'bidang_prestasi_id_bidang_prestasi' => $value,
                        'tingkat_prestasi_id_tingkat_prestasi' => $tingkat_prestasi[$key],
                        'nama' => $nama_prestasi[$key],
                        'tahun' => $tahun_prestasi[$key],
                        'penyelenggara' => $penyelenggara[$key],
                        'peringkat' => $peringkat[$key]
                    );
                }

                if ($this->prestasi_model->insert_batch($prestasi) == false) {
                    echo "Gagal Insert Prestasi.";
                }
            }

            if ($this->input->post('jenis-beasiswa')) {
                $beasiswa = array();

                $jenis_beasiswa = $this->input->post('jenis-beasiswa');
                $tahun_mulai = $this->input->post('tahun-mulai');
                $tahun_selesai = $this->input->post('tahun-selesai');
                $keterangan = $this->input->post('keterangan');

                foreach ($jenis_beasiswa as $key => $value) {
                    $beasiswa[] = array(
                        'jenis_beasiswa_id_jenis_beasiswa' => $value,
                        'siswa_id_siswa' => $id_siswa,
                        'keterangan' => $keterangan[$key],
                        'tahun_mulai' => $tahun_mulai[$key],
                        'tahun_selesai' => $tahun_selesai[$key]
                    );
                }

                if ($this->beasiswa_model->insert_batch($beasiswa) == false) {
                    echo "Gagal Insert Beasiswa.";
                }
            }

            $pendaftaran_masuk['siswa_id_siswa'] = $id_siswa;
            if ($this->pendaftaran_masuk_model->insert($pendaftaran_masuk) == false) {
                echo "Gagal Insert Pendaftaran Masuk.";
            }

            $alamat['siswa_id_siswa'] = $id_siswa;
            if ($this->alamat_model->insert($alamat) == false) {
                echo "Gagal Insert Alamat.";
            }

            $ayah['siswa_id_siswa'] = $id_siswa;
            $id_ayah = $this->ayah_model->insert_last_id($ayah);
            if ($id_ayah != null) {
                $ayah_has_kebutuhan_khusus = array();
                foreach ($this->input->post('kebutuhan-khusus-ayah') as  $value) {
                    $ayah_has_kebutuhan_khusus[] = array('ayah_id_ayah' => $id_ayah, 'berkebutuhan_khusus_id_berkebutuhan_khusus' => $value);
                }
                if ($this->ayah_has_berkebutuhan_khusus_model->insert_batch($ayah_has_kebutuhan_khusus) == false) {
                    echo "Gagal Insert Kebutuhan Khusus Ayah.";
                }
            } else {
                echo "Gagal Insert Ayah.";
            }

            $ibu['siswa_id_siswa'] = $id_siswa;
            $id_ibu = $this->ibu_model->insert_last_id($ibu);
            if ($id_ibu != null) {
                $ibu_has_kebutuhan_khusus = array();
                foreach ($this->input->post('kebutuhan-khusus-ibu') as $value) {
                    $ibu_has_kebutuhan_khusus[] = array('ibu_id_ibu' => $id_ibu, 'berkebutuhan_khusus_id_berkebutuhan_khusus' => $value);
                }
                if ($this->ibu_has_berkebutuhan_khusus_model->insert_batch($ibu_has_kebutuhan_khusus) == false) {
                    echo "Gagal Insert Kebutuhan Khusus Ibu.";
                }
            } else {
                echo "Gagal Insert Ibu.";
            }

            $wali['siswa_id_siswa'] = $id_siswa;
            $id_wali = $this->wali_model->insert_last_id($wali);
            if ($id_wali != null) {
                $wali_has_kebutuhan_khusus = array();
                foreach ($this->input->post('kebutuhan-khusus-wali') as $value) {
                    $wali_has_kebutuhan_khusus[] = array('wali_id_wali' => $id_wali, 'berkebutuhan_khusus_id_berkebutuhan_khusus' => $value);
                }
                if ($this->wali_has_berkebutuhan_khusus_model->insert_batch($wali_has_kebutuhan_khusus) == false) {
                    echo "Gagal Insert Kebutuhan Khusus Wali.";
                }
            } else {
                echo "Gagal Insert Wali.";
            }
            echo 'Berhasil Tambah Data Siswa';
        } else {
            echo "Gagal Insert Siswa.";
        }
    }
}

/* End of file Data_siswa.php */

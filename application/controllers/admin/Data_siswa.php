<?php

defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Data_siswa extends CI_Controller
{
    private $response = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->model('siswa_has_berkebutuhan_khusus_model');
        $this->load->model('kps_pkh_model');
        $this->load->model('kip_model');
        $this->load->model('pip_model');
        $this->load->model('kks_model');
        $this->load->model('prestasi_model');
        $this->load->model('beasiswa_model');
        $this->load->model('pendaftaran_masuk_model');
        $this->load->model('pendaftaran_keluar_model');
        $this->load->model('alamat_model');
        $this->load->model('ayah_model');
        $this->load->model('ayah_has_berkebutuhan_khusus_model');
        $this->load->model('ibu_model');
        $this->load->model('ibu_has_berkebutuhan_khusus_model');
        $this->load->model('wali_model');
        $this->load->model('wali_has_berkebutuhan_khusus_model');
        $this->load->model('view_model');
        $this->load->model('user_model');
        $this->load->model('domisili_model');
        $this->load->model('bantuan_tidak_mampu_model');
        $this->load->model('whatsapp_model');
        $this->load->model('nomor_telepon_seluler_model');
        $this->load->model('siswa_has_media_sosial_model');
        $this->load->model('kontak_darurat_model');
        $this->load->model('saudara_kandung_model');
        $this->load->model('pilihan_jurusan_ppdb_model');
        $this->load->model('view_model');
        $this->load->model('mean_mapel_model');
        $this->load->model('pilihan_jalur_ppdb_model');
        $this->load->model('proses_pembelajaran_model');
        $this->load->model('riwayat_kesehatan_model');

        $this->user_model->session_check(1);
    }

    public function index()
    {
        $data = array(
            'data' => $this->siswa_model->get_siswa_aktif(array('siswa.deleted_at' => NULL, 'pendaftaran_keluar.id_pendaftaran_keluar' => NULL))->result()
        );
        $this->load->view('admin/data_siswa', $data);
    }

    public function detail_siswa($id_siswa = null)
    {
        if ($id_siswa != null) {
            if ($this->siswa_model->get_siswa_aktif(array('siswa.deleted_at' => NULL, 'pendaftaran_keluar.id_pendaftaran_keluar' => NULL, 'siswa.id_siswa' => $id_siswa))->num_rows() > 0) {
                $this->load->helper('view_helper');
                $final_data = array();

                $where = array(
                    'id_siswa' => $id_siswa
                );

                $final_data['data_pribadi'] = compact_data_pribadi($this->view_model->select_view_data_pribadi_where($where)->result_array());

                $final_data['alamat_dan_domisili'] = $this->view_model->select_view_alamat_dan_domisili_where($where)->row();

                $final_data['bantuan_tidak_mampu'] = compact_bantuan_tidak_mampu($this->view_model->select_view_bantuan_tidak_mampu_where($where)->result_array());

                $final_data['ayah'] = compact_ayah($this->view_model->select_view_ayah_where($where)->result_array());

                $final_data['ibu'] = compact_ibu($this->view_model->select_view_ibu_where($where)->result_array());

                $final_data['wali'] = compact_wali($this->view_model->select_view_wali_where($where)->result_array());

                $final_data['kontak_siswa'] = compact_kontak_siswa($this->view_model->select_view_kontak_siswa_where($where)->result_array());

                $final_data['medsos'] = compact_media_sosial($this->view_model->select_view_media_sosial_where($where)->result_array());

                $final_data['kontak_darurat'] = compact_kontak_darurat($this->view_model->select_view_kontak_darurat_where($where)->result_array());

                $final_data['data_periodik'] = compact_data_periodik($this->view_model->select_view_data_periodik_where($where)->result_array());

                $final_data['prestasi'] = compact_prestasi($this->view_model->select_view_prestasi_where($where)->result_array());

                $final_data['beasiswa'] = compact_beasiswa($this->view_model->select_view_beasiswa_where($where)->result_array());

                $final_data['pendaftaran_masuk'] = $this->view_model->select_view_pendaftaran_masuk_where($where)->row();

                $final_data['pilihan_jurusan'] = compact_pilihan_jurusan_saat_ppdb($this->view_model->select_view_pilihan_jurusan_saat_ppdb_where($where)->result_array());

                $final_data['pilihan_jalur'] = compact_pilihan_jalur_ppdb($this->view_model->select_view_pilihan_jalur_ppdb_where($where)->result_array());

                $final_data['mean_mapel'] = compact_mean_mapel($this->view_model->select_view_mean_mapel_where($where)->result_array());

                $final_data['proses_pembelajaran'] = compact_data_proses_pembelajaran($this->view_model->select_view_data_proses_pembelajaran_where($where)->result_array());

                // echo json_encode($final_data);
                $this->load->view('admin/detail_siswa', $final_data);
            } else {
                echo "maah bukan siswa aktif";
            }
        } else {
            echo "kosong ges";
        }
    }

    public function tambah_data_siswa()
    {
        $this->load->view('admin/tambah_data_siswa');
    }

    public function hapus_siswa()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id_siswa = $this->input->post('id_siswa');

        if ($this->siswa_model->update(array('id_siswa' => $id_siswa), array('deleted_at' => date("Y-m-d H:i:s")))) {
            if ($this->db->affected_rows() > 0) {
                $this->pesan['status'] = true;
                $this->pesan['isi'] = "Berhasil menghapus data siswa";
            } else {
                $this->pesan['isi'] = "Tidak ada data siswa yang dihapus";
            }
        } else {
            $this->pesan['isi'] = "Kesalahan pada sistem, silahkan hubungi developer";
        }

        echo json_encode($this->pesan);
    }

    public function edit_siswa($id_siswa = null)
    {
        if ($id_siswa != null) {
            if ($this->siswa_model->get_siswa_aktif(array('siswa.deleted_at' => NULL, 'pendaftaran_keluar.id_pendaftaran_keluar' => NULL, 'siswa.id_siswa' => $id_siswa))->num_rows() > 0) {
                $this->load->helper('view_helper');
                $final_data = array();

                $where = array(
                    'id_siswa' => $id_siswa
                );

                $final_data['data_pribadi'] = compact_data_pribadi($this->view_model->select_view_data_pribadi_where($where)->result_array());

                $final_data['alamat_dan_domisili'] = $this->view_model->select_view_alamat_dan_domisili_where($where)->row();

                $final_data['bantuan_tidak_mampu'] = compact_bantuan_tidak_mampu($this->view_model->select_view_bantuan_tidak_mampu_where($where)->result_array());

                $final_data['ayah'] = compact_ayah($this->view_model->select_view_ayah_where($where)->result_array());

                $final_data['ibu'] = compact_ibu($this->view_model->select_view_ibu_where($where)->result_array());

                $final_data['wali'] = compact_wali($this->view_model->select_view_wali_where($where)->result_array());

                $final_data['kontak_siswa'] = compact_kontak_siswa($this->view_model->select_view_kontak_siswa_where($where)->result_array());

                $final_data['medsos'] = compact_media_sosial($this->view_model->select_view_media_sosial_where($where)->result_array());

                $final_data['kontak_darurat'] = compact_kontak_darurat($this->view_model->select_view_kontak_darurat_where($where)->result_array());

                $final_data['data_periodik'] = compact_data_periodik($this->view_model->select_view_data_periodik_where($where)->result_array());

                $final_data['prestasi'] = compact_prestasi($this->view_model->select_view_prestasi_where($where)->result_array());

                $final_data['beasiswa'] = compact_beasiswa($this->view_model->select_view_beasiswa_where($where)->result_array());

                $final_data['pendaftaran_masuk'] = $this->view_model->select_view_pendaftaran_masuk_where($where)->row();

                $final_data['pilihan_jurusan'] = compact_pilihan_jurusan_saat_ppdb($this->view_model->select_view_pilihan_jurusan_saat_ppdb_where($where)->result_array());

                $final_data['pilihan_jalur'] = compact_pilihan_jalur_ppdb($this->view_model->select_view_pilihan_jalur_ppdb_where($where)->result_array());

                $final_data['mean_mapel'] = compact_mean_mapel($this->view_model->select_view_mean_mapel_where($where)->result_array());

                $final_data['proses_pembelajaran'] = compact_data_proses_pembelajaran($this->view_model->select_view_data_proses_pembelajaran_where($where)->result_array());

                // echo json_encode($final_data);
                $this->load->view('admin/edit_siswa', $final_data);
            } else {
                echo "maah bukan siswa aktif";
            }
        } else {
            echo "kosong ges";
        }
    }

    public function edit_data_pribadi()
    {
        $id_siswa = $this->input->post('id');

        $siswa = array(
            'nama' => $this->input->post('siswa-nama'),
            'gender_id_gender' => $this->input->post('siswa-gender'),
            'kelas_id_kelas' => $this->input->post('siswa-kelas'),
            'golongan' => $this->input->post('siswa-golongan'),
            'nisn' => $this->input->post('nisn'),
            'nik' => trim($this->input->post('siswa-nik')),
            'tempat_lahir' => $this->input->post('siswa-tempat-lahir'),
            'tanggal_lahir' => $this->input->post('siswa-tanggal'),
            'nomor_kk' => $this->input->post('nomor-kk'),
            'nomor_registrasi_akta_lahir' => $this->input->post('nomor-akta'),
            'agama_id_agama' => $this->input->post('siswa-agama'),
            'kewarganegaraan' => $this->input->post('kewarganegaraan')
        );

        $siswa = array_map(array($this, 'drop_empty'), $siswa);

        if (isset($_FILES['siswa-foto']['name']) && !empty($_FILES['siswa-foto']['name'])) {
            $this->load->library('upload');

            $result = $this->siswa_model->select_where(array('id_siswa' => $id_siswa))->last_row();
            $this->delete_file($result->foto);
            $upload = $this->upload('siswa-foto', 'png|jpg|jpeg');
            $siswa['foto'] = $upload['file_name'];

            $this->response[] = array('isi' => "Berhasil upload foto profile.", 'status' => true);
        }

        if ($this->siswa_model->update(array('id_siswa' => $id_siswa), $siswa)) {
            $this->response[] = array('isi' => "Berhasil update data pribadi.", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal update data pribadi.", 'status' => false);
        }

        $this->pendaftaran_masuk_model->update(array('siswa_id_siswa' => $id_siswa), array('kompetensi_keahlian_diterima' => $this->input->post('siswa-jurusan')));

        $this->siswa_has_berkebutuhan_khusus_model->delete(array('siswa_id_siswa' => $id_siswa));
        if ($this->input->post('siswa-kebutuhan-khusus') != false) {
            $siswa_has_berkebutuhan_khusus = array();
            foreach ($this->input->post('siswa-kebutuhan-khusus') as $value) {
                $siswa_has_berkebutuhan_khusus[] = array(
                    'siswa_id_siswa' => $id_siswa,
                    'berkebutuhan_khusus_id_berkebutuhan_khusus' => $value
                );
            }
            if ($this->siswa_has_berkebutuhan_khusus_model->insert_batch($siswa_has_berkebutuhan_khusus) == false) {
                $this->response[] = array('isi' => "Gagal update kebutuhan khusus siswa.", 'status' => false);
            } else {
                $this->response[] = array('isi' => "Berhasil update kebutuhan khusus siswa.", 'status' => true);
            }
        }

        echo json_encode($this->response);
    }

    public function edit_alamat_tinggal()
    {
        $id_siswa = $this->input->post('id');

        $alamat = array(
            'desa_id_desa' => $this->input->post('desa'),
            'tempat_tinggal_id_tempat_tinggal' => $this->input->post('tempat-tinggal'),
            'detail_alamat' => $this->input->post('jalan'),
            'nomor_rumah' => $this->input->post('no-rumah'),
            'nomor_asuransi' => $this->input->post('no-asuransi'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'dusun' => $this->input->post('dusun'),
            'kode_pos' => $this->input->post('kode-pos'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur')
        );

        $alamat = array_map(array($this, 'drop_empty'), $alamat);

        if ($this->alamat_model->update(array('siswa_id_siswa' => $id_siswa), $alamat)) {
            $this->response[] = array('isi' => "Berhasil update alamat tempat tinggal.", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal update alamat tempat tinggal.", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_domisili()
    {
        $id_siswa = $this->input->post('id');

        $domisili = array(
            'desa_id_desa' => $this->input->post('desa'),
            'tempat_tinggal_id_tempat_tinggal' => $this->input->post('tempat-tinggal'),
            'detail_domisili' => $this->input->post('jalan'),
            'nomor_rumah' => $this->input->post('no-rumah'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'dusun' => $this->input->post('dusun'),
            'kode_pos' => $this->input->post('kode-pos'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur')
        );

        $domisili = array_map(array($this, 'drop_empty'), $domisili);

        if ($this->domisili_model->select_where(array('siswa_id_siswa' => $id_siswa))->num_rows() == 0) {
            $domisili['siswa_id_siswa'] = $id_siswa;
            if ($this->domisili_model->insert($domisili)) {
                $this->response[] = array('isi' => "Berhasil tambah data domisili siswa", 'status' => true);
            } else {
                $this->response[] = array('isi' => "Gagal tambah data domisili siswa", 'status' => false);
            }
        } else {
            if ($this->domisili_model->update(array('siswa_id_siswa' => $id_siswa), $domisili)) {
                $this->response[] = array('isi' => "Berhasil update domisili siswa.", 'status' => true);
            } else {
                $this->response[] = array('isi' => "Gagal update domisili siswa.", 'status' => false);
            }
        }
        echo json_encode($this->response);
    }

    public function edit_bantuan()
    {
        $id_siswa = $this->input->post('id');
        $status_pip = $this->input->post('layak-pip');

        $kip = array(
            'nomor_kip' => $this->input->post('no-kip'),
            'nama_tertera_kip' => $this->input->post('nama-kip')
        );
        $kks = array(
            'nomor_kks' => $this->input->post('no-kks')
        );
        $kps_pkh = array(
            'nomor_kps_pkh' => $this->input->post('no-kps-pkh'),
        );
        $pip = array(
            'alasan_layak_pip_id_alasan_layak_pip' => $this->input->post('alasan-pip'),
            'bank' => $this->input->post('bank'),
            'nomor_rekening' => $this->input->post('rekening'),
            'kantor_cabang_pembantu' => $this->input->post('kacab'),
            'rekening_atas_nama' => $this->input->post('nama-rekening')
        );
        $siswa = array(
            'moda_transportasi_id_moda_transportasi' => $this->input->post('transportasi'),
            'anak_ke' => $this->input->post('anak-ke')
        );

        $kip = array_map(array($this, 'drop_empty'), $kip);
        $kks = array_map(array($this, 'drop_empty'), $kks);
        $kps_pkh = array_map(array($this, 'drop_empty'), $kps_pkh);
        $pip = array_map(array($this, 'drop_empty'), $pip);
        $siswa = array_map(array($this, 'drop_empty'), $siswa);

        if ($this->kip_model->select_where(array('siswa_id_siswa' => $id_siswa))->num_rows() == 0) {
            if ($this->cek_null($kip)) {
                $kip['siswa_id_siswa'] = $id_siswa;
                if ($this->kip_model->insert($kip)) {
                    $this->response[] = array('isi' => "Berhasil tambah data KIP", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal tambah data KIP", 'status' => false);
                }
            }
        } else {
            if ($this->cek_null($kip)) {
                if ($this->kip_model->update(array('siswa_id_siswa' => $id_siswa), $kip)) {
                    $this->response[] = array('isi' => "Berhasil update data KIP", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal update data KIP", 'status' => false);
                }
            } else {
                $this->kip_model->delete(array('siswa_id_siswa' => $id_siswa));
                if ($this->db->affected_rows() > 0) {
                    $this->response[] = array('isi' => "Berhasil hapus data KIP", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal hapus data KIP", 'status' => false);
                }
            }
        }

        if ($this->kks_model->select_where(array('siswa_id_siswa' => $id_siswa))->num_rows() == 0) {
            if ($this->cek_null($kks)) {
                $kks['siswa_id_siswa'] = $id_siswa;
                if ($this->kks_model->insert($kks)) {
                    $this->response[] = array('isi' => "Berhasil tambah data KKS", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal tambah data KKS", 'status' => false);
                }
            }
        } else {
            if ($this->cek_null($kks)) {
                if ($this->kks_model->update(array('siswa_id_siswa' => $id_siswa), $kks)) {
                    $this->response[] = array('isi' => "Berhasil update data KKS", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal update data KKS", 'status' => false);
                }
            } else {
                $this->kks_model->delete(array('siswa_id_siswa' => $id_siswa));
                if ($this->db->affected_rows() > 0) {
                    $this->response[] = array('isi' => "Berhasil hapus data KKS", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal hapus data KKS", 'status' => false);
                }
            }
        }

        if ($this->kps_pkh_model->select_where(array('siswa_id_siswa' => $id_siswa))->num_rows() == 0) {
            if ($this->cek_null($kps_pkh)) {
                $kps_pkh['siswa_id_siswa'] = $id_siswa;
                if ($this->kps_pkh_model->insert($kps_pkh)) {
                    $this->response[] = array('isi' => "Berhasil tambah data KPS/PKH", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal tambah data KPS/PKH", 'status' => false);
                }
            }
        } else {
            if ($this->cek_null($kps_pkh)) {
                if ($this->kps_pkh_model->update(array('siswa_id_siswa' => $id_siswa), $kps_pkh)) {
                    $this->response[] = array('isi' => "Berhasil update data KPS/PKH", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal update data KPS/PKH", 'status' => false);
                }
            } else {
                $this->kps_pkh_model->delete(array('siswa_id_siswa' => $id_siswa));
                if ($this->db->affected_rows() > 0) {
                    $this->response[] = array('isi' => "Berhasil hapus data KPS/PKH", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal hapus data KPS/PKH", 'status' => false);
                }
            }
        }

        if ($status_pip == 1) {
            if ($this->pip_model->select_where(array('siswa_id_siswa' => $id_siswa))->num_rows() == 0) {
                $pip['siswa_id_siswa'] = $id_siswa;
                if ($this->pip_model->insert($pip)) {
                    $this->response[] = array('isi' => "Berhasil tambah data PIP", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal tambah data PIP", 'status' => false);
                }
            } else {
                if ($this->pip_model->update(array('siswa_id_siswa' => $id_siswa), $pip)) {
                    $this->response[] = array('isi' => "Berhasil update data PIP", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal update data PIP", 'status' => false);
                }
            }
        } else {
            if ($this->pip_model->select_where(array('siswa_id_siswa' => $id_siswa))->num_rows() > 0) {
                $this->pip_model->delete(array('siswa_id_siswa' => $id_siswa));
                if ($this->db->affected_rows() > 0) {
                    $this->response[] = array('isi' => "Berhasil hapus data PIP", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal hapus data PIP", 'status' => false);
                }
            }
        }

        if ($this->siswa_model->update(array('id_siswa' => $id_siswa), $siswa)) {
            $this->response[] = array('isi' => "Berhasil update data siswa", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal update data siswa", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_ayah()
    {
        $id_ayah = $this->input->post('id');

        $ayah = array(
            'nama' => $this->input->post('nama'),
            'kondisi' => $this->input->post('kondisi'),
            'nik' => $this->input->post('nik'),
            'nomor_telepon_seluler' => $this->input->post('no-telp'),
            'nomor_rumah' => $this->input->post('no-rumah'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'dusun' => $this->input->post('dusun'),
            'desa_id_desa' => $this->input->post('desa'),
            'kode_pos' => $this->input->post('kode-pos'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
            'detail_alamat' => $this->input->post('jalan'),
            'tempat_tinggal_id_tempat_tinggal' => $this->input->post('tempat-tinggal'),
            'tanggal_lahir' => $this->input->post('tanggal-lahir'),
            'pendidikan_id_pendidikan' => $this->input->post('pendidikan'),
            'pekerjaan_id_pekerjaan' => $this->input->post('pekerjaan'),
            'penghasilan_id_penghasilan' => $this->input->post('penghasilan')
        );

        $ayah = array_map(array($this, 'drop_empty'), $ayah);

        if ($this->ayah_model->update(array('id_ayah' => $id_ayah), $ayah)) {
            $this->response[] = array('isi' => "Berhasil update data ayah", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal update data ayah", 'status' => false);
        }

        $this->ayah_has_berkebutuhan_khusus_model->delete(array('ayah_id_ayah' => $id_ayah));
        if ($this->input->post('ayah-kebutuhan-khusus') != false) {
            $ayah_has_berkebutuhan_khusus = array();
            foreach ($this->input->post('ayah-kebutuhan-khusus') as $value) {
                $ayah_has_berkebutuhan_khusus[] = array(
                    'ayah_id_ayah' => $id_ayah,
                    'berkebutuhan_khusus_id_berkebutuhan_khusus' => $value
                );
            }
            if ($this->ayah_has_berkebutuhan_khusus_model->insert_batch($ayah_has_berkebutuhan_khusus) == false) {
                $this->response[] = array('isi' => "Gagal update kebutuhan khusus ayah", 'status' => false);
            } else {
                $this->response[] = array('isi' => "Berhasil update kebutuhan khusus ayah", 'status' => true);
            }
        }

        echo json_encode($this->response);
    }

    public function edit_ibu()
    {
        $id_ibu = $this->input->post('id');

        $ibu = array(
            'nama' => $this->input->post('nama'),
            'kondisi' => $this->input->post('kondisi'),
            'nik' => $this->input->post('nik'),
            'nomor_telepon_seluler' => $this->input->post('no-telp'),
            'nomor_rumah' => $this->input->post('no-rumah'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'dusun' => $this->input->post('dusun'),
            'desa_id_desa' => $this->input->post('desa'),
            'kode_pos' => $this->input->post('kode-pos'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
            'detail_alamat' => $this->input->post('jalan'),
            'tempat_tinggal_id_tempat_tinggal' => $this->input->post('tempat-tinggal'),
            'tanggal_lahir' => $this->input->post('tanggal-lahir'),
            'pendidikan_id_pendidikan' => $this->input->post('pendidikan'),
            'pekerjaan_id_pekerjaan' => $this->input->post('pekerjaan'),
            'penghasilan_id_penghasilan' => $this->input->post('penghasilan')
        );

        $ibu = array_map(array($this, 'drop_empty'), $ibu);

        if ($this->ibu_model->update(array('id_ibu' => $id_ibu), $ibu)) {
            $this->response[] = array('isi' => "Berhasil update data ibu", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal update data ibu", 'status' => false);
        }

        $this->ibu_has_berkebutuhan_khusus_model->delete(array('ibu_id_ibu' => $id_ibu));
        if ($this->input->post('ibu-kebutuhan-khusus') != false) {
            $ibu_has_berkebutuhan_khusus = array();
            foreach ($this->input->post('ibu-kebutuhan-khusus') as $value) {
                $ibu_has_berkebutuhan_khusus[] = array(
                    'ibu_id_ibu' => $id_ibu,
                    'berkebutuhan_khusus_id_berkebutuhan_khusus' => $value
                );
            }
            if ($this->ibu_has_berkebutuhan_khusus_model->insert_batch($ibu_has_berkebutuhan_khusus) == false) {
                $this->response[] = array('isi' => "Gagal update kebutuhan khusus ibu", 'status' => false);
            } else {
                $this->response[] = array('isi' => "Berhasil update kebutuhan khusus ibu", 'status' => true);
            }
        }

        echo json_encode($this->response);
    }

    public function edit_wali()
    {
        $id_siswa = $this->input->post('id');

        $wali = array(
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'nomor_telepon_seluler' => $this->input->post('no-telp'),
            'nomor_rumah' => $this->input->post('no-rumah'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'dusun' => $this->input->post('dusun'),
            'desa_id_desa' => $this->input->post('desa'),
            'kode_pos' => $this->input->post('kode-pos'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
            'detail_alamat' => $this->input->post('jalan'),
            'tempat_tinggal_id_tempat_tinggal' => $this->input->post('tempat-tinggal'),
            'tanggal_lahir' => $this->input->post('tanggal-lahir'),
            'pendidikan_id_pendidikan' => $this->input->post('pendidikan'),
            'pekerjaan_id_pekerjaan' => $this->input->post('pekerjaan'),
            'penghasilan_id_penghasilan' => $this->input->post('penghasilan')
        );

        $wali = array_map(array($this, 'drop_empty'), $wali);
        $id_wali = null;
        $data_wali = $this->wali_model->select_where(array('siswa_id_siswa' => $id_siswa));

        if ($data_wali->num_rows() > 0) {
            if ($this->cek_null($wali)) {
                $data_wali = $data_wali->row();
                $id_wali = $data_wali->id_wali;
                if ($this->wali_model->update(array('siswa_id_siswa' => $id_siswa), $wali)) {
                    $this->response[] = array('isi' => 'Berhasil update data wali', 'status' => true);
                } else {
                    $this->response[] = array('isi' => 'Gagal update data wali', 'status' => false);
                }
            } else {
                $this->response[] = array('isi' => 'Gunakan tombol <b>Hapus</b> untuk hapus data wali', 'status' => false);
            }
        } else {
            $wali['siswa_id_siswa'] = $id_siswa;
            $id_wali = $this->wali_model->insert_last_id($wali);
            if ($id_wali != 0) {
                $this->response[] = array('isi' => 'Berhasil tambah data wali', 'status' => true);
            } else {
                $this->response[] = array('isi' => 'Gagal tambah data wali', 'status' => false);
            }
        }

        if ($id_wali != null) {
            $this->wali_has_berkebutuhan_khusus_model->delete(array('wali_id_wali' => $id_wali));
            if ($this->input->post('wali-kebutuhan-khusus') != false) {
                $wali_has_berkebutuhan_khusus = array();
                foreach ($this->input->post('wali-kebutuhan-khusus') as $value) {
                    $wali_has_berkebutuhan_khusus[] = array(
                        'wali_id_wali' => $id_wali,
                        'berkebutuhan_khusus_id_berkebutuhan_khusus' => $value
                    );
                }
                if ($this->wali_has_berkebutuhan_khusus_model->insert_batch($wali_has_berkebutuhan_khusus) == false) {
                    $this->response[] = array('isi' => "Gagal update kebutuhan khusus wali", 'status' => false);
                } else {
                    $this->response[] = array('isi' => "Berhasil update kebutuhan khusus wali", 'status' => true);
                }
            }
        }

        echo json_encode($this->response);
    }

    public function edit_kontak()
    {
        $id_siswa = $this->input->post('id');

        $siswa = array(
            'nomor_telepon_rumah' => $this->input->post('no-telp-rumah'),
            'email' => $this->input->post('email')
        );

        $whatsapp = array(
            'provider_id_provider' => $this->input->post('provider-whatsapp'),
            'nomor_whatsapp' => $this->input->post('no-whatsapp')
        );

        $siswa = array_map(array($this, 'drop_empty'), $siswa);
        $whatsapp = array_map(array($this, 'drop_empty'), $whatsapp);

        if ($this->siswa_model->update(array('id_siswa' => $id_siswa), $siswa)) {
            $this->response[] = array('isi' => "Berhasil update kontak siswa", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal update kontak siswa", 'status' => false);
        }

        if ($this->whatsapp_model->select_where(array('siswa_id_siswa' => $id_siswa))->num_rows() == 0) {
            if ($this->cek_null($whatsapp)) {
                $whatsapp['siswa_id_siswa'] = $id_siswa;
                if ($this->whatsapp_model->insert($whatsapp)) {
                    $this->response[] = array('isi' => "Berhasil tambah whatsapp siswa", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal tambah whatsapp siswa", 'status' => false);
                }
            }
        } else {
            if ($whatsapp['nomor_whatsapp'] != NULL) {
                if ($this->whatsapp_model->update(array('siswa_id_siswa' => $id_siswa), $whatsapp)) {
                    $this->response[] = array('isi' => "Berhasil update whatsapp siswa", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal update whatsapp siswa", 'status' => false);
                }
            } else {
                $this->whatsapp_model->delete(array('siswa_id_siswa' => $id_siswa));
                if ($this->db->affected_rows() > 0) {
                    $this->response[] = array('isi' => "Berhasil hapus whatsapp siswa", 'status' => true);
                } else {
                    $this->response[] = array('isi' => "Gagal hapus whatsapp siswa", 'status' => false);
                }
            }
        }

        echo json_encode($this->response);
    }

    public function edit_periodik()
    {
        $id_siswa = $this->input->post('id');

        $siswa = array(
            'tinggi_badan_cm' => $this->input->post('tinggi'),
            'berat_badan_kg' => $this->input->post('berat'),
            'lingkar_kepala_cm' => $this->input->post('lingkar'),
            'jarak_tempat_tinggal_ke_sekolah_m' => $this->input->post('jarak'),
            'waktu_tempuh_ke_sekolah_menit' => $this->input->post('waktu'),
            'ukuran_baju' => $this->input->post('baju'),
            'ukuran_celana' => $this->input->post('celana'),
            'ukuran_sepatu' => $this->input->post('sepatu'),
            'ukuran_topi' => $this->input->post('topi'),
            'jumlah_saudara_kandung' => $this->input->post('jumlah-saudara')
        );

        $siswa = array_map(array($this, 'drop_empty'), $siswa);

        if ($this->siswa_model->update(array('id_siswa' => $id_siswa), $siswa)) {
            $this->response[] = array('isi' => "Berhasil update data periodik", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal update data periodik", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_registrasi()
    {
        $id_pendaftaran_masuk = $this->input->post('id');

        $pendaftaran_masuk = array(
            'kompetensi_keahlian_diterima' => $this->input->post('jurusan'),
            'diterima_ppdb_lewat_jalur' => $this->input->post('jalur'),
            'kode_pin_pendaftaran' => $this->input->post('kode-pin'),
            'jenis_pendaftaran_diterima' => $this->input->post('jenis'),
            'nis' => $this->input->post('nis'),
            'npsn_smp' => $this->input->post('npsn'),
            'akreditasi_smp' => $this->input->post('akreditasi'),
            'tahun_lulus_smp' => $this->input->post('tahun'),
            'tanggal_masuk_sekolah' => $this->input->post('tanggal'),
            'asal_sekolah' => $this->input->post('asal-sekolah'),
            'nomor_peserta_ujian' => $this->input->post('nomor-ujian'),
            'no_seri_ijazah' => $this->input->post('ijazah'),
            'no_seri_khusus' => $this->input->post('nomor-khusus'),
            'nomor_skhun' => $this->input->post('skhun'),
        );

        $pendaftaran_masuk = array_map(array($this, 'drop_empty'), $pendaftaran_masuk);

        if ($this->pendaftaran_masuk_model->update(array('id_pendaftaran_masuk' => $id_pendaftaran_masuk), $pendaftaran_masuk)) {
            $this->response[] = array('isi' => "Berhasil update registrasi pendaftaran siswa.", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal update registrasi pendaftaran siswa.", 'status' => false);
        }

        $this->pilihan_jalur_ppdb_model->delete(array('pendaftaran_masuk_id_pendaftaran_masuk' => $id_pendaftaran_masuk));
        if ($this->input->post('jalur-ppdb-dipilih') != false) {
            $pilihan_jalur_ppdb = array();
            foreach ($this->input->post('jalur-ppdb-dipilih') as $value) {
                $pilihan_jalur_ppdb[] = array(
                    'pendaftaran_masuk_id_pendaftaran_masuk' => $id_pendaftaran_masuk,
                    'jenis_pendaftaran_masuk_id_jenis_pendaftaran_masuk' => $value
                );
            }
            if ($this->pilihan_jalur_ppdb_model->insert_batch($pilihan_jalur_ppdb) == false) {
                $this->response[] = array('isi' => "Gagal update pilihan jalur PPDB.", 'status' => false);
            } else {
                $this->response[] = array('isi' => "Berhasil update pilihan jalur PPDB.", 'status' => true);
            }
        }

        echo json_encode($this->response);
    }

    public function hapus_domisili()
    {
        $id_siswa = $this->input->post('id');

        $this->domisili_model->delete(array('siswa_id_siswa' => $id_siswa));
        if ($this->db->affected_rows() > 0) {
            $this->response[] = array('isi' => "Berhasil hapus data domisili", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Siswa tidak memiliki data domisili", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function hapus_wali()
    {
        $id_siswa = $this->input->post('id');

        $data_wali = $this->wali_model->select_where(array('siswa_id_siswa' => $id_siswa));
        if ($data_wali->num_rows() > 0) {
            $data_wali = $data_wali->row();
            $id_wali = $data_wali->id_wali;
            $this->wali_has_berkebutuhan_khusus_model->delete(array('wali_id_wali' => $id_wali));
            if ($this->db->affected_rows() > 0) {
                $this->response[] = array('isi' => "Berhasil hapus kebutuhan khusus wali", 'status' => true);
            } else {
                $this->response[] = array('isi' => "Gagal hapus kebutuhan khusus wali", 'status' => true);
            }

            $this->wali_model->delete(array('id_wali' => $id_wali));
            if ($this->db->affected_rows() > 0) {
                $this->response[] = array('isi' => "Berhasil hapus data wali", 'status' => true);
            } else {
                $this->response[] = array('isi' => "Gagal hapus data wali", 'status' => true);
            }
        } else {
            $this->response[] = array('isi' => "Siswa tidak memiliki wali", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function cek_null($array)
    {
        $status = true;
        foreach ($array as $value) {
            if ($value === NULL) {
                $status = false;
            } else {
                $status = true;
                break 1;
            }
        }

        //TRUE jika ada isinya, FALSE jika NULL semua
        return $status;
    }

    public function drop_empty($var)
    {
        return ($var === '' || $var === '-') ? NULL : $var;
    }

    private function upload($name, $type)
    {
        $config['upload_path'] = './assets/img/foto_profil/';
        $config['allowed_types'] = $type;
        $config['max_size']  = '0';
        $config['file_name'] = substr(md5(uniqid()), 0, 28);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($name)) {
            $this->response[] = array('isi' => "Gagal upload foto profil. " . $this->upload->display_errors(), 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil upload foto profil", 'status' => true);
        }
        return $this->upload->data();
    }

    private function delete_file($file)
    {
        $path = "./assets/img/foto_profil/$file";
        @chmod($path, 0777);
        if (is_file($path)) {
            @unlink($path);
        }
    }

    public function bantuan_siswa()
    {
        $id = $this->input->post('id_siswa');
        $result = $this->bantuan_tidak_mampu_model->select_where(array("siswa_id_siswa" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function telepon_siswa()
    {
        $id = $this->input->post('id_siswa');
        $result = $this->nomor_telepon_seluler_model->select_where_join_provider(array("siswa_id_siswa" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function media_sosial_siswa()
    {
        $id = $this->input->post('id_siswa');
        $result = $this->siswa_has_media_sosial_model->select_where_join_medsos(array("siswa_id_siswa" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function kontak_darurat_siswa()
    {
        $id = $this->input->post('id_siswa');
        $result = $this->kontak_darurat_model->select_where(array("siswa_id_siswa" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function saudara_siswa()
    {
        $id = $this->input->post('id_siswa');
        $result = $this->saudara_kandung_model->select_where_join_gender(array("siswa_id_siswa" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function prestasi_siswa()
    {
        $id = $this->input->post('id_siswa');
        $result = $this->prestasi_model->select_where(array("siswa_id_siswa" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function beasiswa_siswa()
    {
        $id = $this->input->post('id_siswa');
        $result = $this->beasiswa_model->select_where_join_jenis(array("siswa_id_siswa" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function pilihan_jurusan_siswa()
    {
        $id = $this->input->post('id');
        $result = $this->view_model->select_view_pilihan_jurusan_saat_ppdb_where(array("id_pendaftaran_masuk" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function mean_siswa()
    {
        $id = $this->input->post('id');
        $result = $this->view_model->select_view_mean_mapel_where(array("id_pendaftaran_masuk" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function pembelajaran_siswa()
    {
        $id = $this->input->post('id');
        $result = $this->view_model->select_view_data_proses_pembelajaran_where(array("id_siswa" => $id))->result();
        echo json_encode(array('data' => $result));
    }

    public function tambah_bantuan_siswa()
    {
        $data_bantuan = array(
            'nama_program' => $this->input->post('nama-program'),
            'bukti' => $this->input->post('bukti'),
            'siswa_id_siswa' => $this->input->post('id')
        );

        if ($this->bantuan_tidak_mampu_model->insert($data_bantuan)) {
            $this->response[] = array('isi' => "Berhasil tambah data bantuan lainnya", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data bantuan lainnya", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_nomor_siswa()
    {
        $nomor_telepon_seluler = array(
            'nomor_telepon_seluler' => $this->input->post('no-telp'),
            'provider_id_provider' => $this->input->post('provider'),
            'siswa_id_siswa' => $this->input->post('id')
        );

        if ($this->nomor_telepon_seluler_model->insert($nomor_telepon_seluler)) {
            $this->response[] = array('isi' => "Berhasil tambah nomor telepon siswa", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah nomor telepon siswa", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_medsos_siswa()
    {
        $siswa_has_media_sosial = array(
            'siswa_id_siswa' => $this->input->post('id'),
            'media_sosial_id_media_sosial' => $this->input->post('medsos'),
            'akun' => $this->input->post('akun')
        );

        if ($this->siswa_has_media_sosial_model->insert($siswa_has_media_sosial)) {
            $this->response[] = array('isi' => "Berhasil tambah data media sosial", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data media sosial", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_kontak_darurat_siswa()
    {
        $kontak_darurat = array(
            'siswa_id_siswa' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'hubungan_peserta_didik' => $this->input->post('hubungan'),
            'nomor_telepon_seluler' => $this->input->post('nomor')
        );

        if ($this->kontak_darurat_model->insert($kontak_darurat)) {
            $this->response[] = array('isi' => "Berhasil tambah data kontak darurat", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data kontak darurat", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_saudara_siswa()
    {
        $saudara_kandung = array(
            'siswa_id_siswa' => $this->input->post('id'),
            'gender_id_gender' => $this->input->post('gender'),
            'nama' => $this->input->post('nama'),
            'anak_ke' => $this->input->post('anak-ke'),
            'nomor_telepon_seluler' => $this->input->post('no-telp')
        );

        $saudara_kandung = array_map(array($this, 'drop_empty'), $saudara_kandung);

        if ($this->saudara_kandung_model->insert($saudara_kandung)) {
            $this->response[] = array('isi' => "Berhasil tambah data saudara kandung", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data saudara kandung", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_prestasi_siswa()
    {
        $prestasi = array(
            'siswa_id_siswa' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'penyelenggara' => $this->input->post('penyelenggara'),
            'bidang_prestasi_id_bidang_prestasi' => $this->input->post('bidang'),
            'tingkat_prestasi_id_tingkat_prestasi' => $this->input->post('tingkat'),
            'peringkat' => $this->input->post('peringkat'),
            'tahun' => $this->input->post('tahun')
        );

        if ($this->prestasi_model->insert($prestasi)) {
            $this->response[] = array('isi' => "Berhasil tambah data prestasi", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data prestasi", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_beasiswa_siswa()
    {
        $beasiswa = array(
            'siswa_id_siswa' => $this->input->post('id'),
            'keterangan' => $this->input->post('keterangan'),
            'jenis_beasiswa_id_jenis_beasiswa' => $this->input->post('jenis'),
            'tanggal_mulai' => $this->input->post('mulai'),
            'tanggal_selesai' => $this->input->post('selesai')
        );

        if ($this->beasiswa_model->insert($beasiswa)) {
            $this->response[] = array('isi' => "Berhasil tambah data beasiswa", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data beasiswa", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_pilihan_jurusan_siswa()
    {
        $pililhan_jurusan_ppdb = array(
            'kompetensi_keahlian_id_kompetensi_keahlian' => $this->input->post('kompetensi-keahlian'),
            'pendaftaran_masuk_id_pendaftaran_masuk' => $this->input->post('id'),
            'pilihan_ke' => $this->input->post('pilihan-ke')
        );

        if ($this->pilihan_jurusan_ppdb_model->insert($pililhan_jurusan_ppdb)) {
            $this->response[] = array('isi' => "Berhasil tambah data pilihan jurusan PPDB", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data pilihan jurusan PPDB", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_mean_siswa()
    {
        $mean_mapel = array(
            'mata_pelajaran_id_mata_pelajaran' => $this->input->post('mata-pelajaran'),
            'pendaftaran_masuk_id_pendaftaran_masuk' => $this->input->post('id'),
            'nilai' => $this->input->post('nilai')
        );

        if ($this->mean_mapel_model->insert($mean_mapel)) {
            $this->response[] = array('isi' => "Berhasil tambah data nilai rata-rata", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data nilai rata-rata", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function tambah_pembelajaran_siswa()
    {
        $proses_pembelajaran = array(
            'tahun_ajaran_id_tahun_ajaran' => $this->input->post('tahun-ajaran'),
            'siswa_id_siswa' => $this->input->post('id'),
            'kelas_id_kelas' => $this->input->post('kelas'),
            'nomor_absen' => $this->input->post('nomor'),
            'wali_kelas' => $this->input->post('wali'),
            'guru_bk' => $this->input->post('bk')
        );

        if ($this->proses_pembelajaran_model->insert($proses_pembelajaran)) {
            $this->response[] = array('isi' => "Berhasil tambah data nilai rata-rata", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal tambah data nilai rata-rata", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_bantuan_siswa()
    {
        $data_bantuan = array(
            'nama_program' => $this->input->post('nama-program'),
            'bukti' => $this->input->post('bukti')
        );

        if ($this->bantuan_tidak_mampu_model->update(array('id_bantuan_tidak_mampu' => $this->input->post('id-bantuan')), $data_bantuan)) {
            $this->response[] = array('isi' => "Berhasil edit data bantuan lainnya", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data bantuan lainnya", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_nomor_siswa()
    {
        $nomor_telepon_seluler = array(
            'nomor_telepon_seluler' => $this->input->post('no-telp'),
            'provider_id_provider' => $this->input->post('provider')
        );

        if ($this->nomor_telepon_seluler_model->update(array('id_nomor_telepon_seluler' => $this->input->post('id-telp')), $nomor_telepon_seluler)) {
            $this->response[] = array('isi' => "Berhasil edit nomor telepon siswa", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit nomor telepon siswa", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_medsos_siswa()
    {
        $siswa_has_media_sosial = array(
            'media_sosial_id_media_sosial' => $this->input->post('medsos'),
            'akun' => $this->input->post('akun')
        );

        $where = array(
            'siswa_id_siswa' => $this->input->post('id'),
            'media_sosial_id_media_sosial' => $this->input->post('id-medsos')
        );

        if ($this->siswa_has_media_sosial_model->update($where, $siswa_has_media_sosial)) {
            $this->response[] = array('isi' => "Berhasil edit data media sosial", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data media sosial", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_kontak_darurat_siswa()
    {
        $kontak_darurat = array(
            'nama' => $this->input->post('nama'),
            'hubungan_peserta_didik' => $this->input->post('hubungan'),
            'nomor_telepon_seluler' => $this->input->post('nomor')
        );

        if ($this->kontak_darurat_model->update(array('id_kontak_darurat' => $this->input->post('id')), $kontak_darurat)) {
            $this->response[] = array('isi' => "Berhasil edit data kontak darurat", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data kontak darurat", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_saudara_siswa()
    {
        $saudara_kandung = array(
            'gender_id_gender' => $this->input->post('gender'),
            'nama' => $this->input->post('nama'),
            'anak_ke' => $this->input->post('anak-ke'),
            'nomor_telepon_seluler' => $this->input->post('no-telp')
        );

        if ($this->saudara_kandung_model->update(array('id_saudara_kandung' => $this->input->post('id')), $saudara_kandung)) {
            $this->response[] = array('isi' => "Berhasil edit data saudara kandung", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data saudara kandung", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_prestasi_siswa()
    {
        $prestasi = array(
            'nama' => $this->input->post('nama'),
            'penyelenggara' => $this->input->post('penyelenggara'),
            'bidang_prestasi_id_bidang_prestasi' => $this->input->post('bidang'),
            'tingkat_prestasi_id_tingkat_prestasi' => $this->input->post('tingkat'),
            'peringkat' => $this->input->post('peringkat'),
            'tahun' => $this->input->post('tahun')
        );

        if ($this->prestasi_model->update(array('id_prestasi' => $this->input->post('id')), $prestasi)) {
            $this->response[] = array('isi' => "Berhasil edit data prestasi", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data prestasi", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_beasiswa_siswa()
    {
        $beasiswa = array(
            'keterangan' => $this->input->post('keterangan'),
            'jenis_beasiswa_id_jenis_beasiswa' => $this->input->post('jenis'),
            'tanggal_mulai' => $this->input->post('mulai'),
            'tanggal_selesai' => $this->input->post('selesai')
        );

        if ($this->beasiswa_model->update(array('id_beasiswa' => $this->input->post('id')), $beasiswa)) {
            $this->response[] = array('isi' => "Berhasil edit data beasiswa", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data beasiswa", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_pilihan_jurusan_siswa()
    {
        $pililhan_jurusan_ppdb = array(
            'kompetensi_keahlian_id_kompetensi_keahlian' => $this->input->post('kompetensi-keahlian'),
            'pilihan_ke' => $this->input->post('pilihan-ke')
        );

        $where = array(
            'kompetensi_keahlian_id_kompetensi_keahlian' => $this->input->post('id-komp'),
            'pendaftaran_masuk_id_pendaftaran_masuk' => $this->input->post('id')
        );

        if ($this->pilihan_jurusan_ppdb_model->update($where, $pililhan_jurusan_ppdb)) {
            $this->response[] = array('isi' => "Berhasil edit data pilihan jurusan PPDB", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data pilihan jurusan PPDB", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_mean_siswa()
    {
        $mean_mapel = array(
            'mata_pelajaran_id_mata_pelajaran' => $this->input->post('mata-pelajaran'),
            'nilai' => $this->input->post('nilai')
        );

        $where = array(
            'mata_pelajaran_id_mata_pelajaran' => $this->input->post('id-mapel'),
            'pendaftaran_masuk_id_pendaftaran_masuk' => $this->input->post('id')
        );

        if ($this->mean_mapel_model->update($where, $mean_mapel)) {
            $this->response[] = array('isi' => "Berhasil edit data nilai rata-rata", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data nilai rata-rata", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function edit_pembelajaran_siswa()
    {
        $proses_pembelajaran = array(
            'tahun_ajaran_id_tahun_ajaran' => $this->input->post('tahun-ajaran'),
            'kelas_id_kelas' => $this->input->post('kelas'),
            'nomor_absen' => $this->input->post('nomor'),
            'wali_kelas' => $this->input->post('wali'),
            'guru_bk' => $this->input->post('bk')
        );

        if ($this->proses_pembelajaran_model->update(array('id_proses_pembelajaran' => $this->input->post('id')), $proses_pembelajaran)) {
            $this->response[] = array('isi' => "Berhasil edit data proses pembelajaran", 'status' => true);
        } else {
            $this->response[] = array('isi' => "Gagal edit data proses pembelajaran", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function get_row_prestasi_siswa()
    {
        $id = $this->input->post('id');
        $result = $this->prestasi_model->select_where_join_bidang_and_tingkat(array("id_prestasi" => $id))->row();
        echo json_encode(array('data' => $result));
    }

    public function hapus_bantuan_siswa()
    {
        if ($this->bantuan_tidak_mampu_model->delete(array('id_bantuan_tidak_mampu' => $this->input->post('id_bantuan'))) == false) {
            $this->response[] = array('isi' => "Gagal hapus data bantuan lainnya", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data bantuan lainnya", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_nomor_siswa()
    {
        if ($this->nomor_telepon_seluler_model->delete(array('id_nomor_telepon_seluler' => $this->input->post('id_nomor'))) == false) {
            $this->response[] = array('isi' => "Gagal hapus nomor telepon siswa", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus nomor telepon siswa", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_medsos_siswa()
    {
        $where = array(
            'siswa_id_siswa' => $this->input->post('id-siswa'),
            'media_sosial_id_media_sosial' => $this->input->post('id')
        );

        if ($this->siswa_has_media_sosial_model->delete($where) == false) {
            $this->response[] = array('isi' => "Gagal hapus data media sosial", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data media sosial", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_kontak_darurat_siswa()
    {
        if ($this->kontak_darurat_model->delete(array('id_kontak_darurat' => $this->input->post('id'))) == false) {
            $this->response[] = array('isi' => "Gagal hapus data kontak darurat siswa", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data kontak darurat siswa", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_saudara_siswa()
    {
        if ($this->saudara_kandung_model->delete(array('id_saudara_kandung' => $this->input->post('id'))) == false) {
            $this->response[] = array('isi' => "Gagal hapus data saudara kandung", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data saudara kandung", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_prestasi_siswa()
    {
        if ($this->prestasi_model->delete(array('id_prestasi' => $this->input->post('id'))) == false) {
            $this->response[] = array('isi' => "Gagal hapus data prestasi", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data prestasi", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_beasiswa_siswa()
    {
        if ($this->beasiswa_model->delete(array('id_beasiswa' => $this->input->post('id'))) == false) {
            $this->response[] = array('isi' => "Gagal hapus data beasiswa", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data beasiswa", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_pilihan_jurusan_siswa()
    {
        $where = array(
            'kompetensi_keahlian_id_kompetensi_keahlian' => $this->input->post('id-komp'),
            'pendaftaran_masuk_id_pendaftaran_masuk' => $this->input->post('id-pend')
        );

        if ($this->pilihan_jurusan_ppdb_model->delete($where) == false) {
            $this->response[] = array('isi' => "Gagal hapus data pilihan jurusan PPDB", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data pilihan jurusan PPDB", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_mean_siswa()
    {
        $where = array(
            'mata_pelajaran_id_mata_pelajaran' => $this->input->post('id-mapel'),
            'pendaftaran_masuk_id_pendaftaran_masuk' => $this->input->post('id-pend')
        );

        if ($this->mean_mapel_model->delete($where) == false) {
            $this->response[] = array('isi' => "Gagal hapus data nilai rata-rata", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data nilai rata-rata", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function hapus_pembelajaran_siswa()
    {
        if ($this->proses_pembelajaran_model->delete(array('id_proses_pembelajaran' => $this->input->post('id'))) == false) {
            $this->response[] = array('isi' => "Gagal hapus data proses pembelajaran", 'status' => false);
        } else {
            $this->response[] = array('isi' => "Berhasil hapus data proses pembelajaran", 'status' => true);
        }

        echo json_encode($this->response);
    }

    public function simpan_data_siswa()
    {
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

    //import data excel
    public function import_excel()
    {
        $this->load->library('upload');

        $config['upload_path'] = './assets/temp/';
        $config['allowed_types'] = 'xlsx';
        $config['maxsize'] = '0';
        $config['file_name'] = 'file-import';
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('import_file')) {
            $this->response[] = array('isi' => "Berhasil upload excel", 'status' => true);
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $spreadsheet = $reader->load('./assets/temp/file-import.xlsx');

            $sheetDataSumber = $spreadsheet->getSheetByName('Data Sumber')->toArray();
            $sheetHasilConvert = $spreadsheet->getSheetByName('Hasil Convert')->toArray();
            $sheetProsesPembelajaran = $spreadsheet->getSheetByName('Data Proses Pembelajaran')->toArray();
            $sheetJalurPpdb = $spreadsheet->getSheetByName('Data Jalur PPDB dipilih')->toArray();
            $sheetPrestasi = $spreadsheet->getSheetByName('Data Prestasi')->toArray();
            $sheetBeasiswa = $spreadsheet->getSheetByName('Data Beasiswa')->toArray();
            $sheetSaudara = $spreadsheet->getSheetByName('Data Saudara Kandung')->toArray();
            $sheetKontakDarurat = $spreadsheet->getSheetByName('Data Kontak Darurat')->toArray();
            $sheetBantuanLainnya = $spreadsheet->getSheetByName('Data Bantuan Lainnya')->toArray();

            $countHasilConvert = count($sheetHasilConvert);
            $countProsesPembelajaran = count($sheetProsesPembelajaran);
            $countJalurPpdb = count($sheetJalurPpdb);
            $countPrestasi = count($sheetPrestasi);
            $countBeasiswa = count($sheetBeasiswa);
            $countSaudara = count($sheetSaudara);
            $countKontakDarurat = count($sheetKontakDarurat);
            $countBantuanLainnya = count($sheetBantuanLainnya);

            $siswa = array();
            $alamat = array();
            $ayah = array();
            $ayah_has_berkebutuhan_khusus = array();
            $bantuan_tidak_mampu = array();
            $beasiswa = array();
            $domisili = array();
            $ibu = array();
            $ibu_has_berkebutuhan_khusus = array();
            $kip = array();
            $kks = array();
            $kontak_darurat = array();
            $kps_pkh = array();
            $mean_mapel = array();
            $nomor_telepon_seluler = array();
            $pendaftaran_masuk = array();
            $pilihan_jalur_ppdb = array();
            $pilihan_jurusan_ppdb = array();
            $pip = array();
            $prestasi = array();
            $proses_pembelajaran = array();
            $riwayat_kesehatan = array();
            $saudara_kandung = array();
            $siswa_has_berkebutuhan_khusus = array();
            $siswa_has_media_sosial = array();
            $wali = array();
            $wali_has_berkebutuhan_khusus = array();
            $whatsapp = array();
            $pendaftaran_keluar = array();

            $whereNisnForDelete = 'nisn=""';
            $whereIdSiswaForDelete = 'siswa_id_siswa=""';
            $whereNotNisnForDelete = 'nisn NOT IN ("0"';
            $idSiswaNisn = [];
            $temp = '';

            if ($countHasilConvert > 3) {

                //Insert table siswa
                for ($i = 3; $i < $countHasilConvert; $i++) {
                    $siswa[] = array(
                        'gender_id_gender' => $sheetHasilConvert[$i][3],
                        'agama_id_agama' => $sheetHasilConvert[$i][8],
                        'moda_transportasi_id_moda_transportasi' => $sheetHasilConvert[$i][17],
                        'kelas_id_kelas' => $sheetHasilConvert[$i][66],
                        'nama' => $sheetHasilConvert[$i][1],
                        'nisn' => $sheetHasilConvert[$i][4],
                        'nik' => $sheetHasilConvert[$i][7],
                        'tempat_lahir' => $sheetHasilConvert[$i][5],
                        'tanggal_lahir' => $sheetHasilConvert[$i][6],
                        'nomor_kk' => $sheetHasilConvert[$i][60],
                        'nomor_registrasi_akta_lahir' => $sheetHasilConvert[$i][49],
                        'kewarganegaraan' => $sheetDataSumber[$i][60],
                        'nomor_telepon_rumah' => $sheetHasilConvert[$i][18],
                        'email' => $sheetHasilConvert[$i][20],
                        'tinggi_badan_cm' => $sheetHasilConvert[$i][62],
                        'berat_badan_kg' => $sheetHasilConvert[$i][61],
                        'jarak_tempat_tinggal_ke_sekolah_m' => $sheetHasilConvert[$i][65],
                        'waktu_tempuh_ke_sekolah_menit' => $sheetDataSumber[$i][131],
                        'jumlah_saudara_kandung' => $sheetHasilConvert[$i][64],
                        'lingkar_kepala_cm' => $sheetHasilConvert[$i][63],
                        'ukuran_baju' => $sheetDataSumber[$i][132],
                        'ukuran_celana' => $sheetDataSumber[$i][133],
                        'ukuran_sepatu' => $sheetDataSumber[$i][134],
                        'ukuran_topi' => $sheetDataSumber[$i][135],
                        'nipd' => $sheetHasilConvert[$i][2],
                        'golongan' => $sheetHasilConvert[$i][75],
                        'anak_ke' => $sheetHasilConvert[$i][57],
                        'deleted_at' => null
                    );

                    $whereNisnForDelete .= ' OR nisn="' . $sheetHasilConvert[$i][4] . '"';
                    $whereNotNisnForDelete .= ',"' . $sheetHasilConvert[$i][4] . '"';
                }
                $whereNotNisnForDelete .= ')';
                foreach ($siswa as $key => $item) {
                    $siswa[$key] = array_map(array($this, 'drop_empty'), $item);
                }
                $sql = $this->insert_batch_string('siswa', $siswa, true);
                $this->load->database();
                if ($this->db->query($sql)) {

                    //Update table siswa
                    $update = $this->db->update_batch('siswa', $siswa, 'nisn');
                    $idSiswaNisn = $this->siswa_model->get_id_siswa($whereNisnForDelete)->result();
                    $this->response[] = array('isi' => "Berhasil Import Data Siswa.", 'status' => true);
                    if ($update === false) {
                        $this->response[] = array('isi' => "Gagal Update Data Siswa.", 'status' => false);
                    }

                    //Get id_siswa base NISN
                    for ($i = 0; $i < count($idSiswaNisn); $i++) {
                        $whereIdSiswaForDelete .= ' OR siswa_id_siswa="' . $idSiswaNisn[$i]->id_siswa . '"';
                    }

                    //Insert and Delete table pendaftaran_keluar
                    $this->pendaftaran_keluar_model->delete($whereIdSiswaForDelete);
                    $idSiswaNisnNotImport = $this->siswa_model->get_id_siswa($whereNotNisnForDelete)->result();
                    for ($i = 0; $i < count($idSiswaNisnNotImport); $i++) {
                        $pendaftaran_keluar[] = array(
                            'siswa_id_siswa' => $idSiswaNisnNotImport[$i]->id_siswa,
                            'jenis_pendaftaran_keluar_id_jenis_pendaftaran_keluar' => 1,
                            'tanggal_keluar' => date("Y-m-d"),
                            'alasan' => 'Import data excel'
                        );
                    }
                    $sql = $this->insert_batch_string('pendaftaran_keluar', $pendaftaran_keluar, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data Pendaftaran Keluar.", 'status' => true);
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data Pendaftaran Keluar.", 'status' => false);
                    }


                    //Insert and Delete table siswa_has_berkebutuhan_khusus
                    $this->siswa_has_berkebutuhan_khusus_model->delete($whereIdSiswaForDelete);
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        if ($sheetHasilConvert[$i][55] > 0) {
                            $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                            $siswa_has_berkebutuhan_khusus[] = array(
                                'berkebutuhan_khusus_id_berkebutuhan_khusus' => $sheetHasilConvert[$i][55],
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa
                            );
                        }
                    }
                    if (count($siswa_has_berkebutuhan_khusus) > 0) {
                        if (!$this->siswa_has_berkebutuhan_khusus_model->insert_batch($siswa_has_berkebutuhan_khusus)) {
                            $this->response[] = array('isi' => "Gagal Import Data Kebutuhan Khusus Siswa.", 'status' => false);
                        } else {
                            $this->response[] = array('isi' => "Berhasil Import Data Kebutuhan Khusus Siswa.", 'status' => true);
                        }
                    }

                    //Insert and Update table alamat
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        $alamat[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'desa_id_desa' => $sheetHasilConvert[$i][13],
                            'tempat_tinggal_id_tempat_tinggal' => $sheetHasilConvert[$i][16],
                            'detail_alamat' => $sheetHasilConvert[$i][9],
                            'nomor_rumah' => $sheetDataSumber[$i][68],
                            'nomor_asuransi' => $sheetDataSumber[$i][69],
                            'rt' => $sheetHasilConvert[$i][10],
                            'rw' => $sheetHasilConvert[$i][11],
                            'dusun' => $sheetHasilConvert[$i][12],
                            'kode_pos' => $sheetHasilConvert[$i][15],
                            'lintang' => $sheetHasilConvert[$i][58],
                            'bujur' => $sheetHasilConvert[$i][59]
                        );
                    }
                    foreach ($alamat as $key => $item) {
                        $alamat[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    $sql = $this->insert_batch_string('alamat', $alamat, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data Alamat Siswa.", 'status' => true);
                        $update = $this->db->update_batch('alamat', $alamat, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data Alamat.", 'status' => false);
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data Alamat Siswa.", 'status' => false);
                    }

                    //Insert and Update table ayah
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        $ayah[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'tempat_tinggal_id_tempat_tinggal' => $sheetDataSumber[$i][93],
                            'desa_id_desa' => $sheetHasilConvert[$i][68],
                            'pendidikan_id_pendidikan' => $sheetHasilConvert[$i][26],
                            'pekerjaan_id_pekerjaan' => $sheetHasilConvert[$i][27],
                            'penghasilan_id_penghasilan' => $sheetHasilConvert[$i][28],
                            'nama' => $sheetHasilConvert[$i][24],
                            'kondisi' => $sheetDataSumber[$i][81],
                            'nik' => $sheetHasilConvert[$i][29],
                            'tanggal_lahir' => $sheetHasilConvert[$i][25],
                            'nomor_telepon_seluler' => $sheetDataSumber[$i][82],
                            'detail_alamat' => $sheetDataSumber[$i][83],
                            'nomor_rumah' => $sheetDataSumber[$i][84],
                            'rt' => $sheetDataSumber[$i][85],
                            'rw' => $sheetDataSumber[$i][86],
                            'dusun' => $sheetDataSumber[$i][87],
                            'kode_pos' => $sheetDataSumber[$i][90],
                            'lintang' => $sheetDataSumber[$i][91],
                            'bujur' => $sheetDataSumber[$i][92],
                        );
                    }
                    foreach ($ayah as $key => $item) {
                        $ayah[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    $sql = $this->insert_batch_string('ayah', $ayah, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data Ayah.", 'status' => true);
                        $update = $this->db->update_batch('ayah', $ayah, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data Ayah.", 'status' => false);
                        }

                        //Insert and Delete table ayah_has_berkebutuhan_khusus
                        $idAyahSiswa = $this->ayah_model->get_id_ayah($whereIdSiswaForDelete)->result();
                        $whereIdAyahForDelete = 'ayah_id_ayah=""';
                        for ($i = 0; $i < count($idAyahSiswa); $i++) {
                            $whereIdAyahForDelete .= ' OR ayah_id_ayah="' . $idAyahSiswa[$i]->id_ayah . '"';
                        }
                        $this->ayah_has_berkebutuhan_khusus_model->delete($whereIdAyahForDelete);
                        for ($i = 3; $i < $countHasilConvert; $i++) {
                            if ($sheetDataSumber[$i][94] > 0) {
                                $temp = array_search($sheetHasilConvert[$i][4], array_column($idAyahSiswa, 'nisn'));
                                $ayah_has_berkebutuhan_khusus[] = array(
                                    'ayah_id_ayah' => $idAyahSiswa[$temp]->id_ayah,
                                    'berkebutuhan_khusus_id_berkebutuhan_khusus' => $sheetDataSumber[$i][94]
                                );
                            }
                        }
                        if (count($ayah_has_berkebutuhan_khusus) > 0) {
                            if (!$this->ayah_has_berkebutuhan_khusus_model->insert_batch($ayah_has_berkebutuhan_khusus)) {
                                $this->response[] = array('isi' => "Gagal Import Data Kebutuhan Khusus Ayah.", 'status' => false);
                            } else {
                                $this->response[] = array('isi' => "Berhasil Import Data Kebutuhan Khusus Ayah.", 'status' => true);
                            }
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data Ayah.", 'status' => false);
                    }

                    //Insert and Delete table bantuan_tidak_mampu
                    $this->bantuan_tidak_mampu_model->delete($whereIdSiswaForDelete);
                    for ($i = 2; $i < $countBantuanLainnya; $i++) {
                        $temp = array_search($sheetBantuanLainnya[$i][0], array_column($idSiswaNisn, 'nisn'));
                        $bantuan_tidak_mampu[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'nama_program' => $sheetBantuanLainnya[$i][2],
                            'bukti' => $sheetBantuanLainnya[$i][3]
                        );
                    }
                    if (count($bantuan_tidak_mampu) > 0) {
                        if (!$this->bantuan_tidak_mampu_model->insert_batch($bantuan_tidak_mampu)) {
                            $this->response[] = array('isi' => "Gagal Import Data Bantuan Lainnya.", 'status' => false);
                        } else {
                            $this->response[] = array('isi' => "Berhasil Import Data Bantuan Lainnya.", 'status' => true);
                        }
                    }

                    //Insert and Delete table bantuan_tidak_mampu
                    $this->beasiswa_model->delete($whereIdSiswaForDelete);
                    for ($i = 2; $i < $countBeasiswa; $i++) {
                        $temp = array_search($sheetBeasiswa[$i][0], array_column($idSiswaNisn, 'nisn'));
                        $beasiswa[] = array(
                            'jenis_beasiswa_id_jenis_beasiswa' => $sheetBeasiswa[$i][2],
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'keterangan' => $sheetBeasiswa[$i][3],
                            'tanggal_mulai' => $sheetBeasiswa[$i][4],
                            'tanggal_selesai' => $sheetBeasiswa[$i][5]
                        );
                    }
                    if (count($beasiswa) > 0) {
                        if (!$this->beasiswa_model->insert_batch($beasiswa)) {
                            $this->response[] = array('isi' => "Gagal Import Data Beasiswa.", 'status' => false);
                        } else {
                            $this->response[] = array('isi' => "Berhasil Import Data Beasiswa.", 'status' => true);
                        }
                    }

                    //Insert and Update table domisili
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        $domisili[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'desa_id_desa' => $sheetHasilConvert[$i][70],
                            'tempat_tinggal_id_tempat_tinggal' => $sheetDataSumber[$i][79],
                            'detail_domisili' => $sheetDataSumber[$i][70],
                            'nomor_rumah' => $sheetDataSumber[$i][71],
                            'rt' => $sheetDataSumber[$i][72],
                            'rw' => $sheetDataSumber[$i][73],
                            'dusun' => $sheetDataSumber[$i][74],
                            'kode_pos' => $sheetDataSumber[$i][80],
                            'lintang' => $sheetDataSumber[$i][77],
                            'bujur' => $sheetDataSumber[$i][78]
                        );
                    }
                    $tempResult = array();
                    foreach ($domisili as $key => $value) {
                        if (!empty($value["detail_domisili"]) && $value["desa_id_desa"] !== '-') {
                            $tempResult[] = $value;
                        }
                    }
                    $domisili = $tempResult;
                    foreach ($domisili as $key => $item) {
                        $domisili[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    $sql = $this->insert_batch_string('domisili', $domisili, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data Domisili.", 'status' => true);
                        $update = $this->db->update_batch('domisili', $domisili, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data Domisili.", 'status' => false);
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data Domisili.", 'status' => false);
                    }

                    //Insert and Update table ibu
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        $ibu[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'tempat_tinggal_id_tempat_tinggal' => $sheetDataSumber[$i][107],
                            'desa_id_desa' => $sheetHasilConvert[$i][72],
                            'pendidikan_id_pendidikan' => $sheetHasilConvert[$i][32],
                            'pekerjaan_id_pekerjaan' => $sheetHasilConvert[$i][33],
                            'penghasilan_id_penghasilan' => $sheetHasilConvert[$i][34],
                            'nama' => $sheetHasilConvert[$i][30],
                            'kondisi' => $sheetDataSumber[$i][95],
                            'nik' => $sheetHasilConvert[$i][35],
                            'tanggal_lahir' => $sheetHasilConvert[$i][31],
                            'nomor_telepon_seluler' => $sheetDataSumber[$i][96],
                            'detail_alamat' => $sheetDataSumber[$i][97],
                            'nomor_rumah' => $sheetDataSumber[$i][98],
                            'rt' => $sheetDataSumber[$i][99],
                            'rw' => $sheetDataSumber[$i][100],
                            'dusun' => $sheetDataSumber[$i][101],
                            'kode_pos' => $sheetDataSumber[$i][104],
                            'lintang' => $sheetDataSumber[$i][105],
                            'bujur' => $sheetDataSumber[$i][106]
                        );
                    }
                    foreach ($ibu as $key => $item) {
                        $ibu[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    $sql = $this->insert_batch_string('ibu', $ibu, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data Ibu.", 'status' => true);
                        $update = $this->db->update_batch('ibu', $ibu, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data Ibu.", 'status' => false);
                        }

                        //Insert and Delete table ibu_has_berkebutuhan_khusus
                        $idIbuSiswa = $this->ibu_model->get_id_ibu($whereIdSiswaForDelete)->result();
                        $whereIdIbuForDelete = 'ibu_id_ibu=""';
                        for ($i = 0; $i < count($idIbuSiswa); $i++) {
                            $whereIdIbuForDelete .= ' OR ibu_id_ibu="' . $idIbuSiswa[$i]->id_ibu . '"';
                        }
                        $this->ibu_has_berkebutuhan_khusus_model->delete($whereIdIbuForDelete);
                        for ($i = 3; $i < $countHasilConvert; $i++) {
                            if ($sheetDataSumber[$i][108] > 0) {
                                $temp = array_search($sheetHasilConvert[$i][4], array_column($idIbuSiswa, 'nisn'));
                                $ibu_has_berkebutuhan_khusus[] = array(
                                    'ibu_id_ibu' => $idIbuSiswa[$temp]->id_ibu,
                                    'berkebutuhan_khusus_id_berkebutuhan_khusus' => $sheetDataSumber[$i][108]
                                );
                            }
                        }
                        if (count($ibu_has_berkebutuhan_khusus) > 0) {
                            if (!$this->ibu_has_berkebutuhan_khusus_model->insert_batch($ibu_has_berkebutuhan_khusus)) {
                                $this->response[] = array('isi' => "Gagal Import Data Kebutuhan Khusus Ibu.", 'status' => false);
                            } else {
                                $this->response[] = array('isi' => "Berhasil Import Data Kebutuhan Khusus Ibu.", 'status' => true);
                            }
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data Ibu.", 'status' => false);
                    }

                    //Insert and Update table kip
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        if ($sheetHasilConvert[$i][45] == 1 || !empty($sheetHasilConvert[$i][46])) {
                            $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                            $kip[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'nomor_kip' => $sheetHasilConvert[$i][46],
                                'nama_tertera_kip' => $sheetHasilConvert[$i][47]
                            );
                        }
                    }
                    $sql = $this->insert_batch_string('kip', $kip, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data KIP.", 'status' => true);
                        $update = $this->db->update_batch('kip', $kip, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data KIP.", 'status' => false);
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data KIP.", 'status' => false);
                    }

                    //Insert and Update table kks
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        if (!empty($sheetHasilConvert[$i][48])) {
                            $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                            $kks[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'nomor_kks' => $sheetHasilConvert[$i][48]
                            );
                        }
                    }
                    $sql = $this->insert_batch_string('kks', $kks, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data KKS.", 'status' => true);
                        $update = $this->db->update_batch('kks', $kks, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data KKS.", 'status' => false);
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data KKS.", 'status' => false);
                    }

                    //Insert and Delete table kontak_darurat
                    $this->kontak_darurat_model->delete($whereIdSiswaForDelete);
                    for ($i = 2; $i < $countKontakDarurat; $i++) {
                        $temp = array_search($sheetKontakDarurat[$i][0], array_column($idSiswaNisn, 'nisn'));
                        $kontak_darurat[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'nama' => $sheetKontakDarurat[$i][2],
                            'hubungan_peserta_didik' => $sheetKontakDarurat[$i][3],
                            'nomor_telepon_seluler' => $sheetKontakDarurat[$i][4]
                        );
                    }
                    foreach ($kontak_darurat as $key => $item) {
                        $kontak_darurat[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    if (count($kontak_darurat) > 0) {
                        if (!$this->kontak_darurat_model->insert_batch($kontak_darurat)) {
                            $this->response[] = array('isi' => "Gagal Import Data Kontak Darurat.", 'status' => false);
                        } else {
                            $this->response[] = array('isi' => "Berhasil Import Data Kontak Darurat.", 'status' => true);
                        }
                    }

                    //Insert and Update table kps_pkh
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        if ($sheetHasilConvert[$i][22] == 1 || !empty($sheetHasilConvert[$i][23])) {
                            $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                            $kps_pkh[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'nomor_kps_pkh' => $sheetHasilConvert[$i][23]
                            );
                        }
                    }
                    $sql = $this->insert_batch_string('kps_pkh', $kps_pkh, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data KPS/PKH.", 'status' => true);
                        $update = $this->db->update_batch('kps_pkh', $kps_pkh, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data KPS/PKH.", 'status' => false);
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data KPS/PKH.", 'status' => false);
                    }

                    //Insert and Update table nomor_telepon_seluler
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        $nomor_telepon_seluler[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'provider_id_provider' => $sheetHasilConvert[$i][74],
                            'nomor_telepon_seluler' => $sheetHasilConvert[$i][19]
                        );
                    }
                    foreach ($nomor_telepon_seluler as $key => $item) {
                        $nomor_telepon_seluler[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    $sql = $this->insert_batch_string('nomor_telepon_seluler', $nomor_telepon_seluler, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data Nomor Telepon Siswa.", 'status' => true);
                        $update = $this->db->update_batch('nomor_telepon_seluler', $nomor_telepon_seluler, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data Nomor Telepon Siswa.", 'status' => false);
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data Nomor Telepon Siswa.", 'status' => false);
                    }

                    //Insert and Update table pendaftaran_masuk
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        $pendaftaran_masuk[] = array(
                            'jenis_pendaftaran_diterima' => $sheetDataSumber[$i][151],
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'kompetensi_keahlian_diterima' => $sheetHasilConvert[$i][67],
                            'tahun_ajaran_id_tahun_ajaran' => null,
                            'diterima_ppdb_lewat_jalur' => $sheetDataSumber[$i][142],
                            'kode_pin_pendaftaran' => $sheetDataSumber[$i][143],
                            'nis' => $sheetDataSumber[$i][152],
                            'npsn_smp' => $sheetDataSumber[$i][153],
                            'akreditasi_smp' => $sheetDataSumber[$i][154],
                            'tahun_lulus_smp' => $sheetDataSumber[$i][155],
                            'tanggal_masuk_sekolah' => $sheetDataSumber[$i][156],
                            'asal_sekolah' => $sheetHasilConvert[$i][56],
                            'nomor_peserta_ujian' => $sheetHasilConvert[$i][43],
                            'no_seri_ijazah' => $sheetHasilConvert[$i][44],
                            'no_seri_khusus' => $sheetDataSumber[$i][157],
                            'nomor_skhun' => $sheetHasilConvert[$i][21]
                        );
                    }
                    foreach ($pendaftaran_masuk as $key => $item) {
                        $pendaftaran_masuk[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    $sql = $this->insert_batch_string('pendaftaran_masuk', $pendaftaran_masuk, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data Nomor Pendaftaran Masuk Siswa.", 'status' => true);
                        $update = $this->db->update_batch('pendaftaran_masuk', $pendaftaran_masuk, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data Pendaftaran Masuk Siswa.", 'status' => false);
                        }

                        //Insert adn Delete table mean_mapel
                        $idPendMasukSiswa = $this->pendaftaran_masuk_model->get_id_pendaftaran_masuk($whereIdSiswaForDelete)->result();
                        $whereIdPendMasukForDelete = 'pendaftaran_masuk_id_pendaftaran_masuk=""';
                        for ($i = 0; $i < count($idPendMasukSiswa); $i++) {
                            $whereIdPendMasukForDelete .= ' OR pendaftaran_masuk_id_pendaftaran_masuk="' . $idPendMasukSiswa[$i]->id_pendaftaran_masuk . '"';
                        }
                        $this->mean_mapel_model->delete($whereIdPendMasukForDelete);
                        for ($i = 3; $i < $countHasilConvert; $i++) {
                            $temp = array_search($sheetHasilConvert[$i][4], array_column($idPendMasukSiswa, 'nisn'));
                            $mean_mapel[] = array(
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'mata_pelajaran_id_mata_pelajaran' => 1,
                                'nilai' => $sheetDataSumber[$i][144]
                            );
                            $mean_mapel[] = array(
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'mata_pelajaran_id_mata_pelajaran' => 2,
                                'nilai' => $sheetDataSumber[$i][145]
                            );
                            $mean_mapel[] = array(
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'mata_pelajaran_id_mata_pelajaran' => 3,
                                'nilai' => $sheetDataSumber[$i][149]
                            );
                            $mean_mapel[] = array(
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'mata_pelajaran_id_mata_pelajaran' => 4,
                                'nilai' => $sheetDataSumber[$i][146]
                            );
                            $mean_mapel[] = array(
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'mata_pelajaran_id_mata_pelajaran' => 5,
                                'nilai' => $sheetDataSumber[$i][147]
                            );
                            $mean_mapel[] = array(
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'mata_pelajaran_id_mata_pelajaran' => 6,
                                'nilai' => $sheetDataSumber[$i][150]
                            );
                            $mean_mapel[] = array(
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'mata_pelajaran_id_mata_pelajaran' => 7,
                                'nilai' => $sheetDataSumber[$i][148]
                            );
                        }
                        if (!$this->mean_mapel_model->insert_batch($mean_mapel)) {
                            $this->response[] = array('isi' => "Gagal Import Data Nilai Rata-rata.", 'status' => false);
                        } else {
                            $this->response[] = array('isi' => "Berhasil Import Data Nilai Rata-rata.", 'status' => true);
                        }

                        //Insert and Delete table pilihan_jalur_ppdb
                        $this->pilihan_jalur_ppdb_model->delete($whereIdPendMasukForDelete);
                        for ($i = 2; $i < $countJalurPpdb; $i++) {
                            $temp = array_search($sheetJalurPpdb[$i][0], array_column($idPendMasukSiswa, 'nisn'));
                            $pilihan_jalur_ppdb[] = array(
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'jenis_pendaftaran_masuk_id_jenis_pendaftaran_masuk' => $sheetJalurPpdb[$i][2]
                            );
                        }
                        if (!$this->pilihan_jalur_ppdb_model->insert_batch($pilihan_jalur_ppdb)) {
                            $this->response[] = array('isi' => "Gagal Import Pilihan Jalur PPDB.", 'status' => false);
                        } else {
                            $this->response[] = array('isi' => "Berhasil Import Pilihan Jalur PPDB.", 'status' => true);
                        }

                        //Insert and Delete table pilihan_jurusan_ppdb
                        $this->pilihan_jurusan_ppdb_model->delete($whereIdPendMasukForDelete);
                        for ($i = 3; $i < $countHasilConvert; $i++) {
                            $temp = array_search($sheetHasilConvert[$i][4], array_column($idPendMasukSiswa, 'nisn'));
                            $pilihan_jurusan_ppdb[] = array(
                                'kompetensi_keahlian_id_kompetensi_keahlian' => $sheetHasilConvert[$i][76],
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'pilihan_ke' => 1
                            );
                            $pilihan_jurusan_ppdb[] = array(
                                'kompetensi_keahlian_id_kompetensi_keahlian' => $sheetHasilConvert[$i][77],
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'pilihan_ke' => 2
                            );
                            $pilihan_jurusan_ppdb[] = array(
                                'kompetensi_keahlian_id_kompetensi_keahlian' => $sheetHasilConvert[$i][78],
                                'pendaftaran_masuk_id_pendaftaran_masuk' => $idPendMasukSiswa[$temp]->id_pendaftaran_masuk,
                                'pilihan_ke' => 3
                            );
                        }
                        if (!$this->pilihan_jurusan_ppdb_model->insert_batch($pilihan_jurusan_ppdb)) {
                            $this->response[] = array('isi' => "Gagal Import Pilihan Jurusan PPDB.", 'status' => false);
                        } else {
                            $this->response[] = array('isi' => "Berhasil Import Pilihan Jurusan PPDB.", 'status' => true);
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data Pendaftaran Masuk Siswa.", 'status' => false);
                    }

                    //Insert and Update table pip
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        if (!empty($sheetHasilConvert[$i][54]) || $sheetHasilConvert[$i][53] == 1) {
                            $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                            $pip[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'alasan_layak_pip_id_alasan_layak_pip' => $sheetHasilConvert[$i][54],
                                'bank' => $sheetHasilConvert[$i][50],
                                'nomor_rekening' => $sheetHasilConvert[$i][51],
                                'kantor_cabang_pembantu' => null,
                                'rekening_atas_nama' => $sheetHasilConvert[$i][52]
                            );
                        }
                    }
                    foreach ($pip as $key => $item) {
                        $pip[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    $sql = $this->insert_batch_string('pip', $pip, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data PIP.", 'status' => true);
                        $update = $this->db->update_batch('pip', $pip, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data PIP.", 'status' => false);
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data PIP.", 'status' => false);
                    }

                    //Insert and Delete table prestasi
                    $this->prestasi_model->delete($whereIdSiswaForDelete);
                    for ($i = 2; $i < $countPrestasi; $i++) {
                        $temp = array_search($sheetPrestasi[$i][0], array_column($idSiswaNisn, 'nisn'));
                        $prestasi[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'bidang_prestasi_id_bidang_prestasi' => $sheetPrestasi[$i][2],
                            'tingkat_prestasi_id_tingkat_prestasi' => $sheetPrestasi[$i][3],
                            'nama' => $sheetPrestasi[$i][4],
                            'tahun' => $sheetPrestasi[$i][5],
                            'penyelenggara' => $sheetPrestasi[$i][6],
                            'peringkat' => $sheetPrestasi[$i][7]
                        );
                    }
                    foreach ($prestasi as $key => $item) {
                        $prestasi[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    if (!$this->prestasi_model->insert_batch($prestasi)) {
                        $this->response[] = array('isi' => "Gagal Import Data Prestasi.", 'status' => false);
                    } else {
                        $this->response[] = array('isi' => "Berhasil Import Data Prestasi.", 'status' => true);
                    }

                    //Insert and Delete table proses_pembelajaran
                    $this->proses_pembelajaran_model->delete($whereIdSiswaForDelete);
                    for ($i = 2; $i < $countProsesPembelajaran; $i++) {
                        $temp = array_search($sheetProsesPembelajaran[$i][0], array_column($idSiswaNisn, 'nisn'));
                        $proses_pembelajaran[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'tahun_ajaran_id_tahun_ajaran' => $sheetProsesPembelajaran[$i][2],
                            'kelas_id_kelas' => $sheetProsesPembelajaran[$i][3],
                            'nomor_absen' => $sheetProsesPembelajaran[$i][4],
                            'wali_kelas' => $sheetProsesPembelajaran[$i][5],
                            'guru_bk' => $sheetProsesPembelajaran[$i][6]
                        );
                    }
                    foreach ($proses_pembelajaran as $key => $item) {
                        $proses_pembelajaran[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    if (!$this->proses_pembelajaran_model->insert_batch($proses_pembelajaran)) {
                        $this->response[] = array('isi' => "Gagal Import Data Proses Pembelajaran.", 'status' => false);
                    } else {
                        $this->response[] = array('isi' => "Berhasil Import Data Proses Pembelajaran.", 'status' => true);
                    }

                    //Insert and Delete table riwayat_kesehatan
                    $this->riwayat_kesehatan_model->delete($whereIdSiswaForDelete);
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        if (!empty($sheetDataSumber[$i][136])) {
                            $riwayat_kesehatan[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'jenis_penyakit_id_jenis_penyakit' => 1,
                                'penyakit' => $sheetDataSumber[$i][136]
                            );
                        }
                        if (!empty($sheetDataSumber[$i][137])) {
                            $riwayat_kesehatan[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'jenis_penyakit_id_jenis_penyakit' => 2,
                                'penyakit' => $sheetDataSumber[$i][137]
                            );
                        }
                        if (!empty($sheetDataSumber[$i][138])) {
                            $riwayat_kesehatan[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'jenis_penyakit_id_jenis_penyakit' => 3,
                                'penyakit' => $sheetDataSumber[$i][138]
                            );
                        }
                    }
                    if (!$this->riwayat_kesehatan_model->insert_batch($riwayat_kesehatan)) {
                        $this->response[] = array('isi' => "Gagal Import Data Riwayat Kesehatan.", 'status' => false);
                    } else {
                        $this->response[] = array('isi' => "Berhasil Import Data Riwayat Kesehatan.", 'status' => true);
                    }

                    //langkah2
                    $this->saudara_kandung_model->delete($whereIdSiswaForDelete);
                    for ($i = 2; $i < $countSaudara; $i++) {
                        $temp = array_search($sheetSaudara[$i][0], array_column($idSiswaNisn, 'nisn'));
                        $saudara_kandung[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'gender_id_gender' => $sheetSaudara[$i][4],
                            'nama' => $sheetSaudara[$i][2],
                            'anak_ke' => $sheetSaudara[$i][3],
                            'nomor_telepon_seluler' => $sheetSaudara[$i][5]
                        );
                    }
                    foreach ($saudara_kandung as $key => $item) {
                        $saudara_kandung[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    if (!$this->saudara_kandung_model->insert_batch($saudara_kandung)) {
                        $this->response[] = array('isi' => "Gagal Import Data Saudara Kandung.", 'status' => false);
                    } else {
                        $this->response[] = array('isi' => "Berhasil Import Data Saudara Kandung.", 'status' => true);
                    }

                    //Insert and Delete table siswa_has_media_sosial
                    $this->siswa_has_media_sosial_model->delete($whereIdSiswaForDelete);
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        if (!empty($sheetDataSumber[$i][125])) {
                            $siswa_has_media_sosial[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'media_sosial_id_media_sosial' => 1,
                                'akun' => $sheetDataSumber[$i][125]
                            );
                        }
                        if (!empty($sheetDataSumber[$i][126])) {
                            $siswa_has_media_sosial[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'media_sosial_id_media_sosial' => 2,
                                'akun' => $sheetDataSumber[$i][126]
                            );
                        }
                        if (!empty($sheetDataSumber[$i][127])) {
                            $siswa_has_media_sosial[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'media_sosial_id_media_sosial' => 3,
                                'akun' => $sheetDataSumber[$i][127]
                            );
                        }
                        if (!empty($sheetDataSumber[$i][128])) {
                            $siswa_has_media_sosial[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'media_sosial_id_media_sosial' => 4,
                                'akun' => $sheetDataSumber[$i][128]
                            );
                        }
                        if (!empty($sheetDataSumber[$i][129])) {
                            $siswa_has_media_sosial[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'media_sosial_id_media_sosial' => 5,
                                'akun' => $sheetDataSumber[$i][129]
                            );
                        }
                        if (!empty($sheetDataSumber[$i][130])) {
                            $siswa_has_media_sosial[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'media_sosial_id_media_sosial' => 6,
                                'akun' => $sheetDataSumber[$i][130]
                            );
                        }
                    }
                    if (!$this->siswa_has_media_sosial_model->insert_batch($siswa_has_media_sosial)) {
                        $this->response[] = array('isi' => "Gagal Import Data Media Sosial.", 'status' => false);
                    } else {
                        $this->response[] = array('isi' => "Berhasil Import Data Media Sosial.", 'status' => true);
                    }

                    //Insert and Update table wali
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        if (!empty($sheetHasilConvert[$i][36])) {
                            $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                            $wali[] = array(
                                'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                                'tempat_tinggal_id_tempat_tinggal' => $sheetDataSumber[$i][121],
                                'desa_id_desa' => $sheetHasilConvert[$i][79],
                                'pendidikan_id_pendidikan' => $sheetHasilConvert[$i][38],
                                'pekerjaan_id_pekerjaan' => $sheetHasilConvert[$i][39],
                                'penghasilan_id_penghasilan' => $sheetHasilConvert[$i][40],
                                'nama' => $sheetHasilConvert[$i][36],
                                'kondisi' => $sheetDataSumber[$i][109],
                                'nik' => $sheetHasilConvert[$i][41],
                                'tanggal_lahir' => $sheetHasilConvert[$i][37],
                                'nomor_telepon_seluler' => $sheetDataSumber[$i][110],
                                'detail_alamat' => $sheetDataSumber[$i][111],
                                'nomor_rumah' => $sheetDataSumber[$i][112],
                                'rt' => $sheetDataSumber[$i][113],
                                'rw' => $sheetDataSumber[$i][114],
                                'dusun' => $sheetDataSumber[$i][115],
                                'kode_pos' => $sheetDataSumber[$i][118],
                                'lintang' => $sheetDataSumber[$i][119],
                                'bujur' => $sheetDataSumber[$i][120]
                            );
                        }
                    }
                    foreach ($wali as $key => $item) {
                        $wali[$key] = array_map(array($this, 'drop_empty'), $item);
                    }
                    $sql = $this->insert_batch_string('wali', $wali, true);
                    if ($this->db->query($sql)) {
                        $this->response[] = array('isi' => "Berhasil Import Data Wali.", 'status' => true);
                        $update = $this->db->update_batch('wali', $wali, 'siswa_id_siswa');
                        if ($update === false) {
                            $this->response[] = array('isi' => "Gagal Update Data Wali.", 'status' => false);
                        }

                        //Insert and Delete table ibu_has_berkebutuhan_khusus
                        $idWaliSiswa = $this->wali_model->get_id_wali($whereIdSiswaForDelete)->result();
                        $whereIdWaliForDelete = 'wali_id_wali=""';
                        for ($i = 0; $i < count($idWaliSiswa); $i++) {
                            $whereIdWaliForDelete .= ' OR wali_id_wali="' . $idWaliSiswa[$i]->id_wali . '"';
                        }
                        $this->wali_has_berkebutuhan_khusus_model->delete($whereIdWaliForDelete);
                        for ($i = 3; $i < $countHasilConvert; $i++) {
                            if ($sheetDataSumber[$i][122] > 0) {
                                $temp = array_search($sheetHasilConvert[$i][4], array_column($idWaliSiswa, 'nisn'));
                                $wali_has_berkebutuhan_khusus[] = array(
                                    'wali_id_wali' => $idWaliSiswa[$temp]->id_wali,
                                    'berkebutuhan_khusus_id_berkebutuhan_khusus' => $sheetDataSumber[$i][122]
                                );
                            }
                        }
                        if (count($wali_has_berkebutuhan_khusus) > 0) {
                            if (!$this->wali_has_berkebutuhan_khusus_model->insert_batch($wali_has_berkebutuhan_khusus)) {
                                $this->response[] = array('isi' => "Gagal Import Data Kebutuhan Khusus Wali.", 'status' => false);
                            } else {
                                $this->response[] = array('isi' => "Berhasil Import Data Kebutuhan Khusus Wali.", 'status' => true);
                            }
                        }
                    } else {
                        $this->response[] = array('isi' => "Gagal Import Data Wali.", 'status' => false);
                    }

                    //Insert and Delete table whatsapp
                    $this->whatsapp_model->delete($whereIdSiswaForDelete);
                    for ($i = 3; $i < $countHasilConvert; $i++) {
                        $temp = array_search($sheetHasilConvert[$i][4], array_column($idSiswaNisn, 'nisn'));
                        $whatsapp[] = array(
                            'siswa_id_siswa' => $idSiswaNisn[$temp]->id_siswa,
                            'provider_id_provider' => $sheetDataSumber[$i][124],
                            'nomor_whatsapp' => $sheetDataSumber[$i][123]
                        );
                    }
                    if (!$this->whatsapp_model->insert_batch($whatsapp)) {
                        $this->response[] = array('isi' => "Gagal Import Data Whatsapp.", 'status' => false);
                    } else {
                        $this->response[] = array('isi' => "Berhasil Import Data Whatsapp.", 'status' => true);
                    }
                } else {
                    $this->response[] = array('isi' => "Gagal Import Data Keseluruhan.", 'status' => false);
                }
            }
        } else {
            $this->response[] = array('isi' => "Gagal upload excel", 'status' => false);
        }

        echo json_encode($this->response);
    }

    public function insert_batch_string($table = '', $data = [], $ignore = false)
    {
        $sql = '';

        if ($table && !empty($data)) {
            $rows = [];

            foreach ($data as $row) {
                $insert_string = $this->db->insert_string($table, $row);
                if (empty($rows) && $sql == '') {
                    $sql = substr($insert_string, 0, stripos($insert_string, 'VALUES'));
                }
                $rows[] = trim(substr($insert_string, stripos($insert_string, 'VALUES') + 6));
            }

            $sql .= ' VALUES ' . implode(',', $rows);

            if ($ignore) $sql = str_ireplace('INSERT INTO', 'INSERT IGNORE INTO', $sql);
        }

        return $sql;
    }
}

/* End of file Data_siswa.php */

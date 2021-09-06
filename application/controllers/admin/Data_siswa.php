<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
        return ($var === '') ? NULL : $var;
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

    public function simpan_data_siswa()
    {
        //hapus di tabel alamat(siswa_id_siswa)
        //hapus di tabel ayah(siswa_id_siswa)
        //hapus di tabel ayah_has_berkebutuhan_khusus(ayah_id_ayah)
        //hapus di tabel bantuan_tidak_mampu(siswa_id_siswa)
        //hapus di tabel beasiswa(siswa_id_siswa)
        //hapus di tabel domisili(siswa_id_siswa)
        //hapus di tabel ibu(siswa_id_siswa)
        //hapus di tabel ibu_has_berkebutuhan_khusus(ibu_id_ibu)
        //hapus di tabel kip(siswa_id_siswa)
        //hapus di tabel kks(siswa_id_siswa)
        //hapus di tabel kontak_darurat(siswa_id_siswa)
        //hapus di tabel kps_pkh(siswa_id_siswa)
        //hapus di tabel mean_mapel(pendaftaran_masuk_id_pendaftaran_masuk)
        //hapus di tabel nomor_telepon_seluler(siswa_id_siswa)
        //hapus di tabel pendaftaran_keluar(siswa_id_siswa)
        //hapus di tabel pendaftaran_masuk(siswa_id_siswa)
        //hapus di tabel pilihan_jalur_ppdb(pendaftaran_masuk_id_pendaftaran_masuk)
        //hapus di tabel pilihan_jurusan_ppdb(pendaftaran_masuk_id_pendaftaran_masuk)
        //hapus di tabel pip(siswa_id_siswa)
        //hapus di tabel prestasi(siswa_id_siswa)
        //hapus di tabel proses_pembelajaran(siswa_id_siswa)
        //hapus di tabel riwayat_kesehatan(siswa_id_siswa)
        //hapus di tabel saudara_kandung(siswa_id_siswa)
        //hapus di tabel siswa(id_siswa)
        //hapus di tabel siswa_has_berkebutuhan_khusus(siswa_id_siswa)
        //hapus di tabel siswa_has_media_sosial(siswa_id_siswa)
        //hapus di tabel wali(siswa_id_siswa)
        //hapus di tabel wali_has_berkebutuhan_khusus(wali_id_id)
        //hapus di tabel whatsapp(siswa_id_siswa)

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

    public function test()
    {
        $id = 12;
        echo json_encode($this->nomor_telepon_seluler_model->select_where_join_provider(array('siswa_id_siswa' => $id))->result());
    }
}

/* End of file Data_siswa.php */

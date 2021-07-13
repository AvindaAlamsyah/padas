<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Filter extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('bank_model');
        $this->load->model('berkebutuhan_khusus_model');
        $this->load->model('filter_model');
        $this->load->model('gender_model');
        $this->load->model('moda_transportasi_model');
        $this->load->model('tempat_tinggal_model');
        $this->load->model('pendidikan_model');
        $this->load->model('penghasilan_model');
        $this->load->model('pekerjaan_model');
    }


    public function index()
    {
        $context = array(
            'bank' => $this->bank_model->select_all()->result_array(),
            'berkebutuhan_khusus' => $this->berkebutuhan_khusus_model->select_all()->result_array(),
            'gender' => $this->gender_model->select_all()->result_array(),
            'moda_transportasi' => $this->moda_transportasi_model->select_all()->result_array(),
            'tempat_tinggal' => $this->tempat_tinggal_model->select_all()->result_array(),
            'pendidikan' => $this->pendidikan_model->select_all()->result_array(),
            'penghasilan' => $this->penghasilan_model->select_all()->result_array(),
            'pekerjaan' => $this->pekerjaan_model->select_all()->result_array(),
        );
        $this->load->view('admin/filter', $context);
    }

    public function result()
    {

        $filter_siswa = array(
            'agama' => trim($this->input->post('agama')),
            'gender_id_gender' => trim($this->input->post('gender')),
            'tempat_tinggal_id_tempat_tinggal' => trim($this->input->post('tempat_tinggal')),
            'moda_transportasi_id_moda_transportasi' => trim($this->input->post('moda_transportasi')),
            'anak_ke' => trim($this->input->post('anak_ke')),
            'jumlah_saudara_kandung' => trim($this->input->post('jumlah_saudara_kandung')),
            'jarak_tempat_tinggal_ke_sekolah_km' => trim($this->input->post('jarak_rumah_ke_sekolah')),
            'waktu_tempuh_ke_sekolah_jam' => trim($this->input->post('waktu_tempuh_ke_sekolah')),
        );
        $operator_jarak_rumah_ke_sekolah = trim($this->input->post('operator_jarak_rumah_ke_sekolah'));
        $operator_waktu_tempuh_ke_sekolah = trim($this->input->post('operator_waktu_tempuh_ke_sekolah'));

        $filter_berkebutuhan_khusus = array(
            'berkebutuhan_khusus_id_berkebutuhan_khusus' => trim($this->input->post('berkebutuhan_khusus')),
        );

        $filter_kecamatan = array(
            'id_kecamatan' => trim($this->input->post('kecamatan')),
        );

        $filter_desa = array(
            'id_desa' => trim($this->input->post('desa')),
        );

        $filter_beasiswa = array(
            'id_beasiswa' => trim($this->input->post('penerima_beasiswa')),
        );
        
        $filter_prestasi = array(
            'id_prestasi' => trim($this->input->post('penerima_prestasi')),
        );

        $filter_pkh = array(
            'id_pkh' => trim($this->input->post('penerima_pkh')),
        );

        $filter_kps = array(
            'id_kps' => trim($this->input->post('penerima_kps')),
        );

        $filter_kip = array(
            'id_kip' => trim($this->input->post('penerima_kip')),
        );

        $filter_kks = array(
            'id_kks' => trim($this->input->post('penerima_kks')),
        );

        $filter_pip = array(
            'alasan_layak_pip_id_alasan_layak_pip' => trim($this->input->post('penerima_pip')),
            'bank_id_bank' => trim($this->input->post('pip_bank')),
        );

        $filter_ayah = array(
            'pendidikan_id_pendidikan' => trim($this->input->post('pendidikan_ayah')),
            'pekerjaan_id_pekerjaan' => trim($this->input->post('pekerjaan_ayah')),
            'penghasilan_id_penghasilan' => trim($this->input->post('penghasilan_ayah')),
        );

        $filter_ibu = array(
            'pendidikan_id_pendidikan' => trim($this->input->post('pendidikan_ibu')),
            'pekerjaan_id_pekerjaan' => trim($this->input->post('pekerjaan_ibu')),
            'penghasilan_id_penghasilan' => trim($this->input->post('penghasilan_ibu')),
        );

        $filter_wali = array(
            'pendidikan_id_pendidikan' => trim($this->input->post('pendidikan_wali')),
            'pekerjaan_id_pekerjaan' => trim($this->input->post('pekerjaan_wali')),
            'penghasilan_id_penghasilan' => trim($this->input->post('penghasilan_wali')),
        );

        $filter_pendaftaran_keluar = array(
            'id_pendaftaran_keluar' => trim($this->input->post('status_siswa')),
        );

        $where = '';
        $i = 0;
        $and = ' AND ';
        foreach ($filter_siswa as $key => $value) {
            if (empty($value)) {
                continue;
            }
            if ($i != 0) {
                $where = $where . $and;
            }
            if ($key == 'jarak_tempat_tinggal_ke_sekolah_km') {
                $where = $where . 'siswa.' . $key . $operator_jarak_rumah_ke_sekolah . $value;
                $i++;
                continue;
            }
            if ($key == 'waktu_tempuh_ke_sekolah_jam') {
                $where = $where . 'siswa.' . $key . $operator_waktu_tempuh_ke_sekolah . $value;
                $i++;
                continue;
            }

            $where = $where . 'siswa.' . $key . '=\'' . $value.'\'';

            $i++;
        }

        foreach ($filter_berkebutuhan_khusus as $key => $value) {
            if (empty($value)) {
                continue;
            }
            if ($i != 0) {
                $where = $where . $and;
            }
            $where = $where . 'siswa_has_berkebutuhan_khusus.' . $key . '=' . $value;

            $i++;
        }

        foreach ($filter_kecamatan as $key => $value) {
            if (empty($value)) {
                continue;
            }
            if ($i != 0) {
                $where = $where . $and;
            }
            $where = $where . 'kecamatan.' . $key . '=' . $value;

            $i++;
        }

        foreach ($filter_desa as $key => $value) {
            if (empty($value)) {
                continue;
            }
            if ($i != 0) {
                $where = $where . $and;
            }
            $where = $where . 'desa.' . $key . '=' . $value;

            $i++;
        }

        foreach ($filter_beasiswa as $key => $value) {
            if (empty($value)) {
                continue;
            } else if ($value == 'true') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'beasiswa.' . $key . ' IS NOT NULL';
            } else if ($value == 'false') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'beasiswa.' . $key . ' IS NULL';
            }
            $i++;
        }

        foreach ($filter_prestasi as $key => $value) {
            if (empty($value)) {
                continue;
            } else if ($value == 'true') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'prestasi.' . $key . ' IS NOT NULL';
            } else if ($value == 'false') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'prestasi.' . $key . ' IS NULL';
            }
            $i++;
        }

        foreach ($filter_pkh as $key => $value) {
            if (empty($value)) {
                continue;
            } else if ($value == 'true') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'pkh.' . $key . ' IS NOT NULL';
            } else if ($value == 'false') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'pkh.' . $key . ' IS NULL';
            }
            $i++;
        }

        foreach ($filter_kps as $key => $value) {
            if (empty($value)) {
                continue;
            } else if ($value == 'true') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'kps.' . $key . ' IS NOT NULL';
            } else if ($value == 'false') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'kps.' . $key . ' IS NULL';
            }
            $i++;
        }

        foreach ($filter_kip as $key => $value) {
            if (empty($value)) {
                continue;
            } else if ($value == 'true') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'kip.' . $key . ' IS NOT NULL';
            } else if ($value == 'false') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'kip.' . $key . ' IS NULL';
            }
            $i++;
        }

        foreach ($filter_kks as $key => $value) {
            if (empty($value)) {
                continue;
            } else if ($value == 'true') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'kks.' . $key . ' IS NOT NULL';
            } else if ($value == 'false') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'kks.' . $key . ' IS NULL';
            }
            $i++;
        }
        
        foreach ($filter_pip as $key => $value) {
            if (empty($value)) {
                continue;
            }
            if ($i != 0) {
                $where = $where . $and;
            }
            if ($key == 'alasan_layak_pip_id_alasan_layak_pip') {
                $null = ($value == 'false') ? " IS NULL" : " IS NOT NULL";
                $where = $where . 'pip.' . $key . $null;
                $i++;
                continue;
            }
            $where = $where . 'pip.' . $key . '=' . $value;

            $i++;
        }

        foreach ($filter_ayah as $key => $value) {
            if (empty($value)) {
                continue;
            }
            if ($i != 0) {
                $where = $where . $and;
            }
            $where = $where . 'ayah.' . $key . '=' . $value;
            $i++;
        }


        foreach ($filter_ibu as $key => $value) {
            if (empty($value)) {
                continue;
            }
            if ($i != 0) {
                $where = $where . $and;
            }
            $where = $where . 'ibu.' . $key . '=' . $value;
            $i++;
        }


        foreach ($filter_wali as $key => $value) {
            if (empty($value)) {
                continue;
            }
            if ($i != 0) {
                $where = $where . $and;
            }
            $where = $where . 'wali.' . $key . '=' . $value;
            $i++;
        }


        foreach ($filter_pendaftaran_keluar as $key => $value) {
            if (empty($value)) {
                continue;
            } else if ($value == 'aktif') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'pendaftaran_keluar.' . $key . ' IS NULL';
            } else if ($value == 'keluar') {
                if ($i != 0) {
                    $where = $where . $and;
                }
                $where = $where . 'pendaftaran_keluar.' . $key . ' IS NOT NULL';
            }
            $i++;
        }

    
        $context = array();
        if ($i == 0 && strlen($where) == 0) {
            $context['status'] = "tidak ada filter";
        } else {
            $context['status'] = "data disaring menggunakan $i parameter";
            $data = $this->filter_model->filter(' WHERE ' . $where)->result_array();
            $context['data'] = $data;
            
            $query = $this->filter_model->filter_test(' WHERE ' . $where);
            $context['query'] = $query;
        }
        
        $this->load->view('admin/filter_result', $context);
    }
}

/* End of file Filter.php */

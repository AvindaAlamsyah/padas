<?php

defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Filter extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('agama_model');
        $this->load->model('bank_model');
        $this->load->model('filter_model');
        $this->load->model('gender_model');
        $this->load->model('moda_transportasi_model');
        $this->load->model('tempat_tinggal_model');
        $this->load->model('pendidikan_model');
        $this->load->model('penghasilan_model');
        $this->load->model('pekerjaan_model');
        $this->load->model('view_model');
    }


    public function index()
    {
        $context = array(
            'gender' => $this->gender_model->select_all()->result_array(),
            'agama' => $this->agama_model->select_all()->result_array(),
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
        $this->load->view('admin/filter_result');
    }

    public function filter_result()
    {
        $where = $this->generate_where();
        $filter = $this->filter_model->safe_filter($where)->result_array();
        $all_data = $this->get_all_data();

        $data = array();

        foreach ($all_data as $key => $value) {
            foreach ($filter as $key2 => $value2) {
                if ($value['id_siswa'] == $value2['id_siswa']) {
                    array_push($data, $value);
                    unset($filter[$key2]);
                }
            }
        }
        header('application/json');
        echo json_encode(["data" => $data]);
    }

    public function export()
    {
        $where = $this->generate_where();
        $data = $this->filter_model->safe_filter($where)->result();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $spreadsheet->getDefaultStyle()->getFont()->setName('Times new Roman');
        $spreadsheet->getDefaultStyle()->getFont()->setSize(12);

        $sheet->mergeCells("A1:A2");
        $sheet->mergeCells("B1:B2");
        $sheet->mergeCells("C1:C2");
        $sheet->mergeCells("D1:D2");
        $sheet->mergeCells("E1:E2");
        $sheet->mergeCells("F1:F2");
        $sheet->mergeCells("G1:G2");
        $sheet->mergeCells("H1:H2");
        $sheet->mergeCells("I1:I2");
        $sheet->mergeCells("J1:J2");
        $sheet->mergeCells("K1:K2");
        $sheet->mergeCells("L1:L2");
        $sheet->mergeCells("M1:M2");
        $sheet->mergeCells("N1:N2");
        $sheet->mergeCells("O1:O2");
        $sheet->mergeCells("P1:P2");
        $sheet->mergeCells("Q1:Q2");
        $sheet->mergeCells("R1:R2");
        $sheet->mergeCells("S1:S2");
        $sheet->mergeCells("T1:T2");
        $sheet->mergeCells("U1:U2");
        $sheet->mergeCells("V1:V2");
        $sheet->mergeCells("W1:W2");
        $sheet->mergeCells("X1:X2");
        $sheet->mergeCells("Y1:AD1");
        $sheet->mergeCells("AE1:AJ1");
        $sheet->mergeCells("AK1:AP1");
        $sheet->mergeCells("AQ1:AQ2");
        $sheet->mergeCells("AR1:AR2");
        $sheet->mergeCells("AS1:AS2");
        $sheet->mergeCells("AT1:AT2");
        $sheet->mergeCells("AU1:AU2");
        $sheet->mergeCells("AV1:AV2");
        $sheet->mergeCells("AW1:AW2");
        $sheet->mergeCells("AX1:AX2");
        $sheet->mergeCells("AY1:AY2");
        $sheet->mergeCells("AZ1:AZ2");
        $sheet->mergeCells("BA1:BA2");
        $sheet->mergeCells("BB1:BB2");
        $sheet->mergeCells("BC1:BC2");
        $sheet->mergeCells("BD1:BD2");
        $sheet->mergeCells("BE1:BE2");
        $sheet->mergeCells("BF1:BF2");
        $sheet->mergeCells("BG1:BG2");
        $sheet->mergeCells("BH1:BH2");
        $sheet->mergeCells("BI1:BI2");
        $sheet->mergeCells("BJ1:BJ2");
        $sheet->mergeCells("BK1:BK2");
        $sheet->mergeCells("BL1:BL2");
        $sheet->mergeCells("BM1:BM2");
        $sheet->mergeCells("BN1:BN2");

        $sheet->setCellValue("A1", "No");
        $sheet->setCellValue("B1", "Nama");
        $sheet->setCellValue("C1", "NIPD");
        $sheet->setCellValue("D1", "NISN");
        $sheet->setCellValue("E1", "Tempat Lahir");
        $sheet->setCellValue("F1", "Tanggal Lahir");
        $sheet->setCellValue("G1", "NIK");
        $sheet->setCellValue("H1", "Agama");
        $sheet->setCellValue("I1", "Alamat");
        $sheet->setCellValue("J1", "RT");
        $sheet->setCellValue("K1", "RW");
        $sheet->setCellValue("L1", "Dusun");
        $sheet->setCellValue("M1", "Kelurahan");
        $sheet->setCellValue("N1", "Kecamatan");
        $sheet->setCellValue("O1", "Kode Pos");
        $sheet->setCellValue("P1", "Jenis Tinggal");
        $sheet->setCellValue("Q1", "Alat Transportasi");
        $sheet->setCellValue("R1", "Telepon");
        $sheet->setCellValue("S1", "HP");
        $sheet->setCellValue("T1", "E-Mail");
        $sheet->setCellValue("U1", "SKHUN");
        $sheet->setCellValue("V1", "Penerima KPS");
        $sheet->setCellValue("W1", "No. KPS");
        $sheet->setCellValue("Y1", "Data Ayah");
        $sheet->setCellValue("Y2", "Nama");
        $sheet->setCellValue("Z2", "Tahun Lahir");
        $sheet->setCellValue("AA2", "Jenjang Pendidikan");
        $sheet->setCellValue("AB2", "Pekerjaan");
        $sheet->setCellValue("AC2", "Penghasilan");
        $sheet->setCellValue("AD2", "NIK");
        $sheet->setCellValue("AE1", "Data Ibu");
        $sheet->setCellValue("AE2", "Nama");
        $sheet->setCellValue("AF2", "Tahun Lahir");
        $sheet->setCellValue("AG2", "Jenjang Pendidikan");
        $sheet->setCellValue("AH2", "Pekerjaan");
        $sheet->setCellValue("AI2", "Penghasilan");
        $sheet->setCellValue("AJ2", "NIK");
        $sheet->setCellValue("AK1", "Data Wali");
        $sheet->setCellValue("AK2", "Nama");
        $sheet->setCellValue("AL2", "Tahun Lahir");
        $sheet->setCellValue("AM2", "Jenjang Pendidikan");
        $sheet->setCellValue("AN2", "Pekerjaan");
        $sheet->setCellValue("AO2", "Penghasilan");
        $sheet->setCellValue("AP2", "NIK");
        $sheet->setCellValue("AQ1", "Rombel Saat Ini");
        $sheet->setCellValue("AR1", "No Peserta Ujian Nasional");
        $sheet->setCellValue("AS1", "No Seri Ijazah");
        $sheet->setCellValue("AT1", "Penerima KIP");
        $sheet->setCellValue("AU1", "Nomor KIP");
        $sheet->setCellValue("AV1", "Nama di KIP");
        $sheet->setCellValue("AW1", "Nomor KKS");
        $sheet->setCellValue("AX1", "No Registrasi Akta Lahir");
        $sheet->setCellValue("AY1", "Bank");
        $sheet->setCellValue("AZ1", "Nomor Rekening Bank");
        $sheet->setCellValue("BA1", "Rekening Atas Nama");
        $sheet->setCellValue("BB1", "Layak PIP (usulan dari sekolah)");
        $sheet->setCellValue("BC1", "Alasan Layak PIP");
        $sheet->setCellValue("BD1", "Kebutuhan Khusus");
        $sheet->setCellValue("BE1", "Sekolah Asal");
        $sheet->setCellValue("BF1", "Anak ke-berapa");
        $sheet->setCellValue("BG1", "Lintang");
        $sheet->setCellValue("BH1", "Bujur");
        $sheet->setCellValue("BI1", "No KK");
        $sheet->setCellValue("BJ1", "Berat Badan");
        $sheet->setCellValue("BK1", "Tinggi Badan");
        $sheet->setCellValue("BL1", "Lingkar Kepala");
        $sheet->setCellValue("BM1", "Jml. Saudara Kandung");
        $sheet->setCellValue("BN1", "Jarak Rumah ke Sekolah (KM)");

        $j = 3;
        for ($i = 0; $i < count($data); $i++) {
            $sheet->setCellValue("A$j", $i + 1);
            $sheet->setCellValue("B$j", $data[$i]->nama_siswa);
            $sheet->setCellValue("C$j", $data[$i]->nipd);
            $sheet->setCellValue("D$j", $data[$i]->nisn);
            $sheet->setCellValue("E$j", $data[$i]->tempat_lahir);
            $sheet->setCellValue("F$j", $data[$i]->tanggal_lahir);
            $sheet->setCellValue("G$j", $data[$i]->nik_siswa);
            $sheet->setCellValue("H$j", $data[$i]->agama);
            $sheet->setCellValue("I$j", $data[$i]->detail_alamat);
            $sheet->setCellValue("J$j", $data[$i]->rt);
            $sheet->setCellValue("K$j", $data[$i]->rw);
            $sheet->setCellValue("L$j", $data[$i]->dusun);
            $sheet->setCellValue("M$j", $data[$i]->desa);
            $sheet->setCellValue("N$j", $data[$i]->kecamatan);
            $sheet->setCellValue("O$j", $data[$i]->kode_pos);
            $sheet->setCellValue("P$j", $data[$i]->tempat_tinggal);
            $sheet->setCellValue("Q$j", $data[$i]->moda_transportasi);
            $sheet->setCellValue("R$j", $data[$i]->nomor_telepon_rumah);
            $sheet->setCellValue("S$j", $data[$i]->nomor_telepon_seluler);
            $sheet->setCellValue("T$j", $data[$i]->email);
            $sheet->setCellValue("U$j", $data[$i]->nomor_skhun);
            $sheet->setCellValue("V$j", (empty($data[$i]->id_kps)) ? "Tidak" : "Ya");
            $sheet->setCellValue("W$j", $data[$i]->nomor_kps);
            $sheet->setCellValue("Y$j", $data[$i]->nama_ayah);
            $sheet->setCellValue("Z$j", $data[$i]->tahun_lahir_ayah);
            $sheet->setCellValue("AA$j", $data[$i]->pendidikan_ayah);
            $sheet->setCellValue("AB$j", $data[$i]->pekerjaan_ayah);
            $sheet->setCellValue("AC$j", $data[$i]->penghasilan_ayah);
            $sheet->setCellValue("AD$j", $data[$i]->nik_ayah);
            $sheet->setCellValue("AE$j", $data[$i]->nama_ibu);
            $sheet->setCellValue("AF$j", $data[$i]->tahun_lahir_ibu);
            $sheet->setCellValue("AG$j", $data[$i]->pendidikan_ibu);
            $sheet->setCellValue("AH$j", $data[$i]->pekerjaan_ibu);
            $sheet->setCellValue("AI$j", $data[$i]->penghasilan_ibu);
            $sheet->setCellValue("AJ$j", $data[$i]->nik_ibu);
            $sheet->setCellValue("AK$j", $data[$i]->nama_wali);
            $sheet->setCellValue("AL$j", $data[$i]->tahun_lahir_wali);
            $sheet->setCellValue("AM$j", $data[$i]->pendidikan_wali);
            $sheet->setCellValue("AN$j", $data[$i]->pekerjaan_wali);
            $sheet->setCellValue("AO$j", $data[$i]->penghasilan_wali);
            $sheet->setCellValue("AP$j", $data[$i]->nik_wali);
            $sheet->setCellValue("AQ$j", $data[$i]->rombel);
            $sheet->setCellValue("AR$j", $data[$i]->nomor_peserta_ujian);
            $sheet->setCellValue("AS$j", $data[$i]->no_seri_ijazah);
            $sheet->setCellValue("AT$j", (empty($data[$i]->id_kip)) ? "Tidak" : "Ya");
            $sheet->setCellValue("AU$j", $data[$i]->nomor_kip);
            $sheet->setCellValue("AV$j", $data[$i]->nama_tertera_kip);
            $sheet->setCellValue("AW$j", $data[$i]->nomor_kks);
            $sheet->setCellValue("AX$j", $data[$i]->nomor_registrasi_akta_lahir);
            $sheet->setCellValue("AY$j", $data[$i]->bank);
            $sheet->setCellValue("AZ$j", $data[$i]->nomor_rekening);
            $sheet->setCellValue("BA$j", $data[$i]->rekening_atas_nama);
            $sheet->setCellValue("BB$j", (empty($data[$i]->id_pip)) ? "Tidak" : "Ya");
            $sheet->setCellValue("BC$j", $data[$i]->alasan_layak_pip);
            $sheet->setCellValue("BD$j", $data[$i]->berkebutuhan_khusus_siswa);
            $sheet->setCellValue("BE$j", $data[$i]->asal_sekolah);
            $sheet->setCellValue("BF$j", $data[$i]->anak_ke);
            $sheet->setCellValue("BG$j", $data[$i]->lintang);
            $sheet->setCellValue("BH$j", $data[$i]->bujur);
            $sheet->setCellValue("BI$j", $data[$i]->nomor_kk);
            $sheet->setCellValue("BJ$j", $data[$i]->berat_badan_kg);
            $sheet->setCellValue("BK$j", $data[$i]->tinggi_badan_cm);
            $sheet->setCellValue("BL$j", $data[$i]->lingkar_kepala_cm);
            $sheet->setCellValue("BM$j", $data[$i]->jumlah_saudara_kandung);
            $sheet->setCellValue("BN$j", $data[$i]->jarak_tempat_tinggal_ke_sekolah_km);
            $j += 1;
        }
        //membuat nama file
        $filename = "data_siswa";

        //export ke xlsx
        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit;
    }

    private function konversi_ke_null($input)
    {
        if ($input == 'false') {
            return false; // is null
        }
        return true; // is not null
    }

    private function generate_where()
    {
        $operator_jarak_rumah_ke_sekolah = trim($this->input->get('operator_jarak_rumah_ke_sekolah'));
        $operator_waktu_tempuh_ke_sekolah = trim($this->input->get('operator_waktu_tempuh_ke_sekolah'));
        $filter_siswa = array(
            'siswa.agama_id_agama' => trim($this->input->get('agama')),
            'siswa.gender_id_gender' => trim($this->input->get('gender')),
            'alamat.tempat_tinggal_id_tempat_tinggal' => trim($this->input->get('tempat_tinggal')),
            'siswa.moda_transportasi_id_moda_transportasi' => trim($this->input->get('moda_transportasi')),
            'siswa.anak_ke' => trim($this->input->get('anak_ke')),
            'siswa.jumlah_saudara_kandung' => trim($this->input->get('jumlah_saudara_kandung')),
            'kecamatan.id_kecamatan' => trim($this->input->get('kecamatan')),
            'desa.id_desa' => trim($this->input->get('desa')),
            'ayah.pendidikan_id_pendidikan' => trim($this->input->get('pendidikan_ayah')),
            'ayah.pekerjaan_id_pekerjaan' => trim($this->input->get('pekerjaan_ayah')),
            'ayah.penghasilan_id_penghasilan' => trim($this->input->get('penghasilan_ayah')),
            'ibu.pendidikan_id_pendidikan' => trim($this->input->get('pendidikan_ibu')),
            'ibu.pekerjaan_id_pekerjaan' => trim($this->input->get('pekerjaan_ibu')),
            'ibu.penghasilan_id_penghasilan' => trim($this->input->get('penghasilan_ibu')),
            'wali.pendidikan_id_pendidikan' => trim($this->input->get('pendidikan_wali')),
            'wali.pekerjaan_id_pekerjaan' => trim($this->input->get('pekerjaan_wali')),
            'wali.penghasilan_id_penghasilan' => trim($this->input->get('penghasilan_wali')),
        );
        $filter_ya_tidak = array(
            'siswa_has_berkebutuhan_khusus.berkebutuhan_khusus_id_berkebutuhan_khusus' => trim($this->input->get('berkebutuhan_khusus')),
            'beasiswa.id_beasiswa' => trim($this->input->get('penerima_beasiswa')),
            'prestasi.id_prestasi' => trim($this->input->get('penerima_prestasi')),
            'pkh_kps.id_pkh_kps' => trim($this->input->get('penerima_pkh_kps')),
            'kip.id_kip' => trim($this->input->get('penerima_kip')),
            'kks.id_kks' => trim($this->input->get('penerima_kks')),
            'pip.alasan_layak_pip_id_alasan_layak_pip' => trim($this->input->get('penerima_pip')),
            'pendaftaran_keluar.id_pendaftaran_keluar' => trim($this->input->get('status_siswa')),
            'pip.bank' => trim($this->input->get('pip_bank')),
        );

        if (!empty($operator_jarak_rumah_ke_sekolah)) {
            $filter_siswa["siswa.jarak_tempat_tinggal_ke_sekolah_m $operator_jarak_rumah_ke_sekolah"] = trim($this->input->get('jarak_rumah_ke_sekolah'));
        }
        if (!empty($operator_waktu_tempuh_ke_sekolah)) {
            $filter_siswa["siswa.waktu_tempuh_ke_sekolah_menit $operator_waktu_tempuh_ke_sekolah"] = trim($this->input->get('waktu_tempuh_ke_sekolah'));
        }

        $where = array();
        foreach ($filter_siswa as $key => $value) {
            if (empty($value)) {
                continue;
            } else {
                $where[$key] = $value;
            }
        }

        foreach ($filter_ya_tidak as $key => $value) {
            if (empty($value)) {
                continue;
            }
            $konversi = $this->konversi_ke_null($value);
            if ($konversi) {
                $where["$key !="] = null;
            } else {
                $where["$key ="] = null;
            }
        }

        $where['siswa.deleted_at ='] = null;

        return $where;
    }

    private function get_all_data()
    {
        $data_pribadi = $this->view_model->select_view_data_pribadi()->result_array();
        $compact_data_pribadi = $this->compact_data_pribadi($data_pribadi);

        $alamat_dan_domisili = $this->view_model->select_view_alamat_dan_domisili()->result_array();

        $bantuan_tidak_mampu = $this->view_model->select_view_bantuan_tidak_mampu()->result_array();
        $compact_bantuan_tidak_mampu = $this->compact_bantuan_tidak_mampu($bantuan_tidak_mampu);

        $ayah = $this->view_model->select_view_ayah()->result_array();
        $compact_ayah = $this->compact_ayah($ayah);

        $ibu = $this->view_model->select_view_ibu()->result_array();
        $compact_ibu = $this->compact_ibu($ibu);

        $wali = $this->view_model->select_view_wali()->result_array();
        $compact_wali = $this->compact_wali($wali);

        $kontak_siswa = $this->view_model->select_view_kontak_siswa()->result_array();
        $compact_kontak_siswa = $this->compact_kontak_siswa($kontak_siswa);

        $media_sosial = $this->view_model->select_view_media_sosial()->result_array();
        $compact_media_sosial = $this->compact_media_sosial($media_sosial);

        $kontak_darurat = $this->view_model->select_view_kontak_darurat()->result_array();
        $compact_kontak_darurat = $this->compact_kontak_darurat($kontak_darurat);

        $combine_kontak_siswa = $this->combine($compact_kontak_siswa, $compact_media_sosial);
        $combine_kontak_siswa = $this->combine($combine_kontak_siswa, $compact_kontak_darurat);

        $data_periodik = $this->view_model->select_view_data_periodik()->result_array();
        $compact_data_periodik = $this->compact_data_periodik($data_periodik);

        $riwayat_kesehatan = $this->view_model->select_view_riwayat_kesehatan()->result_array();
        $compact_riwayat_kesehatan = $this->compact_riwayat_kesehatan($riwayat_kesehatan);

        $combine_data_periodik = $this->combine($compact_data_periodik, $compact_riwayat_kesehatan);

        $prestasi = $this->view_model->select_view_prestasi()->result_array();
        $compact_prestasi = $this->compact_prestasi($prestasi);

        $beasiswa = $this->view_model->select_view_beasiswa()->result_array();
        $compact_beasiswa = $this->compact_beasiswa($beasiswa);

        $data_proses_pembelajaran = $this->view_model->select_view_data_proses_pembelajaran()->result_array();
        $compact_data_proses_pembelajaran = $this->compact_data_proses_pembelajaran($data_proses_pembelajaran);

        $pendaftaran_masuk = $this->view_model->select_view_pendaftaran_masuk()->result_array();
        // $compact_pendaftaran_masuk = $this->compact_pendaftaran_masuk($pendaftaran_masuk);

        $pilihan_jurusan_saat_ppdb = $this->view_model->select_view_pilihan_jurusan_saat_ppdb()->result_array();
        $compact_pilihan_jurusan_saat_ppdb = $this->compact_pilihan_jurusan_saat_ppdb($pilihan_jurusan_saat_ppdb);

        $pilihan_jalur_ppdb = $this->view_model->select_view_pilihan_jalur_ppdb()->result_array();
        $compact_pilihan_jalur_ppdb = $this->compact_pilihan_jalur_ppdb($pilihan_jalur_ppdb);

        $mean_mapel = $this->view_model->select_view_mean_mapel()->result_array();
        $compact_mean_mapel = $this->compact_mean_mapel($mean_mapel);

        $combine_pendaftaran_masuk = $this->combine($pendaftaran_masuk, $compact_pilihan_jurusan_saat_ppdb);
        $combine_pendaftaran_masuk = $this->combine($combine_pendaftaran_masuk, $compact_pilihan_jalur_ppdb);
        $combine_pendaftaran_masuk = $this->combine($combine_pendaftaran_masuk, $compact_mean_mapel);


        $combine = $this->combine($compact_data_pribadi, $alamat_dan_domisili, 'alamat');
        $combine = $this->combine($combine, $compact_bantuan_tidak_mampu, 'bantuan_tidak_mampu');
        $combine = $this->combine($combine, $compact_ayah, 'ayah');
        $combine = $this->combine($combine, $compact_ibu, 'ibu');
        $combine = $this->combine($combine, $compact_wali, 'wali');
        $combine = $this->combine($combine, $combine_kontak_siswa, 'kontak_siswa');
        $combine = $this->combine($combine, $combine_data_periodik, 'data_periodik');
        $combine = $this->combine($combine, $compact_prestasi);
        $combine = $this->combine($combine, $compact_beasiswa);
        $combine = $this->combine($combine, $combine_pendaftaran_masuk, 'registrasi');
        $combine = $this->combine($combine, $compact_data_proses_pembelajaran);

        // $data_combine = array(
        //     [$alamat_dan_domisili, 'alamat'],
        //     [$compact_bantuan_tidak_mampu, 'bantuan_tidak_mampu'],
        //     [$compact_ayah, 'ayah'],
        //     [$compact_ibu, 'ibu'],
        //     [$compact_wali, 'wali'],
        //     [$combine_kontak_siswa, 'kontak_siswa'],
        //     [$compact_data_periodik, 'data_periodik'],
        //     [$compact_prestasi, null],
        //     [$compact_beasiswa, null],
        //     [$combine_pendaftaran_masuk, 'registrasi'],
        //     [$compact_data_proses_pembelajaran, null],
        // );

        // $combine = $this->combine2($compact_data_pribadi, $data_combine);


        return $combine;
    }

    private function combine2($parent, $child)
    {
        $i = 0;
        foreach ($parent as $value_parent) {
            foreach ($child as $value_child) {
                $tag = $value_child[1];
                if (!empty($tag)) {
                    foreach ($value_child[0] as $idx => $data) {
                        if ($value_parent['id_siswa'] == $data["id_siswa"]) {
                            foreach ($data as $key => $value2) {
                                if ($key == "id_siswa") {
                                    continue;
                                }
                                $parent[$i][$tag][$key] = $value2;
                            }
                            unset($value_child[0][$idx]);
                        }
                    }
                } else {
                    foreach ($value_child[0] as $idx => $data) {
                        if ($value_parent['id_siswa'] == $data["id_siswa"]) {
                            foreach ($data as $key => $value2) {
                                if ($key == "id_siswa") {
                                    continue;
                                }
                                $parent[$i][$key] = $value2;
                            }
                            unset($value_child[0][$idx]);
                        }
                    }
                }
            }
            $i += 1;
        }
        return $parent;
    }

    private function combine($parent, $child, ?String $tag = null)
    {
        $i = 0;
        if ($tag != null) {
            foreach ($parent as $key => $value) {
                foreach ($child as $key2 => $value2) {
                    if ($value['id_siswa'] == $value2['id_siswa']) {
                        foreach ($value2 as $key => $value3) {
                            if ($key == "id_siswa") {
                                continue;
                            }
                            $parent[$i][$tag][$key] = $value3;
                        }
                        unset($child[$key2]);
                    }
                }
                $i++;
            }
        } else {
            foreach ($parent as $key => $value) {
                foreach ($child as $key2 => $value2) {
                    if ($value['id_siswa'] == $value2['id_siswa']) {
                        foreach ($value2 as $key => $value3) {
                            if ($key == "id_siswa") {
                                continue;
                            }
                            $parent[$i][$key] = $value3;
                        }
                        unset($child[$key2]);
                    }
                }
                $i++;
            }
        }

        return $parent;
    }

    // one to many optional 
    private function compact_data_pribadi($data_pribadi)
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

    // one to one mandatory 
    private function compact_ayah($ayah)
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

    // one to one mandatory 
    private function compact_bantuan_tidak_mampu($bantuan_tidak_mampu)
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

    // one to one mandatory 
    private function compact_beasiswa($beasiswas)
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

    // one to one mandatory 
    private function compact_prestasi($prestasis)
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

    // one to one mandatory (siswa - ayah)
    private function compact_data_periodik($data_periodik)
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
                $compact_data_periodik[$i]["beasiswa"] = null;
            }
            $i++;
        }
        return $compact_data_periodik;
    }

    private function compact_riwayat_kesehatan($riwayat_kesehatan)
    {
        if (empty($riwayat_kesehatan)) {
            return;
        }
        $compact_riwayat_kesehatan = array();
        $i = 0;
        foreach ($riwayat_kesehatan as $value) {
            for ($j = 0; $j < count($compact_riwayat_kesehatan); $j++) {
                if ($value["id_siswa"] == $compact_riwayat_kesehatan[$j]['id_siswa']) {
                    $temp = array(
                        "id_riwayat_kesehatan" => $value["id_riwayat_kesehatan"],
                        "penyakit" => $value["penyakit"],
                        "id_jenis_penyakit" => $value["id_jenis_penyakit"],
                        "jenis_penyakit" => $value["jenis_penyakit"],
                    );
                    array_push($compact_riwayat_kesehatan[$j]["riwayat_kesehatan"], $temp);
                    continue 2;
                }
            }
            $compact_riwayat_kesehatan[$i] = array(
                "id_siswa" => $value["id_siswa"],
            );
            if (!empty($value["id_riwayat_kesehatan"])) {
                $compact_riwayat_kesehatan[$i]["riwayat_kesehatan"][] = array(
                    "id_riwayat_kesehatan" => $value["id_riwayat_kesehatan"],
                    "penyakit" => $value["penyakit"],
                    "id_jenis_penyakit" => $value["id_jenis_penyakit"],
                    "jenis_penyakit" => $value["jenis_penyakit"],
                );
            } else {
                $compact_riwayat_kesehatan[$i]["riwayat_kesehatan"] = null;
            }
            $i++;
        }
        return $compact_riwayat_kesehatan;
    }

    // one to one mandatory 
    private function compact_data_proses_pembelajaran($data_proses_pembelajaran)
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

    private function compact_pendaftaran_masuk($pendaftaran_masuk)
    {
        if (empty($pendaftaran_masuk)) {
            return;
        }
        $compact_pendaftaran_masuk = array();
        $i = 0;
        foreach ($pendaftaran_masuk as $value) {
            for ($j = 0; $j < count($compact_pendaftaran_masuk); $j++) {
                if ($value["id_siswa"] == $compact_pendaftaran_masuk[$j]['id_siswa']) {
                    $temp = array(
                        "id_pendaftaran_masuk" => $value["id_pendaftaran_masuk"],
                        "id_tahun_ajaran" => $value["id_tahun_ajaran"],
                        "tahun1" => $value["tahun1"],
                        "tahun2" => $value["tahun2"],
                        "id_kompetensi_keahlian_diterima" => $value["id_kompetensi_keahlian_diterima"],
                        "kompetensi_keahlian_diterima" => $value["kompetensi_keahlian_diterima"],
                        "akronim_diterima" => $value["akronim_diterima"],
                        "id_diterima_ppdb_lewat_jalur" => $value["id_diterima_ppdb_lewat_jalur"],
                        "diterima_ppdb_lewat_jalur" => $value["diterima_ppdb_lewat_jalur"],
                        "kode_pin_pendaftaran" => $value["kode_pin_pendaftaran"],
                        "id_jenis_pendaftaran" => $value["id_jenis_pendaftaran"],
                        "jenis_pendaftaran" => $value["jenis_pendaftaran"],
                        "nis" => $value["nis"],
                        "npsn_smp" => $value["npsn_smp"],
                        "akreditasi_smp" => $value["akreditasi_smp"],
                        "tahun_lulus_smp" => $value["tahun_lulus_smp"],
                        "tanggal_masuk_sekolah" => $value["tanggal_masuk_sekolah"],
                        "asal_sekolah" => $value["asal_sekolah"],
                        "nomor_peserta_ujian" => $value["nomor_peserta_ujian"],
                        "no_seri_ijazah" => $value["no_seri_ijazah"],
                        "no_seri_khusus" => $value["no_seri_khusus"],
                        "nomor_skhun" => $value["nomor_skhun"],
                    );
                    array_push($compact_pendaftaran_masuk[$j]["registrasi"], $temp);
                    continue 2;
                }
            }
            $compact_pendaftaran_masuk[$i] = array(
                "id_siswa" => $value["id_siswa"],
            );
            if (!empty($value["id_pendaftaran_masuk"])) {
                $compact_pendaftaran_masuk[$i]["registrasi"][] = array(
                    "id_pendaftaran_masuk" => $value["id_pendaftaran_masuk"],
                    "id_tahun_ajaran" => $value["id_tahun_ajaran"],
                    "tahun1" => $value["tahun1"],
                    "tahun2" => $value["tahun2"],
                    "id_kompetensi_keahlian_diterima" => $value["id_kompetensi_keahlian_diterima"],
                    "kompetensi_keahlian_diterima" => $value["kompetensi_keahlian_diterima"],
                    "akronim_diterima" => $value["akronim_diterima"],
                    "id_diterima_ppdb_lewat_jalur" => $value["id_diterima_ppdb_lewat_jalur"],
                    "diterima_ppdb_lewat_jalur" => $value["diterima_ppdb_lewat_jalur"],
                    "kode_pin_pendaftaran" => $value["kode_pin_pendaftaran"],
                    "id_jenis_pendaftaran" => $value["id_jenis_pendaftaran"],
                    "jenis_pendaftaran" => $value["jenis_pendaftaran"],
                    "nis" => $value["nis"],
                    "npsn_smp" => $value["npsn_smp"],
                    "akreditasi_smp" => $value["akreditasi_smp"],
                    "tahun_lulus_smp" => $value["tahun_lulus_smp"],
                    "tanggal_masuk_sekolah" => $value["tanggal_masuk_sekolah"],
                    "asal_sekolah" => $value["asal_sekolah"],
                    "nomor_peserta_ujian" => $value["nomor_peserta_ujian"],
                    "no_seri_ijazah" => $value["no_seri_ijazah"],
                    "no_seri_khusus" => $value["no_seri_khusus"],
                    "nomor_skhun" => $value["nomor_skhun"],
                );
            } else {
                $compact_pendaftaran_masuk[$i]["registrasi"] = null;
            }
            $i++;
        }
        return $compact_pendaftaran_masuk;
    }

    private function compact_pilihan_jurusan_saat_ppdb($pilihan_jurusan_saat_ppdb)
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

    private function compact_pilihan_jalur_ppdb($pilihan_jalur_ppdb)
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

    private function compact_mean_mapel($mean_mapel)
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

    // one to one mandatory 
    private function compact_ibu($ibu)
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

    // one to one mandatory (siswa - wali)
    private function compact_wali($wali)
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

    private function compact_kontak_darurat($kontak_darurat)
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

    private function compact_media_sosial($media_sosial)
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

    private function compact_kontak_siswa($kontak_siswa)
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

    public function tes()
    {
        $array = [
            ["id" => 1, "name" => "Alex", "provider" => "telkomsel", "no" => "081xxxxxxx"],
            ["id" => 2, "name" => "Baal", "provider" => "xl", "no" => "081xxxxxxx"],
            ["id" => 1, "name" => "Alex", "provider" => "indosat", "no" => "081xxxxxxx"],
            ["id" => 3, "name" => "Cece", "provider" => "indosat", "no" => "081xxxxxxx"],
        ];
        // print_r($array);
        $b = array();
        $i = 0;
        foreach ($array as $value) {
            for ($j = 0; $j < count($b); $j++) {
                if ($value["id"] == $b[$j]['id']) {
                    $hp = ["provider" => $array[$i]['provider'], "no" => $array[$i]['no']];
                    array_push($b[$j]["hp"], $hp);
                    continue 2;
                }
            }
            $b[$i] = array(
                "id" => $value["id"],
                "name" => $value["name"],
                "hp" => ["provider" => $value["provider"], "no" => $value["no"]]
            );
            $i++;
        }
        print_r($b);
    }
}

/* End of file Filter.php */

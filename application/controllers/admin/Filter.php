<?php

defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Filter extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('bank_model');
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
        $where = $this->generate_where();
        $data = $this->filter_model->safe_filter($where)->result_array();

        $context = array(
            "data" => $data,
        );

        $this->load->view('admin/filter_result', $context);
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
            $sheet->setCellValue("A$j", $i+1);
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
            'siswa.agama' => trim($this->input->get('agama')),
            'siswa.gender_id_gender' => trim($this->input->get('gender')),
            'siswa.tempat_tinggal_id_tempat_tinggal' => trim($this->input->get('tempat_tinggal')),
            'siswa.moda_transportasi_id_moda_transportasi' => trim($this->input->get('moda_transportasi')),
            'siswa.anak_ke' => trim($this->input->get('anak_ke')),
            'siswa.jumlah_saudara_kandung' => trim($this->input->get('jumlah_saudara_kandung')),
            'kecamatan.id_kecamatan' => trim($this->input->get('kecamatan')),
            'desa.id_desa' => trim($this->input->get('desa')),
            'pip.bank_id_bank' => trim($this->input->get('pip_bank')),
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
            'pkh.id_pkh' => trim($this->input->get('penerima_pkh')),
            'kps.id_kps' => trim($this->input->get('penerima_kps')),
            'kip.id_kip' => trim($this->input->get('penerima_kip')),
            'kks.id_kks' => trim($this->input->get('penerima_kks')),
            'pip.alasan_layak_pip_id_alasan_layak_pip' => trim($this->input->get('penerima_pip')),
            'pendaftaran_keluar.id_pendaftaran_keluar' => trim($this->input->get('status_siswa')),
        );

        if (!empty($operator_jarak_rumah_ke_sekolah)) {
            $filter_siswa["siswa.jarak_tempat_tinggal_ke_sekolah_km $operator_jarak_rumah_ke_sekolah"] = trim($this->input->get('jarak_rumah_ke_sekolah'));
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

        return $where;
    }
}

/* End of file Filter.php */

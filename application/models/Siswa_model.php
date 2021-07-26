<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    private $table = 'siswa';

    public function __construct()
    {
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function insert_last_id($data)
    {
        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

    public function insert_batch($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }

    public function select_all()
    {
        return $this->db->get($this->table);
    }

    public function select_where($where)
    {
        return $this->db->get_where($this->table, $where);
    }

    public function update($where, $data)
    {
        return $this->db->update($this->table, $data, $where);
    }

    public function update_batch($key, $data)
    {
        return $this->db->update_batch($this->table, $data, $key);
    }

    public function delete($where)
    {
        return $this->db->delete($this->table, $where);
    }

    public function get_siswa_aktif()
    {
        $this->db->select('siswa.id_siswa, siswa.nama, siswa.nisn, kelas.kelas, kompetensi_keahlian.akronim AS jurusan');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.kelas_id_kelas');
        $this->db->join('pendaftaran_masuk', 'siswa.id_siswa = pendaftaran_masuk.siswa_id_siswa');
        $this->db->join('kompetensi_keahlian', 'kompetensi_keahlian.id_kompetensi_keahlian = pendaftaran_masuk.kompetensi_keahlian_diterima');
        $this->db->join('pendaftaran_keluar', 'siswa.id_siswa = pendaftaran_keluar.siswa_id_siswa', 'left');
        $this->db->where(array('siswa.deleted_at' => NULL, 'pendaftaran_keluar.id_pendaftaran_keluar' => NULL));

        return $this->db->get($this->table);
    }
}

/* End of file Siswa_model.php */

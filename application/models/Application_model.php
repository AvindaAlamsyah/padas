<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Application_model extends CI_Model
{

    private $table = 'application';

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

    public function select_siswa_aktif()
    {
        $this->db->select("s.nisn, pm.nis, s.nipd, s.nik, s.nama, k.kelas, kk.kompetensi_keahlian, kk.akronim");
        $this->db->from('siswa s');
        $this->db->join('kelas k', 's.kelas_id_kelas = k.id_kelas', 'left');
        $this->db->join('pendaftaran_masuk pm', 's.id_siswa = pm.siswa_id_siswa', 'left');
        $this->db->join('kompetensi_keahlian kk', 'pm.kompetensi_keahlian_diterima = kk.id_kompetensi_keahlian', 'left');
        $this->db->join('pendaftaran_keluar pk', 's.id_siswa = pk.siswa_id_siswa', 'left');
        $this->db->where(['s.deleted_at =' => null]);
        $this->db->group_by('s.id_siswa');
        return $this->db->get();
        
    }
}

/* End of file Application.php */

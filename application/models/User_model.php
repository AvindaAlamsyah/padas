<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table = 'user';

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

    public function session_check($tipe)
    {
        if ($tipe !== 0) {
            if ($this->session->userdata('id_user')) {
                switch ($tipe) {
                    case 0:
                        if ($this->session->userdata('akses') == 1) {
                            redirect('admin/data_siswa');
                        }
                        break;
                    case 1:
                        if ($this->session->userdata('akses') != 1) {
                            redirect('referensi');
                        }
                        break;

                    default:
                        echo "test";
                        break;
                }
            } else {
                redirect('login');
            }
        }
    }
}

/* End of file User_model.php */

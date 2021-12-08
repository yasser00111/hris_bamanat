<?php
class M_karyawan extends CI_Model
{
    public function tampil_data($IDKaryawan)
    {
        return $this->db->get('tb_MasterKaryawan')->row();
    }
    public function Tambah($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function Detail_karyawan($IDKaryawan = NULL)
    {
        $query = $this->db->get_where('tb_MasterKaryawan')->row();
        return $query;
    }
}

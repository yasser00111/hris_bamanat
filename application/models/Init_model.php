<?php
class Init_model extends CI_Model
{
    //$this->db->group_by("title");
    public function count_all($tabel)
    {
        $query = $this->db->count_all_results($tabel, FALSE);
        return $query;
    }
    public function count_by_id($tabel, $where)
    {
        $this->db->where($where);
        $this->db->from($tabel);
        $query =  $this->db->count_all_results();
        return $query;
    }

    public function count_where($tabel, $where)
    {
        $this->db->where($where);
        $this->db->from($tabel);
        $query =  $this->db->count_all_results();
        return $query;
    }

    public function sum_all($tabel, $colum)
    {
        $this->db->select_sum($colum);
        $query =  $this->db->get($tabel);
        return $query;
    }

    public function sum_by_id($tabel, $colum, $where)
    {
        //$this->db->select($filed);
        $this->db->select_sum($colum);
        $this->db->where($where);
        $query =  $this->db->get($tabel);
        return $query;
    }

    public function select_byLimit($tabel, $filed, $limit, $order)
    {
        $this->db->select($filed);
        $this->db->limit($limit);
        $this->db->order_by($order, "desc");
        $query =  $this->db->get($tabel);
        return $query;
    }

    public function select_Field_Sum($tabel, $filed, $colum, $where, $group)
    {
        $this->db->select($filed);
        $this->db->select_sum($colum);
        $this->db->where($where);
        $this->db->group_by($group);
        $query =  $this->db->get($tabel);
        return $query;
    }

    public function select_byLimit_sum($tabel, $filed, $colum, $group, $limit, $order)
    {
        $this->db->select($filed);
        $this->db->select_sum($colum);
        $this->db->group_by($group);
        $this->db->limit($limit);
        $this->db->order_by($order, "desc");
        $query =  $this->db->get($tabel);
        return $query;
    }

    public function select_byField($tabel, $filed)
    {
        $this->db->select($filed);
        $query =  $this->db->get($tabel);
        return $query;
    }
    public function get_all($tabel, $id)
    {
        $query = $this->db->order_by($id, "desc")->get($tabel);
        return $query;
    }

    public function get_by_id($tabel, $id)
    {
        $query = $this->db->get_where($tabel, $id);
        return $query;
    }

    public function get_limit($tabel, $limit, $id)
    {
        $query = $this->db->limit($limit)->order_by($id, "desc")->get($tabel);
        return $query;
    }
    public function get_limit_where($tabel, $where, $limit, $id)
    {
        $query = $this->db->where($where)->limit($limit)->order_by($id, "desc")->get($tabel);
        return $query;
    }

    public function save($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function insert($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function update($tabel, $where, $data)
    {
        $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($tabel, $id)
    {
        return $this->db->delete($tabel, $id);
    }

    public function clear_tabel($tabel)
    {
        return $this->db->truncate($tabel);
    }
}

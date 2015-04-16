<?php
/**
 * Created by PhpStorm.
 * User: upix
 * Date: 4/16/2015
 * Time: 6:11 PM
 */
class Persediaan extends CI_Model {
    function tambah($data)
    {
        $query = $this->db->insert("persediaan",$data);
        return $query;
    }

    function edit($id,$data)
    {
        $this->db->where("id",$id);
        $query = $this->db->update("persediaan",$data);
        return $query;
    }

    function getByTipe($tipe)
    {
        $this->db->where("tipe",$tipe);
        $query = $this->db->get("persediaan");
        return $query->result();
    }

    function getBarang($id)
    {
        $this->db->where("id",$id);
        $query = $this->db->get("persediaan");
        return $query->row();
    }

    function hapus($id)
    {
        $query = $this->db->delete("persediaan",array("id" => $id));
        return $query;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: upix
 * Date: 4/16/2015
 * Time: 10:10 PM
 */
class Transaksi extends CI_Model {
    function pembelian($data)
    {
        $this->db->trans_start();
        $this->db->insert("transaksi",$data);
        $id = $this->db->insert_id();
        $query = $this->db->insert("pembelian",array(
            "id" => $id,
            "tanggal_pembelian" => date("Y-m-d")
        ));
        $this->db->trans_complete();
        return $query;
    }
    function data_pembelian()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join("pembelian","transaksi.id=pembelian.id");
        $query = $this->db->get();
        return $query->result();
    }

    function pemesanan($data_transaksi,$data_pemesanan)
    {
        $this->db->trans_start();
        $this->db->insert("transaksi",$data_transaksi);
        $id = $this->db->insert_id();
        $query = $this->db->insert("pemesanan",array(
            "id" => $id,
            "lensa_kiri" => $data_pemesanan["lensa_kiri"],
            "lensa_kanan" => $data_pemesanan["lensa_kanan"],
            "tanggal_pengambilan" => "0000-00-00",
            "status" => 0
        ));
        $this->db->trans_complete();
        return $query;
    }

    function data_pemesanan()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join("pemesanan","transaksi.id=pemesanan.id");
        $query = $this->db->get();
        return $query->result();
    }

    function edit_pemesanan($id,$data)
    {
        $this->db->where("id",$id);
        $query = $this->db->update("pemesanan",$data);
        return $query;
    }

    function hapus_pemesanan($id)
    {
        $query = $this->db->delete("transaksi",array("id"=>$id));
        return $query;
    }

    function getTotalBulan($bulan)
    {
        $this->db->like("tanggal",date("Y")."-".$bulan,"after");
        $query = $this->db->get("transaksi");
        return $query->num_rows();
    }
}
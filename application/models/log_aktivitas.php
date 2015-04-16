<?php
/**
 * Created by PhpStorm.
 * User: upix
 * Date: 4/16/2015
 * Time: 7:34 PM
 */

class Log_aktivitas extends CI_Model {
    function catat($text)
    {
        $pengguna = $this->pengguna->logged_in();
        $data = array(
            "pengguna" => $pengguna->username,
            "log" => $text
        );
        $query = $this->db->insert("log_aktivitas",$data);
        return $query;
    }
    function getLog($limit)
    {
        $this->db->limit($limit);
        $this->db->order_by("id","desc");
        $query = $this->db->get("log_aktivitas");
        return $query->result();
    }
}
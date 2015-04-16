<?php
/**
 * Created by PhpStorm.
 * User: upix
 * Date: 4/16/2015
 * Time: 8:57 AM
 */
class Pengguna extends CI_Model {
    function validate($user,$pass){
        $this->db->where('username',$user);
        $pass_encrypted = md5($pass);
        $this->db->where('password',$pass_encrypted);
        $query = $this->db->get('pengguna');
        if ($query->num_rows == 1)
        {
            /*$data = array(
                'username'	=> $user,
                'password'	=> $pass_encrypted
            );
            $this->session->set_userdata($data);*/
            $_SESSION["username_goptical"] = $user;
            return true;
        }else{
            return false;
        }
    }
    function is_logged_in(){
        /*$this->db->where('username',$this->session->userdata('username'));
        $this->db->where('password',$this->session->userdata('password'));
        $query = $this->db->get('pengguna');*/
        if (isset($_SESSION["username_goptical"])){
            return true;
        }else{
            return false;
        }
    }
    function logged_in(){
        $this->db->where('username',$_SESSION["username_goptical"]);
        $query = $this->db->get('pengguna');
        return $query->row();
    }
    function getPengguna($user){
        $this->db->where('username',$user);
        $query = $this->db->get('pengguna');
        return $query->row();
    }

    function getAllPengguna()
    {
        $query = $this->db->get('pengguna');
        return $query->result();
    }

    function tambah($data)
    {
        $query = $this->db->insert("pengguna",$data);
        return $query;
    }

    function edit($user,$data)
    {
        $this->db->where("username",$user);
        $query = $this->db->update("pengguna",$data);
        return $query;
    }

    function hapus($user)
    {
        $query = $this->db->delete("pengguna",array("username"=>$user));
        return $query;
    }
}
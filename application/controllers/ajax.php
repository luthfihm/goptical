<?php
/**
 * Created by PhpStorm.
 * User: upix
 * Date: 4/16/2015
 * Time: 9:32 AM
 */

class Ajax extends CI_Controller
{
    function index()
    {

    }
    function login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        if ($this->pengguna->validate($user,$pass))
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }

    function tambah_persediaan()
    {
        $data = array(
            "nama" => $this->input->post("nama"),
            "tipe" => $this->input->post("tipe"),
            "harga" => $this->input->post("harga"),
            "stok" => $this->input->post("stok")
        );
        if ($this->persediaan->tambah($data)) {
            $this->log_aktivitas->catat("mencatat persediaan ".$this->input->post("tipe")." baru");
            echo "true";
        }else{
            echo "false";
        }
    }
    function edit_persediaan()
    {
        $id = $this->input->post("id");
        $data = array(
            "nama" => $this->input->post("nama"),
            "tipe" => $this->input->post("tipe"),
            "harga" => $this->input->post("harga"),
            "stok" => $this->input->post("stok")
        );
        if ($this->persediaan->edit($id,$data)) {
            //$this->log_aktivitas->catat("mencatat persediaan ".$this->input->post("tipe")." baru");
            echo "true";
        }else{
            echo "false";
        }
    }

    function beli()
    {
        $data = array(
            "nama_pelanggan" => $this->input->post("nama_pelanggan"),
            "no_telp" => $this->input->post("no_telp"),
            "id_produk" => $this->input->post("id_produk"),
            "jumlah_barang" => $this->input->post("jumlah_barang"),
            "total_harga" => $this->input->post("total_harga"),
            "tanggal" => date("Y-m-d")
        );
        if ($this->transaksi->pembelian($data)) {
            $this->log_aktivitas->catat("mencatat pembelian Lensa Kontak");
            echo "true";
        }else{
            echo "false";
        }
    }

    function pesan()
    {
        $data_transaksi = array(
            "nama_pelanggan" => $this->input->post("nama_pelanggan"),
            "no_telp" => $this->input->post("no_telp"),
            "id_produk" => $this->input->post("id_produk"),
            "jumlah_barang" => $this->input->post("jumlah_barang"),
            "total_harga" => $this->input->post("total_harga"),
            "tanggal" => date("Y-m-d")
        );
        $data_pemesanan = array(
            "lensa_kiri" => $this->input->post("lensa_kiri"),
            "lensa_kanan" => $this->input->post("lensa_kanan")
        );
        if ($this->transaksi->pemesanan($data_transaksi,$data_pemesanan)) {
            $this->log_aktivitas->catat("mencatat pemesanan Kacamata");
            echo "true";
        }else{
            echo "false";
        }
    }
    function  edit_pemesanan()
    {
        $id = $this->input->post("id");
        $status = $this->input->post("status");
        $tgl_pengambilan = "0000-00-00";
        if ($status == "3")
        {
            $tgl_pengambilan = date("Y-m-d");
        }
        $data = array(
            "tanggal_pengambilan" => $tgl_pengambilan,
            "status" => $status
        );
        if ($this->transaksi->edit_pemesanan($id,$data))
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }
    function hapus_pemesanan()
    {
        $id = $this->input->post("id");
        if ($this->transaksi->hapus_pemesanan($id))
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }

    function hapus_persediaan()
    {
        $id = $this->input->post("id");
        if ($this->persediaan->hapus($id))
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }

    function get_barang($id)
    {
        $barang = $this->persediaan->getBarang($id);
        echo json_encode($barang);
    }

    function tambah_pengguna()
    {
        $data = array(
            "nama" => $this->input->post("nama"),
            "username" => $this->input->post("username"),
            "password" => md5($this->input->post("password")),
            "role" => $this->input->post("role")
        );
        if ($this->pengguna->tambah($data))
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }

    function edit_pengguna()
    {
        $user = $this->input->post("user");
        $data = array(
            "nama" => $this->input->post("nama"),
            "username" => $this->input->post("username"),
            "password" => md5($this->input->post("password")),
            "role" => $this->input->post("role")
        );
        if ($this->pengguna->edit($user,$data))
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }

    function get_pengguna($username)
    {
        $pengguna = $this->pengguna->getPengguna($username);
        echo json_encode($pengguna);
    }

    function hapus_pengguna()
    {
        $user = $this->input->post("user");
        if ($this->pengguna->hapus($user))
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }
}
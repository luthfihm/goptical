<?php
/**
 * Created by PhpStorm.
 * User: upix
 * Date: 4/16/2015
 * Time: 9:09 AM
 */
class Main extends CI_Controller
{
    function index()
    {
        if ($this->pengguna->is_logged_in())
        {
            $pengguna = $this->pengguna->logged_in();
            if ($pengguna->role == "owner")
            {
                redirect('/main/dashboard');
            }
            else if ($pengguna->role == "clerk")
            {
                redirect('/main/pemesanan');
            }
            else if ($pengguna->role == "persediaan")
            {
                redirect('/main/persediaan');
            }
        }
        else
        {
            $this->load->view('login');
        }
    }

    function dashboard()
    {
        if ($this->pengguna->is_logged_in())
        {
            $pengguna = $this->pengguna->logged_in();
            if ($pengguna->role == "owner")
            {
                $data['content'] = "dash";
                $data['pengguna'] = $pengguna;
                $data['logs'] = $this->log_aktivitas->getLog(5);
                $data['kacamata'] = array(
                    1 => $this->transaksi->getTotalBulan("01"),
                    2 => $this->transaksi->getTotalBulan("02"),
                    3 => $this->transaksi->getTotalBulan("03"),
                    4 => $this->transaksi->getTotalBulan("04"),
                    5 => $this->transaksi->getTotalBulan("05"),
                    6 => $this->transaksi->getTotalBulan("06"),
                    7 => $this->transaksi->getTotalBulan("07"),
                );
                $this->load->view('page',$data);
            }
            else
            {
                redirect('/');
            }
        }
        else
        {
            redirect('/');
        }
    }

    function pengaturan()
    {
        if ($this->pengguna->is_logged_in())
        {
            $pengguna = $this->pengguna->logged_in();
            if ($pengguna->role == "owner")
            {
                $data['content'] = "pengaturan";
                $data['pengguna'] = $pengguna;
                $data['list_pengguna'] = $this->pengguna->getAllPengguna();
                $this->load->view('page',$data);
            }
            else
            {
                redirect('/');
            }
        }
        else
        {
            redirect('/');
        }
    }

    function pemesanan()
    {
        if ($this->pengguna->is_logged_in())
        {
            $pengguna = $this->pengguna->logged_in();
            if ($pengguna->role == "clerk")
            {
                $data['content'] = "pemesanan";
                $data['pengguna'] = $pengguna;
                $data['data_pemesanan'] = $this->transaksi->data_pemesanan();
                $this->load->view('page',$data);
            }
            else
            {
                redirect('/');
            }
        }
        else
        {
            redirect('/');
        }
    }
    function pembelian()
    {
        if ($this->pengguna->is_logged_in())
        {
            $pengguna = $this->pengguna->logged_in();
            if ($pengguna->role == "clerk")
            {
                $data['content'] = "pembelian";
                $data['pengguna'] = $pengguna;
                $data['data_pembelian'] = $this->transaksi->data_pembelian();
                $this->load->view('page',$data);
            }
            else
            {
                redirect('/');
            }
        }
        else
        {
            redirect('/');
        }
    }

    function pesan()
    {
        if ($this->pengguna->is_logged_in())
        {
            $pengguna = $this->pengguna->logged_in();
            if ($pengguna->role == "clerk")
            {
                $data['content'] = "pesan";
                $data['pengguna'] = $pengguna;
                $data['frames'] = $this->persediaan->getByTipe("Frame");
                $this->load->view('page',$data);
            }
            else
            {
                redirect('/');
            }
        }
        else
        {
            redirect('/');
        }
    }

    function beli()
    {
        if ($this->pengguna->is_logged_in())
        {
            $pengguna = $this->pengguna->logged_in();
            if ($pengguna->role == "clerk")
            {
                $data['content'] = "beli";
                $data['pengguna'] = $pengguna;
                $data['lensa_kontaks'] = $this->persediaan->getByTipe("Lensa Kontak");
                $this->load->view('page',$data);
            }
            else
            {
                redirect('/');
            }
        }
        else
        {
            redirect('/');
        }
    }

    function persediaan()
    {
        if ($this->pengguna->is_logged_in())
        {
            $pengguna = $this->pengguna->logged_in();
            $data['content'] = "persediaan";
            $data['pengguna'] = $pengguna;
            $data['lensa_kontaks'] = $this->persediaan->getByTipe("Lensa Kontak");
            $data['frames'] = $this->persediaan->getByTipe("Frame");
            $this->load->view('page',$data);
        }
        else
        {
            redirect('/');
        }
    }

    function logout()
    {
        unset($_SESSION["username_goptical"]);
        session_destroy();
        redirect('/');
    }
}
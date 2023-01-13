<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function _construct(){
        parent:: _construct();
        //cek login
        if($this->session->userdata('status') != "login" ){
            redirect(base_url().'welcome?pesan=belumlogin');
        }
    }

    function index(){
        $data['transaksi']= $this->db->query("select * from transaksi order by transaksi_id desc limit 10")->result();
        $data['kostumer']= $this->db->query("select * from kostumer order by kostumer_id desc limit 10")->result();
        $data['macbook']= $this->db->query("select * from macbook order by macbook_id desc limit 10")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/index',$data);
        $this->load->view('admin/footer');
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'welcome?pesan=logout');
    }

    
}

    
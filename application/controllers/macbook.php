<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Macbook extends CI_Controller {

    function _construct(){
        parent:: _construct();
        //cek login
        if($this->session->userdata('status') != "login" ){
            redirect(base_url().'welcome?pesan=belumlogin');
        }
    }


    function macbook(){
        $data['macbook'] = $this->m_rental->get_data('macbook')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/macbook/macbook',$data);
        $this->load->view('admin/footer');
    }

    function macbook_add(){
        $this->load->view('admin/header');
        $this->load->view('admin/macbook/macbook_add');
        $this->load->view('admin/footer');
    }

    function macbook_add_act(){
        $type = $this->input->post('type');
        $serial = $this->input->post('serial');
        $warna = $this->input->post('warna');
        $tahun = $this->input->post('tahun');
        $status = $this->input->post('status');
        $this->form_validation->set_rules('type','Type Macbook','required');
        $this->form_validation->set_rules('status','Status Macbook','required');

        if($this->form_validation->run() != false){
            $data = array(
                'macbook_type' => $type,
                'macbook_serial' => $serial,
                'macbook_warna' => $warna,
                'macbook_tahun' => $tahun,
                'macbook_status' => $status    
            );
            $this->m_rental->insert_data($data,'macbook');
            redirect(base_url().'macbook/macbook');
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/macbook/macbook_add');
            $this->load->view('admin/footer');
        }
    }

    function macbook_edit($id){
        $where = array(
            'macbook_id' => $id
        );
        $data['macbook'] = $this->m_rental->edit_data($where,'macbook')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/macbook/macbook_edit',$data);
        $this->load->view('admin/footer');
    }

    function macbook_add_act(){
        $type = $this->input->post('type');
        $serial = $this->input->post('serial');
        $warna = $this->input->post('warna');
        $tahun = $this->input->post('tahun');
        $status = $this->input->post('status');
        $this->form_validation->set_rules('type','Type Macbook','required');
        $this->form_validation->set_rules('status','Status Macbook','required');

        if($this->form_validation->run() != false){
            $data = array(
                'macbook_type' => $type,
                'macbook_serial' => $serial,
                'macbook_warna' => $warna,
                'macbook_tahun' => $tahun,
                'macbook_status' => $status    
            );
            $this->m_rental->insert_data($data,'macbook');
            redirect(base_url().'macbook/macbook');
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/macbook/macbook_add');
            $this->load->view('admin/footer');
        }
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop extends CI_Controller {



    function index(){
        $data['laptop'] = $this->m_rental->get_data('laptop_zakario')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/laptop/laptop',$data);
        $this->load->view('admin/footer');
    }

    function laptop_add(){
        $this->load->view('admin/header');
        $this->load->view('admin/laptop/laptop_add');
        $this->load->view('admin/footer');
    }

    

    function laptop_add_act(){
        $this->load->helper('string');
        $merk_laptop = $this->input->post('merk_laptop');
        $spesifikasi = $this->input->post('spesifikasi');
        $harga = $this->input->post('harga');
        $this->form_validation->set_rules('merk_laptop','Merk laptop','required');
        $this->form_validation->set_rules('spesifikasi','Spesifikasi laptop','required');

        if($this->form_validation->run() != false){
            $b = random_string('alnum', 16);
            $name_file = $merk_laptop."-".$b;
            $file_name = str_replace('.','', $name_file);
            $config['upload_path'] = FCPATH.'/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['file_name'] = $file_name;
    
    
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('file_laptop')) 
            {
                $error = array('error' => $this->upload->display_errors());
    
            } 
            else 
            {
                // $data = array('image_metadata' => $this->upload->data());
                $imageData = $this->upload->data();

                $datainsert = array(
                    'merk_laptop' => $merk_laptop,
                    'spesifikasi' => $spesifikasi,
                    'harga' => $harga,
                    'gambar' => $imageData['file_name']
                );
                $this->m_rental->insert_data($datainsert,'laptop_zakario');
                // redirect(base_url().'laptop/index');
            }
            redirect(base_url().'laptop/index');


            
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/laptop/laptop_add');
            $this->load->view('admin/footer');
        }
    }

    function laptop_edit($id){
        
        $where = array(
            'id_laptop' => $id
        );
        $data['laptop'] = $this->m_rental->edit_data($where,'laptop_zakario')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/laptop/laptop_edit',$data);
        $this->load->view('admin/footer');
    }

    function laptop_edit_act(){
        $this->load->helper('string');
        $id = $this->input->post('id_laptop');
        $merk_laptop = $this->input->post('merk_laptop');
        $spesifikasi = $this->input->post('spesifikasi');
        $harga = $this->input->post('harga');
        $this->form_validation->set_rules('merk_laptop','Merk laptop','required');
        $this->form_validation->set_rules('spesifikasi','Spesifikasi laptop','required');

        if($this->form_validation->run() != false){
            $b = random_string('alnum', 16);
            $name_file = $merk_laptop."-".$b;
            $file_name = str_replace('.','', $name_file);
            $config['upload_path'] = FCPATH.'/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['file_name'] = $file_name;

            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('file_laptop')) 
            {
                $error = array('error' => $this->upload->display_errors());
    
            } 
            else 
            {
                // $data = array('image_metadata' => $this->upload->data());
                $imageData = $this->upload->data();

                $where = array(
                    'id_laptop' => $id, 
                );
                $datainsert = array(
                    'merk_laptop' => $merk_laptop,
                    'spesifikasi' => $spesifikasi,
                    'harga' => $harga,   
                    'gambar' => $imageData['file_name']
                );
                $this->m_rental->update_data($where,$datainsert,'laptop_zakario');
                // redirect(base_url().'laptop/index');
            }
            redirect(base_url().'laptop/index');
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/laptop/laptop_edit');
            $this->load->view('admin/footer');
        }
    }

    function laptop_delete($id){
        $where = array(
            'id_laptop' => $id, 
        );
        $this->m_rental->delete_data($where,'laptop_zakario');
        redirect(base_url().'laptop/index');
    }

}

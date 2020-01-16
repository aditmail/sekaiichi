<?php

defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class JenisPekerjaan extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("JenisPekerjaan_model");
        $this->load->library('form_validation');
    }

    function _remap($id){
        $this->index($id);
    }

    public function index($id=null){
        $data["mt_jenis_pekerjaan"] = $this->JenisPekerjaan_model->getAll($id);
        $this->load->view("admin/jenisPekerjaan/list", $data);
    }

    public function add(){
        //Load Data Tipe Pekerjaan
        $data["mt_tipe_pekerjaan"] = $this->JenisPekerjaan_model->getListTipe();
        $this->load->view("admin/jenisPekerjaan/new_form", $data);
        
        $jenisPekerjaan = $this->JenisPekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenisPekerjaan->rules());

        if($validation->run()){
            $jenisPekerjaan->save();
            $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        }

        $this->load->view("admin/jenisPekerjaan/new_form");
    }

    public function edit($id=null){
        if(!isset($id)) redirect('admin/JenisPekerjaan');

        $jenisPekerjaan = $this->JenisPekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($jenisPekerjaan->rules());

        if($validation->run()){
            $jenisPekerjaan->update();
            $this->session->set_flashdata('success', "Berhasil Memperbarui Data");
        }

        $data["mt_jenis_pekerjaan"] = $jenisPekerjaan->getById($id);
        if(!$data["mt_tipe_pekerjaan"]) show_404();

        $this->load->view("admin/jenisPekerjaan/edit_form", $data);
    }

    public function delete($id=null){
        if(!isset($id)) show_404();

        if($this->JenisPekerjaan_model->delete($id)){
            redirect(site_url('admin/JenisPekerjaan'));
        }
    }
}
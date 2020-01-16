<?php

defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class TipePekerjaan extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("TipePekerjaan_model"); //Open Which Models
        $this->load->library('form_validation'); //Validating Add and Edit
    }

    //Get Data From Models..
    public function index(){
        $data["mt_tipe_pekerjaan"] = $this->TipePekerjaan_model->getAll();
        $this->load->view("admin/tipePekerjaan/list", $data); //Load to Views
    }

    public function add(){
        $tipePekerjaan = $this->TipePekerjaan_model; //Object Models
        $validation = $this->form_validation; //Object Form Validation
        $validation->set_rules($tipePekerjaan->rules()); //Set Rules

        //Validate Before Save Data
        if($validation->run()){
            $tipePekerjaan->save(); //Save to DB
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data'); //Message Status
        }

        $this->load->view("admin/tipePekerjaan/new_form"); //View Add Form
    }

    //Update Which ID
    public function edit($id=null){
        if(!isset($id)) redirect('admin/TipePekerjaan'); //If ID Null, Redirect To..

        $tipePekerjaan = $this->TipePekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($tipePekerjaan->rules());

        if($validation->run()){
            $tipePekerjaan->update();
            $this->session->set_flashdata('success', 'Berhasil Memperbarui Data');
        }

        $data["mt_tipe_pekerjaan"] = $tipePekerjaan->getById($id);
        if(!$data["mt_tipe_pekerjaan"]) show_404();

        $this->load->view("admin/tipePekerjaan/edit_form", $data);
    }

    public function delete($id=null){
        if(!isset($id)) show_404();

        if($this->TipePekerjaan_model->delete($id)){
            redirect(site_url('admin/TipePekerjaan'));
        }
    }

    //Child for Jenis Pekerjaan
    //Get Data From Models Jenis Pekerjaan
    public function index_data($id=null){
        if(!isset($id)) redirect('admin/TipePekerjaan');

        $data["mt_jenis_pekerjaan"] = $this->TipePekerjaan_model->getAll_data($id);
        if(!$data["mt_jenis_pekerjaan"]) show_404();

        $this->load->view("admin/tipePekerjaan/list_data", $data); //Load to Views
    }

    //Adding Data for Jenis Pekerjaan.. from another Table.
    public function add_data($id=null){
        if(!isset($id)) redirect('admin/TipePekerjaan');

        $tipePekerjaan = $this->TipePekerjaan_model; //Object Models
        $validation = $this->form_validation; //Object Form Validation
        $validation->set_rules($tipePekerjaan->rules_data()); //Set Rules

        $data["mt_jenis_pekerjaan"] = $tipePekerjaan->getById_Data($id);
        if(!$data["mt_jenis_pekerjaan"]) show_404();

        //Validate Before Save Data
        if($validation->run()){
            $tipePekerjaan->save_data(); //Save to DB
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data'); //Message Status
        }

    }
}
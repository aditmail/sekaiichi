<?php defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class TipePekerjaan_model extends CI_Model{
    private $_table = "mt_tipe_pekerjaan"; // Table Name
    private $_table_jenis_pekerjaan = "mt_jenis_pekerjaan"; // Table Name

    //Column Name in Table
    public $id_tipe_pekerjaan;
    public $tipe;
    public $deskripsi;
    public $is_visible = "False";
    public $datetime_created;

    //Validation Status
    public function rules(){
        return[
            ['field' => 'tipe',
            'label' => 'Tipe Pekerjaan',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    //Get All Data
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    //Get Data By Id
    public function getById($id){
        return $this->db->get_where($this->_table, ["id_tipe_pekerjaan" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->id_tipe_pekerjaan = uniqid();
        $this->tipe = trim($post["tipe"]);
        $this->deskripsi= trim($post["deskripsi"]);

        date_default_timezone_set("Asia/Jakarta");
        $this->datetime_created = date("Y-m-d H:i:s");
        
        //If Checkbox is Checked..
        if(isset($_POST['is_visible'])){
            $this->is_visible = 'True';
        }
    
        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id_tipe_pekerjaan = $post["id"];
        $this->tipe = trim($post["tipe"]);
        $this->deskripsi= trim($post["deskripsi"]);

        date_default_timezone_set("Asia/Jakarta");
        $this->datetime_created = date("Y-m-d H:i:s");

        //If Checkbox is Checked..
        if(isset($_POST['is_visible'])){
            $this->is_visible = 'True';
        }

        $this->db->update($this->_table, $this, array('id_tipe_pekerjaan' => $post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("id_tipe_pekerjaan" => $id));
    }

    //Child for Adding Jenis Pekerjaan
    public function getAll_data($id){
        //return $this->db->get($this->_table_jenis_pekerjaan)->result();
        return $this->db->get_where($this->_table_jenis_pekerjaan, ["id_tipe_pekerjaan" => $id])->result();
    }
}
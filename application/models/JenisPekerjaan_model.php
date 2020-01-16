<?php defined('BASEPATH') or exit('No Direct Script Access Allowed');

class JenisPekerjaan_model extends CI_Model
{
    private $_table = "mt_jenis_pekerjaan";
    private $_table_tipe_pekerjaan = "mt_tipe_pekerjaan";

    public $id_jenis_pekerjaan;
    public $tipe;
    public $jenis_pekerjaan;
    public $deskripsi;
    public $is_visible = "False";
    public $datetime_created;

    public function rules()
    {
        return [
            [
                'field' => 'tipe',
                'label' => 'Tipe Pekerjaan',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis_pekerjaan',
                'label' => 'Jenis Pekerjaan',
                'rules' => 'required'
            ],

            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll($id)
    {
        //return $this->db->get($this->_table)->result();ss
        return $this->db->get_where($this->_table, ["id_tipe_pekerjaan" => $id])->result();
    }

    public function getListTipe()
    {
        return $this->db->get($this->_table_tipe_pekerjaan)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jenis_pekerjaan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jenis_pekerjaan = uniqid();
        $tipe_pekerjaan = $this->tipe = trim($post["tipe"]);
        $this->jenis_pekerjaan = trim($post["jenis_pekerjaan"]);
        $this->deskripsi = trim($post["deskripsi"]);

        //If Checkbox is Checked
        if (isset($_POST['is_visible'])) {
            $this->is_visible = 'True';
        }

        date_default_timezone_set("Asia/Jakarta");
        $this->datetime_created = date("Y-m-d H:i:s");

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jenis_pekerjaan = uniqid();
        $this->tipe = trim($post["tipe"]);
        $this->jenis_pekerjaan = trim($post["jenis_pekerjaan"]);
        $this->deskripsi = trim($post["deskripsi"]);

        //If Checkbox is Checked
        if (isset($_POST['is_visible'])) {
            $this->is_visible = 'True';
        }

        date_default_timezone_set("Asia/Jakarta");
        $this->datetime_created = date("Y-m-d H:i:s");

        $this->db->update($this->_table, $this, array('id_jenis_pekerjaan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_jenis_pekerjaan' => $id));
    }
}

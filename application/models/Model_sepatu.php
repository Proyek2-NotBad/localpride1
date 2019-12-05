<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_sepatu extends CI_Model
{


    private $_table = "sepatu";
    public $id_sepatu;
    public $kode_sepatu;
    public $stok;
    public $harga;
    public $foto = "default.jpg";
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id_sepatu)
    {
        return $this->db->get_where($this->_table, ["id_sepatu" => $id_sepatu])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_sepatu = $post["kode"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_sepatu = $post["id_sepatu"];
        $this->kode_sepatu = $post["kode_sepatu"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        $this->foto = $post["foto"];




        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_sepatu" => $post["id_sepatu"]));
    }

    public function delete($id_sepatu)
    {
        $this->_deleteImage($id_sepatu);
        return $this->db->delete($this->_table, array("id_sepatu" => $id_sepatu));
    }

    private function _uploadImage()
    {

        $config['upload_path']          = 'foto/admin/penginapan';
        $config['allowed_types']        = 'jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name".data());
        }

        return "default.jpg";
    }

    private function _deleteImage($id_sepatu)
    {
        $img = $this->getById($id_sepatu);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/sepatu/$filename.*"));
        }
    }
}

<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_tas extends CI_Model
{


    private $_table = "tas";
    public $id_tas;
    public $kode_tas;
    public $stok;
    public $harga;
    public $foto = "default.jpg";
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id_tas)
    {
        return $this->db->get_where($this->_table, ["id_tas" => $id_tas])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_tas = $post["kode"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_tas = $post["id_tas"];
        $this->kode_tas = $post["kode_tas"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        $this->foto = $post["foto"];




        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_tas" => $post["id_tas"]));
    }

    public function delete($id_tas)
    {
        $this->_deleteImage($id_tas);
        return $this->db->delete($this->_table, array("id_tas" => $id_tas));
    }

    private function _uploadImage()
    {

        $config['upload_path']          = 'foto/admin/tas';
        $config['allowed_types']        = 'jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_tas)
    {
        $img = $this->getById($id_tas);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/tas/$filename.*"));
        }
    }
}

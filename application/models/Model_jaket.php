<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_jaket extends CI_Model
{
    private $_table = "jaket";
    public $id_jaket;
    public $kode_jaket;
    public $stok;
    public $harga;
    public $foto = "default.jpg";
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id_jaket)
    {
        return $this->db->get_where($this->_table, ["id_jaket" => $id_jaket])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_jaket = $post["kode"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jaket = $post["id_jaket"];
        $this->kode_jaket = $post["kode_jaket"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        $this->foto = $post["foto"];




        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_jaket" => $post["id_jaket"]));
    }

    public function delete($id_jaket)
    {
        $this->_deleteImage($id_jaket);
        return $this->db->delete($this->_table, array("id_jaket" => $id_jaket));
    }

    private function _uploadImage()
    {

        $config['upload_path']          = 'foto/admin/jaket';
        $config['allowed_types']        = 'jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_jaket)
    {
        $img = $this->getById($id_jaket);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/jaket/$filename.*"));
        }
    }
}

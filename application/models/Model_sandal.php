<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_sandal extends CI_Model
{


    private $_table = "sandal";
    public $id_sandal;
    public $kode_sandal;
    public $stok;
    public $ukuran;
    public $harga;
    public $foto = "default.jpg";
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id_sandal)
    {
        return $this->db->get_where($this->_table, ["id_sandal" => $id_sandal])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_sandal = $post["kode"];
        $this->stok = $post["stok"];
        $this->ukuran = $post["ukuran"];
        $this->harga = $post["harga"];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_sandal = $post["id_sandal"];
        $this->kode_sandal = $post["kode_sandal"];
        $this->stok = $post["stok"];
        $this->ukuran = $post["ukuran"];
        $this->harga = $post["harga"];
        $this->foto = $post["foto"];
        
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_sandal" => $post["id_sandal"]));
    }

    public function delete($id_sandal)
    {
        $this->_deleteImage($id_sandal);
        return $this->db->delete($this->_table, array("id_sandal" => $id_sandal));
    }

    private function _uploadImage()
    {

        $config['upload_path']          = 'foto/admin/sandal';
        $config['allowed_types']        = 'jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_sandal)
    {
        $img = $this->getById($id_sandal);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/sandal/$filename.*"));
        }
    }
}

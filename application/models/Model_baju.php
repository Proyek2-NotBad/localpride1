<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_baju extends CI_Model
{


    private $_table = "baju";
    public $id_baju;
    public $kode_baju;
    public $stok;
    public $harga;
    public $foto = "default.jpg";
    // public $id_jenis_penginapan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_baju)
    {
        return $this->db->get_where($this->_table, ["id_baju" => $id_baju])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_penginapan = $post["id_penginapan"];
        $this->kode_baju = $post["kode_baju"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_baju = $post["id_baju"];
        $this->kode_baju = $post["kode_baju"];
        // $this->id_jenis_penginapan = $post["id_jenis_penginapan"];
        $this->stok = $post["stok"];
        $this->harga = $post["harga"];
        $this->foto = $post["foto"];




        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_baju" => $post["id_baju"]));
    }

    public function delete($id_baju)
    {
        $this->_deleteImage($id_baju);
        return $this->db->delete($this->_table, array("id_baju" => $id_baju));
    }

    private function _uploadImage()
    {

        $config['upload_path']          = './foto/admin/penginapan';
        $config['allowed_types']        = 'jpg|png';
        // $config['file_name']            = $this->nama_penginapan;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name".data());
        }

        return "default.jpg";
    }

    private function _deleteImage($id_baju)
    {
        $img = $this->getById($id_baju);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/penginapan/$filename.*"));
        }
    }
}

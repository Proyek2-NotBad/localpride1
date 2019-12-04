<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

		    $this->load->model("Model_baju");
    }
    
    public function index(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('template_admin/footer');
    }
    
    public function tambahbaju(){                        
    $data['baju'] = $this->Model_baju->getAll();
    $this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_baju', $data);
		$this->load->view('template_admin/footer');
    }

    public function tambahsepatu(){
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/tambah_sepatu');
    $this->load->view('template_admin/footer');
    }

    public function tambahtas(){
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/tambah_tas');
    $this->load->view('template_admin/footer');
    }

    public function bajuadd()
    {
        $data = $this->Model_baju;
            $data ->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Admin/tambahbaju');        
    }

    public function bajudelete($id_baju = null)
    {
        if (!isset($id_baju)) show_404();

		
        if ($this->Model_baju->delete($id_baju)) {
			redirect('Admin/tambahbaju');
        }
  }
}
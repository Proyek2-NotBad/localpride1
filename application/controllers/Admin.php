<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->load->model("Model_baju");
        $this->load->model("Model_sepatu");
        $this->load->model("Model_tas");
        $this->load->model("Model_jaket");
        $this->load->model("Model_sandal");
        $this->load->model("Model_polo");
        $this->load->model("Model_login");

        if (!$this->session->userdata('email')) {
			redirect(base_url('Auth/loginadmin'));
		}else{
            
        }
    }
    
    public function index(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('template_admin/footer');
    }

    public function loginadmin()
    {
        $this->load->view('auth/loginadmin');
    }
    
    public function tambahbaju(){                        
    $data['baju'] = $this->Model_baju->getAll();
    $this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_baju', $data);
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

    
    public function tambahsandal(){                        
        $data['sandal'] = $this->Model_sandal->getAll();
        $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/tambah_sandal', $data);
            $this->load->view('template_admin/footer');
        }
    
    public function sandaladd(){
            $data = $this->Model_sandal;
                $data ->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('Admin/tambahsandal');        
        }
    
    public function sandaldelete($id_sandal = null){
            if (!isset($id_sandal)) show_404();
            if ($this->Model_sandal->delete($id_sandal)) {
                redirect('Admin/tambahsandal');
            }
        }

    public function tambahsepatu(){
    $data['sepatu'] = $this->Model_sepatu->getAll();
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/tambah_sepatu', $data);
    $this->load->view('template_admin/footer');
    }

    public function sepatuadd()
    {
        $data = $this->Model_sepatu;
            $data ->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Admin/tambahsepatu');        
    }

    public function sepatudelete($id_sepatu = null)
    {
        if (!isset($id_sepatu)) show_404();		
        if ($this->Model_sepatu->delete($id_sepatu)) {
			redirect('Admin/tambahsepatu');
        }
    }

    public function tambahtas(){
    $data['tas'] = $this->Model_tas->getAll();
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/tambah_tas', $data);
    $this->load->view('template_admin/footer');
    }

    public function tasadd()
    {
        $data = $this->Model_tas;
            $data ->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Admin/tambahtas');        
    }

    public function tasdelete($id_tas = null)
    {
        if (!isset($id_tas)) show_404();		
        if ($this->Model_tas->delete($id_tas)) {
			redirect('Admin/tambahtas');
        }
    }
    
    public function tambahjaket(){
    $data['jaket'] = $this->Model_jaket->getAll();
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/tambah_jaket', $data);
    $this->load->view('template_admin/footer');
    }

    public function jaketadd()
    {
        $data = $this->Model_jaket;
            $data ->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Admin/tambahjaket');        
    }

    public function jaketdelete($id_jaket = null)
    {
        if (!isset($id_jaket)) show_404();		
        if ($this->Model_tas->delete($id_jaket)) {
			redirect('Admin/tambahjaket');
        }
    }    

    public function tambahpolo(){
        $data['polo'] = $this->Model_polo->getAll();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_polo', $data);
        $this->load->view('template_admin/footer');
        }
    
        public function poloadd(){
            $data = $this->Model_polo;
                $data ->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('Admin/tambahpolo');        
        }
    
        public function polodelete($id_polo = null)
        {
            if (!isset($id_polo)) show_404();		
            if ($this->Model_polo->delete($id_polo)) {
                redirect('Admin/tambahpolo');
            }
        }
    
}
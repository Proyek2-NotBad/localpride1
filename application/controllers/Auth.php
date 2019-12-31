<?php 

class Auth extends CI_Controller { 

    public function __construct() 
    { 
        parent::__construct();
        $this->load->Model('Model_login', 'ml');
        if ($this->session->userdata('email')) {
			echo "ada sesi";
		}else{
			echo "tidak";
		}
    }

    public function loginadmin()
    {
        $this->load->view('auth/loginadmin');
    }
    
    public function login_admin(){ // proses login
        $email = $this->input->post('email');
        $pass  = $this->input->post('password');
        $tabel = "admin";
        $where = "email";
        $cek = $this->ml->cek_login($tabel,$where,$email,$pass);

        if ($cek) { // jika username ada
				foreach ($cek as $row) {
					$this->session->set_userdata('id_admin', $row->id_admin);
                    $this->session->set_userdata('email', $row->email); // PASSING EMAIL KE VIEWS
                    redirect('Admin/index');
                }
        }
    }

    public function logout()
	{
		if ($this->session->userdata('email')) {
			$this->session->sess_destroy();
			redirect(base_url("admin"));
		}elseif($this->session->userdata('email_user'))
			$this->session->sess_destroy();
			redirect(base_url());
	}
}




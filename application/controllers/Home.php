<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){	
		$this->load->view('template_home/header');
        $this->load->view('home/halaman_awal');
	}

	public function awal(){	
		$this->load->view('template_home/header');
		$this->load->view('template_home/navbar');
        $this->load->view('home/index');
		$this->load->view('template_home/footer');
	}

	public function tentang(){	
		$this->load->view('template_home/header');
		$this->load->view('template_home/navbar');
        $this->load->view('home/tentang');
		$this->load->view('template_home/footer');
	}

	public function baju(){	
		$this->load->view('template_home/header');
		$this->load->view('template_home/navbar');
        $this->load->view('home/baju');
		$this->load->view('template_home/footer');
	}

	public function sepatu(){	
		$this->load->view('template_home/header');
		$this->load->view('template_home/navbar');
        $this->load->view('home/sepatu');
		$this->load->view('template_home/footer');
	}

	public function kontak(){	
		$this->load->view('template_home/header');
		$this->load->view('template_home/navbar');
        $this->load->view('home/kontak');
		$this->load->view('template_home/footer');
	}

	public function tas(){	
		$this->load->view('template_home/header');
		$this->load->view('template_home/navbar');
        $this->load->view('home/tas');
		$this->load->view('template_home/footer');
	}

	public function jaket(){	
		$this->load->view('template_home/header');
		$this->load->view('template_home/navbar');
        $this->load->view('home/jaket');
		$this->load->view('template_home/footer');
	}

	public function sandal(){	
		$this->load->view('template_home/header');
		$this->load->view('template_home/navbar');
        $this->load->view('home/sandal');
		$this->load->view('template_home/footer');
	}
}

<?php 
	class Mahasiswa extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('Model');
		}

		public function index(){
			$mhs = $this->Model->get_mhs()->result();
			$data = array(
				'mhs'=>$mhs
			);
			$this->load->view('_header', $data);
			$this->load->view('mhs/home');
			$this->load->view('_footer');
		}

		public function add(){
			$input = $this->input->post(null, true);
			$this->Model->pinput($input);
			redirect('mahasiswa');
		}

		public function edit(){
			$input = $this->input->post(null, true);
			$this->Model->pedit($input);
			redirect('mahasiswa');
		}

		public function delete($nim){
			$this->Model->pdelete($nim);
			redirect('mahasiswa');
		}
	}
 ?>
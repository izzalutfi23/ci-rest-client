<?php 
	class Mahasiswa extends CI_Controller{

		public function index(){
			$this->load->view('_header');
			$this->load->view('mhs/home');
			$this->load->view('_footer');
		}
	}
 ?>
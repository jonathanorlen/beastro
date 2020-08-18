<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MY_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();/*
		if ($this->session->userdata('astrosession') == FALSE) {
			redirect(base_url('authenticate'));			
		}*/
	}

	public function index()
	{
		$data['konten']=$this->load->view ('team/detail' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	

	public function tambah()
	{	
		$data['konten']=$this->load->view ('team/tambah' , NULL, TRUE);
		$this->load->view ('general/main',$data);

	}

	public function ubah()
	{	
		$data['konten']=$this->load->view ('team/ubah' , NULL, TRUE);
		$this->load->view ('general/main',$data);

	}

	public function detail()
	{	
		$data['konten']=$this->load->view ('team/detail' , NULL, TRUE);
		$this->load->view ('general/main',$data);

	}


 	
	public function simpan_ubah()
	{	
		
		$kode = $this->input->post("id_team");
		$data['nama'] = $this->input->post("nama");
		$data['jabatan'] = $this->input->post("jabatan");
		$data['foto'] = $this->input->post("file");
		
		$this->db->update("team", $data, array('id' => $kode));
		
		echo '<div class="alert alert-success">Sudah dirubah.</div>';
		header('location:'.base_url().'admin/team');

		


	}
	public function simpan_tambah()
	{
		$kode = $this->input->post("id_team");
		$data['nama'] = $this->input->post("nama");
		$data['jabatan'] = $this->input->post("jabatan");
		$insert = $this->db->insert("team", $data);
		header('location:'.base_url().'admin/team'); 
		
	}
}

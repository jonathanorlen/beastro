<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

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
		$data['konten']=$this->load->view ('profile/daftar' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function tambah()
	{
		$data['konten']=$this->load->view ('about/tambah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}

	public function simpan_tambah()
	{
		$data['about'] = $this->input->post("about");
        $data['visi'] = $this->input->post("visi");
        $data['misi'] = $this->input->post("misi");
        $insert = $this->db->insert("about", $data); 
        echo '<div class="alert alert-success" style="position:fixed;z-index:9999999999;top:50px;  ">Sudah tersimpan.</div>';       
		header('location:'.base_url().'admin/about');
	}	

	


	public function ubah()
	{
		$data['konten']=$this->load->view ('about/ubah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function simpan_ubah()
	{
		$kode = $this->input->post("id_about");
        $data['about'] = $this->input->post("about");
        $data['visi'] = $this->input->post("visi");
        $data['misi'] = $this->input->post("misi");
       	$this->db->update("about", $data, array('id_about' => $kode));
        echo '<div class="alert alert-success">Sudah dirubah.</div>';
        header('location:'.base_url().'admin/about');
      	 
	}		


	public function hapus(){
    //$kode = $this->input->post("id_po");

    $key = $_GET['id_about'];
    $this->db->delete('about', array('id_about' => $key) );
    
	
	$data['konten']=$this->load->view ('about/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);             
	}

	public function cari()
	{
		$data['parameter'] = $this->input->post("key");	
		$this->load->view ('about/cari/cari');
	}	

}

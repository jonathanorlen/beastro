<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {

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
		$data['konten']=$this->load->view ('produk/daftar' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function tambah()
	{
		$data['konten']=$this->load->view ('produk/tambah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}

	public function simpan_tambah()
	{
		$data['nama'] = $this->input->post("nama");
        $data['project'] = $this->input->post("project");
        $data['keterangan'] = $this->input->post("keterangan");
        $foto = $this->input->post("foto_name_upload");
        $data['foto'] = $foto[0];
        $insert = $this->db->insert("produk", $data); 
        echo '<div class="alert alert-success" style="produksition:fixed;z-index:9999999999;top:50px;  ">Sudah tersimpan.</div>';       
		header('location:'.base_url().'admin/produk');
	}	

	public function detail()
	{		
		$data['konten']=$this->load->view ('produk/detail' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}	


	public function ubah()
	{
		$data['konten']=$this->load->view ('produk/ubah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function simpan_ubah()
	{
		$kode = $this->input->post("id");
        $data['nama'] = $this->input->post("nama");
        $data['project'] = $this->input->post("project");
        $data['keterangan'] = $this->input->post("keterangan");
       	$this->db->update("produk", $data, array('id' => $kode));
        echo '<div class="alert alert-success">Sudah dirubah.</div>';
        header('location:'.base_url().'admin/produk');
      	 
	}		


	public function hapus(){
    //$kode = $this->input->post("id_produk");

    $key = $_GET['id_produk'];
    $this->db->delete('produk', array('id' => $key) );
    
	
	$data['konten']=$this->load->view ('produk/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);             
	}

	public function cari()
	{
		$data['parameter'] = $this->input->post("key");	
		$this->load->view ('produk/cari/cari');
	}	

}

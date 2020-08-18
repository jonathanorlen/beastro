<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class web extends MY_Controller {

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
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('general/index');
		
	}

	public function send(){
		$data['nama'] = $this->input->post("nama");
        $data['email'] = $this->input->post("email");
        $data['pesan'] = $this->input->post("pesan");
        $data['tgl'] = date("Y-m-d");
        $insert = $this->db->insert("inbox", $data);

        header('location:'.base_url().'web');

	}
	/*public function pencarian()
	{
		$data['parameter'] = $this->input->post("key");
		$this->load->view ('pencarian/pencarian',$data);
	}	

	public function filter()
	{
		$this->load->view ('filter/filter');
		
	}

	public function link()
	{
		$data['parameter'] = $this->input->post("key");
		$this->load->view ('link/link',$data);
		
	}
	public function detail()
	{
		$data['parameter'] = $this->input->post("key");
		$this->load->view ('detail/detail',$data);
		
	}
	*/

}

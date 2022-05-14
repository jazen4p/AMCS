<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

    public function __construct(){
        parent::__construct();

        // $this->load->model('Login_model');
        // $this->load->model('Dashboard_model');

        // if($this->session->userdata("logged")==FALSE)
        // {
        //     redirect(base_url(),'refresh');
        // }
        date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index()
	{
		$this->load->view('home');
	}

	public function find_data(){
		$input = $_POST['kode_pelanggan'];

		$mtch = explode("-", $input);
		$kode_perumahan = $mtch[0];
		$unit = $mtch[1];

		$data['confirm'] = "ditemukan";

		$this->db->where();
		$query_air = $this->db->get('');

		foreach($this->db->get_where('kode_perumahan', array('kode_perumahan'=>$unit))->result() as $prmh){
			$data['nama_perumahan'] = $prmh->nama_perumahan;
		}
		$data['no_unit'] = $unit;

		$this->load->view('home', $data);
	}
}

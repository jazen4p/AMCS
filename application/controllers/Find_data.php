<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find_data extends CI_Controller {

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
		$input = $_POST['kode_pelanggan'];

		$mtch = explode("-", $input);
		$kode_perumahan = $mtch[0];
		$unit = $mtch[1];

		$data['confirm'] = "ditemukan";

		$this->db->where('kode_perumahan', $kode_perumahan);
		$this->db->where('kode_rumah', $unit);
        $this->db->where("DATE_FORMAT(bulan_tagihan,'%Y-%m') =", date('Y-m'));
		$data['query_air'] = $this->db->get('konsumen_air');

		$this->db->where('kode_perumahan', $kode_perumahan);
		$this->db->where('kode_rumah', $unit);
        $this->db->order_by('bulan_tagihan', "DESC");
        $this->db->where("DATE_FORMAT(bulan_tagihan,'%Y-%m') <", date('Y-m'));
		$data['query_air2'] = $this->db->get('konsumen_air');

		$this->db->where('kode_perumahan', $kode_perumahan);
		$this->db->where('kode_rumah', $unit);
        $this->db->where("DATE_FORMAT(bulan_tagihan,'%Y-%m') =", date('Y-m'));
		$data['query_mt'] = $this->db->get('konsumen_maintenance');

		$this->db->where('kode_perumahan', $kode_perumahan);
		$this->db->where('kode_rumah', $unit);
        $this->db->order_by('bulan_tagihan', "DESC");
        $this->db->where("DATE_FORMAT(bulan_tagihan,'%Y-%m') <", date('Y-m'));
		$data['query_mt2'] = $this->db->get('konsumen_maintenance');

		// $this->db->where();
		$data['history_byr'] = $this->db->get_where('konsumen_struk', array('kode_perumahan'=>$kode_perumahan, 'kode_rumah'=>$unit));

		foreach($this->db->get_where('perumahan', array('kode_perumahan'=>$kode_perumahan))->result() as $prmh){
			$data['nama_perumahan'] = $prmh->nama_perumahan;
		}
        $data['no_unit'] = $unit;
        
        $data['input_data'] = $input;

		// echo empty($data['history_byr']->result());
		// exit;

		if(count($data['query_air']->result()) == 0 && count($data['query_air2']->result()) == 0 && count($data['query_mt']->result()) == 0 && count($data['query_mt2']->result()) == 0 && count($data['history_byr']->result()) == 0) {
			$data['err_msg'] = "Data tidak ditemukan";
		}
		else if(count($data['query_air']->result()) != 0 || count($data['query_air2']->result()) != 0 || count($data['query_mt']->result()) != 0 || count($data['query_mt2']->result()) != 0 || count($data['history_byr']->result()) != 0){
			$data['succ_msg'] = "Data ditemukan";
		}

		$this->load->view('home', $data);
	}
}
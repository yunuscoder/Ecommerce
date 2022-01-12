<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		//if(!$this->session->userdata('sessionData'))
		//{
		//	redirect(base_url().'Login');
		//}
	}
	public function index()
	{
		$query=$this->db->get("ayarlar");
		$data["data"]=$query->result();
		$data["pagetitle"]="İletişim";
		$data["pagedescription"]="İletişim Sayfası";
		$data["pagekeywords"]="Alışveriş, Evsera";
		
		$query=$this->db->query("SELECT Email,Facebook,Tel FROM ayarlar ");
		$data["ayarlar"]=$query->result();
		
		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('_contact',$data);
		$this->load->view('_footer');
		
	}
}

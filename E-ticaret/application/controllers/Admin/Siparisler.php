<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Admin/Siparis_Model');
		$this->load->library('user_agent');
		if(!$this->session->userdata('sessionData'))
		{
			redirect(base_url().'Admin/Login');
		}
	}
	public function yenisiparisler()
	{
		$query=$this->db->query("SELECT * FROM siparis WHERE Onay=FALSE");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Siparisler/_list',$data);
		$this->load->view('Admin/_footer');
		
	}
	public function onaylanansiparisler()
	{
		$query=$this->db->query("SELECT * FROM siparis WHERE Onay=TRUE ORDER BY Tarih DESC");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Siparisler/_list',$data);
		$this->load->view('Admin/_footer');
		
	}
	public function siparisonayla($id){
		$this->db->query("UPDATE siparis SET Onay=TRUE WHERE SiparisId=$id ORDER BY Tarih DESC");

		$this->session->set_flashdata("result","Ürün Onaylandı!");
		redirect($this->agent->referrer());
		
	}
	public function siparisonayinikaldir($id){
		$this->db->query("UPDATE siparis SET Onay=FALSE WHERE SiparisId=$id ORDER BY Tarih DESC");
		
		$this->session->set_flashdata("result","Ürün Beklemeye Alındı!");
		redirect($this->agent->referrer());
		
	}
	
	
}
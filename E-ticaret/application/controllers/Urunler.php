<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Product_Model');
		//if(!$this->session->userdata('sessionData'))
		//{
		//	redirect(base_url().'Login');
		//}
	}
	public function index()
	{
		

		//$data["data"]=$this->Product_Model->GetAllProduct();
		$query=$this->db->query("SELECT *  FROM urunler");
		$data["urunler"]=$query->result();
		
		$data["pagetitle"]="Ürünler";
		$data["pagedescription"]="Ürünler Sayfası";
		$data["pagekeywords"]="Alışveriş, Evsera";

		$query=$this->db->get("kategoriler");
		$data["kategoriData"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["ayarlar"]=$query->result();

		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('_urunler',$data);
		$this->load->view('_footer');
		
	}
	
	public function listele($id)
	{
		$query=$this->Product_Model->GetCategoryItems("urunler",$id);
		$data["urunler"]=$query->result();

		$query=$this->Product_Model->GetCategory($id);
		$row = $query->row();
		$data["pagetitle"]=$row->KategoriAdi;
		$data["pagedescription"]=$row->KategoriAciklama;
		$data["pagekeywords"]=$row->KategoriAnahtarKelime;

		$query=$this->db->get("kategoriler");
		$data["kategoriData"]=$query->result();

		
		
		$query=$this->db->query("SELECT Email,Facebook,Tel FROM ayarlar ");
		$data["ayarlar"]=$query->result();

		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('_urunler',$data);
		$this->load->view('_footer');
	}
	
	public function urundetay($id){
		$query=$this->Product_Model->GetProduct($id);
		$data["data"] = $query->result();
		$row = $query->row();
		$data["pagetitle"]=$row->Adi;
		$data["pagedescription"]=$row->Aciklama;
		$data["pagekeywords"]=$row->AnahtarKelime;
		
		$query=$this->db->query("SELECT * FROM galeriler WHERE UrunId=$id");
		$data["galeriler"]=$query->result();

		$query=$this->db->query("SELECT Email,Facebook,Tel FROM ayarlar ");
		$data["ayarlar"]=$query->result();

		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();

		$query=$this->db->get("kategoriler");
		$data["kategoriData"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('_urundetay',$data);
		$this->load->view('_footer');
	}

}

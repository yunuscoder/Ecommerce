<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Login_Model');
		
	}
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["ayarlar"]=$query->result();
		$row = $query->row();

		$data["pagetitle"]=$row->Adi;
		$data["pagedescription"]=$row->Aciklama;
		$data["pagekeywords"]=$row->Keywords;

		$query=$this->db->get("urunler");
		$data["data"]=$query->result();
		$query=$this->db->get("kategoriler");
		$data["kategoriData"]=$query->result();

		$query=$this->db->query("SELECT * FROM urunler WHERE Slider=TRUE");
		$data["slider"]=$query->result();

		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('_main_content',$data);
		$this->load->view('_footer');
		
	}
	public function Sayfadetay($id)
	{
		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM sayfalar WHERE SayfaId=$id");
		$row = $query->row();

		$data["pagetitle"]=$row->Adi;
		$data["pagedescription"]=$row->Aciklama;
		$data["pagekeywords"]=$row->AnahtarKelime;

		$auery=$this->db->query("SELECT * FROM ayarlar ");
		$data["ayarlar"]=$auery->result();

		$query=$this->db->query("SELECT * FROM sayfalar WHERE SayfaId=$id");
		$data["sayfa"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('_page',$data);
		$this->load->view('_footer');
	}

	public function uyepanel()
	{	
		

		if(!$this->session->userdata('session_Data'))
		{
			redirect(base_url().'UyeOl');
		}
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["ayarlar"]=$query->result();
		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();
		$data["pagetitle"]="Üye Giriş";
		$data["pagedescription"]="Üye Giriş";
		$data["pagekeywords"]="EvSera Alışveriş";
		$id=$this->session->session_Data['MusteriId'];
		$query=$this->db->query("SELECT * FROM musteriler WHERE MusteriId=$id");
		$data["data"]=$query->result();
		$row = $query->row();
		$data["pagetitle"]=$row->Adi;
		$data["pagedescription"]="Üye Sayfası";
		$data["pagekeywords"]="EvSera Üyeler";

		//$query=$this->db->query("SELECT * FROM urunler WHERE Slider=TRUE");
		//$data["slider"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM siparis WHERE MusteriId=$id");
		$data["siparislerim"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('_uyepanel',$data);
		$this->load->view('_footer');
	}
	public function uyegiris(){
		$query=$this->db->query("SELECT Email,Facebook,Tel FROM ayarlar ");
		$data["ayarlar"]=$query->result();

		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();

		$data["pagetitle"]="Üye Girişi";
		$data["pagedescription"]="Giriş Sayfası";
		$data["pagekeywords"]="EvSera Giriş";
		$email=$this->input->post('Email');
		$sifre=$this->input->post('Sifre');
		
		$result = $this->Login_Model->LoginControl($email,$sifre);
		if($result)
		{
			$array = array (

				'MusteriId' =>$result[0]->MusteriId,
				'Adi' =>$result[0]->Adi,
				'Soyadi' =>$result[0]->Soyadi,
				'Email' =>$result[0]->Email,
				'Sifre' =>$result[0]->Sifre,
				'CepTel' =>$result[0]->CepTel,
				'Il' =>$result[0]->Ilce,
				'Adres' =>$result[0]->Adres,

				);
			$this->session->set_userdata('session_Data',$array);
			redirect(base_url());
		}

		else
		{

		}
		redirect(base_url());
	}
	public function uyeguncelle($id)
	{

		$Il=$this->input->post('Il');
		$Ilce=$this->input->post('Ilce');
		$Adres=$this->input->post('Adres');
		$CepTel=$this->input->post('CepTel');

		$this->db->query("UPDATE musteriler SET Il='$Il', Ilce='$Ilce', Adres='$Adres', CepTel=$CepTel WHERE MusteriId=$id");
		
		$this->session->set_flashdata("result","Güncelleme Başarılı!");
		redirect(base_url()."Home/uyepanel");
	}

	public function cikis()
	{
		$this->session->unset_userdata('session_Data');

		redirect(base_url());
	}
}

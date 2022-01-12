<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepet extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Sepet_Model');
		$this->load->model('Product_Model');
		$this->load->library('user_agent');


		if(!$this->session->userdata('session_Data'))
		{
			redirect(base_url().'UyeOl');
		}
	}
	public function index()
	{	$query=$this->db->query("SELECT Email,Facebook,Tel FROM ayarlar ");
		$data["ayarlar"]=$query->result();

		$query=$this->db->get("sayfalar");
		$data["sayfalar"]=$query->result();

		$id=$this->session->session_Data['MusteriId'];
		$query=$this->db->query("SELECT * FROM sepet WHERE MusteriId=$id");
		$data["data"]=$query->result();
		
		$data["pagetitle"]="Sepetim";
		$data["pagedescription"]="Sepet İşlemleri";
		$data["pagekeywords"]="Evsera Sepet";
		$this->load->view('_header',$data);
		$this->load->view('_sepet',$data);
		$this->load->view('_footer');
	}
	public function sepeteekle($id)
	{	

		$query=$this->db->query("SELECT Adi,Kod,Satis_Fiyati FROM urunler WHERE UrunId=$id");
		$row = $query->row();
		$m_id=$this->session->session_Data['MusteriId'];
		$birimi=$this->input->post('birimi');
		if($birimi==NULL){
			$birimi=1;
		}

		$urunsepettemi=$this->db->query("SELECT UrunId, Birimi FROM sepet WHERE UrunId=$id")->row();
		if($urunsepettemi != NULL)
		{
			$toplamurun = $urunsepettemi->Birimi + $birimi;

			$this->db->query("UPDATE sepet SET Birimi=$toplamurun WHERE UrunId=$id");
		}else{
			$this->db->query("INSERT INTO sepet (UrunAdi, Birimi, MusteriId,UrunKodu,Fiyat,UrunId) 
			VALUES ('$row->Adi',$birimi,$m_id,'$row->Kod',$row->Satis_Fiyati,$id);");
		}

		
		$this->session->set_flashdata("result","Sepete Eklendi!");
		redirect($this->agent->referrer());


	}
	public function sepettenurunsil($id)
	{
		$this->db->delete("sepet", array('SepetId' => $id));
		redirect($this->agent->referrer());
	}
	public function siparisitamamla()
	{
		$m_id=$this->session->session_Data['MusteriId'];
		$query=$this->db->query("SELECT * FROM sepet WHERE MusteriId=$m_id");
		$now = date('Y-m-d H:i:s');	
		foreach ($query->result() as $result) {

			$u_id=$result->UrunId;
			$data=array(
			'Onay' =>FALSE,
			'Adres'=>$this->input->post('adres'),
			'Il'=>$this->input->post('il'),
			'Ilce'=>$this->input->post('ilce'),
			'KartNo'=>$this->input->post('kartno'),
			'adsoy'=>$this->input->post('adsoy'),
			'MusteriId'=> $result->MusteriId,
			'UrunId' => $result->UrunId,
			'birimi' => $result->Birimi,
			'fiyat' =>$result->Fiyat,
			'Tarih' =>$now,
			'MusteriAdi'=>$this->session->session_Data['Adi'],
			'MusteriSoyadi'=>$this->session->session_Data['Soyadi'],
			'UrunAdi'=>$result->UrunAdi,
			'UrunKod' =>$result->UrunKodu,
			);
		$this->db->insert("siparis",$data);
		$this->db->delete("sepet", array('UrunId' => $u_id));
		}
		$this->session->set_flashdata("result","Sipariş Tamamlandı!");
		redirect($this->agent->referrer());
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Admin/Category_Model');
		if(!$this->session->userdata('sessionData'))
		{
			redirect(base_url().'Admin/Login');
		}
	}
	public function index()
	{
		$query=$this->db->get("kategoriler");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Kategori/_kategori_list',$data);
		$this->load->view('Admin/_footer');
		
	}
	public function Edit($id)
	{
		$query = $this->db->query("SELECT * FROM kategoriler Where KategoriId=$id");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Kategori/_kategori_edit',$data);
		$this->load->view('Admin/_footer');
	}
	public function EditSave($id)
	{
		$now = date('Y-m-d H:i:s');

		$data=array(
			'KategoriAdi' => $this->input->post('Adi'),
			'KategoriAciklama' => $this->input->post('Aciklama'),
			'KategoriAnahtarKelime' => $this->input->post('AnahtarKelime'),
			'Tarih' => $now

			);
		$column="KategoriId";
		$this->Category_Model->UpdateData("kategoriler",$data,$id,$column);
		$this->session->set_flashdata("result","Güncelleme Başarılı!");
		redirect(base_url()."Admin/Kategoriler");
	}
	public function Delete($id)
	{
		$column="KategoriId";
		$this->Category_Model->DeleteData("kategoriler",$id,$column);
		$this->session->set_flashdata("result","Başarıyla Silindi");
		redirect(base_url()."Admin/Kategoriler");

	}

	public function Create()
	{
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Kategori/_kategori_create');
		$this->load->view('Admin/_footer');

	}
	public function CreateSave()
	{
		$now = date('Y-m-d H:i:s');

		$data=array(
			'KategoriAdi' => $this->input->post('Adi'),
			'KategoriAciklama' => $this->input->post('Aciklama'),
			'KategoriAnahtarKelime' => $this->input->post('AnahtarKelime'),
			'Tarih' => $now
			);
		$this->Category_Model->InsertData("kategoriler",$data);
		$this->session->set_flashdata("result","Başarılı");
		redirect(base_url()."Admin/Kategoriler");
	}

}
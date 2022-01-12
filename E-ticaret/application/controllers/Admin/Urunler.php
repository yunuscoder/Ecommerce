<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Admin/Product_Model');
		$this->load->library('user_agent');


		if(!$this->session->userdata('sessionData'))
		{
			redirect(base_url().'Admin/Login');
		}
	}
	public function index()
	{
		$data["data"]=$this->Product_Model->GetAllProduct()->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Urun/_urun_list',$data);
		$this->load->view('Admin/_footer');
		
	}
	public function Edit($id)
	{
		$query=$this->Product_Model->GetProduct($id);
		$data["data"] = $query->result();

		$queryKategori = $this->db->get("kategoriler");
		$data["KategoriData"]=$queryKategori->result();

		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Urun/_urun_edit',$data);
		$this->load->view('Admin/_footer');
	}
	public function EditSave($id)
	{
		$now = date('Y-m-d H:i:s');
	
		$data=array(
			'Adi' => $this->input->post('Adi'),
			'Aciklama' => $this->input->post('Aciklama'),
			'Kod' => $this->input->post('Kod'),
			'AnahtarKelime' => $this->input->post('AnahtarKelime'),
			'Durum' => $this->input->post('Durum'),
			'Stok' => $this->input->post('Stok'),
			'Alis_Fiyati' => $this->input->post('Alis_Fiyati'),
			'Satis_Fiyati' => $this->input->post('Satis_Fiyati'),
			'Agirlik' => $this->input->post('Agirlik'),
			'KategoriId' => $this->input->post('KategoriId'),
			'Detay' => $this->input->post('Detay'),
			'Tarih' => $now,
			'Slider' => $this->input->post('Slider'),
			'Anasayfa'=>$this->input->post('Anasayfa'),
			
			);
		$column ="UrunId";
		$this->Product_Model->UpdateData("urunler",$data,$id,$column);
		$this->session->set_flashdata("result","Güncelleme Başarılı!");
		redirect(base_url()."Admin/Urunler");
	
	}
	public function Delete($id)
	{
		$column ="UrunId";
		$this->Product_Model->DeleteData("urunler",$id,$column);
		$this->session->set_flashdata("result","Başarıyla Silindi");
		redirect(base_url()."Admin/Urunler");

	}

	public function Create()
	{
		$query = $this->db->get("kategoriler");
		$data["data"]=$query->result();
		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Urun/_urun_create',$data);
		$this->load->view('Admin/_footer');

	}
	public function CreateSave()
	{
		$now = date('Y-m-d H:i:s');
		$filename = rand();

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name'] 			= $filename;

        $this->load->library('upload', $config);
        

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata("result","Yükleme Hatası !".$error);
			redirect(base_url()."Admin/Urunler");
        }
        else
        {
           $data=array(
			'Adi' => $this->input->post('Adi'),
			'Aciklama' => $this->input->post('Aciklama'),
			'Kod' => $this->input->post('Kod'),
			'AnahtarKelime' => $this->input->post('AnahtarKelime'),
			'Durum' => $this->input->post('Durum'),
			'Stok' => $this->input->post('Stok'),
			'Alis_Fiyati' => $this->input->post('Alis_Fiyati'),
			'Satis_Fiyati' => $this->input->post('Satis_Fiyati'),
			'Agirlik' => $this->input->post('Agirlik'),
			'KategoriId' => $this->input->post('KategoriId'),
			'Detay' => $this->input->post('Detay'),
			'Tarih' => $now,
			'Slider' => $this->input->post('Slider'),
			'Anasayfa'=>$this->input->post('Anasayfa'),
			'Resim' => $filename . $this->upload->data('file_ext')

			);
		$this->Product_Model->InsertData("urunler",$data);
		$this->session->set_flashdata("result","Başarılı");
		redirect(base_url()."Admin/Urunler");   
        }
	}

	public function urungaleri($id)
	{
		$query=$this->Product_Model->GetProduct($id);
		$data["data"] = $query->result();

		$query=$this->db->query("SELECT * FROM galeriler WHERE UrunId=$id");
		$data["galeriler"]=$query->result();


		$this->load->view('Admin/_header');
		$this->load->view('Admin/_sidebar');
		$this->load->view('Admin/Urun/_urun_galeri',$data);
		$this->load->view('Admin/_footer');
    }

    public function resimsil($GaleriId)
    {
    	$this->db->delete("galeriler", array('GaleriId' => $GaleriId));
    	redirect($this->agent->referrer());
    }

    function do_upload()
	{       
	    $this->load->library('upload');
	    $UrunId = $this->input->post('UrunId');

	    $files = $_FILES;
	    $cpt = count($_FILES['userfile']['name']);
	    for($i=0; $i<$cpt; $i++)
	    {   
	    	$FileName = rand();
	    	$FileExtension =  $this->get_file_extension($files['userfile']['name'][$i]);

	        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
	        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
	        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
	        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
	        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

	        $this->upload->initialize($this->set_upload_options($UrunId, $FileName, $FileExtension));
	        $this->upload->do_upload();
	    }

	    redirect(base_url()."Admin/Urunler/urungaleri/".$UrunId);  
	}

	private function set_upload_options($UrunId, $FileName, $FileExtension)
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name'] 			= $FileName;

        $data=array(
			'Resim' => $FileName . "." . $FileExtension,
			'UrunId' => $UrunId
			);
		$this->Product_Model->InsertData("galeriler",$data);

	    return $config;
	}

	function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}
	
}
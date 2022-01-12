<?php
class Product_Model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function GetAllProduct(){
		$this->db->from('kategoriler');
  		$this->db->join('urunler', 'urunler.KategoriId = kategoriler.KategoriId', 'left');
  		$query = $this->db->get();
  		return $query->result();

		//$query=$this->db->get($table);
		//return $query;
	}

	public function GetProduct($id){
		$this->db->from('urunler');
		$this->db->where('UrunId', $id);
  		$this->db->join('kategoriler', 'kategoriler.KategoriId = urunler.KategoriId');
  		$query = $this->db->get();
  		return $query;

		//$query=$this->db->get($table);
		//return $query;
	}

	public function GetSharedProduct($table){
		$query=$this->db->get($table);
		return $query;
	}
	public function GetCategoryItems($table,$id)
	{
		$query=$this->db->QUERY("SELECT * FROM urunler WHERE KategoriId=$id ");
		return $query;
	}

	public function GetCategory($id)
	{
		$query=$this->db->QUERY("SELECT * FROM kategoriler WHERE KategoriId=$id ");
		return $query;
	}
	

}
?>
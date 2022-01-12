<?php
class Product_Model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function GetAllProduct(){

		$this->db->from('urunler');
  		$this->db->join('kategoriler', 'kategoriler.KategoriId = urunler.KategoriId');
  		$query = $this->db->get();
  		return $query;

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

	public function InsertData($table,$data){
		$this->db->insert($table,$data);
		return true;
	}
	public function UpdateData($table,$data,$id,$column){
		$this->db->where($column, $id);
		$this->db->update($table, $data);
		return true;
	}
	public function DeleteData($table,$id,$column)
    {
        $this->db->delete($table, array($column => $id));
        return true;
    }

}
?>
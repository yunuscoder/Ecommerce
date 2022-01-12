<?php
class Regrasyon_Model extends CI_Model {
	function __construct() {
		parent::__construct();
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
    }
    public function UpdateNormbagimsiz($deger,$id)
    {
    
    	$this->db->query("UPDATE regrasyon SET normBagimsiz=$deger WHERE regrasyonId=$id");

    }
    public function UpdateNormBagimli($deger,$id)
    {
    
    	$this->db->query("UPDATE regrasyon SET normBagimli=$deger WHERE regrasyonId=$id");

    }
 
}
?>
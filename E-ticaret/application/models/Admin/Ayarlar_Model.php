<?php
class Ayarlar_Model extends CI_Model {
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
        return true;
    }

}
?>
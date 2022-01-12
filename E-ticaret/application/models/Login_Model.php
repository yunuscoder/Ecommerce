<?php
class Login_Model extends CI_Model {
	function __construct()
	 {
		parent::__construct();
	}

	public function LoginControl($email,$sifre){
		$this->db->select('*');
		$this->db->from('musteriler');
		$this->db->where('Email',$email);
		$this->db->where('Sifre',$sifre);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}
		else
		{
			return false;
		}
	}

}
?>
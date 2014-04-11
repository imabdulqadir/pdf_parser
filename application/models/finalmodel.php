<?php
class Finalmodel extends CI_Model{

	function __construct(){
            // Call the Model constructor
		parent::__construct();
	}
	function insertdb($datatoins)
	{
		$this->db->insert("pdfdetails",$datatoins);
	}
	function selectdb($srch)
	{
		
		$query = $this->db->get_where('pdfdetails', array('reg' => $srch));
		return $query->row();
		
	
	
	}
}
?>

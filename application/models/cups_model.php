<?php
require_once(APPPATH .'/core/my_idmodel.php');

class Cups_Model extends My_IDModel {
	
	function __construct(){
		parent::__construct('cups');
	}
	
	/*
	 * name should be unique,,,
	 * TODO: name can be same,,, right?
	 * 
	 * TODO: '$name' causes an error as ' char is included in $name
	 * e.g. makoto's cup causes an error!!
	 */
	function getByName($name){
	    $stmt = "
	    SELECT * FROM `$this->table`
	    WHERE `name` = '$name'
	    ;
	    ";
	    
	    $query = $this->db->query($stmt);
	    if($query->num_rows() == 1){
	    return $query->row();
	    }
	}
	
}

?>

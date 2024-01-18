<?php

class bulkMailModel extends model {
	
	public function data()
    {
      
    	$query = $this->db->prepare("SELECT $youremailattribute FROM $yourdb"); 
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
		
    }
	

	
	
	
	
	
	
}



?>
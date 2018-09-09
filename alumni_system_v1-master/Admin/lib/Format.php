<?php
class Format{
    
	public function validation($data){
		$data = trim($data);
		$data = stripcslashes($data); 
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<?php
class Model
{
	public $table;
	public $id;

	public static function bdd($string){
		if(ctype_digit($string)){
			$string = intval($string);
		}
		else{
			$string = $bdd->real_escape_string($string);
			$string = addcslashes($string, '%_');
		}

		return $string;
	}

	public static function html($string){
		return htmlentities($string);
	}

	public function del($id=null){
		
		global $bdd;
		if($id==null){ $id = $this->id;}
		$sql = "DELETE FROM ".$this->table." WHERE id=$id";
		$bdd->query($sql);
	}



	
}
?>



















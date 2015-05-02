<?php
class Users extends Model{
	
	public static function compterMembre($bdd,$email){
	
		$req = $bdd->prepare('SELECT COUNT(*) FROM user WHERE email= :email');
	    $req->bindParam(":email",$email, PDO::PARAM_STR);
	    $req->execute();
	    $dn = $req->fetchColumn();
	    $req->closeCursor();
	    return $dn;
	}

	public static function inscriptionMembre($bdd, $email, $password, $nom, $prenom, $universite, $type,$statut){

		$req = $bdd->prepare("INSERT INTO user(email, password, create_time, type,nom, prenom, universite,status) VALUES(:email, :password, NOW(), :type,:nom, :prenom, :universite,:statut)");
		$req->bindParam(':email',$email, PDO::PARAM_STR);
		$req->bindParam(':password',$password, PDO::PARAM_STR);
		$req->bindParam(':type',$type, PDO::PARAM_STR);
		$req->bindParam(':nom',$nom, PDO::PARAM_STR);
		$req->bindParam(':prenom',$prenom, PDO::PARAM_STR);
		$req->bindParam(':universite',$universite, PDO::PARAM_STR);
		$req->bindParam(':statut',$statut, PDO::PARAM_STR);
		$req->execute();
		return $req;

	}

	public static function userid($bdd,$email)
	{
	    $req = $bdd->prepare('SELECT email,iduser,type FROM user WHERE email=:email');
	    $req->bindParam(":email",$email,PDO::PARAM_STR);
	    $req->execute();
	    $dn = $req->fetch();
	    $req->closeCursor();
	    return $dn;

	}

	public static function verifierEmailMdp($bdd,$email,$mdp)
	{
		$req = $bdd->prepare('SELECT iduser,email,password FROM user WHERE email= :email AND password = :mdp');
		$req->bindParam(":email",$email,PDO::PARAM_STR);
		$req->bindParam(":mdp",$mdp, PDO::PARAM_STR);
		$req->execute();
		$data = $req->fetch();
		if($data['email']!= NULL AND $data['password']!= NULL)
		{
			return true;
		}
		else{
			return false;
		} 
	}

	public static function getAllUser($bdd)  {
		$req = $bdd->prepare("SELECT * FROM user ORDER BY nom ASC");
	 	$req->execute();
	 	$dn = $req->fetchAll();
	 	return $dn;
	}

	public static function getUserName($bdd,$id)  {
		$req = $bdd->prepare("SELECT nom, prenom FROM user WHERE id=:id");
		$req->bindParam(":id",$id,PDO::PARAM_STR);
	 	$req->execute();
	 	$dn = $req->fetch();
	 	return $dn;	 	
	}	

	public static function changeStatusUser($bdd,$id,$newstatus) {
		$req = $bdd->prepare('UPDATE user SET type=:type WHERE iduser= :id');
		$req->bindParam(":type",$newstatus,PDO::PARAM_STR);
		$req->bindParam(":id",$id,PDO::PARAM_STR);
		$req->execute();
	}
}

?>
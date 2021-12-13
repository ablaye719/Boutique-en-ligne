<?php
class User_m{

    private $db;

    public function __construct(){
        $MaConnexion = new Connexion();
        $this->db = $MaConnexion->connect();
    }
    function verif_login_mdp_Utilisateur($login,$mdp){
    	// "SELECT id,username,motdepasse,roles FROM users WHERE username = ? AND motdepasse = ?";
		$requete="SELECT id,username,motdepasse,roles FROM TD_users WHERE motdepasse='".$mdp."' and username='".$login."';";
		echo $requete;
		$select = $this->db->query($requete);
		$select->setFetchMode(PDO::FETCH_ASSOC);
		if($select->rowCount()==1){
			$enregistrements = $select->fetchAll();
			return $enregistrements;
		}
		else
			return false;
    }

}

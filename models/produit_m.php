<?php

class Produit_m{

    private $db;

    public function __construct(){
        $MaConnexion = new Connexion();
        $this->db = $MaConnexion->connect();
    }

    function getAllProduits(){
        $requete="SELECT p.id, p.typeProduit_id, p.nom, p.prix, p.photo
        FROM TD_produits as p ORDER BY p.nom;";
      //  var_dump($requete);
        $select = $this->db->query($requete);
        $results = $select->fetchAll();
        return $results;
    }

    function insertUnProduit($donnees){
        $requete="INSERT INTO TD_produits (id,nom,typeProduit_id,prix,photo) VALUES
        (NULL,'".$donnees['nom']."',".$donnees['typeProduit_id'].",'".$donnees['prix']."','".$donnees['photo']."');";
        $nbRes = $this->db->exec($requete);
    }




    function deleteUnProduit($id){
        $requete="DELETE
        FROM TD_produits WHERE id=".$id." LIMIT 1;";
        try {
            $nbRes = $this->db->exec($requete);
            return $nbRes;
            } 
        catch ( Exception $e ) {
                echo "Erreur methode readUnProduit : ", $e->getMessage();
            }
    }
    
    function readUnProduit($id){
        /*$requete="SELECT id,typeProduit_id,nom,prix,photo
        FROM TD_produits WHERE id=".$id." LIMIT 1;";*/
        $requete="SELECT id,typeProduit_id,nom,prix,photo
        FROM TD_produits WHERE id=:id LIMIT 1;";
        try {
            /*$select = $this->db->query($requete);
            $result = $select->fetchAll();
            return $result[0];*/
            $prep=$this->db->prepare($requete);
            $prep->bindParam(':id',$id,PDO::PARAM_INT);
            $prep->execute();
            $result = $prep->fetch();
            return $result;
            } 
        catch ( Exception $e ) {
                echo "Erreur methode readUnProduit : ", $e->getMessage();
            }
    }
    function updateUnProduit($id,$donnees){
        $requete="UPDATE TD_produits SET typeProduit_id=".$donnees['typeProduit_id']." ,
        nom='".$donnees['nom']."', prix='".$donnees['prix']."' ,
        photo='".$donnees['photo']."' WHERE id=".$id.";";
        try {
            $nbRes = $this->db->exec($requete);
            } 
        catch ( Exception $e ) {
                echo "Erreur methode updateUnProduit : ", $e->getMessage();
            }
    }



}

<?php
require_once '../config.php';
require_once '../Controller/reclamationc.php';

class reclamationc {


    public function ajouterreclamation($reclamation)
    {

        $sql="INSERT INTO reclamation ( id_client,description_reclamation,type_reclamation) 
            VALUES (:id_client,:description_reclamation, :type_reclamation)";
                            $db = getConnexion();

            try{
                $query = $db->prepare($sql);
            
                $query->execute([
                    'id_client'=>$reclamation->getidcl(),
                    'description_reclamation' => $reclamation->getdescription(),
                    'type_reclamation' => $reclamation->gettype(),
                   
                    
                ]);         
        
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
        

	function recupereretat($id_reclamation)
    {

        $sql="SELECT * from reclamation where id_reclamation=id_reclamation";

        $db = config::getConnexion();
        try{

        $liste=$db->query($sql);
        return $liste;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function supprimerreclamation($reclamation)
    {
        $sql="DELETE FROM reclamation where id_reclamation=id_reclamation ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        
        $req->bindValue(':id',$_POST["id_reclamation"]);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    
   public function afficherreclamation()
    {
        try {
        $pdo = getConnexion();
        $query = $pdo->prepare('SELECT * FROM reclamation');
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }

    
    

    function modifieretat($reclamation,$id_reclamation)
    {
        $sql="UPDATE reclamation SET etat=:etat , id_client=:id_client, description_reclamation=:description_reclamation ,type_reclamation=:type_reclamation ,date_reclamation=:date_reclamation WHERE id_reclamation=:id_reclamation";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try{        
          $id_reclamation=$reclamation->getidrec();
          $id_client=$reclamation->getidcl();

          $date_reclamation=$reclamation->getdate();

          $description_reclamation=$reclamation->getdescription();
          $type_reclamation=$reclamation->gettype();
          $etat=$reclamation->getetat();

        $req=$db->prepare($sql);

      $datas = array(':id'=>$id_reclamation, ':id_produit'=>$id_produit, ':id_client'=>$id_client,':date_reclamation'=>$date_reclamation,':description_reclamation'=>$description_reclamation,'type_reclamation'=>$type_reclamation,':etat'=>$etat);
    
        $req->bindValue(':id_reclamation',$id_reclamation);
        $req->bindValue(':id_client',$id_client);
        $req->bindValue(':date_reclamation',$date_reclamation);
        $req->bindValue(':description_reclamation',$description);
        $req->bindValue(':type_reclamation',$type);
        $req->bindValue(':etat',$etat);


        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
          echo " Les datas : " ;
        print_r($datas);
        }
        
    }

}

	

?>
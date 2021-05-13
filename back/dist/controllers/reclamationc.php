<?php
require_once 'config.php';
require_once '../controllers/reclamationc.php';

class reclamationc {

	public function recupereretat($id_reclamation) {
           try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reclamation WHERE id_reclamation= :id_reclamation'
                );
                $query->execute([
                    'id_reclamation' => $id_reclamation
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


   /* function supprimerreclamation($reclamation)
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
    }*/

    
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

    
    
 public function modifier($etat, $id_reclamation) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE reclamation SET 
                       etat=:etat 
                       WHERE id_reclamation= :id_reclamation'                                                                       
                );
                
                $query->execute([
                    'etat' => $etat,
                    'id_reclamation'=>$id_reclamation
                ]);
                
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                echo "erreur";
                $e->getMessage();
            }
        }

	

}
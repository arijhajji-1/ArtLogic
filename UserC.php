<?php
require_once '../connexion.php';
require_once '../Controller/UserC.php';
require_once '../Model/User.php';
class UserC
{
    public function ajouterUser($User) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare('INSERT INTO users (nom_user, prenom_user, Email_user, pseudo_user, Role_user, mot_de_passe, sexe_user, date_de_naissance_user,adresse_user,matricule_fiscale_user,numero_telephone_user,type_produit) 
                VALUES (:Nom, :Prenom, :Email, :Pseudo, :Role, :Mot_de_passe, :Sexe, :Date_de_naissance, :Adresse , :Matricule_fiscale , :Telephone , :Type_produit)'
            );

            $query->execute([
                'Nom' => $User->getNom(),
                'Prenom' => $User->getPrenom(),
                'Email' => $User->getEmail(),
                'Pseudo' => $User->getPseudo(),
                'Role' => $User->getRole(),
                'Mot_de_passe' => $User->getMot_de_passe(),
                'Sexe' => $User->getSexe(),
                'Date_de_naissance' => $User->getDate_de_naissance(),
                'Adresse' => $User->getAdresse(),
                'Matricule_fiscale' => $User->getMatricule_fiscale(),
                'Telephone' => $User->getTelephone(),
                'Type_produit' => $User->getType_produit(),
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }
    public function supprimerUser($id) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'DELETE FROM users WHERE id_user = :id'
            );
            $query->execute([
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function afficherClient()
    {
        try {
            $pdo = getconnexion();
            $query = $pdo->prepare(
                'SELECT * FROM users WHERE Role_user ="0" '
            );

            $query->execute(
            );
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function afficherVendeur()
    {
        try {
            $pdo = getconnexion();
            $query = $pdo->prepare(
                'SELECT * FROM users WHERE Role_user ="1" '
            );

            $query->execute(
            );
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function getUserById($id) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare('SELECT * FROM users WHERE id_user = :id'
            );
            $query->execute([
                'id' => $id
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function modifierUser($User, $id) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'UPDATE users SET nom_user = :Nom,prenom_user = :Prenom,Email_user = :Email,pseudo_user = :Pseudo,mot_de_passe = :Mot_de_passe,sexe_user = :Sexe,date_de_naissance_user = :Date_de_naissance,adresse_user = :Adresse,Date_de_creation = :Date_de_creation,matricule_fiscale_user = :Matricule_fiscale,numero_telephone_user = :Telephone,type_produit = :Type_produit WHERE id_user = :id'
            );
            $query->execute([
                'Nom' => $User->getNom(),
                'Prenom' => $User->getPrenom(),
                'Email' => $User->getEmail(),
                'Pseudo' => $User->getPseudo(),
                'Mot_de_passe' => $User->getMot_de_passe(),
                'Sexe' => $User->getSexe(),
                'Date_de_naissance' => $User->getDate_de_naissance(),
                'Adresse' => $User->getAdresse(),
                'Date_de_creation' => $User->getDate_de_creation(),
                'Matricule_fiscale' => $User->getMatricule_fiscale(),
                'Telephone' => $User->getTelephone(),
                'Type_produit' => $User->getType_produit(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
?>
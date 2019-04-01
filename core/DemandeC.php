<?PHP
include "config.php";
class DemandeC
{

    function afficherDemande($a)
    {
        $sql = "SELECT * FROM demande WHERE user_id=$a";
        $db = config::getConnexion();
        $list = $db->query($sql);
        return $list;
    }


    function ajouterDemande($Demande)
    {
        $sql = "INSERT INTO demande (DATE_DEMANDE,NOM_D,NUM_D,OBJET_D,DETAILS_D,ETAT_D,user_id) VALUES (:DATEtime,:NOM_D,:NUM_D,:OBJET_D,:DETAILS_D,:ETAT_D,:user_id)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            //$ID_D=$Demande->getID_D();
            $Date = $Demande->getDATE_DEMANDE();
            $NOM_D = $Demande->getNOM_D();
            $NUM_D = $Demande->getNUM_D();
            $OBJET_D = $Demande->getOBJET_D();
            $DETAILS_D = $Demande->getDETAILS_D();
            $etat = $Demande->getETAT_D();
            $user = $Demande->getUserId();
            //$req->bindValue(':ID_D',$ID_D);
            $req->bindValue(':DATEtime', $Date);
            $req->bindValue(':NOM_D', $NOM_D);
            $req->bindValue(':NUM_D', $NUM_D);
            $req->bindValue(':OBJET_D', $OBJET_D);
            $req->bindValue(':DETAILS_D', $DETAILS_D);
            $req->bindValue(':ETAT_D', $etat);
            $req->bindValue('user_id', $user);
            $req->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }

    function afficherDemandes()
    {
        //$sql="SElECT * From demande d inner join utilisateur u on d.USER_ID= u.USER_ID";
        $sql = "SElECT d.ID_D,d.DATE_DEMANDE,d.NOM_D,d.NUM_D,d.OBJET_D,d.DETAILS_D,d.ETAT_D,u.NOM_U,u.PRENOM_U FROM demande d INNER JOIN utilisateur u ON u.USER_ID=d.user_id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimerDemande($ID_D)
    {
        $sql = "DELETE FROM demande where ID_D= :ID_D";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':ID_D', $ID_D);
        try {
            $req->execute();
            // header('Location: ../views/Demande.php');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function traiterD($ID_D)
    {
        $sql = "UPDATE demande SET ETAT_D= 'Traitee' where ID_D= :ID_D";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':ID_D', $ID_D);
        try {
            $req->execute();
            // header('Location: ../views/Demande.php');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recupererDemande($ID_D)
    {
        $sql = "SELECT * from demande where ID_D=$ID_D";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function modifierDemande($Demande,$ID_D)
    {
        $sql = "UPDATE demande SET  NOM_D=:nom, NUM_D=:num , OBJET_D=:objet,DETAILS_D =:details WHERE demande ID_D=:ID_D";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $ID_D=$Demande->getID_D();
        $nom = $Demande->getNOM_D();
        $num = $Demande->getNUM_D();
        $objet = $Demande->getOBJET_D();
        $details = $Demande->getDETAILS_D();

        $req->bindValue(":ID_D",$ID_D);
        $req->bindValue(':nom', $nom);
        $req->bindValue(':num', $num);
        $req->bindValue(':objet', $objet);
        $req->bindValue(':details', $details);

        $req->execute();

    }
}

?>
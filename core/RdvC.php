<?PHP
include "config.php";
class RdvC {

    function afficherRDV ($a)
    {
        $sql="SELECT * FROM rdv WHERE USER_ID=$a";
        $db=config::getConnexion();
        $list=$db->query($sql);
        return $list;
    }


    function ajouterRDV($Rdv)
    {
        $sql="INSERT INTO rdv (DATE_RDV,OBJET_RDV,ETAT_RDV,USER_ID) VALUES (:DATEtime,:OBJET_RDV,:ETAT_RDV,:USER_ID)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);


            $Date=$Rdv->getDATE_RDV();
            $OBJET_RDV=$Rdv->getOBJET_RDV();
            $ETAT_RDV=$Rdv->getETAT_RDV();
            $USER_ID=$Rdv->getUSER_ID();

            $req->bindValue(':DATEtime',$Date);
            $req->bindValue(':OBJET_RDV',$OBJET_RDV);
            $req->bindValue(':ETAT_RDV',$ETAT_RDV);
            $req->bindValue('USER_ID',$USER_ID);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function afficherRDVs()
    {
        //$sql="SElECT * From rdv s inner join utilisateur u on s.USER_ID= u.USER_ID";
        $sql="SElECT d.ID_RDV,d.DATE_RDV,d.OBJET_RDV,d.ETAT_RDV,u.NOM_U,u.PRENOM_U FROM rdv d INNER JOIN utilisateur u ON u.USER_ID=d.USER_ID";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function accepterRDV($ID_RDV)
    {
        $sql = "UPDATE rdv SET ETAT_RDV = 'Acceptee' where ID_RDV = :ID_RDV";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':ID_RDV', $ID_RDV);
        try {
            $req->execute();
            // header('Location: ../views/Demande.php');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function refuserRDV($ID_RDV)
    {
        $sql = "UPDATE rdv SET ETAT_RDV = 'Refusee' where ID_RDV = :ID_RDV";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':ID_RDV', $ID_RDV);
        try {
            $req->execute();
            // header('Location: ../views/Demande.php');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimerRDV($ID_RDV){
        $sql="DELETE FROM rdv where ID_RDV= :ID_RDV";
        $db = config::getConnexion();
        $req=$db->prepare($sql);

        $req->bindValue(':ID_RDV',$ID_RDV);
        try{
            $req->execute();
            // header('Location: ../views/Contact.php');

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererRDV($ID_RDV){
        $sql="SELECT * from rdv where ID_RDV=$ID_RDV";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}


function modifierRDV($Rdv,$ID_RDV)
{
    $sql = "UPDATE `rdv` SET `DATE_RDV`= DATE_RDV,`OBJET_RDV`= OBJET_RDV  WHERE  `rdv`.`ID_RDV` = ID_RDV";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $ID_D=$Rdv->getID_D();
    $nom = $Rdv->getDATE_RDV();
    $objet = $Rdv->getOBJET_RDV();

    $req->bindValue(":ID_D",$ID_D);
    $req->bindValue(':nom', $nom);
    $req->bindValue(':objet', $objet);

     $req->execute();

}



?>
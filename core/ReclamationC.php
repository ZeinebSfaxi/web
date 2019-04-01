<?PHP
include "config.php";
class ReclamationC {

    function afficherReclamation ($a)
    {
        $sql="SELECT * FROM reclamation WHERE USER_ID=$a";
        $db=config::getConnexion();
        $list=$db->query($sql);
        return $list;
    }


    function ajouterReclamation($Reclamation)
    {
        $sql="INSERT INTO reclamation (OBJET_R,DETAILS_R,ETAT,USER_ID) VALUES (:OBJET_R,:DETAILS_R,:ETAT, :USER_ID)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $OBJET_R=$Reclamation->getOBJET_R();
            $DETAILS_R=$Reclamation->getDETAILS_R();
            $ETAT=$Reclamation->getETAT();
            $USER_ID=$Reclamation->getUSER_ID();

            $req->bindValue(':OBJET_R',$OBJET_R);
            $req->bindValue(':DETAILS_R',$DETAILS_R);
            $req->bindValue(':ETAT',$ETAT);
            $req->bindValue('USER_ID',$USER_ID);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function afficherReclamations()
    {
        //$sql="SElECT * From rdv s inner join utilisateur u on s.USER_ID= u.USER_ID";
        $sql="SElECT d.ID_R,d.OBJET_R,d.DETAILS_R,d.ETAT,u.NOM_U,u.PRENOM_U FROM reclamation d INNER JOIN utilisateur u ON u.USER_ID=d.USER_ID";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function supprimerReclamation($ID_R){

        $sql="DELETE FROM reclamation where ID_R= :ID_R";
        $db = config::getConnexion();
        $req=$db->prepare($sql);

        $req->bindValue(':ID_R',$ID_R);
        try{
            $req->execute();
            // header('Location: ../views/Contact.php');

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function traiterR($ID_R)
    {
        $sql = "UPDATE reclamation SET ETAT = 'Traitee' where ID_R = :ID_R";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':ID_R', $ID_R);
        try {
            $req->execute();
            // header('Location: ../views/Demande.php');

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recupererReclamation($ID_R){
        $sql="SELECT * from reclamation where ID_R=$ID_R";
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

function modifierReclamation($Reclamation,$ID_R)
{
    $sql = "UPDATE `reclamation` SET `OBJET_R`= OBJET_R,`DETAILS_R`= DETAILS_R  WHERE  `reclamation`.`ID_R` = ID_R";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $ID_R=$Reclamation->getID_R();
    $DETAILS_R = $Reclamation->getDETAILS_R();
    $OBJET_R = $Reclamation->getOBJET_R();

    $req->bindValue(":ID_R",$ID_R);
    $req->bindValue(':DETAILS_R', $DETAILS_R);
    $req->bindValue(':OBJET_R', $OBJET_R);

    $req->execute();

}
?>
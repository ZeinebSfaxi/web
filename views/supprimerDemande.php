<?PHP
include "../core/DemandeC.php";
$demandeC=new DemandeC();
if (isset($_POST["ID_D"])){
    $demandeC->supprimerDemande($_POST["ID_D"]);

    header('Location: demande.php');
}

?>
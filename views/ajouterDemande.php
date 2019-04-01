<?PHP
include "../entities/Demande.php";
include "../core/DemandeC.php";

if (isset($_POST['lname']) and isset($_POST['num']) and isset($_POST['subject']) and isset ($_POST['message'])){
    $date= date_create()->format('Y-m-d');
    $a=$_POST['user'];
$demande1=new Demande($date,$_POST['lname'],$_POST['num'],$_POST['subject'],$_POST['message'],"en attente",$a);
$demande1C=new DemandeC();
$demande1C->ajouterDemande($demande1);
?>
    <script>
        alert("demande ajouté");

    </script>
<?php
 header('Location:demande.php');


}else{
	echo "vérifier les champs";
}
//*/

?>
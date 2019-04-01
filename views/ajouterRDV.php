<?PHP
include "../entities/Rdv.php";
include "../core/RdvC.php";

if (isset($_POST['date']) and isset($_POST['subject']) and ( strtotime ($_POST['date']) > strtotime('now') ) ){

    $a=$_POST['user'];
    $rdv1=new Rdv($_POST['date'],$_POST['subject'],"en attente",$a);
    $rdv1C=new RdvC();
    $rdv1C->ajouterRDV($rdv1);
    ?>
    <script>
        alert("rdv ajouté");

    </script>
    <?php
    header('Location:RDV.php');
}else{
    echo "vérifier les champs";

}


?>
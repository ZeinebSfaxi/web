<?PHP
include "../../../core/ReclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["ID_R"])){
    $reclamationC->traiterR($_POST["ID_R"]);
    header('Location: reclamationBACK.php');
}

?>

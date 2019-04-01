<?php
include  "../core/config.php";
$db=config::getconnexion();
if(isset($_POST['lname']) && isset($_POST['mdp']))
{
	$nom=$_POST['lname'];
	$mdp=$_POST['mdp'];
$req="SELECT * FROM utilisateur";
$user=$db->query($req);
foreach($user as $row)
{
	if($row['NOM_U']==$nom && $row['MDP']==$mdp)
	{
		session_start();
		$_SESSION['nom']=$nom;
		$_SESSION['mdp']=$mdp;
		$_SESSION['id']=$row['USER_ID'];
		header('Location: http://localhost/projet - Copie/views/contact.php');
	}
}
}
?>
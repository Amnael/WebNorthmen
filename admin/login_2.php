<?php
include("initialise_sql.php");
$reponse = $bdd->query("SELECT id, login, pass, loginlevel FROM account WHERE login='" . $_POST['login'] ."'");
$donnees = $reponse->fetch();
if($_POST['login'] != $donnees['login'])
{
	echo"Utilisateur Inconnu"; 
}else if($donnees['login'] == NULL)
{
	echo"Veuillez remplir le champ login";
}else
{
	if($_POST['mdp'] == $donnees['pass'])
	{
		echo"Connexion Réussie";
		$_SESSION['accountid'] = $donnees['id'];
		$_SESSION['pseudo'] = $_POST['login'];
		$_SESSION['loginlevel'] = $donnees['loginlevel'];
		$_SESSION['isActive'] = 1;
		header('Location: logged.php');
?>

<?php
	}
	else
	{
		echo"Mot de Passe Erronée";
	}
}
	
?>
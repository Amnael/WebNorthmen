<?php
include("initialise_sql.php");
?>
<div id="menu">
<?php
if(isset($_SESSION['isActive']))
{
if($_SESSION['loginlevel'] == 1)
{
?>
<a href="http://localhost/WebNorthmen/">Accueil</a>
&nbsp<a href="admin/logged.php">Acceuil Admin</a>&nbsp;
&nbsp;<a href="my_account.php">Gestion de Compte <?php echo"(connecté en tant que ". $_SESSION['pseudo'];echo")";?></a>
&nbsp;<a href="logout.php">Deconnexion</a>&nbsp;
<?php
}else
{?>
<a href="account_create.php">Créer Un Compte</a>&nbsp;
<a href="login.php">Se Connecter</a>
<?php }}else
{
echo"isActiveFailed";
} ?>
</div>
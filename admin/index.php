<?php
include("initialise_sql.php");
if(isset($_SESSION['isActive']))
{
header('Location: logged.php');
}else{
?>
<div id ="body">
<form method="post" action="login_2.php">
 
<p>
Login :
    <input type="text" name="login" /> <p>
Mot De Passe :
    <input type="password" name="mdp" /> <p>
    <input type="submit" value="Valider" />

</p>
 
</form>
</div>
<?php } ?>


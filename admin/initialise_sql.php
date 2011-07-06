<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>
<?php
include("style1.php");
try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=localhost;dbname=site', 'admin', 'admin', $pdo_options);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}?>
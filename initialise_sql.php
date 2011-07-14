<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>
<?php
try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$link = mysql_connect("localhost", "admin", "admin");
	mysql_select_db("site", $link);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}?>
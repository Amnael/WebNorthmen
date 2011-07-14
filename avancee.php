<?php 
include("initialise_sql.php"); 
?>
<img src="IMAGE/raid/baradin.png" alt="baradin" /> <br />
<?php
$reponse = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=1", $link);
$reponse2 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=1 AND status = 1", $link);
$boss = mysql_num_rows($reponse);
$boss_down = mysql_num_rows($reponse2);
if($reponse != NULL)
{
echo"$boss_down/$boss<p>";
}?>
<img src="IMAGE/raid/blackwing.png" alt="descente" /> <br /><?php
$reponse = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=2 AND status != 3", $link);

$reponse2 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=2 AND (status = 1 OR status = 2)", $link);

$reponse3 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=2 AND status = 2", $link);

$reponse4 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=2", $link);

$boss = mysql_num_rows($reponse);
$boss_down = mysql_num_rows($reponse2);
$boss_downhm = mysql_num_rows($reponse3);
$bosshm = mysql_num_rows($reponse4);

if($reponse != NULL)
{
	echo"$boss_down/$boss - HM : $boss_downhm/$bosshm<p>";
}?><p>
<img src="IMAGE/raid/throne.png" alt="throne" /> <br /><?php
$reponse = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=3 AND status != 3", $link);

$reponse2 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=3 AND (status = 1 OR status = 2)", $link);

$reponse3 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=3 AND status = 2", $link);

$reponse4 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=3", $link);

$boss = mysql_num_rows($reponse);
$boss_down = mysql_num_rows($reponse2);
$boss_downhm = mysql_num_rows($reponse3);
$bosshm = mysql_num_rows($reponse4);

if($reponse != NULL)
{
	echo"$boss_down/$boss - HM : $boss_downhm/$bosshm<p>";
}?>
<img src="IMAGE/raid/bastion.png" alt="bastion" /> <br /><?php
$reponse = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=4 AND status != 3", $link);

$reponse2 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=4 AND (status = 1 OR status = 2)", $link);

$reponse3 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=4 AND status = 2", $link);

$reponse4 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=4", $link);

$boss = mysql_num_rows($reponse);
$boss_down = mysql_num_rows($reponse2);
$boss_downhm = mysql_num_rows($reponse3);
$bosshm = mysql_num_rows($reponse4);

if($reponse != NULL)
{
	echo"$boss_down/$boss - HM : $boss_downhm/$bosshm<p>";
}?>
<p>

<img src="IMAGE/raid/fireland.png" alt="fireland" /> <br /><?php
$reponse = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=5 AND status != 3", $link);

$reponse2 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=5 AND (status = 1 OR status = 2)", $link);

$reponse3 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=5 AND status = 2", $link);

$reponse4 = mysql_query("SELECT nom, id_raid, status FROM boss_template WHERE id_raid=5", $link);

$boss = mysql_num_rows($reponse);
$boss_down = mysql_num_rows($reponse2);
$boss_downhm = mysql_num_rows($reponse3);
$bosshm = mysql_num_rows($reponse4);

if($reponse != NULL)
{
	echo"$boss_down/$boss - HM : $boss_downhm/$bosshm<p>";
}?><p>
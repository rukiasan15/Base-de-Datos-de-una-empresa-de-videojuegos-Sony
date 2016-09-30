<HTML>
<style type="text/css">
form{
width:300px;heigth:500px;position:absolute;top:115px;left:230px;padding:10px;text-align:center;border-radius:50px;background:#00BFFF;



}
</style>
<body style="background:black;">
<div style="background:url(10480026_10202430469179332_2059460075_n.jpg);width:795px;height:461px;">

<A href="mibase.php"> <image SRC="volver.png"></A>

<FORM ACTION="eliminar.php" METHOD="post">
<EM>
CODIGO:<INPUT TYPE="text" NAME="codigo"><BR> 
</EM>

<INPUT TYPE="submit" name="ok" VALUE="ELIMINAR"><BR>
<div style="position:absolute;top:110px;left:100px;color:white;"> <font size="6"> <EM>
</FORM></HTML>

<?php error_reporting (0);
 $ok=$_POST['ok'];
$codigo=$_POST['codigo'];


if ($ok == "ELIMINAR") {

// coneccion al servidor de bases de datos

$dbh=mysql_connect ("localhost", "root", "")

or die ("problema conectando porque :" . mysql_error());

// seleccionado la base de datos

mysql_select_db ("mibase",$dbh);

//construyendo insert

$q="DELETE FROM tabla WHERE codigo=$codigo";

// ejecutando el query

$tabla= mysql_query($q, $dbh) or die ("problema con query");

//avisando


echo"eliminado"; echo"<br>"; echo"</div> </div>";

};

?>

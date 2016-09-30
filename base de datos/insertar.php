<HTML>
<head>
<style type="text/css">
form{
width:570px;heigth:500px;position:absolute;top:115px;left:110px;padding:10px;text-align:center;border-radius:50px;background:#08298A;



}
</style>
<body style="background:black;">
<div style="background:url(10510169_10202430468699320_1142858597_n.jpg);width:795px;height:461px;">

<A href="mibase.php"> <image SRC="volver.png"></A>


<FORM ACTION="insertar.php" METHOD="post">

<font size="4"> <EM>
CODIGO:<INPUT TYPE="text" NAME="codigo"><BR>

NOMBRE:<INPUT TYPE="text" NAME="nombre"><BR>

CATEGORIA:<INPUT TYPE="text" NAME="categoria"><BR>

CANTIDAD:<INPUT TYPE="text" NAME="cantidad"><BR>

PRECIO:<INPUT TYPE="text" NAME="precio"><BR>

<INPUT TYPE="submit" name="ok" VALUE="INSERTAR"><BR>
</EM> </font>
<div style="position:absolute;top:-50px; left:150px;color:white;">
<EM> <font size="6"></head>
</FORM></HTML>

<?php error_reporting (0);

$ok = $_POST['ok'];
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];

if ($ok == "INSERTAR") {

// coneccion al servidor de bases de datos

$dbh=mysql_connect ("localhost", "root", "")

or die ('problema conectando porque :' . mysql_error());

// seleccionado la base de datos

mysql_select_db ("mibase",$dbh);

//construyendo insert

$q="INSERT INTO tabla (codigo,nombre,categoria,cantidad,precio) VALUES (".$codigo.",'".$nombre."','".$categoria."',".$cantidad.",".$precio.") ;";

// ejecutando el query

$tabla= mysql_query($q, $dbh) or die ("problema con query");

//avisando


echo"registro insertado";  echo"</div>"; echo"</div></font>";

};

?>

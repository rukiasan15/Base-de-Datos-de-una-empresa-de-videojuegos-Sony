<HTML>
<style type="text/css">
form{
width:570px;heigth:500px;position:absolute;top:115px;left:110px;padding:10px;text-align:center;border-radius:50px;background:#848484;



}
</style>
<body style="background:black;">
<div style="background:url(10472971_10202430529660844_706863497_n.jpg);width:795px;height:461px;">

<A href="mibase.php"> <image SRC="volver.png"></A>

<FORM ACTION="buscar.php" METHOD="post">
<font size="5"> <font color="#08088A"> <EM>
DAME CODIGO A BUSCAR:<INPUT TYPE="text" NAME="CODIGO"><BR>

<INPUT TYPE="submit" NAME="OK" VALUE="BUSCAR"><BR>
</EM> </font> </font>
</FORM></HTML>
<div style="position:absolute;top:230px;left:170px;">

<?php error_reporting (0);

$OK = $_POST['OK'];
$CODIGO = $_POST['CODIGO'];

if ($OK == "BUSCAR") {

// coneccion al servidor de bases de datos

$dbh=mysql_connect ("localhost", "root", "")

or die ('problema conectando porque :' . mysql_error());

// seleccionado la base de datos

mysql_select_db ("mibase",$dbh);

// preparando la instruccion sql

$q = "select * from tabla where codigo=".$CODIGO;

// ejecutando el query

$tabla= mysql_query($q, $dbh) or die ("problema con query");

# empezando una tabla html

echo "<HTML><TABLE Border=10 CellPadding=5><TR>";

# construyendo los encabezados de la tabla

echo "<th bgcolor=#424242> <font color=white><EM>CODIGO</EM></font></th><th bgcolor=#0174DF><EM>NOMBRE</EM></th><th bgcolor=#424242><font color=white><EM>CATEGORIA</font></EM></th><th bgcolor=#0174DF><EM>CANTIDAD</EM></th><th bgcolor=#424242><EM><font color=white>PRECIO</font></EM></th></TR>";

// ciclo de lectura del rowset($tabla)

while($renglon = mysql_fetch_row($tabla))

{

// desplegando en celda de tabla html

echo"<tr>";
echo "<td bgcolor=white><I>".$renglon[0]."</I></td>";
echo "<td bgcolor=white><I> ".$renglon[1]."</I></td>";
echo "<td bgcolor=white><I>".$renglon[2]."</I></td>";
echo "<td bgcolor=white><I>".$renglon[3]."</I></td>";
echo "<td bgcolor=white><I>".$renglon[4]."</I></td>";

echo"</tr>";

};

// cerrando tabla html
echo"</div>"; echo"</div>";
echo "</table>"; }; ?>

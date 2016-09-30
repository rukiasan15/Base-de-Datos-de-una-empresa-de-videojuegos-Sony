<HTML>
<body>
<body style="background:black;">
<div style="background:url(10487665_10202430467899300_586061160_n.jpg);width:795px;height:461px;">

<A href="mibase.php"> <image SRC="volver.png"></A>


<FORM ACTION=consulta.php METHOD=post>

<div style="position:absolute;top:100px;left:180px;">
</FORM> </body></HTML>

<?php

$con=0;

// coneccion al servidor de bases de datos
$dbh=mysql_connect ("localhost", "root", "") or die ('problema conectando porque :' . mysql_error());

// seleccionado la base de datos
mysql_select_db ("mibase",$dbh);

// preparando la instruccion sql

// ya estudiaron su tutorial de sql??
$q = 'select * from tabla';

// ejecutando el query
$tabla= mysql_query($q, $dbh) or die ("problema con query");

# empezando una tabla html
echo "<HTML><TABLE Border=10 CellPadding=5><TR>";
# construyendo los encabezados de la tabla

echo "<th bgcolor=#424242><font color=white> <EM>CODIGO</EM></font></th><th bgcolor=#0174DF><EM>NOMBRE</EM></th><th bgcolor=#424242><font color=white><EM>CATEGORIA</EM></font></th><th bgcolor=#0174DF><EM>CANTIDAD</EM></th><th bgcolor=#424242><font color=white><EM>PRECIO</EM></font></th></TR>";


// ciclo de lectura del rowset($tabla)

while($renglon = mysql_fetch_row($tabla))
{
if($con%2==0) { $color="white";  } else { $color="#A4A4A4"; }

// desplegando en celda de tabla html

echo"<tr>";

echo "<td bgcolor=$color><I>".$renglon[0]."</I></td>";
echo "<td bgcolor=$color><I> ".$renglon[1]."</I></td>";
echo "<td bgcolor=$color><I>".$renglon[2]."</I></td>";
echo "<td bgcolor=$color><I>".$renglon[3]."</I></td>";
echo "<td bgcolor=$color><I>".$renglon[4]."</I></td>";

$con++;

echo"</tr>";
};

// cerrando tabla html
echo "</table>"; echo"</div>"; echo"</div>"; 

?>

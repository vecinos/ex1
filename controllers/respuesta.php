<?php
require('../bd/bd.php');
$resp=$_REQUEST['resp'];
$respuesta=$_REQUEST['respuesta'];
$idpreg=$_REQUEST['idpreg'];
$idu=$_REQUEST['idu'];

if ($resp===$respuesta)
{
    $r=1;
}
else
{
    $r=0;
}

$sql="select id_solucion from solucion where id=$idu";
$consultas=mysql_query($sql)or die ("$sql");
$solucion=mysql_result($consultas,0,'id_solucion');
$cuantos= mysql_num_rows($consultas);

if ($cuantos == 1)
{
    $sql11="update solucion set ac$idpreg=$r where id_solucion=$solucion";
    $consulta3=mysql_query($sql11)or die ("$sql11");

    $sql9="select * from preguntas where estado=0";
    $consultas6=mysql_query($sql9)or die ("$sql9");
    $cuantos2= mysql_num_rows($consultas6);

    if ($cuantos2 === 1)
    {
        $sql12="UPDATE preguntas SET estado=0 WHERE estado=1 ";
        $consulta4=mysql_query($sql12)or die ("$sql12");

        $sql="select * from solucion where id=$idu";
        $consultas=mysql_query($sql)or die ("$sql");
        $a1=mysql_result($consultas,0,'ac1');
        $a2=mysql_result($consultas,0,'ac2');
        $a3=mysql_result($consultas,0,'ac3');
        $a4=mysql_result($consultas,0,'ac4');
        $a5=mysql_result($consultas,0,'ac5');
        $a6=mysql_result($consultas,0,'ac6');
        $a7=mysql_result($consultas,0,'ac7');
        $a8=mysql_result($consultas,0,'ac8');
        $a9=mysql_result($consultas,0,'ac9');
        $a10=mysql_result($consultas,0,'ac10');
        $resultadosevaluacion=($a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10);

        Echo"<center><h3>Se Guardo correctamente la respuesta<br><br>
             Tuviste <b>$resultadosevaluacion</b> aciertos </h3></center>";
        echo"<META HTTP-EQUIV='REFRESH' CONTENT='1'/>";
    }
    else
    {
        $sql12="update preguntas set estado=1 where id_preg=$idpreg ";
        $consulta4=mysql_query($sql12)or die ("$sql12");
        Echo"<center><h3>Se Guardo correctamente la respuesta</h3></center>";
        echo"<META HTTP-EQUIV='REFRESH' CONTENT='0'/>";
    }
}
else
{
    $sql11="insert into solucion (id,ac$idpreg) values ($idu,$r)";
    $consulta3=mysql_query($sql11)or die ("$sql11");

    $sql12="update preguntas set estado=1 where id_preg=$idpreg ";
    $consulta4=mysql_query($sql12)or die ("$sql12");

    Echo"<center><h3>Se Guardo correctamente la respuesta</h3></center>";
    echo"<META HTTP-EQUIV='REFRESH' CONTENT='0'/>";
}

?>
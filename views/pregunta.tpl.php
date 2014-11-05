<html>
<head> </head>
<body>

<h1> <?php$titulo ?> </h1>
<p> <?php$contenido ?> </p>
<?php
require('template/menu.php');
$x=rand(1,10);
$sql="select * from preguntas where id_preg=$x and estado=0";
$consulta=mysql_query($sql)or die ("$sql");
$cuantos= mysql_num_rows($consulta);
if ($cuantos === 0)
{
    echo"<center><h1>La Pregunta No.$x Ya A Sido Contestada</h1></center>";
}
else
{
    $id_preg=mysql_result($consulta,0,'id_preg');
    $preg=mysql_result($consulta,0,'pregunta');
    $respuesta=mysql_result($consulta,0,'respuesta');
    $preg=ucwords($preg);
    echo"<br><center><h2><font color='blue' face='Comic Sans'> Responde la pregunta  No:<b>$id_preg</b></h3>
     <h2>$preg</h2>";

    echo"<form action= method=POST enctype='application/x-www-form-urlencoded' name=frmdo3 id=frmdo3 target=_self>
	     <input type=hidden name=respuesta value=$respuesta>
	     <input type=hidden name=idu value=$idu>
         <input type=hidden name=idpreg value=$id_preg>";

    $op=rand(1,5);

}
if($op === 1)
{

    echo"<input type='radio' name=resp style='margin-left:15px;' value=$respuesta checked><b>$respuesta</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=38><b>38</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=44><b>44</b><br>";

}
if($op === 2)
{
     echo"<input type='radio' name=resp style='margin-left:15px;' value=41 checked><b>41</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=$respuesta><b>$respuesta</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=46><b>46</b><br>";

}
if($op === 3)
{

    echo"<input type='radio' name=resp style='margin-left:15px;' value=37 checked><b>37</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=47><b>47</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=$respuesta><b>$respuesta</b><br>";

}
if($op === 4)
{
    echo"<input type='radio' name=resp style='margin-left:15px;' value=34 checked><b>34</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=$respuesta><b>$respuesta</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=43 ><b>43</b><br>";
}
if($op === 5)
{
    echo"<input type='radio' name=resp style='margin-left:15px;' value=39 checked><b>39</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=40 ><b>40</b><br>
         <input type='radio' name=resp style='margin-left:15px;' value=$respuesta><b>$respuesta</b><br>";
}
if ($cuantos === 0)
{
echo"<META HTTP-EQUIV='REFRESH' CONTENT='0'/>";
}
else
{
    $sql8="select * from preguntas where estado=0";
    $consultas=mysql_query($sql8)or die ("$sql8");
    $cuantoson= mysql_num_rows($consultas);

    if ($cuantoson === 1)
    {
        echo"<center>
    <br><input type='submit' id='evalua' value='Guardar Y Evaluar'>
    </form>";
        echo"
    <div id=ajax></div></center>
<!--paso 4: Crear el codigo de ejecucion de ajax-->
<script type=text/javascript>
    $(function (e) {
        $('#frmdo3').submit(function (e) {
            e.preventDefault()
            $('#ajax').load('./controllers/respuesta.php?' + $('#frmdo3').serialize())
        })
    })
</script>";
    }
    else
    {
        echo"<center>
    <br><input type='submit' id='guarda' value='Guardar'>
    </form>";
        echo"
    <div id=ajax></div></center>
<!--paso 4: Crear el codigo de ejecucion de ajax-->
<script type=text/javascript>
    $(function (e) {
        $('#frmdo3').submit(function (e) {
            e.preventDefault()
            $('#ajax').load('./controllers/respuesta.php?' + $('#frmdo3').serialize())
        })
    })
</script>";
    }

}
?>
</body>
</html>
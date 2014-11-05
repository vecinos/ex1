<?php
echo "<center><h5><font face='Comic Sans'>!BIENVENIDO AL TEST DE PREGUNTAS!</font>
</center>";
require ('helpers.php');
require ('template/librerias.php');
require ('clases/Usuario.php');
require ('bd/bd.php');

if(empty ($_GET['url']))
$_GET['url'] = 'home';
controller($_GET['url']);




?>
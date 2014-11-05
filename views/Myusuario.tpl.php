<?php
$usuario2 = new Usuario();
?>
<html>
<head> </head>
<body>

<h1> <?=$titulo ?> </h1>
<p> <?=$contenido ?> </p>
<?php
require('template/menu.php');
?>
    <p><?=$nombre ?></p>
    <p><?php
        $usuario2->setUsuario();
        $usuario2->getUsuario();

        $usuario2->consultaGeneral();
        ?></p>

</body>
</html>
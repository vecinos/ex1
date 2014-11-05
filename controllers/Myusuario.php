<?php
    $usuario = new Usuario();

    $titulo = "Bienvenido a Usuario";
    $contenido= "Contenido de la variable .....";

    $variables = array('titulo'=>$titulo, 'contenido'=>$contenido, 'nombre'=>$usuario->setUsuario());

    view("Myusuario", $variables);

?>
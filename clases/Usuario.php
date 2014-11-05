<?php
class Usuario{

    private $name;

    public function getUsuario(){
        echo"<br>Mostrar Usuario: ".$this->name;
    }

    public function setUsuario(){
        $this->name = "1";
        return $this->name;
    }
    public function consultaGeneral(){
        $sql01= "SELECT * FROM usuario WHERE Estatus =1";
        $result01= mysql_query($sql01)or die("Error $sql01");
        echo"<div class=table-striped>";
        echo"<table class=table table-striped>";
        echo"<tr><td colspan='6' align='center'><strong>Lista de Usuarios</strong></td></tr>";
        echo"<tr><th>Id</th><th>Nombre</th><th>Apellido P.</th><th>Apellido M.</th><th>Nivel</th></tr>";
        while($field = mysql_fetch_array($result01)){
            $this->Id = $field["id"];
            $this->nombre = ($field["Nombre"]);
            $this->app = ($field["ApellidoPaterno"]);
            $this->apm = ($field["ApellidoMaterno"]);
            $this->nivel = $field['Nivel'];
            switch($this->nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;

            }
            if($this->nivel==2 or $this->nivel==1)
            {
                echo"<form name=maestro action='TestMaestro.php' method=Post>";
                echo"<tr><td>".$this->Id."</td><td>".$this->nombre."</td><td>".$this->app."</td><td>".$this->apm."</td><td>$type</td><td><input type=hidden name=idb value=$this->Id></input><input type=submit name=submit value=Borrar></input></td></tr></tr>";
                echo"</form>";
            }
            else{
                echo"<form name=maestro action='TestAlumno.php' method=Post>";
                echo"<tr><td>".$this->Id."</td><td>".$this->nombre."</td><td>".$this->app."</td><td>".$this->apm."</td><td>$type</td><td><input type=hidden name=idb value=$this->Id></input><input type=submit name=submit value=Borrar></input></td></tr></tr>";
                echo"</form>";
            }
        }
        echo"</table>";
    }
}
?>